<?php
class Model_Schoolyear extends \Orm\Model
{
	protected static $_belongs_to = array('academicyears' => array('key_to' => 'id'));

	protected static $_properties = array(
		'id',
		'scho_year',
		'academicyear',
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
		$val->add_field('scho_year', 'School Year', 'required|max_length[50]');
		$val->add_field('academicyear', 'Academic Year', 'max_length[50]');
		return $val;
	}

}