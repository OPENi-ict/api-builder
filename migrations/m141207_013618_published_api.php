<?php

use yii\db\Schema;
use yii\db\Migration;

class m141207_013618_published_api extends Migration
{
    public function up()
    {
		$this->addColumn('{{%apis}}', 'published', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
    }

    public function down()
    {
		$this->dropColumn('{{%apis}}', 'published');
    }
}
