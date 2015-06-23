<?php

use yii\db\Schema;
use yii\db\Migration;

class m150623_142742_api_from_swagger extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // Create a table for storing Objects read from Swagger
        $this->createTable('{{%object_from_swagger}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'methods' => Schema::TYPE_STRING,
            'api_from_swagger' => Schema::TYPE_INTEGER
        ], $tableOptions);

        // Create a table for storing APIs read from Swagger
        $this->createTable('{{%api_from_swagger}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'version' => Schema::TYPE_STRING,
            'privacy' => Schema::TYPE_STRING,
            'swagger_url' => Schema::TYPE_STRING,
        ], $tableOptions);

        // An API can have multiple Objects
        $this->addForeignKey('fk_apis_objects_swagger', '{{%object_from_swagger}}', 'api_from_swagger', '{{%api_from_swagger}}', 'id', 'CASCADE', 'SET NULL');
    }
    
    public function safeDown()
    {
        $this->dropTable('{{object_from_swagger}}');
        $this->dropTable('{{api_from_swagger}}');
    }
}
