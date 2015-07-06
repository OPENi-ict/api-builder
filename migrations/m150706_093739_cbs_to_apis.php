<?php

use yii\db\Schema;
use yii\db\Migration;

class m150706_093739_cbs_to_apis extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%apis}}', 'cbs', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
        $this->addColumn('{{%apis}}', 'url', Schema::TYPE_STRING);
    }
    
    public function safeDown()
    {
        $this->dropColumn('{{%apis}}', 'cbs');
        $this->dropColumn('{{%apis}}', 'url');
    }
}
