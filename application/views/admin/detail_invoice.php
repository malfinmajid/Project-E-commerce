<div class="container-fluid mt-3 mb-3">


<legend class="mt-3">
<div class="alert alert-danger">
<h4 class="text-center">Detail Invoice</h4>
</div>
</legend>

<div class="container">
	<div class="row" style="margin-right: -7.75rem;">
		<div class="col-md-6">
<table class="mb-3">
		<tr>
			<td><strong>Id Invoice</strong></td>
			<td>&nbsp;: <?php echo $invoice->id_invoice ?></td>
		</tr>

		<tr>
			<td><strong>Nama Pemesan</strong></td>
			<td>&nbsp;: <?php echo $invoice->nama ?></td>
		</tr>

		<tr>
			<td><strong>No Telepon</strong></td>
			<td>&nbsp;: <?php echo $invoice->telepon ?></td>
		</tr>

		<tr>
			<td><strong>Email</strong></td>
			<td>&nbsp;: <?php echo $invoice->email ?></td>
		</tr>
</table>
		</div>

		<div class="col-md-5">
<table>
		<tr>
			<td><strong>Jasa Pengiriman</strong></td>
			<td>&nbsp;: <?php echo $invoice->jasa_pengiriman ?></td>
		</tr>

		<tr>
			<td><strong>Tanggal Pesan</strong></td>
			<td>&nbsp;: <?php echo $invoice->tgl_pesan ?></td>
		</tr>

		<tr>
			<td><strong>Batas Pembayaran</strong></td>
			<td>&nbsp;: <?php echo $invoice->batas_bayar ?></td>
		</tr>

		<tr>
			<td><strong>Metode Pembayaran</strong></td>
			<td>&nbsp;: <?php echo $invoice->metode_pembayaran ?></td>
		</tr>
</table>
		</div>
	</div>
</div>




<table class="table table-bordered table-hover table-striped">
<tr>
			<th class="text text-center table-danger">Id Produk</th>
			<th class="text text-center table-danger">Nama Barang</th>
			<th class="text text-center table-danger">Keterangan</th>
			<th class="text text-center table-danger">Jumlah Pesanan</th>
			<th class="text text-center table-danger">Harga Satuan</th>
			<th class="text text-center table-danger">SUB-Total</th>
	</tr>

	<?php
		$total = 0;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		?>

		<tr>
			<td align="center"><?php echo $psn->id_brg ?></td>
			<td><?php echo $psn->nama_brg ?></td>
			<td><?php echo $psn->keterangan ?></td>
			<td align="center"><?php echo $psn->jumlah ?></td>
			<td >Rp. <?php echo number_format($psn->harga,0,',',',') ?></td>
			<td>Rp. <?php echo number_format($subtotal,0,',',',') ?></td>
		</tr>

		<?php endforeach; ?>

	<tr>
		<td colspan="4" align="center">Grand Total</td>
		<td colspan="2" align="center">Rp. <?php echo number_format($total,0,',',',') ?></td>
	</tr>

</table>

<a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary mb-5">Kembali</div></a>
	
</div>


