<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnDateVisitInTableLeads extends Migration
{
	public function up()
	{
		// add column date_visit to table leads
		$this->forge->addColumn('leads', [
			'date_visit' =>	[
				'type' 		=> 'datetime',
				//'before'	=>	'created_at',
				'null' => true,
			]
		]);
	}

	public function down()
	{
		//
	}
}
