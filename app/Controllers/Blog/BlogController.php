<?php

namespace App\Controllers\Blog;
use App\Controllers\BaseController;

class BlogController extends BaseController{

    public function index(){
        return "<h1>Welcome to the blogs page</h1>";
    }


    public function addBlogs(){
        return view('Add_Blogs');
    }

    public function showBlogs(){
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
}
}



?>