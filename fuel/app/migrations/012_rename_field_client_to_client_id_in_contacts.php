<?php

namespace Fuel\Migrations;

class Rename_field_client_to_client_id_in_contacts
{
	public function up()
	{
		\DBUtil::modify_fields('contacts', array(
			'client' => array('name' => 'client_id', 'type' => 'int', 'constraint' => 11)
		));
	}

	public function down()
	{
	\DBUtil::modify_fields('contacts', array(
			'client_id' => array('name' => 'client', 'type' => 'int', 'constraint' => 11)
		));
	}
}