<?php

namespace Fuel\Migrations;

class Create_bbs
{
	public function up()
	{
		\DBUtil::create_table('bbs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'post_date' => array('type' => 'date'),
			'message' => array('constraint' => 100, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('bbs');
	}
}