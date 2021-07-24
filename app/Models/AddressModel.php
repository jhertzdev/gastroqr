<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'addresses';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['name','description','address','coordinates','city','state','country','phone_1','phone_2','url','image',];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'name' => ['label' => 'Nombre', 'rules' => 'required|max_length[30]'],
		'description' => ['label' => 'Descripción', 'rules' => 'max_length[255]'],
		'address' => ['label' => 'Dirección', 'rules' => 'required|max_length[255]'],
		'coordinates' => ['label' => 'Coordenadas', 'rules' => 'permit_empty|valid_coordinates'],
		'city' => ['label' => 'Ciudad', 'rules' => 'max_length[100]'],
		'state' => ['label' => 'Estado', 'rules' => 'max_length[100]'],
		'country' => ['label' => 'País', 'rules' => 'max_length[100]'],
		'phone_1' => ['label' => 'Teléfono principal', 'rules' => 'max_length[15]'],
		'phone_2' => ['label' => 'Teléfono secundario', 'rules' => 'max_length[15]'],
		'url' => ['label' => 'URL', 'rules' => 'max_length[255]'],
		'image' => ['label' => 'Imagen', 'rules' => 'max_length[255]'],
	];

	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
