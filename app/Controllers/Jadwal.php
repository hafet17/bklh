<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\AlatModel;
use App\Models\ProsessModel;

class Jadwal extends BaseController
{

	public function index()
	{
		$model = new JadwalModel();
		$data['success'] = $model->getparams('status', ['success']);
		$data['jadwal'] = $model->getparams('status', ['pending', 'prosess']);
		$data['now'] = $model->getparams('tanggal', [date('Y-m-d')]);
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('jadwal/view', $data);
		echo view('_partials/footer');
	}

	public function prosess($id)
	{
		$jadwal = new JadwalModel();
		$alat = new AlatModel();
		$prosess = new ProsessModel();
		$data['jadwal'] = $jadwal->getJadwal($id)->getRow();
		$data['alat'] = $alat->getGroupBy();
		$data['detailalat'] = $prosess->detailalat($id);
		$data['id'] = $id;
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('jadwal/prosess', $data);
		echo view('_partials/footer');
	}

	public function save_prosess_alat()
	{
		$prosess = new ProsessModel();
		$data = array(
			'idalat' => $this->request->getPost('alat'),
			'qtypakai' => $this->request->getPost('qty'),
			'idjadwal' => $this->request->getPost('idjadwal')
		);
		$url = "/jadwal/prosess/" . $this->request->getPost('idjadwal');
		$prosess->savealat($data);
		return redirect()->to($url);
	}

	public function delete_prosess_alat($id)
	{
		$prosess = new ProsessModel();
		$prosess->deletealat($id);
	}

	public function finish_prosess($id)
	{
		$jadwal = new JadwalModel();
		$data = $jadwal->getJadwal($id)->getRow();
		$asrama = $data->asrama;
		echo $asrama;
	}

	public function add()
	{
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('jadwal/add');
		echo view('_partials/footer');
	}

	public function save()
	{
		$model = new JadwalModel();
		$data = array(
			'tanggal' => $this->request->getPost('tanggal'),
			'jam' => $this->request->getPost('jam'),
			'asrama' => $this->request->getPost('asrama'),
			'jenis' => $this->request->getPost('jenis')
		);
		$model->saveJadwal($data);
		return redirect()->to('/jadwal');
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
			'tanggal' => $this->request->getPost('tanggal'),
			'jam' => $this->request->getPost('jam'),
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
