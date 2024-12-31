<body>
    <header class="header clearfix">
        <div class="top-bar d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-left">
                        <ul class="top-links contact-info">
                            <li style="color: #8b0000;"><i class="fa fa-envelope-o" style="color: #8b0000;"></i>fuegomerch@gmail.com</li>
                            <li style="color: #8b0000;"><i class="fa fa-whatsapp" style="color: #8b0000;"></i> +62 813-8493-7044</li>
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <ul class="top-links account-links">
                            
                            <?php if($this->session->userdata('username')) { ?>
                            <li style="color: #8b0000;"><i class="fa fa-user-circle-o" style="color: #8b0000;"></i><?php echo $this->session->userdata('username') ?></li>
                                
                                <li style="color: #8b0000;"><i class="fa fa-power-off" style="color: #8b0000;"></i><?php echo anchor('auth/logout','Logout') ?></li>
                            <?php }else{ ?>
                                <li style="color: #8b0000;"><i class="fa fa-user-circle-o" style="color: #8b0000;"></i>My Account<i class="fa fa-power-off ml-2" style="color: #8b0000;"></i><?php echo anchor('auth/login','Login'); ?></li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main border-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-12 col-sm-6">
                        <a class="navbar-brand mr-lg-5" href="<?php echo base_url('welcome') ?>">
                            <img src="<?php echo base_url('assets/img/products/5.png') ?>" style="width: 50px; height: 40px;" class="mb-4"> <span class="logo" style="color: #8b0000;">Fuegomerch</span>
                        </a>
                    </div>
                    <div class="col-lg-7 col-12 col-sm-6">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-light" type="submit" style="background-color: #8b0000; color: white;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

<!--- Cart and Massage --->
                    <div class="col-lg-2 col-12 col-sm-6">
                        <div class="right-icons pull-right d-none d-lg-block">


                            <?php 
                            $keranjang = '<div class="single-icon shopping-cart">
                                <i class="fa fa-shopping-cart fa-2x mr-5" style="color: #8b0000;"></i>
                                <span class="badge badge-default mr-5">'.$this->cart->total_items(). '</span>
                            </div>' ?>



                            <?php echo anchor('dashboard/detail_keranjang', $keranjang, '')  ?>

                        </div>
                    </div>
<!--- Cart end Massage --->

                </div>
            </div>
        </div>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?php echo base_url('welcome') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('about') ?>">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">Kategori</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('kategori/baju') ?>">T-Shirt</a>
                                <a class="dropdown-item" href="<?php echo base_url('kategori/jacket') ?>">Jacket</a>
                                <a class="dropdown-item" href="<?php echo base_url('kategori/sepatu') ?>">Sepatu</a>
                                <a class="dropdown-item" href="<?php echo base_url('kategori/sandal') ?>">Sandal</a>
                                <a class="dropdown-item" href="<?php echo base_url('kategori/aksesories') ?>">Aksesories</a>
                                <a class="dropdown-item" href="<?php echo base_url('kategori/vinyl') ?>">Vinyl</a>
                            </div>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>
    </header>
    <!------------------------------------------
    SLIDER
    ------------------------------------------->
    <section class="slider-section pt-4 pb-4">
        <div class="container">
            <div class="slider-inner">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="nav-category">
                            <h2>Categories</h2>
                            <ul class="menu-category">
                                <li ><a href="<?php echo base_url('kategori/baju') ?>" style="color: #8b0000;">T-Shirt</a></li>
                                <li><a href="<?php echo base_url('kategori/jacket') ?>" style="color: #8b0000;">Jacket</a></li>
                                <li><a href="<?php echo base_url('kategori/sepatu') ?>" style="color: #8b0000;">Sepatu</a></li>
                                <li><a href="<?php echo base_url('kategori/sandal') ?>" style="color: #8b0000;">Sandal</a></li>
                                <li><a href="<?php echo base_url('kategori/aksesories')?>" style="color: #8b0000;">Aksesories</a></li>
                                <li><a href="<?php echo base_url('kategori/vinyl') ?>" style="color: #8b0000;">Vinyl</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner shadow-sm rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/slides/slides1.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color: #8b0000;">Semua Koleksi T-shirt dan Aksesories lainnya</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/slides/slides2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color: white;">Semua Aksesories, dan Koleksi lainnya</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/slides/slides3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color: white;">Semua Merchandise ada di Fuegomerch</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-info mr-4">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="media-body">
                            <h5>Pengiriman Cepat</h5>
                            <p class="text-muted">
                                Pengiriman cepat ke seluruh Indonesia atau keluar Negri.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-purple mr-4">
                            <i class="fa fa-credit-card-alt"></i>
                        </div>
                        <div class="media-body">
                            <h5>Pembayaran Online</h5>
                            <p class="text-muted">
                                Pembayaran dengan mudah secara online.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-warning mr-4">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="media-body">
                            <h5>Pengembalian Bebas</h5>
                            <p class="text-muted">
                                Jika barang yang dibeli tidak sesuai, makan dapat ditukar kembali.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->


<!--- Product --->
<section class="products-grids trending pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Items</h2>
                </div>
            </div>
        </div>
        <div class="row mt-4">
                <?php foreach ($barang as $brg) : ?>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product mt-4">
                        <div class="product-img">
                            <a href="<?php echo base_url('dashboard/detail/'.$brg->id_brg) ?>">
                                <img src="<?php echo base_url().'/assets/img/products/'.$brg->gambar ?>" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html"><?php echo $brg->nama_brg ?></a></h3>
                            <div class="product-price">
                                <span>Rp. <?php echo number_format($brg->harga,0,',',',') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--- Product end --->


    <!--- Footer --->
    <footer class="footer" style="background-color: #8b0000;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo-footer">
                                <img src="<?php echo base_url('assets/img/products/4.png') ?>" style="width: 70px; height: 60px;" class="mb-4"></i> <span class="logo">Fuegomerch</span>
                            </div>
                            <p class="text">Fuegomerch menjual berbagai macam merchandise mulai dari t-shirt band, aksesories, vinyl, sepatu, sandal dan hoodie.</p>
                            <p class="call">Jika ada pertanyaan, silahkan hubungi kami :<span><a href="tel:123456789">+62 813-8493-7044</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-1 col-md-4 col-10">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Product</h4>
                            <ul>
                                <li><a href="<?php echo base_url('kategori/baju') ?>">T-shirt</a></li>
                                <li><a href="<?php echo base_url('kategori/jacket') ?>">Jacket</a></li>
                                <li><a href="<?php echo base_url('kategori/sepatu') ?>">Sepatu</a></li>
                                <li><a href="<?php echo base_url('kategori/sandal') ?>">Sandal</a></li>
                                <li><a href="<?php echo base_url('kategori/aksesories') ?>">Aksesories</a></li>
                                <li><a href="<?php echo base_url('kategori/vinyl') ?>">Vinyl</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>


                    <div class="col-md-2 col-lg-1 col-xl-2 mx-auto mb-4">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4 class="text-center">Pengiriman</h4>
                            <!-- Single Widget -->
                            <div class="ml-2">
                            <img src="<?php echo base_url('assets/img/products/kirim1.png') ?>" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>


                    <div class="col-md-2 col-lg-1 col-xl-2 mx-auto mb-4">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Pembayaran</h4>
                            <!-- Single Widget -->
                            <div class="mr-5">
                            <img src="<?php echo base_url('assets/img/products/bayar1.png') ?>" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>


                    <div class="col-md-2 col-lg-1 col-xl-2 mx-auto mb-4">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Kontak Kami</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <small><i class="fa fa-map-marker"></i> Jakarta, Indonesia.</small>
                                </ul>
                                <ul>
                                   <small><i class="fa fa-envelope"></i> fuegomerch@gmail.com</small> 
                                </ul>
                                <ul>
                                    <small><i class="fa fa-phone"></i> +62 813-8493-7044</small>
                                </ul>
                                <ul>
                                    <small><i class="fa fa-instagram"></i> @fuegomerch</small>
                                </ul>
                                <ul>
                                    <small><i class="fa fa-facebook-square"></i> Fuegomerch</small>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright-inner border-top">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="left" align="center">
                                <p>Copyright © 2023 <a href="" target="_blank">fuegomerch</a> -
                                    All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--- Footer end --->