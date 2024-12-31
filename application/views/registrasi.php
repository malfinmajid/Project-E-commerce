
<body style="background-color:  #8b0000;">

<div class="container">

<div class="card o-hidden border-2 shadow-lg col-lg-6 my-5 mx-auto ">
<div class="card-body p-0">
<!-- Nested Row within Card Body -->
<div class="row">
<div class="col-lg">
<div class="p-5">
<div class="text-center">
<a class="navbar-brand mx-auto" href="<?php echo base_url('welcome') ?>">
<img src="<?php echo base_url('assets/img/products/5.png') ?>" style="width: 7.5rem; height: 6rem;">
</a>
<h4 class="h4 text-gray-900 mb-4" style="color: #8b0000;">Daftar Akun</h4>
</div>

<form method="post" action="<?php base_url('registrasi/index') ?>" class="user">
<div class="form-group mb-3">
<input type="text" class="form-control form-control-user" id="exampleInputEmail"
placeholder="Nama Anda" name="nama">

<?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
</div>

<div class="form-group mb-3">
<input type="text" class="form-control form-control-user" id="exampleInputEmail"
placeholder="Username Anda" name="username">
<?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
</div>

<div class="form-group row mb-3">
<div class="col-sm-6 mb-3 mb-sm-0">
<input type="password" class="form-control form-control-user"
id="exampleInputPassword" placeholder="Password" name="password_1">
<?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
</div>

<div class="col-sm-6">
<input type="password" class="form-control form-control-user"
id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
</div>
</div>

<button type="submit" class="btn btn-primary my-3 form-control" style="background-color:  #8b0000;color: white;">Daftar</button>

</form>
<hr>

<div class="text-center">Sudah Punya Akun? 
<a href="<?php echo base_url('auth/login') ?>" style="color: #8b0000;">Login!</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>