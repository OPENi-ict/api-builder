<?php

use yii\db\Schema;
use yii\db\Migration;

class m150316_144513_api_proposed_status extends Migration
{
	public function safeUp()
    {
		$this->addColumn('{{%apis}}', 'status', 'ENUM("Under Development", "Under Review", "Approved") NOT NULL DEFAULT "Under Development"');
		$this->dropColumn('{{%apis}}', 'proposed');
    }

	public function safeDown()
    {
		$this->addColumn('{{%apis}}', 'proposed',  Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->dropColumn('{{%apis}}', 'status');
    }
}
