<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * 
 */
class UserModel extends Model
{

	protected $table = 'tbuser';

	public function getUser($id = false)
	{
		if ($id === false) {
			$this->db->table($this->table);
			return $this->db->query("SELECT tbsantri.nama,tbsantri.asrama,tbuser.jenis,tbuser.iduser FROM tbuser JOIN tbsantri WHERE tbuser.idsantri=tbsantri.idsantri");
		} else {
			return $this->getWhere(['iduser' => $id]);
		}
	}

	public function Auth($username, $password)
	{
		$this->where('username', $username);
		$this->where('password', sha1($password));
		return $this->get();
	}
}
