<?php

use yii\db\Schema;
use yii\db\Migration;

class m141109_194118_apis extends Migration
{
	/**
	 *	Create the APIs Table for keeping the APIs.
	 */
	public function up()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%apis}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'description' => Schema::TYPE_STRING,
			'objects' => Schema::TYPE_INTEGER,
			'author' => Schema::TYPE_INTEGER,
			'likes' => Schema::TYPE_INTEGER . ' NOT NULL',
			'dislikes' => Schema::TYPE_INTEGER . ' NOT NULL',
			'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
			'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
		], $tableOptions);
		$this->addForeignKey('fk_apis_user_author', '{{%apis}}', 'author', '{{%user}}', 'id', 'CASCADE', 'SET NULL');
		$this->addForeignKey('fk_apis_user_likes', '{{%apis}}', 'likes', '{{%user}}', 'id', 'CASCADE', 'NO ACTION');
		$this->addForeignKey('fk_apis_user_dislikes', '{{%apis}}', 'dislikes', '{{%user}}', 'id', 'CASCADE', 'NO ACTION');
		$this->addForeignKey('fk_apis_objects', '{{%apis}}', 'objects', '{{%objects}}', 'id', 'CASCADE', 'NO ACTION');
	}

	/**
	 *	Delete the APIs Table.
	 */
	public function down()
	{
		$this->dropTable('{{%apis}}');
	}
}
