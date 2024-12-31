<body style="background-color: #8b0000;">

    <div class="container"><br>

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0" style="background-color: #fff;">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">

<div class="text-center">
<a class="navbar-brand mx-auto" href="<?php echo base_url('welcome') ?>">
<img src="<?php echo base_url('assets/img/products/5.png') ?>" style="width: 7.5rem; height: 6rem;">
</a>
<h4 class="h4 text-gray-900 mb-4" style="color: #8b0000;">Login</h4>
</div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                        <div class="form-group mb-3">
                                          <input type="text" class="form-control form-control-user"
                                          id="exampleInputEmail" aria-describedby="emailHelp"
                                          placeholder="Username" name="username">
                                          <?php echo form_error('username','<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>

                                        <div class="form-group mb-2">
                                          <input type="password" class="form-control form-control-user"
                                          id="exampleInputPassword" placeholder="Password" name="password">
                                          <?php echo form_error('password','<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                            <button type="submit" class="btn my-3 form-control" style="background-color: #8b0000; color: white;">Login</button>
                                         
                                        
                                    </form>
                                    
                                    <div class="text-center mt-4">Belum Punya Akun ?
                                        <a href="<?php echo base_url('registrasi/index') ?> " style="color: #8b0000;">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>