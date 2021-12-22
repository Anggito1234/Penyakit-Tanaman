<?php

namespace App\Models;

use CodeIgniter\Model;

class PengelolaModels extends Model {
	protected $table = 'pengelola';
	protected $primaryKey = 'pengelola_id';
	protected $allowedFields = ['nama', 'posisi', 'poto', 'index_id'];

}