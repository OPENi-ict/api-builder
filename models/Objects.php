<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "objects".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $api
 * @property integer $inherited
 * @property string $privacy
 * @property integer $fields
 * @property string $methods
 * @property integer $author
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Apis[] $apis
 * @property Fields $fields0
 * @property Objects $inherited0
 * @property Objects[] $objects
 * @property User $author0
 */
class Objects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'api', 'privacy', 'created_at', 'updated_at'], 'required'],
            [['api', 'inherited', 'fields', 'author', 'created_at', 'updated_at'], 'integer'],
            [['privacy', 'methods'], 'string'],
            [['name', 'description'], 'string', 'max' => 255],
			[['author'], 'default', 'value' => Yii::$app->user->identity->username],
			[['author'], 'default', 'value' => 'public']
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
            'api' => 'Api',
            'inherited' => 'Inherited',
            'privacy' => 'Privacy',
            'fields' => 'Fields',
            'methods' => 'Methods',
            'author' => 'Author',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApis()
    {
        return $this->hasMany(Apis::className(), ['objects' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFields0()
    {
        return $this->hasOne(Fields::className(), ['id' => 'fields']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInherited0()
    {
        return $this->hasOne(Objects::className(), ['id' => 'inherited']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['inherited' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }
}
