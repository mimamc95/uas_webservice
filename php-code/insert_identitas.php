<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $plat=$_POST['plat'];
 $kendaraan=$_POST['kendaraan'];

  $q=mysqli_query($con,"INSERT INTO identitas(nama,plat,kendaraan) VALUES ('$nama','$plat','$kendaraan')");
 if($q)
  echo"success";
 else
  echo"error";
 }
 ?>
