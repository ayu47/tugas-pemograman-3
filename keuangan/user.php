<!DOCTYPE html>
<html>
<html>
    <title>prameshayu.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if(!empty($_POST['save'])){
    
$Nama = $_POST['Nama'];
$Password = $_POST['Password'];
$level = $_POST ['level'];
$status = $_POST ['stasus'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into user values('','$Nama','$Password','$level','$stasus')");
if($a){
    //menggalihkan halaman kembali
    header("location:tampil_user.php");
}else{
    echo mysqli_error($koneksi);
}
}
$squerykategori = "SELECT * FROM kategori";
$resultkategori = mysqli_query($koneksi,$squerykategori);
?>
<body>
    <h2>prameshayu 2022</h2>
    <br/>
    <a href="tampil_user.php">kembali</a>
<br/>
<br/>
    <h3>tambah data user</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="Password"></td>
</tr>
<tr>
    <td>level</td>
    <td><select name="level">
    <option value="">-----pilih</option>
    <option value="1">admin</option>
    <option value="2">staff</option>
    <option values="3">spv</option>
    <option values="4">mgr</option>
</select>
</td>
</tr>
<tr>
    <td>stasus</td>
    <td><select name="stasus">
        <option value="">-----pilih</option>
        <option value="1">aktif</option>
        <option value="0">tdk aktif</option>
</select>
</td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="save"></td>
</tr>
</table>
</form>
</body>
</html>