<?php
class Model_Client extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'company' => array(
				'data_type' => 'varchar',
				'label' => 'Company Name',
				'validation' => array('required'), 
				'form' => array('type' => 'text'),
				'default' => 'New Client',
		),
		'website' => array(
				'data_type' => 'varchar', 
				'label' => 'Website Address',
				'validation' => array('required'),
				'form' => array('type' => 'text'),	
		),
		'created_at' => array(
				'data_type' => 'int',
				'label' => 'Created At',
				'form' => array(
					'type' => false, // this prevents this field from being rendered on a form
				),
		),
		'updated_at' => array(
				'data_type' => 'int',
				'label' => 'Updated At',
		),
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
		$val->add_field('company', 'Company Name', 'required|max_length[255]');
		$val->add_field('website', 'Website', 'required|max_length[255]');

		return $val;
	}
	
	protected static $_has_many = array('contacts');
		

}
