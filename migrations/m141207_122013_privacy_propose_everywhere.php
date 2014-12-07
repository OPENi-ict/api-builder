<?php

use yii\db\Schema;
use yii\db\Migration;

class m141207_122013_privacy_propose_everywhere extends Migration
{
    public function up()
    {
		$this->addColumn('{{%apis}}', 'privacy', 'ENUM("public", "protected", "private") NOT NULL DEFAULT "public"');
		$this->alterColumn('{{%objects}}', 'privacy', 'ENUM("public", "protected", "private") NOT NULL DEFAULT "public"');

		$this->addColumn('{{%objects}}', 'proposed', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
    }

    public function down()
    {
		$this->alterColumn('{{%objects}}', 'privacy', 'ENUM("public", "private") NOT NULL');
		$this->dropColumn('{{%apis}}', 'published');

		$this->dropColumn('{{%objects}}', 'proposed');
    }
}
