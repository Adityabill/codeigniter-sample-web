<?php

namespace App\Controllers\Portfolio;

use App\Models\PortfolioModel;

use App\Controllers\BaseController;

class PortfolioController extends BaseController{

    public function index(){//Home page
        $data = [
            'title' => 'Portfolio-Home',
        ];

        echo view('Portfolio/templates/header_portfolio', $data);
        echo view('Portfolio/Index');
        echo view('Portfolio/templates/footer_portfolio');

    }

    public function AboutMe(){//About Me page
        $data = [
            'title' => 'Portfolio-About Me',
        ];
        echo view('Portfolio/templates/header_portfolio', $data);
        echo view('Portfolio/About_Me');
        echo view('Portfolio/templates/footer_portfolio');
    }

    public function ContactMe(){//Contact Me page
        $data = [
            'title' => 'Portfolio-Contact Me',
        ];
        echo view('Portfolio/templates/header_portfolio', $data);
        echo view('Portfolio/Contact_Me');
        echo view('Portfolio/templates/footer_portfolio');
    }

    public function newIndex(){
        $data = [
            'title' => 'Portfolio-New Home',
        ];
        return view('Portfolio/new_index', $data);
    }

    public function register(){
        $data = [
            'title' => 'Portfolio-Registration',
        ];

        if($this->request->getMethod() == 'post'){
            $model = new PortfolioModel();
            $model->save($_POST);

        } 
        return view('Portfolio/Registration_Form', $data);
    }

    public function registration_display(){
        
        $model = new PortfolioModel();
        $post = $model->find(4);
         if($post){
        $data = [
            'title' => 'Portfolio-Registration Display',
            'name' => $post['name'],
            'email' => $post['email'],
            'role' => $post['role']

        ];
    }

    else{
        $data = [
            'title' => 'Portfolio-Registration Display',
            'name' => 'No user registered',
            'email' => 'No user registered',
            'role' => 'No user registered'

        ];
    } 

        /* if($this->request->getMethod() == 'post'){
            $model = new PortfolioModel();
            $model->save($_POST);

        } */ 
        return view('Portfolio/Registration_display', $data);
    }
}



?>