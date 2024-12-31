<div class="container-fluid">
	<button type="button" class="btn btn-secondary mb-3 mt-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th class="text-center table-danger">NO</th>
			<th class="text-center table-danger">NAMA BARANG</th>
			<th class="text-center table-danger">KETERANGAN</th>
			<th class="text-center table-danger">KATEGORI</th>
			<th class="text-center table-danger">HARGA</th>
			<th class="text-center table-danger">STOK</th>
			<th colspan="3" class="text-center table-danger">AKSI</th>

		</tr>	
		<?php 
		$no = 1;
		foreach($barang as $brg) : ?>
			<tr>
				<td class="text-center" ><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_brg ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td>Rp. <?php echo $brg->harga ?></td>
				<td class="text-center"><?php echo $brg->stok ?></td>
				<td class="text-center"><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
				<td class="text-center"><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>

				<td class="text-center"><?php echo anchor('admin/data_barang/detail_barang/' .$brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-eye"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<a href="<?php echo base_url('admin/dashboard_admin/index') ?>"><div class="btn btn-sm btn-primary mb-5">Kembali</div></a>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Form Input Data Barang</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>&times;</button>
</div>
<div class="modal-body">
<form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">



<div class="form-group">
       		<label>Nama Barang</label>
       		<input type="text" name="nama_brg" class="form-control">
       	</div>

       	<div class="form-group">
       		<label>Keterangan</label>
       		<input type="text" name="keterangan" class="form-control">
       	</div>

       	<div class="form-group">
       		<label>Kategori</label>
       		<select class="form-control" name="kategori">
       		<option>Baju</option>
       		<option>Jacket</option>
       		<option>Sepatu</option>
       		<option>Sandal</option>
       		<option>Aksesories</option>
       		<option>Vinyl</option>
       		</select>
       	</div>

       	<div class="form-group">
       		<label>Harga</label>
       		<input type="text" name="harga" class="form-control">
       	</div>

       	<div class="form-group">
       		<label>Stok</label>
       		<input type="text" name="stok" class="form-control">
       	</div>

       	<div class="form-group">
       		<label>Gambar Produk</label><br>
       		<input type="file" name="gambar" class="form-control">
       	</div>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
</div>
</div>
