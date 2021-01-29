<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Halaman Utama';
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
