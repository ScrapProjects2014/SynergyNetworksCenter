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
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			PRIMARY KEY ('client_id', 'contact_id')
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('clients_contacts');
	}
}