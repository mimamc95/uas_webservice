
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/ionic.css">
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 $("#insert").click(function(){
 var nama=$("#nama").val();
 var nama_barang=$("#nama_barang").val();
 var jml=$("#jml").val();
 var dataString="nama="+nama+"&nama_barang="+nama_barang+"&jml="+jml+"&insert=";
 if($.trim(nama).length>0 & $.trim(nama_barang).length>0 & $.trim(jml).length>0)
 {
 $.ajax({
 type: "POST",
 url:"https://uasaganhanif.000webhostapp.com/insert_transaksi.php",
 data: dataString,
 crossDomain: true,
 cache: false,
 beforeSend: function(){ $("#insert").val('Connecting...');},
 success: function(data){
 if(data=="success")
 {
 alert("Berhasil");
 $("#insert").val('update');
 }
 else if(data=="error")
 {
 alert("error");
 }
 }
 });
 }return false;
 });
 
 
 });
 </script>
</head>
<body>

<?php
$db = mysql_connect('localhost','id6331087_root','demorele') or die("Database error");
mysql_select_db('id6331087_penjualan', $db);

//SOLUTION::  add this comment before your 1st query -- force multiLanuage support
$result = mysql_query("set names 'utf8'");

$query = "select * from pelanggan";
$result = mysql_query($query); 

/*
$connection = mysqli_connect("localhost","id6331087_root","demorele");
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

$db_select = mysqli_select_db($connection, "id6331087_penjualan");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
    
}
*/

/*
$connection =mysqli_connect("localhost","id6331087_root","demorele","id6331087_penjualan") or die (mysqli_error());
mysqli_select_db("id6331087_penjualan",$connection) or die (mysqli_error());
*/
//$sql_p = mysql_query('SELECT * FROM pelanggan ORDER BY nama ASC;');
//$sql_b = mysql_query('SELECT * FROM barang ORDER BY nama_barang ASC;');
?>



 	<div class="bar bar-header bar-positive" style="margin-bottom:80px;">
 		<a class="button button-clear" href="index.html">Home</a>	
 		<h1 class="title">Insert Database Tabel Transaksi</h1>
 		<a class="button button-clear" href="json_transaksi.html">Read JSON Tabel Transaksi</a>
 	</div><br/><br/>

 	<div class="list">
 		<input type="hidden" id="id" value=""/>

 	<div class="item">
 		<label>Nama Pelanggan</label><br/><br/>
 		<form action="" method="" >
 			<select name="pelanggan" id="nama">
 			<option>-- Pilih Pelanggan --</option>
 				<?php if (mysql_num_rows($query) > 0){ ?>
 		 			<?php while ($row = mysql_fetch_array($query)) { ?>
 		  				<option><?php echo $row['nama'] ?></option>
 		  			<?php } ?>
 		  		<?php } ?>
 		  	</select>	
 		</form>
 	</div>

 	<div class="item" >
 		<label>Nama Barang</label> <br/><br/>
 		<form action="" method="" >
 			<select name="barang" id="nama_barang">
 			<option>-- Pilih Barang --</option>
 				<?php if (mysql_num_rows($sql_b) > 0){ ?>
 		 			<?php while ($row = mysql_fetch_array($sql_b)) { ?>
 		  				<option><?php echo $row['nama_barang'] ?></option>
 		  			<?php } ?>
 		  		<?php } ?>
 		  	</select>	
 		</form>
 	</div>

 	<div class="item">
 		<label>Jumlah</label>
 		<input type="text" id="jml" value=""/>
 	</div>


 	<div class="item">
 		<input type="button" id="insert" class="button button-block" value="Insert"/>
 	</div>
 </div>
</body>
</html>
