<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $salju=$_POST['salju'];
 $pijat=$_POST['pijat'];
 $gratis=$_POST['gratis'];
 
 $q=mysqli_query($con,"INSERT INTO `fasilitas` (`salju`,`pijat`,`gratis`) VALUES ('$salju','$pijat','$gratis')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
