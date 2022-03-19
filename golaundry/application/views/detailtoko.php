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


    <div class=" d-flex" style=" margin-top: 2%;">
  <!-- The slideshow -->
      <img  src="<?php echo base_url()?>gambar/l1.jpg" alt="Gambar - 1" width="390" height="300">
    <img  src="<?php echo base_url()?>gambar/l2.jpg" alt="Gambar - 2" width="390" height="300">
    <img  src="<?php echo base_url()?>gambar/l3.jpg" alt="Gambar - 3" width="400" height="300">
    </div>
    <div class=" row" >
      <h1 class="" align="left" style=" margin:50px 245px 0px;"><b><?php echo $toko["Nama_Toko"]; ?></b></h1>
      <h7 align="center" style=" margin:0px 250px 0px;"><?php echo $toko["Alamat_Toko"]; ?></h7>
      <div class="col-sm-8">
        <h6 class="fas fa-store fa" style=" margin:0px 220px 0px;"  style="font-size:15px;"><?php echo $toko["Motto"]; ?></h6>
        <h6 class="col-sm-6"style="border-bottom: 2px solid black; border-bottom-width: medium; margin:15px 200px 0px;"></h6>
          <h5 class="col-sm-4" style=" margin:5px 200px 0px;"><b>Deskripsi</b></h5>
           <h6 class="col-sm-6" style="font-size:13px; margin:15px 200px 0px;"><?php echo $toko["Deskripsi"]; ?></h6>
              <h6 class="col-sm-6"style="border-bottom: 2px solid black; border-bottom-width: medium; margin:15px 200px 0px;"></h6>
            <h5 class="col-sm-4" style=" margin:15px 200px 0px;"><b>Nomor Hp Toko</b></h5>
            <a  style="border-radius: 10px; border-color: black; border-style:solid; width: 150px;  margin:15px 220px 0px;" href="#" class="btn btn-outline "><?php echo $toko["Nomor_hp"]; ?></a>
            <h6 class="col-sm-6"style="border-bottom: 2px solid black; border-bottom-width: medium; margin:15px 200px 0px;"></h6>
                <!-- <h5 class="col-sm-6" style=" margin:15px 200px 0px;"><b>Ulasan :</b></h5>

                <div class="media" style=" margin:15px 220px 0px;">
                  <i class="fas fa-user-circle fa-2x" ></i>
                  <div class="media-body">

                    <p>Lorem ipsum...</p>
                  </div>
                </div>


                <!-- Media middle -->
                <?php foreach ($ulasan as $u ) { ?>
                <div class="media" style=" margin:15px 220px 0px;">
                <i class="fas fa-user-circle fa-2x" ></i>
                  <div class="media-body">

                    <p><?php echo $u['Ulasan']; ?></p>
                  </div>
                </div>
              <?php } ?>
      </div>

      <div class="col-sm-3" style="margin:-90px 0px 0px; ">
      <div class="list-group"  >
      <?php
              if ($this->session->userdata('status') == "login") {
                  ?>
                  <form role="form" method="POST" action="<?php echo base_url()?>detailtoko/pesan">
                    <input type="hidden" name="Id_Pegawai" value="<?php echo $toko["id"]; ?>">
                  <div class="list-group-item list-group-item-action" >Tanggal
              <br><br>

              <div class="d-flex" >
                      <div class="input-group date" >
            <div class="input-group-addon" >
                   <span class="glyphicon glyphicon-th"></span>
              <label>Tanggal Awal</label>
                   <br>
               <input style="width: 100px; border-radius: 10px;" data-date-format="yyyy-mm-dd" class="form-control datepicker" id="datepicker" name="tgl_awal" Required>
           </div>
          </div>
            <br>
          <div class="form-group">
           <div class="input-group date">
            <div class="input-group-addon">
                   <label>Tanggal Akhir</label>
                <br>
               <input style="width: 100px; border-radius: 10px;" data-date-format="yyyy-mm-dd" class="form-control datepicker" id="datepicker2" name="tgl_akhir" Required>
               </div>

           </div>
                  </div>
                  </div>
                   <label>Pesan</label>
                   <br>
                   <textarea name="message" style="width:200px; height:60px;">
                   </textarea>
                   <br><br>
                   <h5 class=""align="left" style=""><b>Harga Per Kilo Rp.<?php echo $toko["Harga"]; ?></b></h5>
                     <h6 class=""style="border-bottom: 2px solid black; border-bottom-width: medium;"></h6>
                   <button type="submit" align="center" class="btn btn-primary">Pesan</button>
                </div>
              </form>
              <?php
          } else {
              ?>
              <div class="list-group-item list-group-item-action" >Tanggal
              <br><br>
                      <div class="input-group date">
            <div class="input-group-addon">
                   <span class="glyphicon glyphicon-th"></span>
               <input placeholder=" tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
           </div>
          </div>
            <br>
          <div class="form-group">
           <div class="input-group date">
            <div class="input-group-addon">
                   <span class="glyphicon glyphicon-th"></span>
               </div>
               <input placeholder=" tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir">
           </div>
                  </div>
                   <label>Pesan</label>
                   <br>
                   <textarea name="message" style="width:200px; height:60px;">
                   </textarea>
                   <br><br>
                   <h5 class=""align="left" style=""><b>Harga Per Kilo Rp.<?php echo $toko["Harga"]; ?></b></h5>
                     <h6 class=""style="border-bottom: 2px solid black; border-bottom-width: medium;"></h6>
                     <a style="border-radius: 40px; border-color: black; border-style:solid; width: 200px;" href="<?php echo base_url()?>masuk" class="btn btn-outline ">Login Untuk Pesan</a>
                </div>
              <?php
          }
          ?>

      </div>

      </div>

    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script>
<script type="text/javascript">
    $('#datepicker2').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker2').datepicker("setDate", new Date());
</script>
    <footer class="footer-copyright text-center "  style="margin-top: 10%; width:100%;height:60px;background:black; color:white">Copyright GO Laundry 2019

    </footer>
