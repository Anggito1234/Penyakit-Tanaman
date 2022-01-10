<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanModels extends Model {
	protected $table = 'tabel_pertanyaan';
	protected $primaryKey = 'KodePertanyaan';
	protected $allowedFields = ['Pertanyaan'];

}
