<?php

use yii\db\Schema;
use yii\db\Migration;

class m150303_124915_profile_links extends Migration
{
    public function up()
    {
		$this->addColumn('{{%user}}', 'linkedin', Schema::TYPE_STRING);
		$this->addColumn('{{%user}}', 'github', Schema::TYPE_STRING);
    }

    public function down()
    {
		$this->dropColumn('{{%user}}', 'linkedin');
		$this->dropColumn('{{%user}}', 'github');
    }
}
