<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModels extends Model {
	protected $table = 'cart';
	protected $primaryKey = 'cart_id';
	protected $allowedFields = ['user_id', 'produk_id', 'pembayaran_id', 'jumlah', 'total_pembelian'];
	protected $created_at = 'created_at';

	public function getShop(){
	return $this->db->table('cart')->join('produk','produk.produk_id=cart.produk_id')->get()->getResultArray();  
   }

}
