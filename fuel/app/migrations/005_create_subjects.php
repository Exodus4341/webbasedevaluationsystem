<?php

namespace Fuel\Migrations;

class Create_subjects
{
	public function up()
	{
		\DBUtil::create_table('subjects', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'schedule' => array('constraint' => 50, 'type' => 'varchar'),
			'time' => array('type' => 'datetime'),
			'room' => array('constraint' => 50, 'type' => 'varchar'),
			'teacher_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'question_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('subjects');
	}
}