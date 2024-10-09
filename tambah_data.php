<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Buku Tamu</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
<body>
<header>Buku Tamu</header>
<h2>Form Pencatatan Buku Tamu</h2>
<form action="proses_tambah.php" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" maxlength="50" size="50" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" maxlength="50" size="50" /></td>
        </tr>
        <tr>
            <td>URL</td>
            <td><input type="text" name="url" maxlength="100" size="50" /></td>
        </tr>
        <tr>
            <td valign="top">Komentar</td>
            <td><textarea name="komentar" cols="50" rows="6"></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="kirim" value="Kirim"></td>
        </tr>
    </table>
</form>
        <!-- Link untuk kembali ke halaman utama -->
        <div class="footer-link">
            <a href="index.php">Kembali ke Beranda</a>
        </div>
</body>
</html>
