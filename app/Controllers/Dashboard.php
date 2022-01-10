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


    public function dataGejala()
    {
        $gejala = new GejalaModels();
        $model = $gejala->findAll();
        $data = [
            'gejala' => $model
        ];
        return view('Admin/pages/DataGejala', $data);
    }

    public function dataPenyakit()
    {
        $data = [
            'title' => 'DataPenyakit'
        ];

        return view('dataPenyakit/BerandaIndex', $data);
    }

    public function dataPertanyaan()
    {
    }

    public function dataRules()
    {
    }

    public function dataProduk()
    {
        $model = new ProdukModel();
        $session = session();
        $fileGambar = $this->request->getFile('poto');
        $fileGambar->move('gambar/album');
        $namaGambar = $fileGambar->getName();
        $data = [
            'album_judul' => $this->request->getVar('judul'),
            'album_deskripsi' => $this->request->getVar('deskripsi'),
            'album_gambar' => $namaGambar,
            'album_kategori' => $this->request->getVar('kategori'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Album telah ditambahkan');
        return redirect()->to('/dashboard');
        return view('Admin/pages/DataProduk', $data);
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
