<?php

use yii\db\Schema;
use yii\db\Migration;

class m141109_190204_fields extends Migration
{
	/**
	 *	Create the Fields Table for keeping the fields of the Objects.
	 */
	public function up()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%fields}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'description' => Schema::TYPE_STRING,
			'type' => Schema::TYPE_STRING . ' NOT NULL',
			'author' => Schema::TYPE_INTEGER,
			'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
			'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
		], $tableOptions);
		$this->addForeignKey('fk_fields_user', '{{%fields}}', 'author', '{{%user}}', 'id', 'CASCADE', 'SET NULL');
	}

	/**
	 *	Delete the Fields Table.
	 */
	public function down()
	{
		$this->dropTable('{{%fields}}');
	}
}
