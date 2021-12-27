<?php

namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
	}

	public function product($type="Kathi Roll", $price="Rs. 50"){
        echo '<h1>Welcome to products page: <br>'.$type.'-Rs.'.$price.'</h1>';
		//return view('product');
	}
}
