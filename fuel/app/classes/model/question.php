<?php
class Model_Question extends \Orm\Model
{
	protected static $_belongs_to = array('subjects', 'users' => array('key_to' => 'id'));

	protected static $_properties = array(
		'id',
		'category',
		'order_no',
		'question',
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
		$val->add_field('category', 'Category', 'required|max_length[50]');
		$val->add_field('order_no', 'order no', 'required');
		$val->add_field('question', 'Question', 'required');
		$val->add_field('status', 'Status', '');
		$val->add_field('subj_id[0]', 'Subj Id', 'valid_string[numeric]');

		return $val;
	}

}
