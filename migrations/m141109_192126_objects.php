<?php

use yii\db\Schema;
use yii\db\Migration;

class m141109_192126_objects extends Migration
{
	/**
	 *	Create the Objects Table for keeping the Objects.
	 */
    public function up()
    {
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%objects}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'description' => Schema::TYPE_STRING,
			'api' => Schema::TYPE_INTEGER . ' NOT NULL',
			'inherited' => Schema::TYPE_INTEGER,
			'privacy' => 'ENUM("public", "private") NOT NULL',
			'fields' => Schema::TYPE_INTEGER,
			'methods' => Schema::TYPE_TEXT,
			'author' => Schema::TYPE_INTEGER,
			'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
			'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
		], $tableOptions);
		$this->addForeignKey('fk_objects_user', '{{%objects}}', 'author', '{{%user}}', 'id', 'CASCADE', 'SET NULL');
		$this->addForeignKey('fk_objects_fields', '{{%objects}}', 'fields', '{{%fields}}', 'id', 'CASCADE', 'NO ACTION');
		$this->addForeignKey('fk_objects_objects', '{{%objects}}', 'inherited', '{{%objects}}', 'id', 'CASCADE', 'NO ACTION');
    }

	/**
	 *	Delete the Objects Table.
	 */
    public function down()
    {
		$this->dropTable('{{%objects}}');
    }
}
