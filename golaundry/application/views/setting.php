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

<?php
    $message = $this->session->flashdata('message');
      // echo "$message";
    if ($message == "success") {
        ?>
          <div class="alert alert-success  w-100" >
          <strong>Success!</strong> Update toko berhasil.
        </div>
    <?php
        };
        ?>
    <h4 align ="center" style="margin-top: 4%">TOKO LAUNDRY</h4>
    <!-- <?php if ($toko['id'] == null) {
    ?>
      <div class="alert alert-danger">BELUM ADA PEMESANAN</div>
    <?php } else { ?> -->
    <form action="<?php echo base_url()?>setting/update/<?php echo $toko['id'] ?>" method="post" style="margin:15px 400px 35px;">
      <div class="form-group" style="margin-top: 7%">
        <label for="exampleInputEmail1">Nama Toko </label>
        <input  style="border-radius: 80px;width: 320px"  value="<?php echo $toko['Nama_Toko'] ?>" type="text" class="form-control" id="exampleInputEmail1" name="Nama_Toko" aria-describedby="emailHelp" placeholder="Nama_Toko">

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat Toko </label>
        <input  style="border-radius: 80px;  width: 320px"  value="<?php echo $toko['Alamat_Toko'] ?>" type="text" width="70px" class="form-control" id="exampleInputNama" name="Alamat_Toko" placeholder="Alamat_Toko">
        <small id="Nama" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Motto</label>
        <input style="border-radius: 80px; width: 320px" type="text" value="<?php echo $toko['Motto'] ?>"  class="form-control" id="exampleInputnomor" name="Motto" placeholder="Motto">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi</label>
        <textarea class="form-control" style="border-radius: 10px; width: 315px" rows="" id="comment" name="Deskripsi"><?php echo $toko['Deskripsi'] ?></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nomor Hp</label>
        <input style="border-radius: 80px; width: 320px" type="text" value="<?php echo $toko['Nomor_hp'] ?>"  class="form-control" id="exampleInputnomor" name="Nomor_hp" placeholder="Nomor_hp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga per kilo</label>
        <input style="border-radius: 80px; width: 320px" type="text" value="<?php echo $toko['Harga'] ?>"  class="form-control" id="exampleInputnomor" name="Harga" placeholder="Harga">
      </div>
      <!-- <div class="form-inline">
        <label style="margin:30px 0px 0px;">Foto</label>
        <label style="border-radius: 80px; margin:485px 490px 0px; width: 320px" class="custom-file-label" for="customFile"></label>
        <input  type="file" class="custom-file-input" id="customFile" placeholder="foto" name="filename">
      </div> -->
      <div class="d-flex" >
        <button type="submit" style="border-radius: 40px; border-color: black; border-style:solid; width:130px ; margin: 2px 15px 0px" class="btn btn-dark text-white">Edit</button>
    </form>
        <form class="" action="<?php echo base_url()?>setting/delete/<?php echo $toko['id']?>" method="post">
          <button type="submit" style="border-radius: 40px; border-color: black; border-style:solid; width:130px ; margin:  2px 10px 0px;" class="btn btn-dark text-white">Hapus</button>
        </form>
      </div>

<!-- <?php } ?> -->

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
