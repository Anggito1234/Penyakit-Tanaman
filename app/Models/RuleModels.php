<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModels extends Model {
	protected $table = 'tabel_rule';
	protected $primaryKey = 'KodeRule';
	protected $allowedFields = ['KodePertanyaan', 'KodePenyakit'];

}
