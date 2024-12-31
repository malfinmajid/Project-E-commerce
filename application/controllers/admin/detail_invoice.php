<?php

class Invoice extends CI_Controller{

	public function print()
	{
		$data['detail_invoice'] = $this->model_invoice->tampil_data('detail_invoice')->result();
		$this->load->view('templates/header');
		$this->load->view('detail_invoice',$data);
		$this->load->view('templates/footer');
	}


}