<?php

use yii\db\Schema;
use yii\db\Migration;

class m150706_101550_delete_cbs_table extends Migration
{
    public function safeUp()
    {
        // Drop CBS Table
        $this->dropTable('{{%cbs}}');

        // Create many-to-many relationship between CBS from APIs to Objects that use that CBS.
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // Create a Many to Many Relationship between users (followers and followees)
        $this->createTable('{{%object_cbs}}', [
            'object' => Schema::TYPE_INTEGER,
            'cbs' => Schema::TYPE_INTEGER
        ], $tableOptions);

        $this->addForeignKey('fk_object_cbs_object', '{{%object_cbs}}', 'object', '{{%objects}}', 'id', 'CASCADE', 'NO ACTION');
        $this->addForeignKey('fk_object_cbs_cbs', '{{%object_cbs}}', 'cbs', '{{%apis}}', 'id', 'CASCADE', 'NO ACTION');
    }

    public function safeDown()
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

        // Drop Objects_CBS Table
        $this->dropTable('{{%object_cbs}}');
    }
}
