<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $jk=$_POST['jk'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `pelanggan` (`nama`,`jk`,`alamat`) VALUES ('$nama','$jk','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
