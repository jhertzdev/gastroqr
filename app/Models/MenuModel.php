<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'menus';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['address_id','name','active','code',];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'address_id' => 'required|is_not_unique[addresses.id]',
		'name' => 'required|max_length[30]',
		'code' => 'required',
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
