<?php
class m_product extends CI_Model{
	public function getCarDetail($id_car){
		$query = $this->db->query("SELECT *, mc.description AS car_desc FROM m_car mc, m_class mct WHERE mc.id_class = mct.id_class AND mc.id_car = '$id_car'");
		return $query->row_array();
	}

	public function getPackage(){
		$query = $this->db->query("SELECT * FROM m_package");
		return $query->result_array();
	}

	public function insertPackage($data){
		$query = $this->db->insert('m_package', $data);
	}

	public function updatePackage($id, $data){
		$result = $this->db->where('id_package', $id);
		$result = $this->db->update('m_package', $data);
	}

	public function deletePackage($id){
		$result = $this->db->where('id_package',$id);
		$result = $this->db->delete('m_package');
	}

	public function getPackages($idpackage,$idcar){
		$query = $this->db->query("SELECT * FROM m_car_package mcp, m_package mc WHERE mcp.id_package = mc.id_package AND mcp.id_car = $idcar AND mc.id_package = $idpackage");
		return $query->result_array();
	}

	public function getCarPackage($id){
		$query = $this->db->query("SELECT * FROM m_car_package mcp, m_package mc WHERE mcp.id_package = mc.id_package AND id_car = $id");
		return $query->result_array();
	}

	public function insertCarPackage($data){
		$query = $this->db->insert('m_car_package', $data);
	}

	public function updateCarPackage($id, $data){
		$result = $this->db->where('id_car_package', $id);
		$result = $this->db->update('m_car_package', $data);
	}

	public function deleteCarPackage($id){
		$result = $this->db->where('id_car_package',$id);
		$result = $this->db->delete('m_car_package');
	}

	public function getCarClass(){
		$query = $this->db->query("SELECT * FROM m_class");
		return $query->result_array();
	}

	public function insertCarClass($data){
		$query = $this->db->insert('m_class', $data);
	}

	public function deleteCarClass($id){
		$result = $this->db->where('id_class',$id);
		$result = $this->db->delete('m_class');
	}

	public function insertCarImage($data){
		$query = $this->db->insert('m_car_picture',$data);
	}

	//ambil semua gambar dengan idmobil pada gambar sama dengan idmobil yang dipilih untuk
	//menampilkan detail
	
	public function getAllImage($id){
		$query = $this->db->query("SELECT * FROM m_car_picture WHERE id_car= '$id'");
		return $query->result_array();
	}
	public function getcarImage($id){
		$query = $this->db->query("SELECT * FROM m_car_picture WHERE id_car_picture= '$id'");
		return $query->result_array();
	}
	public function deleteCarImage($idCarImage){
		$result = $this->db->where('id_car_picture',$idCarImage);
		$result = $this->db->delete('m_car_picture');
	}
}
?>