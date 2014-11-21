<?php
class Model_Category extends \Orm\Model
{

	protected static $_properties = array(
		'id',
		'cat_name',
		'percentage',
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
		$val->add_field('cat_name', 'Categoty name', 'required|max_length[50]');
		$val->add_field('percentage', 'Percentage', 'required|max_length[50]');
		$val->add_field('status', 'Status', '');

		return $val;
	}

}
