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
  <div class="col-sm-2" >
  </div>
  <body>

<div class="d-flex">
<img src="gambar/logo.jpg" style="margin:15px 450px 35px;" width="280" height="120" >

</div>

<h4 style="margin:15px 550px 35px;" ><b>Buat Akun</b></h4>

<form style="margin:15px 400px 35px;" role="form" method="POST" action="<?php echo base_url()?>register/tambah">
<?php
    $message = $this->session->flashdata('message');
      // echo "$message";
    if ($message == "error_not_match") {
        ?>
          <div class="alert alert-danger  w-100" >
        <strong>ERROR!</strong> Password Tidak Sama.
        </div>
    <?php
        };
        ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input  style="border-radius: 80px;" type="Nama" name="Nama" width="70" class="form-control" id="exampleInputNama"  placeholder="Enter Nama" required>
    <small id="Nama" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  style="border-radius: 80px;" type="email" name="Email" width="70" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nomor HP</label>
    <input style="border-radius: 80px;" type="nomor" name="hp" class="form-control" id="exampleInputnomor" placeholder="nomor" required>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Password</label> <label for="exampleInputPassword1" class="" style="padding-left:115px">Repeat Password</label>
    <div class="d-flex">
    <input style="border-radius: 80px;  width: 165px; padding-right: 24px;" type="password"  name="Pass"class="form-control" id="exampleInputPassword1" placeholder="Password" required>
    <input style="border-radius: 80px;  width: 165px; padding-left: 24px; margin:0px 15px 0px" type="password" name="rePass" class="form-control d-flex align-right" id="exampleInputrepeatpassword" placeholder="Repeat Password" required>
  </div>
</div>
<button type="submit" name="button" style="border-radius: 40px; border-color: black; border-style:solid; width: 180px; margin:15px 90px 35px; " class="btn btn-dark text-white ">Register</button>

</form>

<!-- <h6 align ="center" style="margin:-10px 0px 60px">sudah punya akun?</h6> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <div class="footer-copyright text-center py-3"  style="width:100%;height:60px;background:black; color:white">Copyright GO Laundry 2019
    </div>
</html>
