<body>
    <style media="screen">
                a{
                  color: #000!important;
                  }
      .container {
                  display: d-flex;
                  flex-wrap: wrap;
                  flex-direction: row;
                  justify-content: around;
                }
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
  <div class="d-flex">
  <div style="margin-top: 2%;" >
    <form class="" action="<?php echo site_url();?>toko/cari" method="post">
  <input style="margin:15px 430px 25px; border-radius: 40px;" name="cari" class="form-control mr-sm-2 col-sm-7" type="text" placeholder="Search" aria-label="Search" class="glyphicon glyphicon-search">
  <!-- <button type="submit" name="button">Cari</button> -->
    </form>
  </div>
  </div>

<div class="row" style="margin-top: 2%">
    <div class="col-sm-3" >
    <div style="margin:0px 40px 0px">
      <div class="list-group">
    <form class="" action="<?php echo site_url();?>toko/filter" method="post">
    <div class="card">
      <div class="card-body">
        <select id="lokasi" name="lokasi" class="form-control form-control-sm">
          <option value="#">Lokasi</option>
          <option value="sukapura">Sukapura</option>
          <option value="sukabirus">Sukabirus</option>
        </select>
      </div>
      <div class="col-sm-12">
      <label class="sr-only" for="inlineFormInputGroup">Rp.</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">Min</div>
        </div>
        <input id="min" type="text" class="form-control" name="min" placeholder="Rp.">
      </div>
    </div>
    <div class="col-sm-12">
    <label class="sr-only" for="inlineFormInputGroup">Rp.</label>
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text">Max</div>
      </div>
      <input id="max" type="text" class="form-control" name="max" placeholder="Rp.">
    </div>
  </div>
  <div class="card-body">
    <select id="durasi" name="durasi" class="form-control form-control-sm">
      <option value="">Durasi</option>
      <option value="Harian">Harian</option>
      <option value="Mingguan">Mingguan</option>
    </select>
  </div>
  <div class="card-body">
    <select id="promo" name="promo" class="form-control form-control-sm">
      <option value="">Promo</option>
      <option value="Sepaket">Sepaket</option>
      <option value="Satuan">Satuan</option>
    </select>
  </div>
    </div>
    <button type="submit" name="button" style="width: 183px">Filter</button>
          </div>
        </form>
        </div>
        </div>
    <div class="col-sm-8">
            <div class="row">
     <?php $no=1; foreach ($toko as $d ) {?>
      <div class="col-sm-3" style="margin-bottom: 2%;">
            <a href="<?php echo base_url()?>detailtoko/index/<?php echo $d["id"] ?>">
                <div class="card">
                    <img class="card-img-bottom" src="<?php echo site_url();?>gambar/ft.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h7 class="" ><?php echo $d["Nama_Toko"] ?></h7>
                      <p class="">Rp.<?php echo $d["Harga"] ?>/kg</p>
            </a>
                    </div>
              </div>
      </div>

            <?php $no++; ?>
            <?php } ?>
            </div>
    </div>
 </div>

      <h1 style="border-bottom: 5px solid black; border-bottom-width: medium; margin:35px 100px 0px;"></h1>

<div style="margin-top: 0%;" class="d-flex">
    <div class="col-sm-2 "></div>

    <div class="col-sm-3 col-sm-3 align-self-center" style="background-color:white;">
      <img src="<?php echo site_url();?>gambar/x.jpg"  width="250" height="120" >
    </div>
    <div  class="d-flex justify-content-around">
        <div  class="col-md-12 "  style="background-color:white;">
            <h1>Tambahkan Toko Laundry </h1>
            <h1> milik anda!</h1>
            <h6>hanya dengan 1 klik bisa mendapatkan laundry yang diinginkan...</h6>
            <a style="margin-top: 5%; "  width= "220px" height="50px" border-radius= "70" type="button" class="btn btn-primary" href="<?php echo base_url()?>toko/daftar">mau daftar toko laudry?</a>
        </div>
    </div>
</div>


<footer class="footer-copyright text-center "  style="margin-top: 4%; width:100%;height:60px;background:black; color:white">Copyright GO Laundry 2019
</footer>
