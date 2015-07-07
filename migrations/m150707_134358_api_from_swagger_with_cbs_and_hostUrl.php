<?php

use yii\db\Schema;
use yii\db\Migration;

class m150707_134358_api_from_swagger_with_cbs_and_hostUrl extends Migration
{
    public function up()
    {
        $this->addColumn('{{%api_from_swagger}}', 'host_url', Schema::TYPE_STRING);
        $this->addColumn('{{%api_from_swagger}}', 'cbs', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
    }

    public function down()
    {
        $this->dropColumn('{{%api_from_swagger}}', 'host_url');
        $this->dropColumn('{{%api_from_swagger}}', 'cbs');
    }
}
