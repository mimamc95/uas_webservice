<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_barang=$_POST['nama_barang'];
 $berat=$_POST['berat'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`nama_barang`,`berat`,`harga`) VALUES ('$nama_barang','$berat','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
