
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
                    <li><a href="<?php echo base_url();?>index.php/beranda/admin">Admin</a></li>
                    <li><a href="<?php echo base_url();?>index.php/beranda/dafpesan">Daftar Pesan</a></li>
                    <li><a href="<?php echo base_url();?>index.php/beranda/input">Input Product</a></li>
                    <li><a href="<?php echo base_url();?>index.php/beranda/home">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

        <div class="row" style="margin-top: 200px">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="" data-show-toggle="" data-show-columns="" data-search="" data-select-item-name="" data-pagination="" data-sort-name="name" data-sort-order="">
                            <thead>
                            <tr>
                                <th data-field="id" data-checkbox="" >ID</th>
                                <th data-field="nama_produk" data-sortable="true">Nama Produk</th>
                                <th data-field="jenis"  data-sortable="true">Jenis</th>
                                <th data-field="detail" data-sortable="">Detail</th>
                                <th data-field="harga" data-sortable="">Harga</th>
                                <th data-field="img" data-sortable="">Gambar</th>
                                <th data-field="Edit" data-sortable="">Edit</th>
                                <th data-field="Delete" data-sortable="">Delete</th>
                            </tr>                           
                            </thead>
                            <tbody>
                            <?php foreach($dataRead as $z){ ?>
                            <tr>
                                  <td><?php echo $z['id']; ?></td>
                                  <td><?php echo $z['nama_produk']; ?></td>
                                  <td><?php echo $z['jenis']; ?></td>
                                  <td><?php echo $z['detail']; ?></td>
                                  <td><?php echo $z['harga']; ?></td>
                                  <td> <img src="<?php echo base_url("/uploads/" . $z['img'] ); ?>" height="150" width="150" />  </td>
                                  <td align='center'><a href="<?php echo base_url()."index.php/crud/edit_data/".$z['id']; ?>" class="btn btn-primary" role="button">EDIT</a></td>
                                  <td align="center"><a href="<?php echo base_url()."index.php/crud/do_delete/".$z['id']; ?>" class="btn btn-primary" role="button">DELETE</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>