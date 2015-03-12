<?php

use yii\db\Schema;
use yii\db\Migration;

class m150308_231736_notification_system extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
		// Set the notification system. Compare last_seen timestamp with the one of API or its Objects Update timestamps. If last_seen is older then show the corresponding notifications.

		// Followed APIs check for changes in: name (keep old one too), description, version, up/down-votes, proposal, publication, privacy
		$this->addColumn('{{%follow_user_api}}', 'id', Schema::TYPE_PK);
		$this->addColumn('{{%follow_user_api}}', 'created_at', Schema::TYPE_INTEGER . ' NOT NULL');
		$this->addColumn('{{%follow_user_api}}', 'updated_at', Schema::TYPE_INTEGER . ' NOT NULL');
		$this->addColumn('{{%follow_user_api}}', 'last_seen', Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP');
		$this->addColumn('{{%follow_user_api}}', 'changed_name', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_api}}', 'changed_name_old_name', Schema::TYPE_STRING);
		$this->addColumn('{{%follow_user_api}}', 'changed_descr', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_api}}', 'changed_version', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_api}}', 'changed_upvotes', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_api}}', 'changed_downvotes', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_api}}', 'changed_proposed', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_api}}', 'changed_published', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_api}}', 'changed_privacy', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		// Followed APIs also check the number of their Objects for additions/deletions, changes.
		$this->addColumn('{{%follow_user_api}}', 'changed_objects_number', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0');

		// Followed Users can change: photo, linkedin/github, create new api
		$this->addColumn('{{%follow_user_user}}', 'id', Schema::TYPE_PK);
		$this->addColumn('{{%follow_user_user}}', 'created_at', Schema::TYPE_INTEGER . ' NOT NULL');
		$this->addColumn('{{%follow_user_user}}', 'updated_at', Schema::TYPE_INTEGER . ' NOT NULL');
		$this->addColumn('{{%follow_user_user}}', 'last_seen', Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP');
		$this->addColumn('{{%follow_user_user}}', 'changed_photo', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_user}}', 'changed_linkedin', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_user}}', 'changed_github', Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0');
		$this->addColumn('{{%follow_user_user}}', 'created_api', Schema::TYPE_TEXT);
		$this->addColumn('{{%follow_user_user}}', 'changed_upvotes_apis', Schema::TYPE_TEXT);
		$this->addColumn('{{%follow_user_user}}', 'changed_downvotes_apis', Schema::TYPE_TEXT);
		// We should also check all the following activities of the followee. Easy, with the created_at and update_at.
    }
    
    public function safeDown()
    {
		$this->dropColumn('{{%follow_user_api}}', 'id');
		$this->dropColumn('{{%follow_user_api}}', 'created_at');
		$this->dropColumn('{{%follow_user_api}}', 'updated_at');
		$this->dropColumn('{{%follow_user_api}}', 'last_seen');
		$this->dropColumn('{{%follow_user_api}}', 'changed_name');
		$this->dropColumn('{{%follow_user_api}}', 'changed_name_old_name');
		$this->dropColumn('{{%follow_user_api}}', 'changed_descr');
		$this->dropColumn('{{%follow_user_api}}', 'changed_version');
		$this->dropColumn('{{%follow_user_api}}', 'changed_upvotes');
		$this->dropColumn('{{%follow_user_api}}', 'changed_downvotes');
		$this->dropColumn('{{%follow_user_api}}', 'changed_proposed');
		$this->dropColumn('{{%follow_user_api}}', 'changed_published');
		$this->dropColumn('{{%follow_user_api}}', 'changed_privacy');
		$this->dropColumn('{{%follow_user_api}}', 'changed_objects_number');

		$this->dropColumn('{{%follow_user_user}}', 'id');
		$this->dropColumn('{{%follow_user_user}}', 'created_at');
		$this->dropColumn('{{%follow_user_user}}', 'updated_at');
		$this->dropColumn('{{%follow_user_user}}', 'last_seen');
		$this->dropColumn('{{%follow_user_user}}', 'changed_photo');
		$this->dropColumn('{{%follow_user_user}}', 'changed_linkedin');
		$this->dropColumn('{{%follow_user_user}}', 'changed_github');
		$this->dropColumn('{{%follow_user_user}}', 'created_api');
		$this->dropColumn('{{%follow_user_user}}', 'changed_upvotes_apis');
		$this->dropColumn('{{%follow_user_user}}', 'changed_downvotes_apis');
    }
}
