<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "object_cbs".
 *
 * @property integer $object
 * @property integer $cbs
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
            [['object', 'cbs'], 'integer']
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
