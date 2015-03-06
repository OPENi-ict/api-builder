<?php
namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $role
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 * @property string $votes_up_apis
 * @property string $votes_down_apis
 * @property string $votes_up_objects
 * @property string $votes_down_objects
 * @property string $votes_up_comments
 * @property string $votes_down_comments
 * @property string $photo_name
 * @property string $linkedin
 * @property string $github
 *
 * @property Apis[] $apis
 * @property Cbs[] $cbs
 * @property Comments[] $comments
 * @property FollowUserApi[] $followUserApis
 * @property FollowUserUser[] $followUserUsers
 * @property Objects[] $objects
 * @property Properties[] $properties
 *
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const ROLE_USER = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],

            ['role', 'default', 'value' => self::ROLE_USER],
            ['role', 'in', 'range' => [self::ROLE_USER]],

			[['role', 'status', 'created_at', 'updated_at'], 'integer'],
			[['votes_up_apis', 'votes_down_apis', 'votes_up_objects', 'votes_down_objects', 'votes_up_comments', 'votes_down_comments', 'photo_name'], 'string'],
			[['username', 'password_hash', 'password_reset_token', 'email', 'linkedin', 'github'], 'string', 'max' => 255],
			[['auth_key'], 'string', 'max' => 32]
        ];
    }

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'username' => 'Username',
			'email' => 'Email',
			'role' => 'Role',
			'status' => 'Status',
			'created_at' => 'Joined At',
			'updated_at' => 'Updated At',
			'votes_up_apis' => 'Voted Up APIs',
			'votes_down_apis' => 'Voted Down APIs',
            'votes_up_objects' => 'Voted Up Objects',
            'votes_down_objects' => 'Voted Down Objects',
            'votes_up_comments' => 'Voted Up Comments',
            'votes_down_comments' => 'Voted Down Comments',
			'github' => 'Github',
			'linkedin' => 'LinkedIn'
		];
	}

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }



	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApis()
	{
		return $this->hasMany(Apis::className(), ['updated_by' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCbs()
	{
		return $this->hasMany(Cbs::className(), ['created_by' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getComments()
	{
		return $this->hasMany(Comments::className(), ['updated_by' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFollowUserApis()
	{
		return $this->hasMany(FollowUserApi::className(), ['follower' => 'id']);
	}

	public function getFollowingApis()
	{
		return $this->hasMany(Apis::className(), ['id' => 'api'])
			->via('followUserApis');
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFollowUserUsers()
	{
		return $this->hasMany(FollowUserUser::className(), ['follower' => 'id']);
	}

	public function getFollowees()
	{
		return $this->hasMany(User::className(), ['id' => 'followee'])
			->via('followUserUsers');
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getObjects()
	{
		return $this->hasMany(Objects::className(), ['updated_by' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProperties()
	{
		return $this->hasMany(Properties::className(), ['updated_by' => 'id']);
	}
}
