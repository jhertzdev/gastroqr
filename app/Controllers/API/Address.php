<?php

namespace App\Controllers\API;

use App\Models\AddressModel;
use CodeIgniter\RESTful\ResourceController;

class Address extends ResourceController
{
	public function __construct()
	{
		$this->model = $this->setModel(new AddressModel());
		$this->validation = \Config\Services::validation();
	}

	public function index()
	{
		if ($this->request->getMethod() != 'get') return $this->fail('Método no permitido.', 405);
		$addresses = $this->model->findAll();
		return $this->respond($addresses);
	}

	public function create()
	{
		if ($this->request->getMethod() != 'post') return $this->fail('Método no permitido.', 405);
		try {
			
			$address = $this->request->getJSON('true');
			
			$this->validation->setRules($this->model->validationRules);

			if ($this->validation->run($address) && $id = $this->model->insert($address)) {
				$address['id'] = $id;
				return $this->respondCreated($address);
			} else {
				return $this->failValidationErrors($this->validation->getErrors());
			}

		} catch (\Throwable $th) {
			return $this->failServerError('Ha ocurrido un error en el servidor.');
		}
	}

	public function edit($id = null)
	{
		if ($this->request->getMethod() != 'get') return $this->fail('Método no permitido.', 405);
		try {

			if ($id == null) return $this->failValidationErrors('El ID no es válido.');
			$address = $this->model->find($id);

			if (empty($address)) return $this->failNotFound('La dirección seleccionada no existe.');
			return $this->respond($address);

		} catch (\Throwable $th) {
			return $this->failServerError('Ha ocurrido un error en el servidor.');
		}
	}

	public function update($id = null)
	{
		if ($this->request->getMethod() != 'post') return $this->fail('Método no permitido.', 405);
		try {

			if ($id == null) return $this->failValidationErrors('El ID no es válido.');
			$currentAddress = $this->model->find($id);

			if (empty($currentAddress)) return $this->failNotFound('La dirección seleccionada no existe.');

			$requestAddress = $this->request->getJSON(true);

			$this->validation->setRules($this->model->validationRules);
				
			if ($this->validation->run($requestAddress) && $this->model->update($id, $requestAddress)) {
				$requestAddress['id'] = $id;
				return $this->respondUpdated($requestAddress);
			} else {
				return $this->failValidationErrors($this->validation->getErrors());
			}

		} catch (\Throwable $th) {
			return $this->failServerError('Ha ocurrido un error en el servidor.');
		}
	}

	public function delete($id = null)
	{
		if ($this->request->getMethod() != 'delete') return $this->fail('Método no permitido.', 405);
		try {

			if ($id == null) return $this->failValidationErrors('El ID no es válido.');
			$currentAddress = $this->model->find($id);

			if (empty($currentAddress)) return $this->failNotFound('La dirección seleccionada no existe.');
				
			if ($this->model->delete($id)) {
				return $this->respondDeleted($currentAddress);
			} else {
				return $this->failServerError('No se pudo eliminar la dirección.');
			}

		} catch (\Throwable $th) {
			return $this->failServerError('Ha ocurrido un error en el servidor.');
		}
	}

}
