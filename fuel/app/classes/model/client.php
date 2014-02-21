<?php
class Model_Client extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'site',
		'web_address',
		'created_at',
		'updated_at',
	);

	protected static $_has_many = array('contacts');

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
		$val->add_field('site', 'Site', 'required|max_length[255]');
		$val->add_field('web_address', 'Web Address', 'required|max_length[255]');

		return $val;
	}

}
