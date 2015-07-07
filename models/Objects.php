<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "objects".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $api
 * @property integer $inherited
 * @property string $privacy
 * @property string $methods
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $votes_up
 * @property integer $votes_down
 * @property integer $proposed
 * @property string $schema_org
 *
 * @property Comments[] $comments
 * @property ObjectCbs[] $objectCbs
 * @property Apis $api0
 * @property Objects $inherited0
 * @property Objects[] $objects
 * @property User $createdBy
 * @property User $updatedBy
 * @property Properties[] $properties
 */
class Objects extends \yii\db\ActiveRecord
{
    public $selectedCbs = [];

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
            [['name', 'privacy'], 'required'],
            [['api', 'inherited', 'created_by', 'updated_by', 'created_at', 'updated_at', 'votes_up', 'votes_down', 'proposed'], 'integer'],
            [['privacy', 'methods'], 'string'],
            [['name', 'description', 'schema_org'], 'string', 'max' => 255],
			[['privacy'], 'default', 'value' => 'public'],
			[['votes_up', 'votes_down'], 'default', 'value' => '0'],
			[['name'], 'unique', 'targetAttribute' => ['api', 'name'], 'message' => 'This Object name has already been taken.'],
            ['selectedCbs',function ($attribute, $params) {
                if(!is_array($this->selectedCbs)){
                    $this->addError('selectedCbs','Selected Cbs is not array!');
                }
            }]
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
            'name' => 'Name',
            'description' => 'Description',
            'api' => 'Api',
            'inherited' => 'Inherited',
            'privacy' => 'Privacy',
            'methods' => 'Methods',
            'created_by' => 'Created By ID',
            'updated_by' => 'Updated By ID',
			'createdBy.username' => 'Created By',
			'updatedBy.username' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
			'votes_up' => 'Votes Up',
			'votes_down' => 'Votes Down',
			'proposed' => 'Proposed',
			'schema_org' => 'schema.org',

			'api0.name' => 'API Name',
			'inherited0.name' => 'Inherited From'
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperties()
    {
        return $this->hasMany(Properties::className(), ['object' => 'id']);
    }

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getComments()
	{
		return $this->hasMany(Comments::className(), ['object' => 'id']);
	}

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectCbs()
    {
        return $this->hasMany(ObjectCbs::className(), ['object' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbs()
    {
        return $this->hasMany(Apis::className(), ['id' => 'cbs'])
            ->via('objectCbs');
    }
}
