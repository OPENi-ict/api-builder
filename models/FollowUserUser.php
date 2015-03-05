<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "follow_user_user".
 *
 * @property integer $follower
 * @property integer $followee
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
            [['follower', 'followee'], 'integer']
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
