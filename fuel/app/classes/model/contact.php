<?php
class Model_Contact extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'first_name',
		'last_name',
		'phone',
		'email',
		'modified_date',
		'modified_by',
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
		$val->add_field('first_name', 'First Name', 'required|max_length[255]');
		$val->add_field('last_name', 'Last Name', 'required|max_length[255]');
		$val->add_field('phone', 'Phone', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('modified_date', 'Modified Date', 'required');
		$val->add_field('modified_by', 'Modified By', 'required|max_length[255]');

		return $val;
	}

}
