<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="<?php echo base_url();?>assets/stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href="<?php echo base_url();?>assets/css/beli.css" rel="stylesheet">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		 <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon-social.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

		<title>Pemesanan</title>
	</head>
	<body>
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
    </header>

		<div class="container">
			<div class="row" style="margin-top: 100px">
			 
				<div class="main-login main-center">
				<div style="center"><img src="<?php echo base_url();?>assets/img/bars.png"></div>
				
				<h5>Pemesanan</h5>
					<form action="<?php echo base_url();?>index.php/beranda/pesan" method="post">
						
						<div class="form-group">
							<label for="Nama" class="cols-sm-2 control-label">Nama Lengkap</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nama" id="name"  placeholder="Nama Lengkap"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Alamat" class="cols-sm-2 control-label">Alamat Lengkap</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="alamat" id="email"  placeholder="Alamat"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="contoh@example.com"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Nomor HP" class="cols-sm-2 control-label">Nomor HP</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="hp" id="username"  placeholder="081xxxxxxx"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Nama Product" class="cols-sm-2 control-label">Nama Product</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="product" id="email"  placeholder="product"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Jumlah" class="cols-sm-2 control-label">Jumlah</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="jumlah" id="email"  placeholder="Total"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" value="Tambah" class="btn btn-primary btn-lg btn-block login-button">
						</div>
						
					</form>
				</div>
			</div>
		</div>

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
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Tentang OLALI</h3>
		    				<p>Olali, Dimana ingin membuka cafe orang harus ingat Olali. Suplier terpercaya bagi pengusaha di bidang cafe</p>
		    		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


	</body>
</html>