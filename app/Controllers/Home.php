<?php

namespace App\Controllers;

use App\Models\PengelolaModels;
use App\Models\GejalaModels;
use App\Models\PertanyaanModels;

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

    public function konsultasi()
    {
        $model = new PertanyaanModels();
        $data = [
            'gejala' => $model->findAll(),
        ];
        return view('Beranda/konsultasi', $data);
    }

    public function diagnosa(){
	   $gejala = $this->request->getVar('kode_gejala');
	   $jumlah_dipilih = count($gejala);
       $db = \Config\Database::connect();
       for($x=0;$x<$jumlah_dipilih;$x++){

       $query =	$db->query("select DISTINCT p.KodePenyakit, p.NamaPenyakit, p.Solusi from tabel_rule b, tabel_penyakit p where b.KodePertanyaan='$gejala[$x]' and p.KodePenyakit=b.KodePenyakit group by KodePenyakit limit 1");
			
		$data['penyakit'] = $query->getResultArray();                 
		}
        return view('Beranda/hasil', $data);
	}

}
