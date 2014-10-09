<?php
class Model_Academicyear extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'year',
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
		$val->add_field('acadyear', 'Acad Year', 'max_length[50]');
		return $val;
	}

}