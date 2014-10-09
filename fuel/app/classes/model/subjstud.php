<?php
class Model_Subjstud extends \Orm\Model
{
	protected static $_belongs_to = array('users'  => array('key_from' => 'id'), 'subject' => array('key_to' => 'id'));

	protected static $_properties = array(
		'id',
		'stud_id',
		'subj_id',
		'status',
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
		$val->add_field('stud_id', 'Stud_id', 'required|max_length[50]');
		$val->add_field('subj_id', 'Subj_id', 'required|max_length[50]');
		return $val;
	}

}
