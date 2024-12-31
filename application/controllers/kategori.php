<?php 

class Kategori extends CI_Controller{

	public function baju()
	{
		$data['baju'] = $this->model_kategori->data_baju()->result();
		$this->load->view('templates/header');
		$this->load->view('baju', $data);
		$this->load->view('templates/footer');
	}

	public function jacket()
	{
		$data['jacket'] = $this->model_kategori->data_jacket()->result();
		$this->load->view('templates/header');
		$this->load->view('jacket',$data);
		$this->load->view('templates/footer');
	}

	public function sepatu()
	{
		$data['sepatu'] = $this->model_kategori->data_sepatu()->result();
		$this->load->view('templates/header');
		$this->load->view('sepatu',$data);
		$this->load->view('templates/footer');
	}

	public function sandal()
	{
		$data['sandal'] = $this->model_kategori->data_sandal()->result();
		$this->load->view('templates/header');
		$this->load->view('sandal',$data);
		$this->load->view('templates/footer');
	}

	public function aksesories()
	{
		$data['aksesories'] = $this->model_kategori->data_aksesories()->result();
		$this->load->view('templates/header');
		$this->load->view('aksesories',$data);
		$this->load->view('templates/footer');
	}

	public function vinyl()
	{
		$data['vinyl'] = $this->model_kategori->data_vinyl()->result();
		$this->load->view('templates/header');
		$this->load->view('vinyl',$data);
		$this->load->view('templates/footer');
	}
}

 ?>