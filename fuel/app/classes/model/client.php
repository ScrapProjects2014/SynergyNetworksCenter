<?php
class Model_Client extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'company',
		'website',
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
		$val->add_field('company', 'Company Name', 'required|max_length[255]');
		$val->add_field('website', 'Website', 'required|max_length[255]');

		return $val;
	}

		// in a Model_Client which has and belongs to many Contacts
		// = multiple clients per contact and multiple contacts per client
		protected static $_many_many = array(
			'contacts' => array(
				'key_from' => 'id', 
				'key_through_from' => 'client_id',	// col. 1 from table in between [clients_contacts], should match clients.id
				'table_through' => 'clients_contacts', 	// both models plural without prefix in alphabetical order
				'key_through_to' => 'contact_id', 	// col. 2 from table in between, must match contacts.id
				'model_to' => 'Model_Contact',
				'key_to' => 'id',
				'cascade_save' => true,
				'cascade_delete' => false,
				)
		);

}
