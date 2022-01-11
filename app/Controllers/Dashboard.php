<?php

namespace App\Controllers;

use Config\App;

use App\Models\GejalaModels;
use App\Models\PengelolaModels;
use App\Models\ProdukModels;
use App\Models\PertanyaanModels;
use App\Models\PenyakitModels;
use App\Models\RuleModels;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('Admin/BerandaIndex');
    }


    // Data Gejala

    public function dataGejala()
    {
        $gejala = new GejalaModels();
        $model = $gejala->findAll();
        $data = [
            'gejala' => $model
        ];
        return view('Admin/pages/DataGejala', $data);
    }

    public function tambahGejala()
    {
        $model = new GejalaModels();
        $session = session();
        $data = [
            'KodeGejala' => $this->request->getVar('KodeGejala'),
            'NamaGejala' => $this->request->getVar('NamaGejala'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Gejala Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataGejala');
    }

    public function editGejala()
    {
        $model = new GejalaModels();
        $session = session();
        $data = [
            'KodeGejala' => $this->request->getVar('KodeGejala'),
            'NamaGejala' => $this->request->getVar('NamaGejala'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Gejala Berhasil Diubah');
        return redirect()->to('/dashboard/dataGejala');
    }
    
    public function hapusGejala($id)
    {
        $model = new GejalaModels();
        $session = session();
        $model->delete($id);
        $session->setFlashdata('pesan', 'Gejala Berhasil Dihapus');
        return redirect()->to('/dashboard/dataPertanyaan');
    }

    // Akhir gejala



    // Data Penyakit
    public function dataPenyakit()
    {
        $model = new PenyakitModels();
        $data = [
            'penyakit' => $model->findAll()
        ];
        return view('Admin/pages/DataPenyakit', $data);
    }

    public function tambahPenyakit()
    {
        $model = new PenyakitModels();
        $session = session();
        $data = [
            'KodePenyakit' => $this->request->getVar('KodePenyakit'),
            'NamaPenyakit' => $this->request->getVar('NamaPenyakit'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Penyakit Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataPenyakit');
    }

    public function editPenyakit()
    {
        $model = new PenyakitModels();
        $session = session();
        $data = [
            'KodePenyakit' => $this->request->getVar('KodePenyakit'),
            'NamaPenyakit' => $this->request->getVar('NamaPenyakit'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Penyakit Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataPenyakit');
    }

    public function hapusPenyakit($id)
    {
        $model = new PenyakitModels();
        $session = session();
        $model->delete($id);
        $session->setFlashdata('pesan', 'Penyakit Berhasil Dihapus');
        return redirect()->to('/dashboard/dataPenyakit');
    }

    // Akhir Data Penyakit


    // Data Rules
    public function dataRule()
    {
        $model = new RuleModels();
        $model_penyakit = new PenyakitModels();
        $model_pertanyaan = new PertanyaanModels();
        $data = [
            'rule' => $model->findAll(),
            'pertanyaan' => $model_pertanyaan->findAll(),
            'penyakit' => $model_penyakit->findAll()
        ];
        return view('Admin/pages/DataRule', $data);
    }

    public function tambahRule()
    {
        $model = new RuleModels();
        $session = session();
        $data = [
            'KodePenyakit' => $this->request->getVar('KodePenyakit'),
            'KodePertanyaan' => $this->request->getVar('KodePertanyaan'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Rule Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataRule');
    }

    public function editRule()
    {
        $model = new RuleModels();
        $session = session();
        $data = [
            'KodeRule' => $this->request->getVar('KodeRule'),
            'KodePenyakit' => $this->request->getVar('KodePenyakit'),
            'kodePertanyaan' => $this->request->getVar('KodePertanyaan'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Rule Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataRule');
    }

    public function hapusRule($id)
    {
        $model = new RuleModels();
        $session = session();
        $model->delete($id);
        $session->setFlashdata('pesan', 'Rule Berhasil Dihapus');
        return redirect()->to('/dashboard/dataRule');
    }

    // Akhir Data Rule


    // Data Produk

    public function tambahProduk()
    {
        $model = new ProdukModels();
        $session = session();
        $fileGambar = $this->request->getFile('gambar');
        $fileGambar->move('Home/images/');
        $namaGambar = $fileGambar->getName();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'stok' => $this->request->getVar('stok'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Produk Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataProduk');
    }

    public function editProduk()
    {
        $model = new ProdukModels();
        $session = session();
        $fileGambar = $this->request->getFile('gambar');
        $fileGambar->move('Home/images/');
        $namaGambar = $fileGambar->getName();
        $data = [
            'produk_id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'stok' => $this->request->getVar('stok'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Produk Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataProduk');
    }

    public function hapusProduk($id)
    {
        $model = new ProdukModels();
        $session = session();
		$model_gambar = $model->find($id);
		unlink('Home/images/' . $model_gambar['gambar']);
        $model->delete($id);
        $session->setFlashdata('pesan', 'Produk Berhasil Dihapus');
        return redirect()->to('/dashboard/dataProduk');
    }

    public function dataProduk()
    {
        $model = new ProdukModels();
        $data = [
            'produk' => $model->findAll()
        ];
        return view('Admin/pages/DataProduk', $data);
    }


    // Akhir Data Produk

    // Data Pertanyaan

    public function dataPertanyaan()
    {
        $model = new PertanyaanModels();
        $data = [
            'pertanyaan' => $model->findAll()

        ];
        return view('Admin/pages/DataPertanyaan', $data);
    }


    public function tambahPertanyaan()
    {
        $model = new PertanyaanModels();
        $session = session();
        $data = [
            'KodePertanyaan' => $this->request->getVar('KodePertanyaan'),
            'Pertanyaan' => $this->request->getVar('pertanyaan'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Pertanyaan Berhasil Ditambahkan');
        return redirect()->to('/dashboard/dataPertanyaan');
    }

    public function editPertanyaan()
    {
        $model = new PertanyaanModels();
        $session = session();
        $data = [
            'KodePertanyaan' => $this->request->getVar('KodePertanyaan'),
            'Pertanyaan' => $this->request->getVar('Pertanyaan'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Pertanyaan Berhasil Diubah');
        return redirect()->to('/dashboard/dataPertanyaan');
    }

    public function hapusPertanyaan($id)
    {
        $model = new PertanyaanModels();
        $session = session();
        $model->delete($id);
        $session->setFlashdata('pesan', 'Pertanyaan Berhasil Dihapus');
        return redirect()->to('/dashboard/dataPertanyaan');
    }
    // Akhir Data Pertanyaan





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
