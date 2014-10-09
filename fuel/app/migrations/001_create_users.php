<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'password' => array('constraint' => 50, 'type' => 'varchar'),
			'fname' => array('constraint' => 50, 'type' => 'varchar'),
			'lname' => array('constraint' => 50, 'type' => 'varchar'),
			'mname' => array('constraint' => 50, 'type' => 'varchar'),
			'department' => array('constraint' => 50, 'type' => 'varchar'),
			'course' => array('constraint' => 50, 'type' => 'varchar'),
			'year' => array('constraint' => 50, 'type' => 'varchar'),
			'email' => array('constraint' => 50, 'type' => 'varchar'),
			'group' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'profile_fields' => array('type' => 'text'),
			'last_login' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}