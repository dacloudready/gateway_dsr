<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LeadsModel;

class LeadsController extends BaseController
{
	//
	protected $leads;

	function __construct()
	{
		$this->leads = new LeadsModel();
	}

	public function index()
	{

		//return view('layout/template');
		try {
			$data['page_title'] = 'DSR-All Branches';
			$data['leads'] = $this->leads->findAll();
			
			return view('leads/index', $data);
			
		} catch (\Throwable $th) {
			die($th->getMessage());
		}
	}

	public function view($id)
	{
		try {
			//code...
			$user_found = $this->leads->find($id);

			if($user_found)
			{
				$data['page_title'] = 'DSR Details';
				$data['user'] = $user_found;
				
				return view('leads/view', $data);
			}else{
				return "User not found.";
			}

		} catch (\Throwable $th) {
			//throw $th;
			die($th->getMessage());
		}

		
		
	} 

	public function create()
	{
		return view('leads/create');
	}

	public function store()
	{
		try {
			//code...
			$postData = [
				'name'					=>	$this->request->getPost('name'),
				'address'				=>	$this->request->getPost('address'),
				'contact'				=>	$this->request->getPost('contact'),
				'email'					=>	$this->request->getPost('email'),
				'desired_unit_brand'	=>	$this->request->getPost('unit_brand'),
				'desired_unit_model'	=>	$this->request->getPost('unit_model'),
				'visited_branch'		=>	$this->request->getPost('branch'),
				'source'				=>	$this->request->getPost('source'),
			]; 

			$this->leads->insert($postData);
			
			return redirect('/');

		} catch (\Throwable $e) {
			//throw $th;
			die($e->getMessage());
		}

	}
}
