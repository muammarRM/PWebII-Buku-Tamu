<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Daftar Komentar Buku Tamu</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>Daftar Komentar dalam Buku Tamu</header>
<?php
require("koneksi.php");
$sql = "SELECT id, nama, email, url, komentar FROM bukutamu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr bgColor='#AFEEEE'>";
    echo "<th>Nama</th>";
    echo "<th>Email</th>";
    echo "<th>URL</th>";
    echo "<th>Komentar</th>";
    echo "<th>Aksi</th>";
    echo "</tr>";
    // output data of each row
    // Bagian di dalam loop while di `tampil_data.php`
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
        echo "<td><a href='" . htmlspecialchars($row["url"]) . "'>" . htmlspecialchars($row["url"]) . "</a></td>";
        echo "<td>" . htmlspecialchars($row["komentar"]) . "</td>";
        echo "<td><a href='edit_data.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_data.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<i>Belum ada komentar.</i>";
}
?>
    <div class="footer-link">
        <a href="tambah_data.php">Isi Buku Tamu</a>
        <a href="index.php">Kembali ke Beranda</a>
    </div>
</body>
</html>
