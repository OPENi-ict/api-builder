<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "api_from_swagger".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $version
 * @property string $privacy
 * @property string $swagger_url
 * @property string $host_url
 * @property integer $created_by
 * @property integer $created_at
 * @property boolean $cbs
 *
 * @property User $createdBy
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
            [['name', 'version', 'privacy', 'swagger_url', 'host_url'], 'string', 'max' => 255],
            [['created_by', 'created_at'], 'integer'],
            [['description'], 'string'],
            [['privacy'], 'default', 'value' => 'public'],
            [['swagger_url'], 'required'],
            ['swagger_url', 'filter', 'filter' => 'trim'],
            ['cbs', 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'updatedAtAttribute' => false,
            ],
            [
                'class' => BlameableBehavior::className(),
                'updatedByAttribute' => false,
            ],
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
            'created_by' => 'Created By ID',
            'createdBy.username' => 'Created By',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectFromSwaggers()
    {
        return $this->hasMany(ObjectFromSwagger::className(), ['api_from_swagger' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
