<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuCategoryModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'menu_categories';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['menu_id','name',];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'menu_id' => 'required|is_not_unique[menus.id]',
		'name' => 'required|max_length[30]'
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
