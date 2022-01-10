<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModels extends Model {
	protected $table = 'produk';
	protected $primaryKey = 'produk_id';
	protected $allowedFields = ['nama', 'gambar', 'stok', 'deskripsi', 'harga'];

	public function getProduk($slug){
			return $this->where(['nama' => $slug])->first();
	   }

}