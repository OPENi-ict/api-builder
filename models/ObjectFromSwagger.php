<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "object_from_swagger".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $methods
 * @property integer $api_from_swagger
 *
 * @property ApiFromSwagger $apiFromSwagger
 */
class ObjectFromSwagger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_from_swagger';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['api_from_swagger'], 'integer'],
            [['name', 'methods'], 'string', 'max' => 255],
            [['description'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'methods' => 'Methods',
            'api_from_swagger' => 'Api From Swagger',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApiFromSwagger()
    {
        return $this->hasOne(ApiFromSwagger::className(), ['id' => 'api_from_swagger']);
    }
}
