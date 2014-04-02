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
		'client_id',
		'user_id',
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

		// in a Model_Contact which has and belongs to many Clients
		// = multiple clients per contact and multiple contacts per client
		protected static $_many_many = array(
			'clients' => array(
				'key_from' => 'id', 
				'key_through_from' => 'contact_id',	// col. 1 from table in between [clients_contacts], should match clients.id
				'table_through' => 'clients_contacts', 	// both models plural without prefix in alphabetical order
				'key_through_to' => 'client_id', 	// col. 2 from table in between, must match contacts.id
				'model_to' => 'Model_Client',
				'key_to' => 'id',
				'cascade_save' => true,
				'cascade_delete' => false,
				)
		);

}
