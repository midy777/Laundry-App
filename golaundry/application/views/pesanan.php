

        <h4 align ="center" style="margin-top: 2%">DAFTAR PESANAN LAUNDRY</h4>

        <div class="" style="margin:40px 90px 40px; border:2px solid black ;border-radius:8px  ;width: 1000px">
 <ul class="list-group"  style="border-radius: 40%; ">
<?php foreach ($pesanan as $d ) { ?>
 <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark" style=""><?php echo $d["Nama_Pelanggan"] ?><div style="margin: 0px 48px 0px 0px">
<?php
 if($d['StatusPesanan'] == 0){
   echo "Pesanan Baru";
 }elseif ($d['StatusPesanan'] == 1) {
   echo "Penjemputan";
 }elseif ($d['StatusPesanan'] == 2) {
   echo "Pencucian";
 }elseif ($d['StatusPesanan'] == 3) {
   echo "Pengeringan & Sterika";
 }elseif ($d['StatusPesanan'] == 4) {
   echo "Packing Pakaian";
 }elseif ($d['StatusPesanan'] == 5) {
   echo "Pengantaran";
 }elseif ($d['StatusPesanan'] == 6) {
   echo "Pesanan Selesai";
 }else{
   echo "Error";
 }
?>
 </div>

   <div class="btn-group">
   <button class="btn btn-default btn-sm dropdown-toggle list-group-item list-group-item-action" type="button" data-toggle="dropdown">Status Pesanan</button>
       <div class="dropdown-menu">
     <a class="dropdown-item" href="<?php echo base_url()?>pesanan/penjemputan/<?php echo $d['Id_Pesanan'] ?>">PENJEMPUTAN</a>
     <a class="dropdown-item" href="<?php echo base_url()?>pesanan/pencucian/<?php echo $d['Id_Pesanan'] ?>">PENCUCIAN</a>
     <a class="dropdown-item" href="<?php echo base_url()?>pesanan/setrika/<?php echo $d['Id_Pesanan'] ?>">PENGERINGAN & SETRIKA</a>
     <a class="dropdown-item" href="<?php echo base_url()?>pesanan/packing/<?php echo $d['Id_Pesanan'] ?>">PACKING PAKAIAN</a>
     <a class="dropdown-item" href="<?php echo base_url()?>pesanan/pengantaran/<?php echo $d['Id_Pesanan'] ?>">PENGANTARAN</a>
   </div>

 </li>

<?php } ?>
</ul>
</div>
 </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
<div class="footer-copyright text-center py-3"  style="width:100%;height:51px;background:black; color:white">Copyright GO Laundry 2019
</div>
</html>
