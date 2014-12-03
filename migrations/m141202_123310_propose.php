<?php

use yii\db\Schema;
use yii\db\Migration;

class m141202_123310_propose extends Migration
{
    public function up()
    {
		$this->addColumn('{{%apis}}', 'proposed', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
    }

    public function down()
    {
		$this->dropColumn('{{%apis}}', 'proposed');
    }
}
