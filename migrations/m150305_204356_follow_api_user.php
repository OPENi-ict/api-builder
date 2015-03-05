<?php

use yii\db\Schema;
use yii\db\Migration;

class m150305_204356_follow_api_user extends Migration
{
	public function safeUp()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		// Create a Many to Many Relationship between users (followers and followees)
		$this->createTable('{{%follow_user_user}}', [
			'follower' => Schema::TYPE_INTEGER,
			'followee' => Schema::TYPE_INTEGER
		], $tableOptions);

		$this->addForeignKey('fk_follow_user_user_follower', '{{%follow_user_user}}', 'follower', '{{%user}}', 'id', 'CASCADE', 'NO ACTION');
		$this->addForeignKey('fk_follow_user_user_followee', '{{%follow_user_user}}', 'followee', '{{%user}}', 'id', 'CASCADE', 'NO ACTION');

		// Create a Many to Many Relationship between users and apis
		$this->createTable('{{%follow_user_api}}', [
			'follower' => Schema::TYPE_INTEGER,
			'api' => Schema::TYPE_INTEGER
		], $tableOptions);

		$this->addForeignKey('fk_follow_user_api_follower', '{{%follow_user_api}}', 'follower', '{{%user}}', 'id', 'CASCADE', 'NO ACTION');
		$this->addForeignKey('fk_follow_user_api_api', '{{%follow_user_api}}', 'api', '{{%apis}}', 'id', 'CASCADE', 'NO ACTION');
	}

	public function safeDown()
	{
		$this->dropTable('{{follow_user_user}}');
		$this->dropTable('{{follow_user_api}}');
	}
}
