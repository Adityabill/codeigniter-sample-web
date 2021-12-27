<?php

namespace App\Controllers;
use App\Controllers\Admin\Admin_test;
use App\Controllers\Admin\Admin_bio as admin_b;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function Admin_test(){
		$admin = new Admin_test();
		echo $admin->index();

		echo $admin->name('Bill').'<br>';

		$admin_bio = new admin_b();
		echo $admin_bio->Admin_bio("05-10-2001");
	}
}
