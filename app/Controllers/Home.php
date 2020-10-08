<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['nama']='mundir';
		return view('home/dashboard',$data);
	}

	//--------------------------------------------------------------------

}
