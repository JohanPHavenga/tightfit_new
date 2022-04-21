<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        //return view('home');
        $data=[];
        echo view('templates/header', $data);
        echo view('contact', $data);
        echo view('templates/footer', $data);
    }

}
