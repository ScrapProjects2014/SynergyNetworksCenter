<?php

namespace Fuel\Migrations;

class Add_profile_fields_to_clients
{
	public function up()
	{
		\DBUtil::add_fields('clients', array(
			'profile_fields' => array('type' => 'text'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('clients', array(
			'profile_fields'

		));
	}
}