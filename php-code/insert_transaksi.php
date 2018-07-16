<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $tanggal=$_POST['tanggal'];
 $plat=$_POST['plat'];
 $kendaraan=$_POST['kendaraan'];
 $biaya=$_POST['biaya'];

$q=mysqli_query($con,"INSERT INTO transaksi(plat,kendaraan,biaya) VALUES ('$plat','$kendaraan','$biaya')");
 if($q)

  echo "success";
 else
  echo "error";
 }
 ?>
