
<?php
 include "db.php";
 if(isset($_GET['id_fas']))
 {
 $id_fas=$_GET['id_fas'];
 $q=mysqli_query($con,"delete from `fasilitas` where `id_fas`='$id_fas'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
