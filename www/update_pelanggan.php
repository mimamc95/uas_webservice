
<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $jk=$_POST['jk'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"UPDATE `pelanggan` SET `nama`='$nama',`jk`='$jk',`alamat`='$alamat' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
