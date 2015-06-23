<?php

namespace app\helpers;

use app\models\Apis;
use app\models\Objects;
use app\models\Properties;

class BuildFromSwagger {

    private $_apiName;
    private $_apiDescription;
    private $_apiVersion = '1.0';
    private $_apiPrivacy;
    private $_apiID;
    private $_objectID;

    /**
     * @param string $apiName
     */
    public function setApiName($apiName)
    {
        $this->_apiName = $apiName;
    }

    /**
     * @param string $apiDescription
     */
    public function setApiDescription($apiDescription)
    {
        $this->_apiDescription = $apiDescription;
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion($apiVersion)
    {
        $this->_apiVersion = $apiVersion;
    }

    /**
     * @param string $apiPrivacy
     */
    public function setApiPrivacy($apiPrivacy)
    {
        $this->_apiPrivacy = $apiPrivacy;
    }

    function CheckAPIs()
    {
        $myId = \Yii::$app->user->id;
        return Apis::find()->where(['name' => $this->_apiName, 'created_by' => $myId])->one() === null;
    }

    function BuildAPI()
    {
        $model = new Apis();

        $model->name = $this->_apiName;
        $model->description = $this->_apiDescription;
        $model->version = $this->_apiVersion;
        $model->privacy = $this->_apiPrivacy;

        $model->save();

        $this->_apiID = $model->id;
    }

    function BuildObject($objectName, $objectDescription)
    {
        $model = Objects::find()->where(['name' => $objectName])->one();
        if ($model === null)
        {
            $model = new Objects();
        }
        else
        {
            Properties::deleteAll([
                'object' => $model->id
            ]);
        }

        // If APIS_addressmodel keep only addressmodel and make it Addressmodel
        // If Checkin_openicheckin keep only checkin and make it Checkin
        $model->name = $objectName;
        $pos = strpos($model->name, '_');
        if ($pos !== false)
            $model->name = substr($model->name , $pos + 1);
        $model->name = str_replace("openi", "", $model->name);
        $model->name = ucfirst($model->name);

        $model->description = $objectDescription;
        $model->api = $this->_apiID;
        $model->privacy = 'public';

        $model->save();
        $this->_objectID = $model->id;
    }

    function BuildProperty($name, $desc, $type, $object)
    {
        $model = new Properties();

        $model->name = $name;
        $model->description = $desc;

        // If APIS_addressmodel keep only addressmodel and make it Addressmodel
        // If Checkin_openicheckin keep only checkin and make it Checkin
        $model->type = $type;
        $pos = strpos($model->type, '_');
        if ($pos !== false)
            $model->type = substr($model->type , $pos + 1);
        $model->type = str_replace("openi", "", $model->type);
        $model->type = ucfirst($model->type);

        $model->object = $object;

        $model->save();
    }

    function BuildModels()
    {
        $fcm = new FetchCoreDbModels();
        $fcDBm = $fcm->getDb()->getSchema();
        $tableNames = $fcDBm->getTableNames();
        $fcm->setExcludedModelNames();
        $excludedTableNames = $fcm->getExcludedModelNames();
        foreach ($tableNames as $tableName)
        {
            if (!in_array($tableName, $excludedTableNames))
            {
                $table = $fcDBm->getTableSchema($tableName);
                $this->BuildObject($table->name, '');

                foreach ($table->columns as $column)
                {
                    $type = $column->phpType;
                    foreach ($table->foreignKeys as $foreignKey)
                    {
                        foreach ($foreignKey as $key => $value)
                        {
                            if ($key === $column->name) {
                                $type = $foreignKey[0];
                            }
                        }
                    }

                    $this->BuildProperty($column->name, '', $type, $this->_objectID);
                }
            }
        }
    }
}