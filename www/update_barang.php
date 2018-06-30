
<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_barang=$_POST['id_barang'];
 $nama_barang=$_POST['nama_barang'];
 $berat=$_POST['berat'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `barang` SET `nama_barang`='$nama_barang',`berat`='$berat',`harga`='$harga' where `id_barang`='$id_barang'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
