<?php namespace App\Models;
use CodeIgniter\Model;

/**
 * 
 */
class AlatModel extends Model
{
	
	protected $table = 'tbalat';

	public function getAlat($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}else{
			return $this->getWhere(['idalat' => $id]);
		}
	}

	public function saveAlat($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function updateAlat($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('idalat' => $id));
		return $query;
	}

	public function deleteAlat($id)
	{
		$query = $this->db->table($this->table)->delete(array('idalat' => $id));
		return $query;
	}
	
	public function getGroupBy(){
		return $this->groupBy('nama')->findAll();
	}

}