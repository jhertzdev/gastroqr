<?php

namespace App\Models;

use CodeIgniter\Model;

class RestaurantMetaModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'restaurant_meta';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['name','value',];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';

	// Validation
	protected $validationRules      = [
		'name' => 'required|max_length[100]',
		'value' => 'required|max_length[255]',
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
