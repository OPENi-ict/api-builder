<?php

use yii\db\Schema;
use yii\db\Migration;

class m141109_190204_properties extends Migration
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

		$this->createTable('{{%properties}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'description' => Schema::TYPE_STRING,
			'type' => Schema::TYPE_STRING . ' NOT NULL',
			'created_by' => Schema::TYPE_INTEGER,
			'updated_by' => Schema::TYPE_INTEGER,
			'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
			'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
		], $tableOptions);
		$this->addForeignKey('fk_fields_user_created', '{{%properties}}', 'created_by', '{{%user}}', 'id', 'CASCADE', 'SET NULL');
		$this->addForeignKey('fk_fields_user_updated', '{{%properties}}', 'updated_by', '{{%user}}', 'id', 'CASCADE', 'SET NULL');
	}

	/**
	 *	Delete the Fields Table.
	 */
	public function down()
	{
		$this->dropTable('{{%properties}}');
	}
}
