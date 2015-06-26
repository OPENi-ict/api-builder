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
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $votes_up
 * @property integer $votes_down
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $published
 * @property string $privacy
 * @property string $status
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property Comments[] $comments
 * @property FollowUserApi[] $followUserApis
 * @property Objects[] $objects
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
            [['created_by', 'updated_by', 'votes_up', 'votes_down', 'created_at', 'updated_at', 'published'], 'integer'],
			[['privacy', 'status', 'description'], 'string'],
			[['privacy'], 'default', 'value' => 'public'],
			[['status'], 'default', 'value' => 'Under Development'],
            [['name', 'version'], 'string', 'max' => 255],
			[['version'], 'default', 'value' => '1.0'],
			[['votes_up', 'votes_down', 'published'], 'default', 'value' => '0'],
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
            'created_by' => 'Created By ID',
            'updated_by' => 'Updated By ID',
			'createdBy.username' => 'Created By',
			'updatedBy.username' => 'Updated By',
			'votes_up' => 'Votes Up',
			'votes_down' => 'Votes Down',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
			'published' => 'Published',
			'privacy' => 'Privacy',
			'status' => 'Status',
        ];
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

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getComments()
	{
		return $this->hasMany(Comments::className(), ['api' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFollowUserApis()
	{
		return $this->hasMany(FollowUserApi::className(), ['api' => 'id']);
	}

	/**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['api' => 'id']);
    }
}
