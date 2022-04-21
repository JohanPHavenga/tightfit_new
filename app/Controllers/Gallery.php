<?php

namespace App\Controllers;

class Gallery extends BaseController
{

    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('gallery', $data);
        echo view('templates/footer', $data);
    }

    public function garagedoors($type)
    {
        $allowed_types = [
            "aluzinc",
            "aluminium",
        ];
        // redirect if anything else behind url
        if (!in_array($type, $allowed_types)) {
            return redirect()->to(base_url());
        }

        // read gallery folder
        // $map = directory_map('./garagedoors/' . $type);
        

        $data = [
            "garagedoor_type" => $type,
        ];
        echo view('templates/header', $data);
        echo view('garagedoors', $data);
        echo view('templates/footer', $data);
    }

    public function doorautomation($type)
    {
        //return view('home');
        $data = [
            "automation_type" => $type,
        ];
        echo view('templates/header', $data);
        echo view('doorautomation', $data);
        echo view('templates/footer', $data);
    }

    public function gateautomation($type)
    {
        //return view('home');
        $data = [
            "automation_type" => $type,
        ];
        echo view('templates/header', $data);
        echo view('gateautomation', $data);
        echo view('templates/footer', $data);
    }
}
