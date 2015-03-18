<?php

use yii\db\Schema;
use yii\db\Migration;

class m150318_125042_link_schema_org extends Migration
{
    public function safeUp()
    {
		$this->addColumn('{{%objects}}', 'schema_org', Schema::TYPE_STRING);
    }
    
    public function safeDown()
    {
		$this->dropColumn('{{%objects}}', 'schema_org');
    }
}
