<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>GO-Laundry</title>
  </head>
  <body>
    <style media="screen">
            body {
                  max-width: 100%;
                  overflow-x: hidden;
                  }
    </style>

    <!-- Image and text -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
     crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
        <!-- <nav class="navbar navbar-light bg-white">
    	     <div class="container">
             <a class="navbar-brand" href="">
    		         <div class="d-flex">
                 <img src="<?php echo base_url()?>gambar/logo.jpg"  width="200" height="70" >
    	          </div>
                </a>

    	<div class="d-flex  mr-auto align-self-right">
    		<a style="color: black;"class="nav-item nav-link active" href="<?php echo base_url()?>/" >Home <span class="sr-only">(current)</span>  </a>
    		<a style="color: black; "class="nav-item nav-link" href="<?php echo base_url()?>toko">Toko Laundry  </a>
    				</div>
            <?php
                if ($this->session->userdata('status') == "login") {
                    ?>
                    <div class="d-flex">
                <i class="far fa-user-circle fa-1x">  <?php echo strtok($this->session->userdata('nama'), ' '); ?></i>
                <a style="border-radius: 40px; border-color: black; border-style:solid; width: 120px; margin:15px 10px 0px;" href="<?php echo base_url()?>masuk/logout" class="btn btn-outline ">Logout  </a>
                </div>
                <?php
            } else {
                ?>
            <div class="d-flex">
        <i class="far fa-user-circle fa-1x"> Nama Akun</i>
        </div>
        <?php
          }
        ?>
    		</div>
    </nav> -->

    <h4 align ="center" style="margin-top: 2%;padding-left: 40px">BERIKAN ULASANMU!</h4>

    <div  class="container" align ="center" style="" >
      <form class="" role="form" method="POST" action="<?php echo base_url()?>cek/ulasan/<?php echo $toko['Id_Pesanan'] ?>">
        <textarea name="ulasan" style="height:230px; border-radius: 10px;margin: 10px 250px 20px;border-style: 3px solid black; width:500px">
      </textarea>
    </div>
    <button type="submit" style="border-radius: 40px; border-color: black; border-style:solid; width: 180px; margin:15px 520px 35px;" class="btn btn-dark text-white ">Kirim Ulasan</button>
      </form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<div class="footer-copyright text-center py-3"  style="width:100%; margin:50px 0px 0px;;height:51px;background:black; color:white">Copyright GO Laundry 2019
</div>
</html>
