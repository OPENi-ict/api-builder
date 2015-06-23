<?php

namespace app\helpers;

/**
 * Fetch Swagger
 *
 * @property string $url
 * @property object $resource
 */
class FetchSwagger {

    private $url;
    private $resource;

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    private function _getData()
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $this->url);
        // Set so curl_exec returns the result instead of outputting it.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

        // Don't care about the certificate
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

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

    public function setResource()
    {
        $_encodedResource = $this->_getData();
        if ($this->_isJson($_encodedResource))
        {
            $_decodedResource = json_decode($_encodedResource);
            $this->resource = $_decodedResource;
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
        return $this->resource;
    }
} 