<?php

use yii\db\Schema;
use yii\db\Migration;

class m141204_092330_cbs extends Migration
{
    public function up()
    {
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%cbs}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'description' => Schema::TYPE_STRING,
			'version' => Schema::TYPE_STRING,
			'url' => Schema::TYPE_STRING . ' NOT NULL',
			'status' => 'ENUM("approved", "pending") NOT NULL',
			'created_by' => Schema::TYPE_INTEGER,
			'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
		], $tableOptions);
		$this->addForeignKey('fk_cbs_user_created', '{{%cbs}}', 'created_by', '{{%user}}', 'id', 'CASCADE', 'SET NULL');

		$this->addColumn('{{%objects}}', 'cbs', Schema::TYPE_TEXT);
    }

    public function down()
    {
		$this->dropTable('{{%cbs}}');
		$this->dropColumn('{{%objects}}', 'cbs');
    }
}
