<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api_from_swagger".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $version
 * @property string $privacy
 * @property string $swagger_url
 *
 * @property ObjectFromSwagger[] $objectFromSwaggers
 */
class ApiFromSwagger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'api_from_swagger';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'version', 'privacy', 'swagger_url'], 'string', 'max' => 255],
            [['description'], 'string'],
            [['privacy'], 'default', 'value' => 'public'],
            [['swagger_url'], 'required'],
            ['swagger_url', 'filter', 'filter' => 'trim']
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
            'version' => 'Version',
            'privacy' => 'Privacy',
            'swagger_url' => 'Swagger Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectFromSwaggers()
    {
        return $this->hasMany(ObjectFromSwagger::className(), ['api_from_swagger' => 'id']);
    }
}
