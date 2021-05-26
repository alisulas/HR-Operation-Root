<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ModelFakultas;


class Home extends BaseController



{
	public function index()
	{
		$data['title'] = 'Home_c, index';
		$data['isi'] = 'welcome_message';
		echo view('welcome_message', $data);
	}
}
