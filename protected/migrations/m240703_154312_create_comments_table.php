<?php

class m240703_154312_create_comments_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('comments', array(
            'id' => 'pk',
			'content' => 'text NOT NULL',
			'post_id' => 'integer NOT NULL',
			'author_id' => 'integer NOT NULL'
        ));
	}

	public function down()
	{
		echo "m240703_154312_create_comments_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}