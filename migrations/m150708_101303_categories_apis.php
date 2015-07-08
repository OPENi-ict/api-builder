<?php

use yii\db\Schema;
use yii\db\Migration;

class m150708_101303_categories_apis extends Migration
{
    public function safeUp()
    {
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%categories}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'description' => Schema::TYPE_TEXT,
            'photo_name' => Schema::TYPE_TEXT,
			'created_by' => Schema::TYPE_INTEGER,
			'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
		], $tableOptions);

        $date = new DateTime();

        $this->insert('{{%categories}}', [
            'name' => 'Various',
            'description' => 'APIs that do not fit in a specific category',
            'created_by' => \app\models\User::findOne(['username' => 'admin'])->id,
            'created_at' => $date->getTimestamp()
        ]);

		$this->addColumn('{{%apis}}', 'category', Schema::TYPE_INTEGER . ' NOT NULL');
        \app\models\Apis::updateAll(['category' => 1]);
        $this->addForeignKey('fk_apis_categories', '{{%apis}}', 'category', '{{%categories}}', 'id', 'CASCADE', 'NO ACTION');
    }
    
    public function safeDown()
    {
        $this->dropColumn('{{%apis}}', 'category');
        $this->dropTable('{{%categories}}');
    }
}
