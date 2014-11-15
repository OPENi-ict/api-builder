<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "objects".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $api
 * @property integer $inherited
 * @property string $privacy
 * @property integer $properties
 * @property string $methods
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Apis[] $apis
 * @property Properties $properties0
 * @property Objects $inherited0
 * @property Objects[] $objects
 * @property User $createdBy
 * @property User $updatedBy
 */
class Objects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			[['name', 'privacy'], 'required'],
            [['api', 'inherited', 'properties', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['privacy', 'methods'], 'string'],
            [['name', 'description'], 'string', 'max' => 255],
			[['privacy'], 'default', 'value' => 'public'],
			[['name'], 'unique', 'targetClass' => '\app\models\Objects', 'message' => 'This Object name has already been taken.']
        ];
    }

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			TimestampBehavior::className(),
			BlameableBehavior::className()
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
            'api' => 'Api',
            'inherited' => 'Inherited',
            'privacy' => 'Privacy',
            'properties' => 'Properties',
            'methods' => 'Methods',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApis()
    {
        return $this->hasMany(Apis::className(), ['objects' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperties0()
    {
        return $this->hasOne(Properties::className(), ['id' => 'properties']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInherited0()
    {
        return $this->hasOne(Objects::className(), ['id' => 'inherited']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['inherited' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
}
