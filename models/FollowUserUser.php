<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "follow_user_user".
 *
 * @property integer $follower
 * @property integer $followee
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $last_seen
 * @property integer $changed_photo
 * @property integer $changed_linkedin
 * @property integer $changed_github
 * @property string $created_api
 * @property string $changed_upvotes_apis
 * @property string $changed_downvotes_apis
 *
 * @property User $followee0
 * @property User $follower0
 */
class FollowUserUser extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'follow_user_user';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['follower', 'followee', 'created_at', 'updated_at', 'changed_photo', 'changed_linkedin', 'changed_github'], 'integer'],
			[['created_at', 'updated_at'], 'required'],
			[['last_seen'], 'safe'],
			[['created_api', 'changed_upvotes_apis', 'changed_downvotes_apis'], 'string']
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
			'follower' => 'Follower',
			'followee' => 'Followee',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'last_seen' => 'Last Seen',
			'changed_photo' => 'Changed Photo',
			'changed_linkedin' => 'Changed Linkedin',
			'changed_github' => 'Changed Github',
			'created_api' => 'Created Api',
			'changed_upvotes_apis' => 'Changed Upvotes Apis',
			'changed_downvotes_apis' => 'Changed Downvotes Apis',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFollowee0()
	{
		return $this->hasOne(User::className(), ['id' => 'followee']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFollower0()
	{
		return $this->hasOne(User::className(), ['id' => 'follower']);
	}
}