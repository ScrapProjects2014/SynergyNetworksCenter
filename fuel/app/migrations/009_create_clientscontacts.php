<?php

namespace Fuel\Migrations;

class Create_clientscontacts
{
	public function up()
	{
		\DBUtil::create_table('clientscontacts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'client_id' => array('constraint' => 11, 'type' => 'int'),
			'contact_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('clientscontacts');
	}
}