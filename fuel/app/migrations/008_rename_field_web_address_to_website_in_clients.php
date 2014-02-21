<?php

namespace Fuel\Migrations;

class Rename_field_web_address_to_website_in_clients
{
	public function up()
	{
		\DBUtil::modify_fields('clients', array(
			'web_address' => array('name' => 'website', 'type' => 'text')
		));
	}

	public function down()
	{
	\DBUtil::modify_fields('clients', array(
			'website' => array('name' => 'web_address', 'type' => 'text')
		));
	}
}