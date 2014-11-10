<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "apis".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $version
 * @property integer $objects
 * @property integer $author
 * @property integer $likes
 * @property integer $dislikes
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Objects $objects0
 * @property User $author0
 * @property User $dislikes0
 * @property User $likes0
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
            [['objects', 'author', 'likes', 'dislikes', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'version'], 'string', 'max' => 255],
			[['author'], 'default', 'value' => Yii::$app->user->identity->getId()],
			[['version'], 'default', 'value' => '1.0'],
			[['likes', 'dislikes'], 'default', 'value' => '0'],
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
            'objects' => 'Objects',
            'author' => 'Author',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects0()
    {
        return $this->hasOne(Objects::className(), ['id' => 'objects']);
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
    public function getDislikes0()
    {
        return $this->hasOne(User::className(), ['id' => 'dislikes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLikes0()
    {
        return $this->hasOne(User::className(), ['id' => 'likes']);
    }
}
