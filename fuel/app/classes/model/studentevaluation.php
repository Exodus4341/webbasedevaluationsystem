<?php
class Model_Studentevaluation extends \Orm\Model
{
	protected static $_belongs_to = array('questions' => array('key_to' => 'id'));

	protected static $_properties = array(
		'id',
		'question_id',
		'subj_id',
		'teacher_id',
		'category_id',
		'stud_id',
		'answer',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('question_id', 'Question Id', 'required|valid_string[numeric]');
		$val->add_field('subj_id', 'Subj Id', 'required|valid_string[numeric]');
		$val->add_field('stud_id', 'Student Id', '');
		$val->add_field('teacher_id', 'Teacher Id', 'required|valid_string[numeric]');

		return $val;
	}

}
