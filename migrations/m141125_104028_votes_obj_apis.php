<?php

use yii\db\Schema;
use yii\db\Migration;

class m141125_104028_votes_obj_apis extends Migration
{
    public function up()
    {
		$this->addColumn('{{%objects}}', 'votes_up', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT "0"');
		$this->addColumn('{{%objects}}', 'votes_down', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT "0"');

		$this->renameColumn('{{%apis}}', 'likes', 'votes_up');
		$this->renameColumn('{{%apis}}', 'dislikes', 'votes_down');
    }

    public function down()
    {
		$this->dropColumn('{{%objects}}', 'votes_up');
		$this->dropColumn('{{%objects}}', 'votes_down');

		$this->renameColumn('{{%apis}}', 'votes_up', 'likes');
		$this->renameColumn('{{%apis}}', 'votes_down', 'dislikes');
    }
}
