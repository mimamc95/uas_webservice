
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/ionic.css">
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/geturi.js"></script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 var id_transaksi = decodeURI(getUrlVars()["id_transaksi"]);
 var nama = decodeURI(getUrlVars()["nama"]);
 var nama_barang = decodeURI(getUrlVars()["nama_barang"]);
 var jml = decodeURI(getUrlVars()["jml"]);
 $("#id_transaksi").val(id_transaksi);
 $("#nama").val(nama);
 $("#nama_barang").val(nama_barang);
 $("#jml").val(jml);
 
 
	$("#update").click(function(){
      var id_transaksi=$("#id_transaksi").val();
      var nama=$("#nama").val();
      var nama_barang=$("#nama_barang").val();
      var jml=$("#jml").val();
      var dataString="id_transaksi="+id_transaksi+"&nama="+nama+"&nama_barang="+nama_barang+"&jml="+jml+"&update=";
	  if($.trim(id_transaksi).length>0 & $.trim(nama).length>0 & $.trim(nama_barang).length>0 & $.trim(jml).length>0)
	 {
		$.ajax({
		type: "POST",
		url:"http://localhost/rest_penjualan/www/update_transaksi.php",
		data: dataString,
		crossDomain: true,
		cache: false,
		beforeSend: function(){ $("#update").val('Connecting...');},
		success: function(data){
		if(data=="success")
		{
		alert("Updated");
		$("#update").val("submit");
		}
		else if(data=="error")
		{
		alert("error");
		}
	   }
	  });
	 }return false;
    });
 
 
    $("#delete").click(function(){
	  var id_transaksi=$("#id_transaksi").val();
	  var dataString="id_transaksi="+id_transaksi+"&delete=";
		$.ajax({
		type: "GET",
		url:"http://localhost/rest_penjualan/www/delete_transaksi.php",
		data: dataString,
		crossDomain: true,
		cache: false,
		beforeSend: function(){ $("#delete").val('Connecting...');},
		success: function(data){
		if(data=="success")
		{
		alert("Deleted");
		$("#delete").val("Delete");
		}
		else if(data=="error")
		{
		alert("error");
		}
	   }
	  });
 	});
 
 });
 </script>
</head>
<body>


<?php
$connection =mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("penjualan",$connection) or die (mysql_error());
$sql_p = mysql_query('SELECT * FROM pelanggan ORDER BY nama ASC;');
$sql_b = mysql_query('SELECT * FROM barang ORDER BY nama_barang ASC;');
?>

 <div class="bar bar-header bar-positive" style="margin-bottom:80px;">
 <a href="index.html" class="button button-clear">Home</a>
 <h1 class="title">Tabel Penjualan</h1>
 <a class="button button-clear" href="json_transaksi.html">Read JSON Tabel Pelanggan</a>
 </div><br/><br/>

 	<div class="list">
 		<input type="hidden" id="id_transaksi" value=""/>

 	<div class="item">
 		<label>Nama Pelanggan</label><br/><br/>
 		<form action="" method="" >
 			<select name="pelanggan" id="nama">
 			<option>-- Pilih Pelanggan --</option>
 				<?php if (mysql_num_rows($sql_p) > 0){ ?>
 		 			<?php while ($row = mysql_fetch_array($sql_p)) { ?>
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
 <input type="button" id="update" class="button button-block" value="Update"/>
 <input type="button" id="delete" class="button button-block" value="Delete"/>
 </div>
 </div>
 
</body>
</html>
