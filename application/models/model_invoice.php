<?php 

class Model_invoice extends CI_Model{
public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama 	= $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$email 	= $this->input->post('email');
		$jasa_pengiriman = $this->input->post('jasa_pengiriman');
		$metode_pembayaran = $this->input->post('metode_pembayaran');

		$invoice = array (
			'nama'		=> $nama,
			'telepon'	=> $telepon,
			'email'		=> $email,
			'alamat'	=> $alamat,
			'jasa_pengiriman' => $jasa_pengiriman,
			'metode_pembayaran' => $metode_pembayaran,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
		);
		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'		=> $id_invoice,
				'id_brg'			=> $item['id'],
				'nama_brg'			=> $item['name'],
				'keterangan'		=> $item['keterangan'],
				'jumlah'			=> $item['qty'],
				'harga'				=> $item['price'],
			);
			$this->db->insert('tb_pesanan', $data);
		}

		return TRUE;
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if($result->num_rows() >= 0){
			return $result->result();
		}else {
			return false;
		}

	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tb_invoice');
		if($result->num_rows() >= 0){
			return $result->row();

		}else {
			return false;
		
		}

	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if($result->num_rows() >= 0){
			return $result->result();

		}else {
			return false;

		}

	}

 	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}


 ?>