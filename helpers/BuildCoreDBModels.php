<?php

namespace app\helpers;

use app\models\Apis;
use app\models\Objects;
use app\models\Properties;

class BuildCoreDBModels {

	private $_apiName;
	private $_apiDescription;
	private $_apiID;
	private $_objectID;

	/**
	 * @param mixed $apiDescription
	 */
	public function setApiDescription($apiDescription)
	{
		$this->_apiDescription = $apiDescription;
	}

	/**
	 * @param mixed $apiName
	 */
	public function setApiName($apiName)
	{
		$this->_apiName = $apiName;
	}

	function BuildAPI()
	{
		$model = Apis::find()->where(['name' => $this->_apiName])->one();
		if ($model === null)
		{
			$model = new Apis();
		}

		$model->name = $this->_apiName;
		$model->description = $this->_apiDescription;

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

		$model->name = $objectName;
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
		$model->type = $type;
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