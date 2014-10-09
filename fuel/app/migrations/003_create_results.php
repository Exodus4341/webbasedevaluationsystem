<?php

namespace Fuel\Migrations;

class Create_results
{
	public function up()
	{
		\DBUtil::create_table('results', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'questionnaire_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'subj_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'teacher_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('results');
	}
}