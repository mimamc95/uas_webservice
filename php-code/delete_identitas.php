
<?php
 include "db.php";
 if(isset($_GET['id_ide']))
 {

$id_ide=$_GET['id_ide'];
 $q=mysqli_query($con,"delete from `identitas` where `id_ide`='$id_ide'");

 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
