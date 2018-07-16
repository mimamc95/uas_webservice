
<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_tran=$_POST['id_tran'];
 $plat=$_POST['plat'];
 $kendaraan=$_POST['kendaraan'];
 $biaya=$_POST['biaya'];
	 

 $q=mysqli_query($con,"UPDATE `transaksi` SET `plat`='$plat',`kendaraan`='$kendaraan',`biaya`='$biaya' where `id_tran`='$id_tran'");
 if($q)


 echo "success";
 else
 echo "error";
 }
 ?>
