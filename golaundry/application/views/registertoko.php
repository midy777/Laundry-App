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

        <div class="d-flex">
        <img src="<?php echo base_url()?>gambar/logo.jpg" style="margin:15px 450px 35px;" width="280" height="120" >

        </div>

    <h4 align ="center" style="margin-top: 2%;">TOKO LAUNDRY BARU</h4>

    <form action="<?php echo base_url()?>toko/tambah" method="post" style="margin:30px 400px 35px;">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Toko </label>
        <input  style="border-radius: 80px; width: 350px;"  value="" type="text" class="form-control" id="exampleInputEmail1" name="Nama_Toko" aria-describedby="emailHelp" placeholder="Nama_Toko">

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat Toko </label>
        <input  style="border-radius: 80px; width: 350px;"  value="" type="text" width="70px" class="form-control" id="exampleInputNama" name="Alamat_Toko" placeholder="Alamat_Toko">
        <small id="Nama" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Motto</label>
        <input style="border-radius: 80px; width: 350px;" type="text" value=""  class="form-control" id="exampleInputnomor" name="Motto" placeholder="Motto">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi</label>
        <textarea class="form-control" style="border-radius: 10px; width: 350px;" rows="" id="comment" name="Deskripsi"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nomor Hp</label>
        <input style="border-radius: 80px; width: 350px:" type="text" value=""  class="form-control" id="exampleInputnomor" name="Nomor_hp" placeholder="Nomor_hp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga per kilo</label>
        <input style="border-radius: 80px; width: 350px;" type="text" value=""  class="form-control" id="exampleInputnomor" name="Harga" placeholder="Harga">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input  style="border-radius: 80px;  " type="email" name="Email" width : "60px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    <div class="form-group " >
        <label for="exampleInputPassword1" >Password</label> <label for="exampleInputPassword1" class="" style="padding-left: 115px">Repeat Password</label>
        <div class="d-flex">
        <input style="border-radius: 80px;  width: 165px; padding-right: 24px;" type="password"  name="Pass"class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        <input style="border-radius: 80px;  width: 165px; padding-left: 24px; margin:0px 15px 0px" type="password" name="rePass" class="form-control d-flex align-right" id="exampleInputrepeatpassword" placeholder="Repeat Password" required>
      </div>
</div>
      <!-- <div class="form-inline">
        <label style="margin:30px 0px 0px;">Foto</label>
        <label style="border-radius: 80px; margin:485px 490px 0px; width: 320px" class="custom-file-label" for="customFile"></label>
        <input  type="file" class="custom-file-input" id="customFile" placeholder="foto" name="filename">
      </div> -->
        <button type="submit" style="border-radius: 40px; border-color: black; border-style:solid; width: 180px; margin:40px 80px 35px;" class="btn btn-dark text-white">Daftar</button>
    </form>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

      </body>
      <div class="footer-copyright text-center py-3"  style="width:100%;height:60px;background:black; color:white">Copyright GO Laundry 2019
        </div>
    </html>
