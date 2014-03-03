<?php
class Model_Staff extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'first',
		'last',
		'email',
		'personal_email',
		'phone',
		'cell_phone',
		'profile_fields',
		'user',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('first', 'First', 'required|max_length[255]');
		$val->add_field('last', 'Last', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('personal_email', 'Personal Email', 'required|max_length[255]');
		$val->add_field('phone', 'Phone', 'required|max_length[255]');
		$val->add_field('cell_phone', 'Cell Phone', 'required|max_length[255]');
		$val->add_field('profile_fields', 'Profile Fields', 'required');
		$val->add_field('user', 'User', 'required|valid_string[numeric]');

		return $val;
	}

}
