<?php

namespace App\Controllers;

use App\Models\AlatModel;

class Alat extends BaseController
{

	public function index()
	{
		$model = new AlatModel();
		$data['alat'] = $model->getAlat();
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('alat/view', $data);
		echo view('_partials/footer');
	}
	//--------------------------------------------------------------------

	public function add()
	{
		return view('alat/add');
	}

	public function save()
	{
		$model = new AlatModel();
		$data = array(
			'nama' => $this->request->getPost('nama'),
			'qty' => $this->request->getPost('qty')
		);
		$model->saveAlat($data);
		return redirect()->to('/alat');
	}

	public function edit($id)
	{
		$model = new AlatModel();
		$data['alat'] = $model->getAlat($id)->getRow();
		return view('alat/edit', $data);
	}

	public function update()
	{
		$model = new AlatModel();
		$id = $this->request->getPost('id');
		$data = array(
			'nama' => $this->request->getPost('nama'),
			'qty' => $this->request->getPost('qty')
		);
		$model->updateAlat($data, $id);
		return redirect()->to('/alat');
	}

	public function delete($id)
	{
		$model = new AlatModel();
		$model->deleteAlat($id);
		return redirect()->to('/alat');
	}
}
