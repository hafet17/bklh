<?php namespace App\Models;
use CodeIgniter\Model;

/**
 * 
 */
class JadwalModel extends Model
{
	
	protected $table = 'tbjadwal';

	public function getJadwal($id = false)
	{
		try {
			if ($id === false) {
				return $this->orderBy('tanggal', 'asc')->findAll();
			}else{
				return $this->getWhere(['idjadwal' => $id]);
			}
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}
	
	public function getparams($param1, $param2){
		return $this->orderBy('tanggal', 'asc')->whereIn($param1, $param2)->findAll();
	}

	public function getparamsnow(){
		$date = date('Y-m-d');
		try {
			return $this->whereIn('tanggal', [$date])->findAll();	
		} catch (\Exception $e) {
			die($e->getMessage());
		}
		
	}

	public function saveJadwal($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function updateJadwal($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('idjadwal' => $id));
		return $query;
	}

	public function deleteJadwal($id)
	{
		$query = $this->db->table($this->table)->delete(array('idjadwal' => $id));
		return $query;
	}
	
	
}