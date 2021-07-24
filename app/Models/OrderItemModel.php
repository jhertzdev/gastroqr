<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderItemModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'order_items';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['order_id','item_id','quantity','price','name',];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'order_id' => 'required|is_not_unique[orders.id]',
		'item_id' => 'required|is_not_unique[order_items.id]',
		'quantity' => 'required|is_natural_no_zero',
		'price' => 'required|greater_than_equal_to[0]|less_than[100000000000000000000]',
		'name' => 'required|max_length[100]',
	];

	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
