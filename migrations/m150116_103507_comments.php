<?php

use yii\db\Schema;
use yii\db\Migration;

class m150116_103507_comments extends Migration
{
    /**
     *	Create the Comments Table for keeping all the comments.
     *  Register created_by, updated_by, votes_up, votes_down to users.
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%comments}}', [
            'id' => Schema::TYPE_PK,
            'api' => Schema::TYPE_INTEGER,
            'object' => Schema::TYPE_INTEGER,
            'property' => Schema::TYPE_INTEGER,
            'text' => Schema::TYPE_TEXT . ' NOT NULL',
            'reply_to_comment' => Schema::TYPE_INTEGER,
            'votes_up' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT "0"',
            'votes_down' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT "0"',
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
        $this->addForeignKey('fk_comments_user_created', '{{%comments}}', 'created_by', '{{%user}}', 'id', 'CASCADE', 'SET NULL');
        $this->addForeignKey('fk_comments_user_updated', '{{%comments}}', 'updated_by', '{{%user}}', 'id', 'CASCADE', 'SET NULL');
        $this->addForeignKey('fk_comments_api', '{{%comments}}', 'api', '{{%apis}}', 'id', 'CASCADE', 'SET NULL');
        $this->addForeignKey('fk_comments_object', '{{%comments}}', 'object', '{{%objects}}', 'id', 'CASCADE', 'SET NULL');
        $this->addForeignKey('fk_comments_property', '{{%comments}}', 'property', '{{%properties}}', 'id', 'CASCADE', 'SET NULL');

        $this->addColumn('{{%user}}', 'votes_up_comments', Schema::TYPE_TEXT);
        $this->addColumn('{{%user}}', 'votes_down_comments', Schema::TYPE_TEXT);
    }

    /**
     *	Delete the Comments Table.
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');

        $this->dropColumn('{{%user}}', 'votes_up_comments');
        $this->dropColumn('{{%user}}', 'votes_down_comments');
    }
}
