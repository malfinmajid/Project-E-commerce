<div class="container-fluid mt-3 mb-3 me-auto">
	<h4>Invoice Pemesanan Barang</h4>

	<table class="table table-bordered table-hover table-striped table-sm">
		 <tr>
		 	<th class="text text-center table-danger">No</th>
		 	<th class="text text-center table-danger">Nama Pemesan</th>
		 	<th class="text text-center table-danger">No. Telepon</th>
		 	<th class="text text-center table-danger">Alamat</th>
		 	<th class="text text-center table-danger" colspan="2">Aksi</th>
		 </tr>

		 <?php
		 $no = 1;
		 foreach ($invoice as $inv): ?>
		 <tr>
		 	<td align="center"><?php echo $no++ ?></td>
		 	<td align="center"><?php echo $inv->nama ?></td>
		 	<td><?php echo $inv->telepon ?></td>
		 	<td><?php echo $inv->alamat ?></td>
		 	<td><?php echo anchor('admin/invoice/detail/'.$inv->id_invoice, '<divdiv class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></div>') ?></td>
		 	<td><?php echo anchor('admin/invoice/hapus/'.$inv->id_invoice, '<divdiv class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
		 </tr>

		<?php endforeach; ?>

	</table>

	<a href="<?php echo base_url('admin/dashboard_admin/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div> 