<?php

class Model_Clients_Contacts extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'client_id',
		'contact_id',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => true,
		),
	);
	protected static $_table_name = 'clients_contacts';

	protected static $_belongs_to = array('clients', 'contacts');

}
