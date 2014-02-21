<?php

namespace Fuel\Migrations;

class Rename_field_site_to_company_in_clients
{
	public function up()
	{
		\DBUtil::modify_fields('clients', array(
			'site' => array('name' => 'company', 'type' => 'text')
		));
	}

	public function down()
	{
	\DBUtil::modify_fields('clients', array(
			'company' => array('name' => 'site', 'type' => 'text')
		));
	}
}