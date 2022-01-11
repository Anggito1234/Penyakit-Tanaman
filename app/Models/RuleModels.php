<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModels extends Model {
	protected $table = 'tabel_rule';
	protected $primaryKey = 'KodeRule';
	protected $allowedFields = ['KodePertanyaan', 'KodePenyakit'];


	function getGejala($kode)
	{
		return $this->db->table('tabel_rule')
		->join('tabel_gejala', 'tabel_rule.KodeGejala = tabel_gejala.KodeGejala','left')
		->where('KodeRule', $kode)->get()->getResultArray();
	}
}
