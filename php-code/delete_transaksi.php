
<?php
 include "db.php";
 if(isset($_GET['id_tran']))
 {


  $id_transaksi=$_GET['id_tran'];
 $q=mysqli_query($con,"delete from `transaksi` where `id_tran`='$id_tran'");
 if($q)
	 


 echo "success";
 else
 echo "error";
 }
 ?>
