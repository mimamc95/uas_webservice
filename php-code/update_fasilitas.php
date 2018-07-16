
<?php
 include "db.php";
 if(isset($_POST['update']))
 {

 $id_fas=$_POST['id_fas'];	 
 $salju=$_POST['salju'];
 $pijat=$_POST['pijat'];
 $gratis=$_POST['gratis'];
	 
 $q=mysqli_query($con,"UPDATE `fasilitas` SET `salju`='$salju',`pijat`='$pijat',`gratis`='$gratis' where `id_fas`='$id_fas'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
