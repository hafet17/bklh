<?php namespace App\Models;
use CodeIgniter\Model;

/**
 * 
 */
class ProsessModel extends Model
{
	
	protected $table = 'tbalat_detail';
	public function detailalat($id){
		$this->join('tbalat', 'tbalat_detail.idalat=tbalat.idalat');
		$this->where('idjadwal', $id);
		return $this->findAll();
	}

	public function savealat($data){
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function deletealat($data){
		$query = $this->db->table($this->table)->delete(array('idalat_detail' => $id));
		return $query;
	}
}