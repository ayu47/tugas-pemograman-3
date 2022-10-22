<! DOCTYPE html>
<html>
<html>
<title>prameshayu.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$nama_kategori= $_POST['nama_kategori'];
$a=mysqli_query($koneksi,"insert into kategori values('','$nama_kategori')");
if ($a){
header("location:tampil_kategori.php");
}else{
	echo mysqli_error($koneksi);
}
}

?>
<body>
<h2>prameshayu.com<h/2>
<br/>
<a href="tampil_kategori.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA KATEGORI</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Kategori</td>
	<td><input type="text" Name="nama_kategori"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>

