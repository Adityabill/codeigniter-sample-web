<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Admin_test extends BaseController
{
	public function index()
	{
		echo "<h1>This the page of the admin!!!</h1>";
	}

	public function name($name){
		echo "Name of admin: $name";
	}


}
