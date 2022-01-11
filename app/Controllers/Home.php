<?php

namespace App\Controllers;

use App\Models\PengelolaModels;
use App\Models\GejalaModels;
use App\Models\HasilModels;
use App\Models\PenyakitModels;
use App\Models\PertanyaanModels;
use App\Models\RuleModels;
use Dompdf\Dompdf;

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

       $query =	$db->query("select DISTINCT p.KodePenyakit, p.NamaPenyakit, p.Solusi, p.Gejala from tabel_rule b, tabel_penyakit p where b.KodePertanyaan='$gejala[$x]' and p.KodePenyakit=b.KodePenyakit group by KodePenyakit limit 1");
			
		$data['penyakit'] = $query->getResultArray();                 
		}
        
        return view('Beranda/hasil', $data);
	}
    
    public function simpanDiagnosa()
    {
        $model = new HasilModels();
        $session = session();
        $data = [
            'user_id' => $this->request->getVar('user_id'),
            'penyakit' => $this->request->getVar('penyakit'),
            'solusi' => $this->request->getVar('solusi'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Penyakit Berhasil Ditambahkan');
        return redirect()->to('/Beranda/hasil');
    }


    public function printHasil($id)
    {
        $filename = date('y-m-d-H-i-s'). 'hasil-diagnosa-penyakit';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $model = new PenyakitModels();
        $data = $model->where('KodePenyakit', $id)->findAll(); //data dari tabel iklan
 
        $dompdf->loadHtml(view('/Beranda/hasil_diagnosa', ["penyakit" => $data]));
        $dompdf->setPaper('A4', 'portrait'); //ukuran kertas dan orientasi
        $dompdf->render();
        $dompdf->stream($filename);
 
        return redirect()->to(base_url('/Beranda/hasil'));
        // output the generated pdf
    }
}
