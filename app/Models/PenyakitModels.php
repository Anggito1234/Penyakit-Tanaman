<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModels extends Model {
	protected $table = 'tabel_penyakit';
	protected $primaryKey = 'KodePenyakit';
	protected $allowedFields = ['NamaPenyakit', 'Solusi', 'Gejala'];

}
