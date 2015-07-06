<?php

use yii\db\Schema;
use yii\db\Migration;

class m150626_125235_api_desc_text extends Migration
{
    public function up()
    {
        // Change description of APIs table to TEXT from STRING
        $this->alterColumn('{{%apis}}', 'description', Schema::TYPE_TEXT);
    }

    public function down()
    {
        // Change description of APIs table to STRINGy from TEXT
        $this->alterColumn('{{%apis}}', 'description', Schema::TYPE_STRING);
    }
}
