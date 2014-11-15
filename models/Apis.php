<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "apis".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $version
 * @property integer $objects
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $likes
 * @property integer $dislikes
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Objects $objects0
 * @property User $createdBy
 * @property User $updatedBy
 */
class Apis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['objects', 'created_by', 'updated_by', 'likes', 'dislikes', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'version'], 'string', 'max' => 255],
			[['version'], 'default', 'value' => '1.0'],
			[['likes', 'dislikes'], 'default', 'value' => '0'],
			[['name'], 'unique', 'targetClass' => '\app\models\Apis', 'message' => 'This API name has already been taken.']
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
            'version' => 'Version',
            'objects' => 'Objects',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
			'createdBy.username' => 'Created By',
			'updatedBy.username' => 'Updated By',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects0()
    {
        return $this->hasOne(Objects::className(), ['id' => 'objects']);
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
