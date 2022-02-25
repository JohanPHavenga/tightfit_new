<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('home');
        $data=[];
        echo view('templates/header', $data);
        echo view('templates/slider', $data);
        echo view('home', $data);
        echo view('templates/footer', $data);
    }
}
