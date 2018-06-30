
<?php
 include "db.php";
 if(isset($_GET['id_transaksi']))
 {
 $id_transaksi=$_GET['id_transaksi'];
 $q=mysqli_query($con,"delete from `transaksi` where `id_transaksi`='$id_transaksi'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
