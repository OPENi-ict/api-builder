<?php

namespace app\helpers;

use SplFileObject;
use Yii;

class FileNewManipulation {

	private $_apiName;
	private $_objectName;

	private function _fileExists()
	{
		if (file_exists($this->$_apiName)) {
			echo "The file $this->_apiName exists";
		} else {
			echo "The file $this->_apiName does not exist";
		}
	}

	public function createFolder()
	{
		$folder = '/' . $this->_apiName;
		mkdir($folder);
		mkdir($folder . '/Resources');
		mkdir($folder . '/Models');
	}

	private function _writeFile($type, $input)
	{
		/** @var string $_apisDirectory The directory of the apis, eg: C:\xampp\htdocs\api-builder\apis\ */
		$_apisDirectory = Yii::getAlias('@apisDirectory');
		/** @var SplFileObject $file */
		$file = new SplFileObject($_apisDirectory . $this->_apiName . $type . $this->_objectName . '.php', 'w');
		$file->fwrite($input);
	}

	public function writeResourceFile($resource)
	{
		$this->_writeFile( '/Resources/' , $resource);
	}

	public function writeModelFile($model)
	{
		$this->_writeFile( '/Models/' , $model);
	}

	public function writePartialFile($partial)
	{
		$this->_writeFile( '/Partials/' , $partial);
	}

	public function get_md5()
	{
		return md5_file(__DIR__ . $this->_apiName);
	}

	/**
	 * @return string
	 */
	public function getApiName()
	{
		return $this->_apiName;
	}

	/**
	 * @param string $apiName
	 */
	public function setApiName($apiName)
	{
		$this->_apiName = $apiName;
	}

	/**
	 * @return string
	 */
	public function getObjectName()
	{
		return $this->_objectName;
	}

	/**
	 * @param string $objectName
	 */
	public function setObjectName($objectName)
	{
		$this->_objectName = $objectName;
	}
} 