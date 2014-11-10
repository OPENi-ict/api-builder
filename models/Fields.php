<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "fields".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $type
 * @property integer $author
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $author0
 * @property Objects[] $objects
 */
class Fields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type', 'created_at', 'updated_at'], 'required'],
            [['author', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'type'], 'string', 'max' => 255],
			[['author'], 'default', 'value' => Yii::$app->user->identity->username],
			[['name', 'description', 'type'], 'safe']
        ];
    }

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			TimestampBehavior::className(),
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
            'type' => 'Type',
            'author' => 'Author',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['fields' => 'id']);
    }
}
