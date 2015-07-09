<?php

namespace app\helpers;

use app\models\ApiFromSwagger;
use app\models\Apis;
use app\models\ObjectFromSwagger;
use app\models\Objects;
use app\models\Properties;
use yii\base\Object;
use yii\web\NotFoundHttpException;

/**
 * Build ApiFromSwagger, APIs and Objects from Swagger
 *
 * @property Apis $api
 * @property object $resource
 * @property ApiFromSwagger $swaggerAPI
 * @property string $url
 */
class BuildFromSwagger {

    private $api;
    private $resource;
    private $swaggerAPI;
    private $url;

    /**
     * Get Actual Data from Swagger URL
     *
     * @return mixed
     */
    private function getData()
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

    /**
     * Check if input is JSON
     *
     * @param string $input
     * @return boolean
     */
    private function isJson($input)
    {
        if ($input === false) {
            return false;
        }
        json_decode($input);
        return (json_last_error() === JSON_ERROR_NONE);
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Sets the resource from the Swagger File
     *
     * @return boolean
     */
    public function setResource()
    {
        $encodedResource = $this->getData();
        if ($this->isJson($encodedResource))
        {
            $decodedResource = json_decode($encodedResource);
            $this->resource = $decodedResource;
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Builds the ApiFromSwagger Model
     * @param boolean $cbs
     */
    public function buildSwaggerAPI($cbs)
    {
        $this->swaggerAPI = new ApiFromSwagger;

        if (property_exists($this->resource, 'info')) {
            if (property_exists($this->resource->info, 'title')) {
                $this->swaggerAPI->name = $this->resource->info->title;
            }
            if (property_exists($this->resource->info, 'description')) {
                $this->swaggerAPI->description = $this->resource->info->description;
            }
            if (property_exists($this->resource->info, 'version')) {
                $this->swaggerAPI->version = $this->resource->info->version;
            }
        }

        $this->swaggerAPI->swagger_url = $this->url;

        if (property_exists($this->resource, 'host')) {
            $this->swaggerAPI->host_url = $this->resource->host;
            if (property_exists($this->resource, 'basePath')) {
                $this->swaggerAPI->host_url .= $this->resource->basePath;
            }
        }

        $this->swaggerAPI->cbs = $cbs;

        $this->swaggerAPI->save();
    }

    /**
     * Get the Id of the previously built ApiFromSwagger
     * @return int
     */
    public function getSwaggerAPIId()
    {
        return $this->swaggerAPI->id;
    }

    /**
     * Builds the ObjectFromSwagger Model
     */
    public function buildSwaggerObjects()
    {
        // Show all Objects brought from definition
        if (property_exists($this->resource, 'definitions')) {
            foreach ($this->resource->definitions as $keyObject => $valueObject) {
                // Get each Object with its name and description
                $object = new ObjectFromSwagger();
                $object->api_from_swagger = $this->getSwaggerAPIId();
                $object->name = property_exists($valueObject, 'title') ? $valueObject->title : $keyObject;
                $object->description = property_exists($valueObject, 'description') ? $valueObject->description : '';
                $object->methods = '';
                $object->save();
            }
        }
//        if (property_exists($this->resource, 'paths')) {
//            foreach ($this->resource->paths as $pathKey => $pathValue) {
//                $swaggerObject = new ObjectFromSwagger;
//                $swaggerObject->api_from_swagger = $this->getSwaggerAPIId();
//                $swaggerObject->name = substr($pathKey, 1);
//                $swaggerObject->methods = '';
//
//                foreach ($pathValue as $operationKey => $operationValue) {
//                    // If there is a tag connected to this object, keep its description.
//                    if (property_exists($operationValue, 'tags') and property_exists($this->resource, 'tags')) {
//                        foreach ($this->resource->tags as $tag) {
//                            if (property_exists($tag, 'name') and property_exists($tag, 'description') and ($tag->name === $operationValue->tags[0])) {
//                                $swaggerObject->description = $tag->description;
//                            }
//                        }
//                    }
//                    // Keep track of the methods used. Only: get, post, put, delete. No: $ref, options, head, patch, parameters
//                    switch ($operationKey) {
//                        case 'get':
//                        case 'post':
//                        case 'put':
//                        case 'delete':
//                            $swaggerObject->methods .= $operationKey . ' ';
//                            break;
//                    }
//                }
//
//                $swaggerObject->save();
//            }
//        }
    }

    /**
     * Set the swaggerAPI. Also sets url and resource
     *
     * @param integer $swaggerAPIId
     */
    public function setSwaggerAPI($swaggerAPIId)
    {
        $this->swaggerAPI = $this->findModel($swaggerAPIId);
        $this->setUrl($this->swaggerAPI->swagger_url);
        $this->setResource();
    }

    /**
     * Build the API based on input & swagger
     *
     * @return boolean
     */
    public function BuildAPI()
    {
        $this->api = new Apis();

        $this->api->name = $this->swaggerAPI->name;
        $this->api->description = $this->swaggerAPI->description;
        $this->api->version = $this->swaggerAPI->version;
        $this->api->privacy = $this->swaggerAPI->privacy;
        $this->api->cbs = $this->swaggerAPI->cbs;
        $this->api->status = 'Under Development';
        // If there is a host url read from swagger, use it, otherwise use the swagger url
        $this->api->url = $this->swaggerAPI->host_url !== null ? $this->swaggerAPI->host_url : $this->swaggerAPI->swagger_url;

        return $this->api->save();
    }

    /**
     * Fetch the API's ID
     *
     * @return integer
     */
    public function getAPIId()
    {
        return $this->api->id;
    }

    /**
     * Build a new Object
     *
     * @param string $titleFromKey
     * @param object $value
     *
     * @return boolean
     */
    public function BuildObject($titleFromKey, $value)
    {
        $object = new Objects();
        $object->name = property_exists($value, 'title') ? $value->title : $titleFromKey;
        $object->description = property_exists($value, 'description') ? $value->description : '';
        $object->api = $this->api->id;
        $object->privacy = $this->api->privacy;
        if ($object->save()) {
            if (property_exists($value, 'properties')) {
                return $this->BuildProperties($value->properties, $object->id);
            }
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Build the Objects based on input & swagger
     *
     * @return boolean
     */
    public function BuildObjects()
    {
        // Create all Objects
        foreach ($this->resource->definitions as $keyObject => $valueObject) {
            // Try to Build the Object with its Parameter, if something goes wrong return false
            if (!$this->BuildObject($keyObject, $valueObject)) {
                return false;
            }
        }

        // Elastic Search Creation
        $esu = new ElasticSearchPut;
        $esu->setApi($this->api);
        $esu->MakeJSON();
        $esu->InsertUpdate();

        return true;
    }

    /**
     * Build a Property
     *
     * @param string $name
     * @param object $value
     * @param integer $objectId
     *
     * @return boolean
     */
    private function BuildProperty($name, $value, $objectId)
    {
        $property = new Properties();
        $property->name = $name;
        $property->description = property_exists($value, 'description') ? $value->description : '';
        $property->object = $objectId;

        // Check if there is a type definition, cases have been based on https://github.com/swagger-api/swagger-spec/blob/master/versions/2.0.md#dataTypeFormat
        // There is also a possibility for an array type, which is a 1-* reference for another Object
        // Another case is that of $ref as an 1-1 reference to another Object
        if (property_exists($value, 'type')) {
            switch ($value->type) {
                case 'integer':
                    if (property_exists($value, 'format')) {
                        switch ($value->format) {
                            case 'int32':
                                $property->type = 'integer';
                                break;
                            case 'int64':
                                $property->type = 'long';
                                break;
                        }
                    }
                    break;
                case 'number':
                    if (property_exists($value, 'format')) {
                        switch ($value->format) {
                            case 'float':
                                $property->type = 'float';
                                break;
                            case 'double':
                                $property->type = 'double';
                                break;
                        }
                    }
                    break;
                case 'string':
                    $property->type = 'string';
                    if (property_exists($value, 'format')) {
                        switch ($value->format) {
                            case 'byte':
                                $property->type = 'byte';
                                break;
                            case 'date':
                                $property->type = 'date';
                                break;
                            case 'date-time':
                                $property->type = 'dateTime';
                                break;
                            case 'password':
                                $property->type = 'password';
                                break;
                        }
                        $property->type = 'byte';
                    }
                    break;
                case 'boolean':
                    $property->type = 'boolean';
                    break;
                case 'array':
                    if (property_exists($value, 'items')) {
                        $items = $value->items;
                        if (property_exists($items, '$ref')) {
                            // Get the last item out of the array produced from the $ref string exploded at '/', with capitalized first letter
                            $property->type = '[' . ucfirst(end(explode('/', $items->{'$ref'}))) . ']';
                        }
                        elseif (property_exists($items, 'type')) {
                            if (property_exists($items, 'xml') and property_exists($items->xml, 'name')) {
                                $property->type = '[' . $items->xml->name . ' (' . $items->type . ')]';
                            }
                            else {
                                $property->type = '[' . $items->type . ']';
                            }
                        }
                    }
                    break;
                default:
                    $property->type = 'string';
            }
        }
        if (property_exists($value,  '$ref')) {
            // Get the last item out of the array produced from the $ref string exploded at '/', with capitalized first letter
            $property->type = ucfirst(end(explode('/', $value->{'$ref'})));
        }

        return $property->save();
    }

    /**
     * Build the Properties of each Object
     *
     * @param object $properties
     * @param integer $objectId
     *
     * @return boolean
     */
    private function BuildProperties($properties, $objectId)
    {
        foreach ($properties as $keyProperty => $valueProperty) {
            if (!$this->BuildProperty($keyProperty, $valueProperty, $objectId)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Finds the ApiFromSwagger model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     *
     * @return ApiFromSwagger the loaded model
     *
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ApiFromSwagger::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}