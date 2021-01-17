<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * 
 */
class SantriModel extends Model
{

	protected $table = 'tbsantri';

	public function getSantri($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		} else {
			return $this->getWhere(['id' => $id]);
		}
	}
}
