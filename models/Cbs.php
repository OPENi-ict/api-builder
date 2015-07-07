<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "cbs".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $version
 * @property string $url
 * @property string $status
 * @property integer $created_by
 * @property integer $created_at
 *
 * @property User $createdBy
 * @property Objects[] $objects
 */
class Cbs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cbs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['created_by', 'created_at'], 'integer'],
            [['status'], 'string'],
            [['url', 'name', 'description', 'version'], 'string', 'max' => 255],
            [['version'], 'default', 'value' => '1.0'],
            [['status'], 'default', 'value' => 'pending'],
            [['name'], 'unique', 'targetClass' => '\app\models\Cbs', 'message' => 'This CBS name has already been taken. You could propose a new Version though.']
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
            'url' => 'Url',
            'status' => 'Status',
            'created_by' => 'Created By',
            'createdBy.username' => 'Created By',
            'created_at' => 'Created At',
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
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['cbs' => 'id']);
    }
}