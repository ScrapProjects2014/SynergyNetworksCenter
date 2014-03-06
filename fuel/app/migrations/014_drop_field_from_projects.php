<?php

namespace Fuel\Migrations;

class Drop_field_from_projects
{
	public function up()
	{
		\DBUtil::drop_table('projects');
	}

	public function down()
	{
		\DBUtil::create_table('projects', array(
			'id' => array('type' => 'int unsigned', 'null' => true, 'auto_increment' => true),
			'title' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'job_type' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'client' => array('type' => 'int', 'null' => true, 'constraint' => 11),
			'status' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'progress' => array('type' => 'int', 'null' => true, 'constraint' => 11),
			'live' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'testing' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'notes' => array('type' => 'text', 'null' => true),
			'developer' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'created_at' => array('type' => 'int', 'null' => true, 'constraint' => 11),
			'updated_at' => array('type' => 'int', 'null' => true, 'constraint' => 11),

		), array('id'));

	}
}