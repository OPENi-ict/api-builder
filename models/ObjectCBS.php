<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "object_cbs".
 *
 * @property integer $id
 * @property integer $object
 * @property integer $cbs
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Apis $cbs0
 * @property Objects $object0
 */
class ObjectCBS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_cbs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object', 'cbs', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className()
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'object' => 'Object',
            'cbs' => 'Cbs',
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbs0()
    {
        return $this->hasOne(Apis::className(), ['id' => 'cbs']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObject0()
    {
        return $this->hasOne(Objects::className(), ['id' => 'object']);
    }
}
