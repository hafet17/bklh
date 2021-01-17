<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

	public function index()
	{
		$model = new UserModel();
		$data['user'] = $model->getUser();
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('user/view', $data);
		echo view('_partials/footer');
		// var_dump($data['user']);
	}
	//--------------------------------------------------------------------

	public function add()
	{
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('user/add');
		echo view('_partials/footer');
	}

	public function save()
	{
		$model = new userModel();
		$data = array(
			'username' => $this->request->getPost('username'),
			'password' => sha1($this->request->getPost('asrama'))
		);
		$model->saveUser($data);
		return redirect()->to('/user');
	}

	public function edit($id)
	{
		$model = new JadwalModel();
		$data['jadwal'] = $model->getJadwal($id)->getRow();
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('jadwal/edit', $data);
		echo view('_partials/footer');
	}

	public function update()
	{
		$model = new JadwalModel();
		$id = $this->request->getPost('id');
		$data = array(
			'waktu' => $this->request->getPost('time'),
			'asrama' => $this->request->getPost('asrama'),
			'jenis' => $this->request->getPost('jenis')
		);
		$model->updateJadwal($data, $id);
		return redirect()->to('/jadwal');
	}

	public function delete($id)
	{
		$model = new JadwalModel();
		$model->deleteJadwal($id);
		return redirect()->to('/jadwal');
	}
}
