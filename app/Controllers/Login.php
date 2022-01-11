<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller {
	public function index() {
		return view('Beranda/Login');
	}

	public function auth() {
		$session = session();
		$model = new UserModel();
		$email = $this->request->getVar('username');
		$password = $this->request->getVar('user_password');
		$user = $model->where('username', $email)->first();
		if ($user) {
			$pass = $user['password'];
			if ($password == $pass) {
				$session->set([
					'user_id' => $user['user_id'],
					'username' => $user['username'],
                    'password' => $user['password'],
					'role' => $user['role'],
					// 'user_email' => $user['user_email'],
					// 'user_password' => $user['user_password'],
					// 'user_profile' => $user['user_profile'],
					// 'user_level' => $user['admin_level_kode'],
					'logged_in' => TRUE,
				]);
				if(session()->get('role') == 'user'){
					return redirect()->to('/');
				}
				else{
					return redirect()->to('Dashboard/');
				}

			} else {
				$session->setFlashdata('msg', 'Password anda salah');
				return redirect()->to('/Login');
			}
		} else {
			$session->setFlashdata('msg', 'Username tidak ditemukan');
			return redirect()->to('/Login');
		}
	}

	public function registrasi()
	{
		return view('/Beranda/registrasi');
	}

	public function registrasiUser()
	{
		$session = session();
		$model = new UserModel();
		$data = [
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'role' => $this->request->getVar('role'),
            'alamat' => $this->request->getVar('alamat'),
			'email' => $this->request->getVar('email'),
        ];
        $model->save($data);
		$session->setFlashdata('pesan', 'Registrasi Berhasil, Silahkan Login');
		return redirect()->to('/Login');
	}


	public function logout() {
		$session = session();
		$session->destroy();
		return redirect()->to('/Login');
	}

}