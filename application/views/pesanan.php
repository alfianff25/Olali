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

    <title>Product dan Pesanan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

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

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Segera Pesan !</h1>
					</div>
				</div>
			</div>
		</div>
		
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h2>Kami memberikan produk yang berkualitas untuk anda dan dijamin sangat bersaing !</h2>
						<h3>Segera pesanlah produk kami, kepuasan anda sangat berarti untuk kami</h3>
						
					
					</div>
				</div>
			</div>
		</div>		
        
        <div class="section">
       
	    
	    	<div class="container">
	    	 <div class="row">
				
				
			
			<div class="grid cs-style-2"><?php foreach($bringData as $x) { ?>
					<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url('uploads/'.$x['img']); ?>" height='300' width='400' >
						<figcaption>
							<h3><?php echo $x['nama_produk']; ?></h3>
							<span><?php echo $x['detail']; ?></span>
							<a href="<?php echo base_url();?>index.php/beranda/Beli">Pesan</a>
							
						</figcaption>
					</figure>
	        	</div>
<?php } ?>
			</div>
				

				
				</div>
				<ul class="pager">
				  <li><a href="#">Previous</a></li>
				  <li><a href="#">Next</a></li>
				</ul>
				
			</div>
			
		</div>

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
						<p></p>
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
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/scrolling-nav.js"></script>		
		
		<!-- Portfolio Thumbnail Hover Effect JavaScript -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>

		
    </body>
</html>