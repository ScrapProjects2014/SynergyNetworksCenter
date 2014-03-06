<?php

namespace Fuel\Migrations;

class Create_projects
{
	public function up()
	{
		\DBUtil::create_table('projects', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'job_type' => array('constraint' => 255, 'type' => 'varchar'),
			'status' => array('constraint' => 255, 'type' => 'varchar'),
			'progress' => array('constraint' => 11, 'type' => 'int'),
			'live' => array('constraint' => 255, 'type' => 'varchar'),
			'testing' => array('constraint' => 255, 'type' => 'varchar'),
			'notes' => array('type' => 'text'),
			'developer' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('projects');
	}
}