<?php
class Model_User extends \Orm\Model
{
	protected static $_belongs_to = array('departments', 'courses' => array('key_to' => 'id'));
	
	protected static $_properties = array(
		'id',
		'username',
		'pic_url',
		'password',
		'fname',
		'lname',
		'mname',
		'department',
		'course',
		'year',
		'email',
		'group',
		'status',
		'contact_num',
		'profile_fields',
		'last_login',
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
		$val->add_field('username', 'Username', 'max_length[50]');
		$val->add_field('pic_url', 'Pic_url', 'max_length[50]');
		$val->add_field('password', 'Password', 'max_length[50]');
		$val->add_field('fname', 'Fname', 'max_length[50]');
		$val->add_field('lname', 'Lname', 'max_length[50]');
		$val->add_field('mname', 'Mname', 'max_length[50]');
		$val->add_field('department', 'Department', 'max_length[50]');
		$val->add_field('course', 'Course', 'max_length[50]');
		$val->add_field('year', 'Year', 'max_length[50]');	
		$val->add_field('email', 'Email', 'valid_email|max_length[50]');
		$val->add_field('group', 'Group', 'valid_string[numeric]');
		$val->add_field('status', 'Status', 'max_length[50]');
		$val->add_field('contact_num', 'Contact_num', '');
		$val->add_field('profile_fields', 'Profile Fields', '');
		$val->add_field('last_login', 'Last Login', 'valid_string[numeric]');

		return $val;
	}

}
