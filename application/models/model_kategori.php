<?php 

class Model_kategori extends CI_Model{

	public function data_baju()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'baju'));
	}

	public function data_jacket()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'jacket'));
	}

	public function data_sepatu()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'sepatu'));
	}

	public function data_sandal()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'sandal'));
	}

	public function data_aksesories()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'aksesories'));
	}

	public function data_vinyl()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'vinyl'));
	}
}

 ?> 