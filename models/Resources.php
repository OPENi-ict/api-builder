<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "resources".
 *
 * @property integer $id
 * @property string $resource_name
 * @property string $resource_url
 * @property string $author
 * @property integer $likes
 * @property integer $dislikes
 * @property integer $used
 * @property integer $created_at
 * @property integer $updated_at
 */
class Resources extends ActiveRecord
{
	const DEFAULT_LIKE_USE = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
		return '{{%resources}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resource_name', 'resource_url', 'author'], 'required'],
            [['likes', 'dislikes', 'used', 'created_at', 'updated_at'], 'integer'],
            [['resource_name', 'resource_url', 'author'], 'string', 'max' => 255],

			['likes', 'default', 'value' => self::DEFAULT_LIKE_USE],
			['dislikes', 'default', 'value' => self::DEFAULT_LIKE_USE],
			['used', 'default', 'value' => self::DEFAULT_LIKE_USE],

			['resource_name', 'unique', 'targetClass' => '\app\models\Resources', 'message' => 'This resource name has already been taken.'],
			['resource_url', 'unique', 'targetClass' => '\app\models\Resources', 'message' => 'This resource url has already been taken.'],
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
            'resource_name' => 'Resource Name',
            'resource_url' => 'Resource Url',
            'author' => 'Author',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
            'used' => 'Used',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

	public static function getOptions()
	{
		$data=  static::find()->all();
		$value=(count($data)==0)? [''=>'']: ArrayHelper::map($data, 'id','resource_name'); //id = your ID model, name = your caption

		return $value;
	}

	public function getData()
	{

	}
}
