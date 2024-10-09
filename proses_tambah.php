<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Membuat Buku Tamu</title>
</head>
<body>
<?php
if(isset($_POST["kirim"])){
$nama = $_POST["nama"];
$email = $_POST["email"];
$url = $_POST["url"];
$komentar = $_POST["komentar"];
require("koneksi.php");
$sql="insert into bukutamu(nama,
email,"."url,komentar)"."values('$nama','$email','$url',"."'$komentar')";
mysqli_query($conn,$sql);
$num=mysqli_affected_rows($conn);
if ($num > 0){
?>
<h2>Terima Kasih</h2>
<strong><?php echo $nama; ?></strong>,
komentar anda telah tersimpan.<br/>
[<a href="tampil_data.php">Lihat Daftar Komentar</a>]
<br/> <br/>
<?php
}else{
?>
<hr>error<h2>
Proses pencatatan bukutamu gagal. Silahkan Ulangi!
<br/>
[<a href="tambah_data.php">Kembali ke Form Pencatatan Buku Tamu</a>]
<?php
}
}
?>
</body>
</html> 