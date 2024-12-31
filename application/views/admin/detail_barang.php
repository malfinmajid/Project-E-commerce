<div class="container-fluid mt-3 mb-3 me-auto">
<section class="section">
<div class="section-header">
<h4>Detail Barang</h4>
</div>
</section>

<?php foreach($detail as $dt) : ?>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-5">
<img src="<?php echo base_url(). '/assets/img/products/'. $dt->gambar?>" style="width: 300px;">
</div>
<div class="col-md-7">
<table class="table">
		<tr>
            <td><strong>Nama Barang</td></strong>
            <td><?php echo $dt->nama_brg ?></td>
        </tr>

        <tr>
            <td><strong>Keterangan</td></strong>
            <td><?php echo $dt->keterangan ?></td>
        </tr>

        <tr>
            <td><strong>Kategori</td></strong>
            <td><?php echo $dt->kategori ?></td>
        </tr>

        <tr>
            <td><strong>Stok</td></strong>
            <td><?php echo $dt->stok ?></td>
        </tr>

        <tr>
            <td><strong>Harga</td></strong>
            <td><strong class="btn btn-secondary"><div class="strong">Rp. <?php echo number_format($dt->harga,0,',',',') ?></div></strong></td>
        </tr>
						
</table>
<a class="btn btn-sm btn-primary ml-4" href="<?php echo base_url('admin/data_barang')?>">Kembali</a>
</div>
</div>
</div>
</div>
<?php endforeach ?>
</div>