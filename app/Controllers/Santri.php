<?php namespace App\Controllers;
use App\Models\SantriModel;

class Santri extends BaseController
{

	public function index()
	{
		$model = new SantriModel();
		$data['santri'] = $model->getSantri();
		return view('santri_view', $data);
	}
	//--------------------------------------------------------------------

	
}

