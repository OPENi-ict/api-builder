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
     */
    public function buildSwaggerAPI()
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
        if (property_exists($this->resource, 'paths')) {
            foreach ($this->resource->paths as $pathKey => $pathValue) {
                $swaggerObject = new ObjectFromSwagger;
                $swaggerObject->api_from_swagger = $this->getSwaggerAPIId();
                $swaggerObject->name = substr($pathKey, 1);
                $swaggerObject->methods = '';

                foreach ($pathValue as $operationKey => $operationValue) {
                    // If there is a tag connected to this object, keep its description.
                    if (property_exists($operationValue, 'tags') and property_exists($this->resource, 'tags')) {
                        foreach ($this->resource->tags as $tag) {
                            if (property_exists($tag, 'name') and property_exists($tag, 'description') and ($tag->name === $operationValue->tags[0])) {
                                $swaggerObject->description = $tag->description;
                            }
                        }
                    }
                    // Keep track of the methods used. Only: get, post, put, delete. No: $ref, options, head, patch, parameters
                    switch ($operationKey) {
                        case 'get':
                        case 'post':
                        case 'put':
                        case 'delete':
                            $swaggerObject->methods .= $operationKey . ' ';
                            break;
                    }
                }

                $swaggerObject->save();
            }
        }
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
     */
    public function BuildAPI()
    {
        $this->api = new Apis();

        $this->api->name = $this->swaggerAPI->namee;
        $this->api->description = $this->swaggerAPI->description;
        $this->api->version = $this->swaggerAPI->version;
        $this->api->privacy = $this->swaggerAPI->privacy;

        return $this->api->save();
    }

    /**
     * Build the Objects based on input & swagger
     *
     * @return mixed
     */
    public function BuildObjects()
    {
        // Create all Objects
        foreach ($this->resource->definitions as $keyObject => $valueObject) {
            $object = new Objects();
            $object->name = property_exists($valueObject, 'title') ? $valueObject->title : $keyObject;
            $object->description = property_exists($valueObject, 'description') ? $valueObject->description : '';
            $object->api = $this->api->id;
            $object->privacy = $this->api->privacy;
            if ($object->save()) {
                if (property_exists($valueObject, 'properties')) {
                    $this->BuildProperties($valueObject->properties, $object->id);
                }
            }
            else {
                return false;
            }
        }

        // Elastic Search Creation
        $esu = new ElasticSearchPut;
        $esu->setApi($this->api->id);
        $esu->MakeJSON();
        $esu->InsertUpdate();
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
            $property = new Properties();
            $property->name = $keyProperty;
            $property->description = property_exists($valueProperty, 'description') ? $valueProperty->description : '';
            $property->object = $objectId;

            // Check if there is a type definition, cases have been based on https://github.com/swagger-api/swagger-spec/blob/master/versions/2.0.md#dataTypeFormat
            // There is also a possibility for an array type, which is a 1-* reference for another Object
            // Another case is that of $ref as an 1-1 reference to another Object
            if (property_exists($valueProperty, 'type')) {
                switch ($valueProperty->type) {
                    case 'integer':
                        if (property_exists($valueProperty, 'format')) {
                            switch ($valueProperty->format) {
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
                        if (property_exists($valueProperty, 'format')) {
                            switch ($valueProperty->format) {
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
                        if (property_exists($valueProperty, 'format')) {
                            switch ($valueProperty->format) {
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
                        if (property_exists($valueProperty, 'items')) {
                            if (property_exists($valueProperty->items, '$ref'){
                                // Get the last item out of the array produced from the $ref string exploded at '/', with capitalized first letter
                                $property->type = ucfirst(end(explode('/', $valueProperty->items->$ref)));
                            }
                            elif (property_exists($valueProperty->items, 'type'){
                                
                            }
                        }
                        break;
                    default:
                        $property->type = 'string';
                }
            }
            if (property_exists($valueProperty, '$ref')) {
                // Get the last item out of the array produced from the $ref string exploded at '/', with capitalized first letter
                $property->type = ucfirst(end(explode('/', $valueProperty->$ref)));
            }
        }
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