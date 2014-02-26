<?php
class Model_Project extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'title',
		'job_type',
		'status',
		'progress',
		'live',
		'testing',
		'notes',
		'developer',
		'client_id',
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
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('job_type', 'Job Type', 'required|max_length[255]');
		$val->add_field('status', 'Status', 'required|max_length[255]');
		$val->add_field('progress', 'Progress', 'required|valid_string[numeric]');
		$val->add_field('live', 'Live', 'required|max_length[255]');
		$val->add_field('testing', 'Testing', 'required|max_length[255]');
		$val->add_field('notes', 'Notes', 'required');
		$val->add_field('developer', 'Developer', 'required|max_length[255]');
		$val->add_field('client_id', 'Company Id', 'required|valid_string[numeric]');

		return $val;
	}
	
	protected static $_belongs_to

}
