<?php

class m240703_152914_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
            'id' => 'pk',
			'email' => 'string NOT NULL',
			'name' => 'string NOT NULL',
			'password' => 'string NOT NULL'
        ));
	}

	public function down()
	{
		echo "m240703_152914_create_user_table does not support migration down.\n";
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