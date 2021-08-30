<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnLastNameInLeadsTable extends Migration
{
	public function up()
	{
		// add column date_visit to table leads
		$this->forge->addColumn('leads', [
			'middle_name' =>	[
				'type' 		=> 'varchar',
				'constraint'	=>	20,
				'before'	=>	'address',
				'null' => true,
			],

			'last_name' =>	[
				'type' 		=> 'varchar',
				'constraint'	=>	20,
				'before'	=>	'address',
				'null' => true,
			]


		]);
	}

	public function down()
	{
		//
	}
}
