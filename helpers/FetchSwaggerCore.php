<?php

namespace app\helpers;


class FetchSwaggerCore {

	private $_resource;
	private $_schemas = array();

	private function _getData($url)
	{
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		// Set so curl_exec returns the result instead of outputting it.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	private function _isJson($string)
	{
		if ($string === false) return false;
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}



	public function setResource($url)
	{
		$_encodedResource = $this->_getData($url);
		if ($this->_isJson($_encodedResource))
		{
			$_decodedResource = json_decode($_encodedResource);
			$this->_resource = $_decodedResource;
			return true;
		}
		else
			return false;
	}

	/**
	 * @return object
	 */
	public function getResource()
	{
		return $this->_resource;
	}

	public function setSchemas()
	{
		foreach ($this->_resource->apis as $api)
		{
			$_encodedSchemas = $this->_getData($this->_resource->basePath . substr($api->path, 1) . '/');
			if ($this->_isJson($_encodedSchemas))
			{
				$_decodedSchemas = json_decode($_encodedSchemas);
				$this->_schemas[] = $_decodedSchemas;
			}
			else
				return false;
		}
	}

	/**
	 * @return array
	 */
	public function getSchemas()
	{
		return $this->_schemas;
	}
} 