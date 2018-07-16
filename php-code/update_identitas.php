
<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_ide=$_POST['id_ide'];
 $nama=$_POST['nama'];
 $plat=$_POST['plat'];
 $kendaraan=$_POST['kendaraan'];
	 
$q=mysqli_query($con,"UPDATE `identitas` SET `nama`='$nama',`plat`='$plat',`kendaraan`='$kendaraan' where `id_ide`='$id_ide'");
 if($q)	 
 
 echo "success";
 else
 echo "error";
 }
 ?>
