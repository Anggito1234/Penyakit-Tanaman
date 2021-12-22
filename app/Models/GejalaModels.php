<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModels extends Model {
	protected $table = 'tabel_gejala';
	protected $primaryKey = 'KodeGejala';
	protected $allowedFields = ['NamaGejala'];

}
