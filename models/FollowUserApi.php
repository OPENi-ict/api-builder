<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "follow_user_api".
 *
 * @property integer $id
 * @property integer $follower
 * @property integer $api
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $last_seen
 * @property integer $changed_name
 * @property string $changed_name_old_name
 * @property integer $changed_descr
 * @property integer $changed_version
 * @property integer $changed_upvotes
 * @property integer $changed_downvotes
 * @property integer $changed_proposed
 * @property integer $changed_published
 * @property integer $changed_privacy
 * @property integer $changed_objects_number
 *
 * @property Apis $api0
 * @property User $follower0
 */
class FollowUserApi extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'follow_user_api';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['follower', 'api', 'created_at', 'updated_at', 'changed_name', 'changed_descr', 'changed_version', 'changed_upvotes', 'changed_downvotes', 'changed_proposed', 'changed_published', 'changed_privacy', 'changed_objects_number'], 'integer'],
			[['last_seen'], 'safe'],
			[['changed_name_old_name'], 'string', 'max' => 255]
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
			]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'follower' => 'Follower',
			'api' => 'Api',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'last_seen' => 'Last Seen',
			'changed_name' => 'Changed Name',
			'changed_name_old_name' => 'Changed Name Old Name',
			'changed_descr' => 'Changed Descr',
			'changed_version' => 'Changed Version',
			'changed_upvotes' => 'Changed Upvotes',
			'changed_downvotes' => 'Changed Downvotes',
			'changed_proposed' => 'Changed Proposed',
			'changed_published' => 'Changed Published',
			'changed_privacy' => 'Changed Privacy',
			'changed_objects_number' => 'Changed Objects Number',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApi0()
	{
		return $this->hasOne(Apis::className(), ['id' => 'api']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFollower0()
	{
		return $this->hasOne(User::className(), ['id' => 'follower']);
	}
}