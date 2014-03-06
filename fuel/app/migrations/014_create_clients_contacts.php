<?php

namespace Fuel\Migrations;

class Create_clients_contacts
{
	public function up()
	{
		\DBUtil::create_table('clients_contacts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'client_id' => array('constraint' => 11, 'type' => 'int'),
			'contact_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('clients_contacts');
	}
}