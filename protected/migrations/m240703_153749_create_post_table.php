<?php

class m240703_153749_create_post_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('posts', array(
            'id' => 'pk',
			'title' => 'string NOT NULL',
			'description' => 'text NOT NULL',
			'author_id' => 'integer NOT NULL',
        ));

		$this->addColumn('posts', 'is_private', "tinyint(1) DEFAULT 0");
	}

	public function down()
	{
		echo "m240703_153749_create_post_table does not support migration down.\n";
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