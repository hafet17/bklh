<?php namespace App\Controllers;
use App\Models\JadwalModel;

class Dashboard extends BaseController
{

	public function index()
	{
		$model = new JadwalModel();
		$data['jadwal'] = $model->getparamsnow();
		echo view('_partials/header');
		echo view('_partials/sidebar');
		echo view('dashboard/view', $data);
		echo view('_partials/footer');
	}
	
}

