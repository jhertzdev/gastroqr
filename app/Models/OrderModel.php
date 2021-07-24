<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'orders';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['table_id','status','note',];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'table_id' => 'is_not_unique[tables.id]',
		'status' => 'required|max_length[30]',
	];
	
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
