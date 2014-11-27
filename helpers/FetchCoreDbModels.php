<?php

namespace app\helpers;

class FetchCoreDbModels extends \yii\db\ActiveRecord
{
	private $excludedModelNames;

	/**
	 * @return array
	 */
	public function getExcludedModelNames()
	{
		return $this->excludedModelNames;
	}

	public function setExcludedModelNames()
	{
		$this->excludedModelNames = [
			'auth_permission',
			'auth_group_permissions',
			'auth_group',
			'auth_user_groups',
			'auth_user_user_permissions',
			'auth_user',
			'django_content_type',
			'django_session',
			'django_site',
			'django_admin_log',
			'account_emailaddress',
			'account_emailconfirmation',
			'socialaccount_socialapp_sites',
			'socialaccount_socialapp',
			'socialaccount_socialaccount',
			'socialaccount_socialtoken',
			'tastypie_apiaccess',
			'tastypie_apikey',
			'corsheaders_corsmodel',
			'api_oauth_consumer'
		];
	}

	public static function getDb()
	{
		return \Yii::$app->sqlite;
	}
}