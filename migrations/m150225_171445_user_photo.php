<?php

use yii\db\Schema;
use yii\db\Migration;

class m150225_171445_user_photo extends Migration
{
    public function up()
    {
		$this->addColumn('{{%user}}', 'photo_name', Schema::TYPE_TEXT);
    }

    public function down()
    {
		$this->dropColumn('{{%user}}', 'photo_name');
    }
}
