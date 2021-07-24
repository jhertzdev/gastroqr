<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuItemModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'menu_items';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['category_id','name','price','summary','description','image'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'category_id' => 'required|is_not_unique[categories.id]',
		'name' => 'required|max_length[100]',
		'price' => 'required|decimal|greater_than_equal_to[0]|less_than[100000000000000000000]',
		'summary' => 'max_length[150]',
		'image' => 'max_length[255]',
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
