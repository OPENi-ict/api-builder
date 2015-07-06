<?php

use yii\db\Schema;
use yii\db\Migration;

class m141106_132611_roles extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%auth_rule}}', [
			'name' => 'VARCHAR(64) NOT NULL',
			'data' => 'TEXT NULL',
			'created_at' => 'INT(11) NULL',
			'updated_at' => 'INT(11) NULL',
			0 => 'PRIMARY KEY (`name`)'
		], $tableOptions);

		$this->createTable('{{%auth_item}}', [
			'name' => 'VARCHAR(64) NOT NULL',
			'type' => 'INT(11) NOT NULL',
			'description' => 'TEXT NULL',
			'rule_name' => 'VARCHAR(64) NULL',
			'data' => 'TEXT NULL',
			'created_at' => 'INT(11) NULL',
			'updated_at' => 'INT(11) NULL',
			0 => 'PRIMARY KEY (`name`)'
		], $tableOptions);
		$this->addForeignKey('fk_auth_rule_auth_item', '{{%auth_item}}', 'rule_name', '{{%auth_rule}}', 'name', 'CASCADE', 'NO ACTION');

		$this->createTable('{{%auth_item_child}}', [
			'parent' => 'VARCHAR(64) NOT NULL',
			'child' => 'VARCHAR(64) NOT NULL',
			0 => 'PRIMARY KEY (`parent`)',
			0 => 'PRIMARY KEY (`child`)'
		], $tableOptions);
		$this->addForeignKey('fk_auth_item_auth_item_child_parent', '{{%auth_item_child}}', 'parent', '{{%auth_item}}', 'name', 'CASCADE', 'NO ACTION');

		$this->addForeignKey('fk_auth_item_auth_item_child', '{{%auth_item_child}}', 'child', '{{%auth_item}}', 'name', 'CASCADE', 'NO ACTION');

		$this->createTable('{{%auth_assignment}}', [
			'item_name' => 'VARCHAR(64) NOT NULL',
			'user_id' => 'VARCHAR(64) NOT NULL',
			'created_at' => 'INT(11) NULL',
			0 => 'PRIMARY KEY (`item_name`)',
			0 => 'PRIMARY KEY (`user_id`)'
		], $tableOptions);
		$this->addForeignKey('fk_auth_item_auth_assignment', '{{%auth_assignment}}', 'item_name', '{{%auth_item}}', 'name', 'CASCADE', 'NO ACTION');
	}

    public function safeDown()
    {
		$this->dropTable('{{%auth_assignment}}');
		$this->dropTable('{{%auth_item_child}}');
		$this->dropTable('{{%auth_item}}');
		$this->dropTable('{{%auth_rule}}');

        return false;
    }
}
