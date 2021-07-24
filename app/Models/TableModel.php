<?php

namespace App\Models;

use CodeIgniter\Model;

class TableModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'tables';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['address_id','number','description',];	

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'address_id' => 'required|is_not_unique[addresses.id]',
		'number' => 'required|is_natural_no_zero',
		'description' => 'max_length[100]' // For internal use
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
