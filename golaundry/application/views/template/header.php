<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">

    </script>
    <title>GO-Laundry</title>
  </head>
  <body>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
     crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

          <nav class="navbar navbar-light bg-white">
    	       <div class="container">
               <a class="navbar-brand" href="">
    		         <div class="d-flex">
                   <img src="<?php echo base_url()?>gambar/logo.jpg"  width="200" height="70" >
    	          </div>
              </a>

    	<div class="d-flex  mr-auto align-self-right">
    		<a style="color: black;"class="nav-item nav-link active" href="<?php echo base_url()?>GHome" >Home <span class="sr-only">(current)</span>  </a>
    		<a style="color: black; "class="nav-item nav-link" href="<?php echo base_url()?>toko">Toko Laundry  </a>
        <?php
                if ($this->session->userdata('status') == "login") {
                    ?>
    		<a style="color: black;"class="nav-item nav-link" href="<?php echo base_url()?>cek/index/<?php echo $this->session->userdata('id'); ?>">Cek Laundry  </a>
                <?php
            }
          ?>
    				</div>
            <?php
                if ($this->session->userdata('status') == "login") {
                    ?>
                    <div class="d-flex">
                <i class="far fa-user-circle fa-1x">  <?php echo strtok($this->session->userdata('nama'), ' '); ?></i>
                <a style="border-radius: 40px; border-color: black; border-style:solid; width: 120px;margin:-10px 10px 0px;" href="<?php echo base_url()?>masuk/logout" class="btn btn-outline ">Logout  </a>
                </div>
                <?php
            } else {
                ?>
                <div class="d-flex">
        		<a style="border-radius: 40px; border-color: black; border-style:solid; width: 120px; margin:15px 10px 0px;" href="<?php echo base_url()?>masuk" class="btn btn-outline ">Login  </a>
        		<a style="border-radius: 40px; border-color: black;width: 120px; margin:15px 10px 0px;"href="<?php echo base_url()?>register" class="btn btn-outline">Register  </a>
        		</div>
                <?php
            }
            ?>
    		</div>
      </nav>
