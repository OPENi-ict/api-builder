<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "follow_user_api".
 *
 * @property integer $follower
 * @property integer $api
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
            [['follower', 'api'], 'integer'],
            [['api'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'follower' => 'Follower',
            'api' => 'Api',
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
