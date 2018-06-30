
<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_transaksi=$_POST['id_transaksi'];
 $nama=$_POST['nama'];
 $nama_barang=$_POST['nama_barang'];
 $jml=$_POST['jml'];
 $q=mysqli_query($con,"UPDATE `transaksi` SET `nama`='$nama',`nama_barang`='$nama_barang',`jml`='$jml' where `id_transaksi`='$id_transaksi'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
