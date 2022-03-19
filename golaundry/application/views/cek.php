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

    <!-- Image and text -->
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
    		<a style="color: black;"class="nav-item nav-link active" href="<?php echo base_url()?>/" >Home <span class="sr-only">(current)</span>  </a>
    		<a style="color: black; "class="nav-item nav-link" href="<?php echo base_url()?>toko">Toko Laundry  </a>
    		<a style="color: black;"class="nav-item nav-link" href="<?php echo base_url()?>cek">Cek Laundry </a>
    				</div>
            <?php
                if ($this->session->userdata('status') == "login") {
                    ?>
                    <div class="d-flex">
                <i class="far fa-user-circle fa-1x">  <?php echo strtok($this->session->userdata('nama'), ' '); ?></i>
                <a style="border-radius: 40px; border-color: black; border-style:solid; width: 120px; margin:-10px 10px 0px;" href="<?php echo base_url()?>masuk/logout" class="btn btn-outline ">Logout  </a>
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
    </nav>


    <div style="margin:35px 400px 30px;">
<div class="row">
<?php if ($toko['StatusPesanan'] == null) {
?>
  <div class="alert alert-danger" style="width:420px">BELUM ADA PEMESANAN</div>
<?php } else { ?>
    <div class="col-sm-6">
      <svg height="36" width="40">
 <circle cx="25" cy="25" r="7" stroke="black" stroke-width="6" fill="black" />
 <div  style="margin:-20px 52px -9px;">
   <h6  align="left" style="<?php if($toko['StatusPesanan'] == 1){ echo "color:red;"; }elseif($toko['StatusPesanan'] == 2){ echo "color:red;"; }elseif($toko['StatusPesanan'] == 3){ echo "color:red;"; }elseif($toko['StatusPesanan'] == 4){ echo "color:red;"; } elseif($toko['StatusPesanan'] == 5){ echo "color:red;"; }?>" >Penjemputan</h6></div>
   <div class="col-sm-12" style="margin:-35px 230px -15px;">
     <h6  style="padding-left:30px">Tanya Toko Laundry</h6>
    </div>
   <div class="col-sm-12" style="margin:-29px 200px -15px;">
     <button onClick="alert('Anda yakin ingin Telepon Pihak Laundry?')"  style="border-radius: 20px; border-color: black; border-style:solid; width: 150px; margin: 25px 50px -50px;"  href="" class="btn btn-outline "><?php echo $toko['Nomor_hp']; ?></button>
   </div>
</svg>
<svg height="87" width="200">
 <g fill="none" stroke="black" stroke-width="4">
   <path stroke-linecap="square" d="M25 0 l000 480" />
 </g>
</svg>
<svg height="40" width="40" style="margin-top:-11%">
<circle cx="25" cy="25" r="7" stroke="black" stroke-width="6" fill="black" />
<div style="margin:-27px 53px -7px;">
  <h6  align="left" style="<?php if($toko['StatusPesanan'] == 2){ echo "color:red;"; }elseif($toko['StatusPesanan'] == 3){ echo "color:red;"; }elseif($toko['StatusPesanan'] == 4){ echo "color:red;"; } elseif($toko['StatusPesanan'] == 5){ echo "color:red;"; }?>" >Pencucian</h6></div>
  <div class="col-sm-12" style="margin:-32px 200px -15px;">
    <a  style="border-radius: 20px; border-color: black; border-style:solid; width: 150px; margin: 15px 50px -50px; font-style: color:white"  href="<?php echo base_url()?>cek/selesai/<?php echo $toko['Id_Pesanan'] ?>" class="btn btn-dark ">Transaksi Selesai</a>
  </div>
</svg>
<svg height="110" width="200" style="margin-top:-11%">
<g fill="none" stroke="black" stroke-width="4">
<path stroke-linecap="square" d="M25 0 l000 280" />
</g>
</svg>
<svg height="40" width="40" style="margin-top:-11%">
<circle cx="25" cy="25" r="7" stroke="black" stroke-width="6" fill="black" />
<div class="col-sm-12"style="margin:-26px 38px -33px;">
  <h6  align="left" style="<?php if($toko['StatusPesanan'] == 3){ echo "color:red;"; }elseif($toko['StatusPesanan'] == 4){ echo "color:red;"; } elseif($toko['StatusPesanan'] == 5){ echo "color:red;"; }?>" >Pengeringan dan Setrika</h6></div>
</svg>
<svg height="120" width="200" style="margin-top:-11%" >
<g fill="none" stroke="black" stroke-width="4">
<path stroke-linecap="square" d="M25 0 l000 280" />
</g>
</svg>
<svg height="40" width="40" style="margin-top:-11%">
<circle cx="25" cy="25" r="7" stroke="black" stroke-width="6" fill="black" />
<div class="col-sm-8" style="margin:-26px 40px -7px;">
  <h6  align="left" style="<?php if($toko['StatusPesanan'] == 4){ echo "color:red;"; } elseif($toko['StatusPesanan'] == 5){ echo "color:red;"; }?>">Packing Pakaian</h6></div>
</svg>
<svg height="95" width="200" style="margin-top:-11%">
<g fill="none" stroke="black" stroke-width="4">
<path stroke-linecap="square" d="M25 0 l000 280" />
</g>
</svg>
<svg height="40" width="40" style="margin-top:-11%">
<circle cx="25" cy="25" r="7" stroke="black" stroke-width="6" fill="black" />
<div class="col-sm-10" style="margin:-26px 40px 5px;">
  <h6  align="left" style="<?php if($toko['StatusPesanan'] == 5){ echo "color:red;"; }?>" >Pengantaran Pakaian</h6></div>
</svg>
</div>
<?php } ?>
  </div>
    </div>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </body>
          <div class="footer-copyright text-center py-3"  style="width:100%;height:51px;background:black; color:white">Copyright GO Laundry 2019
            </div>
        </html>
