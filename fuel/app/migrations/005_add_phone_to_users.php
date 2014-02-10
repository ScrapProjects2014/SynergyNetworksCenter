<?php

namespace Fuel\Migrations;

class Add_phone_to_users
{
	public function up()
	{
		\DBUtil::add_fields('users', array(
			'phone' => array('constraint' => 255, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('users', array(
			'phone'

		));
	}
}