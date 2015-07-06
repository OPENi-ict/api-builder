<?php

use yii\db\Schema;
use yii\db\Migration;

class m150706_142353_more_in_object_cbs_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%object_cbs}}', 'id', Schema::TYPE_PK);
        $this->addColumn('{{%object_cbs}}', 'created_at', Schema::TYPE_INTEGER . ' NOT NULL');
        $this->addColumn('{{%object_cbs}}', 'updated_at', Schema::TYPE_INTEGER . ' NOT NULL');
    }

    public function down()
    {
        $this->dropColumn('{{%object_cbs}}', 'id');
        $this->dropColumn('{{%object_cbs}}', 'created_at');
        $this->dropColumn('{{%object_cbs}}', 'updated_at');
    }
}
