<?php

namespace App\Controllers;

use Config\App;

use App\Models\GejalaModels;
use App\Models\PengelolaModels;
class Dashboard extends BaseController
{
    public function index()
    {
        return view('Admin/BerandaIndex');
    }


    public function dataGejala(){
        $gejala = new GejalaModels();
        $model = $gejala->findAll();
        $data = [
            'gejala' => $model
        ];
        return view('Admin/pages/DataGejala', $data);
    }

    public function dataPenyakit()
    {

    }

    public function dataPertanyaan()
    {

    }

    public function dataRules()
    {

    }

    public function dataProduk()
    {

    }

    public function dataPenjualan()
    {

    }

    public function dataPengelola()
    {
        $pengelola = new PengelolaModels();
        $model = $pengelola->findAll();
        $data = [
            'pengelola' => $model
        ];
        return view('Admin/pages/DataPengelola', $data);
    }
}
