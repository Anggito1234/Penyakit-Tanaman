<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
	protected $table = 'tabel_login';
	protected $primaryKey = 'user_id';
	protected $allowedFields = ['username', 'password', 'role'];

	// public function getAdmin($id) {
	// 	return $this->where(['user_id' => $id])->first();
	// }

// 	public function search($cari) {
// /*		$builder = $this->table('akti_dosen');
// $builder->like('dosen_nip', $cari);
// return $builder;*/
// 		return $this->table('users')->like('user_name', $cari)->orLike('user_level', $cari);
// 	}

// 	// public function getAllAdmin(){
// 	// 	return $this->table('admin_level')->findAll();
// 	// }
// 	public function getAdminLevel(){
// 		return $this->db->table('admin_level')
// 		->join('users','users.admin_level_kode=admin_level.admin_level_kode')
// 		->get()->getResultArray();  
//    }

}
