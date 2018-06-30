<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $nama_barang=$_POST['nama_barang'];
 $jml=$_POST['jml'];
 $q=mysqli_query($con,"INSERT INTO `transaksi` (`nama`,`nama_barang`,`jml`) VALUES ('$nama','$nama_barang','$jml')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
