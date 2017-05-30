

    <!DOCTYPE html>

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

    

    <div class="container-fluid">
         
        
        <div class="row">
        

            <div class="col-sm-4" style="#">
           
            </div>
            
            <div class="col-sm-4" style="#">
                  <form class="" id="msform" method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>"  enctype="multipart/form-data" >
                        <div class="imgcontainer">
                          <img src="icon.png" alt="Avatar" class="avatar" width="30" height="30">
                          <H2>Form Feedback</H2> 
                        </div>

                        
                                <label><b>name</b></label>
                                <input type="text" placeholder="" name="nama" required>
                        
                           
                            <br/>

                                <label><b>email</b></label>
                                <input type="text" placeholder="" name="email" required>

                            <br/>
                                <label><b>Alamat</b></label>
                                <textarea name="alamat"> </textarea> 

                            <br/>
                                <label><b>comments</b></label>
                                <textarea name="komentar"> </textarea> 

                            <br/>

                                <label><b>Upload</b></label>
                                <input type="file" name="userfile" size="2000" />

                            <br/>
                            <br/>    

                              <input type="submit" value="SUBMIT" align="center"></input>
                        
                     
                </form>
            
            </div>
            <div class="col-sm-4" style="#">
                  
            </div>
        </div>
    </div>



    </body>
    <script type="text/javascript">
        collapsibleHideFunction: function($ul, complete) { $ul.SlideUp(250, complete);
    </script>

    </html>
