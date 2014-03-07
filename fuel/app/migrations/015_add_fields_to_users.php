<?php

namespace Fuel\Migrations;

class Add_fields_to_users
{
	public function up()
	{
		\DBUtil::add_fields('users', array(
			'group_id' => array('constraint' => 11, 'type' => 'int'),
			'previous_login' => array('constraint' => 255, 'type' => 'varchar'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('users', array(
			'group_id'
,			'previous_login'
,			'user_id'

		));
	}
}