<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LeadsMigration extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type'				=>	'int',
				'constraint'		=>	10,	
				'auto_increment'	=> true,
				'null'				=> false
			],

			'first_name' => [
				'type'				=>	'varchar',
				'constraint'		=>	30,	
				'null'				=> false
			],

			'address' => [
				'type'				=>	'varchar',
				'constraint'		=>	50,	
				'null'				=> false
			],

			'contact' => [
				'type'				=>	'varchar',
				'constraint'		=>	15,	
				'null'				=> false
			],

			'email' => [
				'type'				=>	'varchar',
				'constraint'		=>	30,	
				'null'				=> false
			],

			'desired_unit_brand' => [
				'type'				=>	'varchar',
				'constraint'		=>	15,	
				'null'				=> false
			],

			'desired_unit_model' => [
				'type'				=>	'varchar',
				'constraint'		=>	15,	
				'null'				=> false
			],

			'visited_branch' => [
				'type'				=>	'varchar',
				'constraint'		=>	15,	
				'null'				=> false
			],

			'source' => [
				'type'				=>	'varchar',
				'constraint'		=>	15,	
				'null'				=> false
			],

			'created_at DATETIME default CURRENT_TIMESTAMP',
			'updated_at DATETIME default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'

		]);

		$this->forge->addPrimarykey('id');
		
		$this->forge->createTable('leads');
	}

	public function down()
	{
		//
	}
}
