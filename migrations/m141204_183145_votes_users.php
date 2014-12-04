<?php

use yii\db\Schema;
use yii\db\Migration;

class m141204_183145_votes_users extends Migration
{
	public function up()
	{
		$this->addColumn('{{%user}}', 'votes_up_apis', Schema::TYPE_TEXT);
		$this->addColumn('{{%user}}', 'votes_down_apis', Schema::TYPE_TEXT);
		$this->addColumn('{{%user}}', 'votes_up_objects', Schema::TYPE_TEXT);
		$this->addColumn('{{%user}}', 'votes_down_objects', Schema::TYPE_TEXT);
	}

	public function down()
	{
		$this->dropColumn('{{%user}}', 'votes_up_apis');
		$this->dropColumn('{{%user}}', 'votes_down_apis');
		$this->dropColumn('{{%user}}', 'votes_up_objects');
		$this->dropColumn('{{%user}}', 'votes_down_objects');
	}
}
