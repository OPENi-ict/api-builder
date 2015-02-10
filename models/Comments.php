<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $api
 * @property integer $object
 * @property integer $property
 * @property string $text
 * @property integer $reply_to_comment
 * @property integer $votes_up
 * @property integer $votes_down
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Apis $api0
 * @property Objects $object0
 * @property Properties $property0
 * @property User $createdBy
 * @property User $updatedBy
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['api', 'object', 'property', 'reply_to_comment', 'votes_up', 'votes_down', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['text'], 'required'],
            [['text'], 'string']
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
            'api' => 'Api',
            'object' => 'Object',
            'property' => 'Property',
            'text' => 'Text',
            'reply_to_comment' => 'Reply To Comment',
            'votes_up' => 'Votes Up',
            'votes_down' => 'Votes Down',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'createdBy.username' => 'Created By',
            'updatedBy.username' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
    public function getObject0()
    {
        return $this->hasOne(Objects::className(), ['id' => 'object']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperty0()
    {
        return $this->hasOne(Properties::className(), ['id' => 'property']);
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
