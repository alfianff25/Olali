
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OLALI OKE!</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon-social.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	
	<script src="<?php echo base_url();?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="<?php echo base_url();?>assets/img/logo.png" alt="Basica"></a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url();?>index.php/beranda/home">Home</a></li>
                    <li><a href="<?php echo base_url();?>index.php/beranda/us">Login</a></li>
                    <li><a href="<?php echo base_url();?>index.php/beranda/pesan">Product dan Pesanan</a></li>
                    <li><a href="<?php echo base_url();?>index.php/beranda/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->


	
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url();?>assets/img/slides/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Selamat Datang di OLALI</h2>
                                    <p class="animation animated-item-2">OLALI Menyediakan Segala Kebutuhan Cafe Anda </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo base_url();?>assets/img/slides/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Pre-Order Sekarang, Pastikan Barang Tersedia</h2>
                                    <p class="animation animated-item-2">Kepuasan Pelanggan Adalah Prioritas Kami. </p>
                                    <br>
                                    */<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo base_url();?>assets/img/slides/3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Melayani 24 Jam</h2>
                                    <p class="animation animated-item-2">Belanja Puas, Harga Pas.</p>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>Selamat Datang di <span style="color:#FF7F50; text-transform:uppercase;font-size:24px;">OLALI!</span> Suplier Cafe Terpercaya!</h3> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->
<hr>

		<!-- Our Portfolio -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Best Seller</h1>
				</div>
		
		
			<ul class="grid cs-style-3">
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url();?>assets/img/portfolio/4.jpg" alt="img04">
						<figcaption>
							<h3>Da Vinci Syrup</h3>
							<span>Caramel</span>
							<a href="<?php echo base_url();?>index.php/beranda/beli">Pesan</a>
						</figcaption>
					</figure>
	        	</div>	
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url();?>assets/img/portfolio/1.jpg" alt="img01">
						<figcaption>
							<h3>Makmoer Powder</h3>
							<span>Green Tea</span>
							<a href="<?php echo base_url();?>index.php/beranda/beli">Pesan</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url();?>assets/img/portfolio/2.jpg" alt="img02">
						<figcaption>
							<h3>Special Coffe</h3>
							<span>Revoneiro Wamena Kopi</span>
							<a href="<?php echo base_url();?>index.php/beranda/beli">Pesan</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url();?>assets/img/portfolio/5.jpg" alt="img05">
						<figcaption>
							<h3>Olali Drink</h3>
							<span>Varian Taste</span>
							<a href="<?php echo base_url();?>index.php/beranda/beli">Pesan</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url();?>assets/img/portfolio/3.jpg" alt="img03">
						<figcaption>
							<h3>Special Ovaltine Swiss</h3>
							<span>Coklat</span>
							<a href="<?php echo base_url();?>index.php/beranda/beli">Pesan</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url();?>assets/img/portfolio/6.jpg" alt="img06">
						<figcaption>
							<h3>Wrap Paper</h3>
							<span>Pembungkus</span>
							<a href="<?php echo base_url();?>index.php/beranda/beli">Pesan</a>
						</figcaption>
					</figure>
				</div>
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Our Portfolio -->
			
<hr>

		<!-- Our Clients -->
	    <div class="section">
	    	<div class="container">
			
				<div class="section-title">
				<h1>Mitra Kami</h1>
				</div>

				<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-1.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-2.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-3.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-4.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-5.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-6.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-7.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-8.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-9.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-10.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-11.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url();?>assets/img/logos/logo-12.jpg" alt="Client Name"></a></div>
				</div>
			</div>
	    </div>
	    <!-- End Our Clients -->

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact Us</h3>
		    			<p class="contact-us-details">
		    				<b>Owner:</b> Apri Trastianto <br/>
	        				<b>Address 1:</b> Jl. Semampir Tengah IA/18, Surabaya<br/>
	        				<b>Address 2:</b> Jl. Nusantara III BD-6 Wisma Tropodo, Sidoarjo<br/>
	        				<b>Phone:</b> +6281999022252<br/>
	        				<b>Email:</b> <a href="olali.sby@gmail.com">olali.sby@gmail.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Our Social Networks</h3>
						
		    			<div>
		    				<img src="<?php echo base_url();?>assets/img/icons/facebook.png" width="32" alt="Facebook">
		    				<img src="<?php echo base_url();?>assets/img/icons/twitter.png" width="32" alt="Twitter">
		    				<img src="<?php echo base_url();?>assets/img/icons/linkedin.png" width="32" alt="LinkedIn">
							<img src="<?php echo base_url();?>assets/img/icons/rss.png" width="32" alt="RSS Feed">
						</div>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Tentang OLALI</h3>
		    				<p>Olali, Dimana ingin membuka cafe orang harus ingat Olali. Suplier terpercaya bagi pengusaha di bidang cafe</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2017 Olali, </a> Suplier Kebutuhan Cafe Terpercaya di Surabaya .</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/scrolling-nav.js"></script>		

    </body>
</html>