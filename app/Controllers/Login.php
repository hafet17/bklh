<?php namespace App\Controllers;
use App\Models\UserModel;


class Login extends BaseController
{
	public function index()
	{
		return view('login');
	}

	public function auth()
	{
		$session = \Config\Services::session();
		$session = session();
		$model = new UserModel();
		$username = $this->request->getPost('username');
		$password = $this->request->getPost(sha1('password'));
		$data = $model->Auth($username, $password);
		if ($data) {
			$sessions = array(
				'username' => $username);
			$session->set($sessions);

		return redirect()->to('/jadwal');

		}else{	
			$sessions = array(
				'alert' => 'warning');
			$session->set($sessions);
			return redirect()->to('/login');
		}
	}
	//--------------------------------------------------------------------

	
}

