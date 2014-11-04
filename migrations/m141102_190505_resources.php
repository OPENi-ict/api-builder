<?php

use yii\db\Schema;
use yii\db\Migration;


class m141102_190505_resources extends Migration
{
	/**
	 *	Create the Resources Table we need for storing all the Objects implemented in the API Platform.
	 */
	public function up()
    {
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%resources}}', [
			'id' => Schema::TYPE_PK,
			'resource_name' => Schema::TYPE_STRING . ' NOT NULL',
			'resource_url' => Schema::TYPE_STRING . ' NOT NULL',
			'author' => Schema::TYPE_STRING . ' NOT NULL',
			'likes' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'dislikes' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'used' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',

			'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
			'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
		], $tableOptions);

    }

	/**
	 *	Delete the Resources Table.
	 */
	public function down()
	{
		$this->dropTable('{{%resources}}');
	}
}
