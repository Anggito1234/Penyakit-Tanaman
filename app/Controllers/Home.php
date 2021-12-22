<?php

namespace App\Controllers;
use App\Models\PengelolaModels;


class Home extends BaseController
{
    public function index()
    {
        $model = new PengelolaModels();
        $data = [
            'pengelola' => $model->findAll()
        ];
        return view('Beranda/index', $data);
    }

    public function login(){
        return view('Beranda/login');
    }
}
