<?php
include 'koneksi.php';

// Cek apakah ID telah diberikan sebagai input
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Mengambil data berdasarkan ID
    $sql = "SELECT * FROM bukutamu WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)) {
        // Data ditemukan
    } else {
        // Data tidak ditemukan
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak diberikan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Komentar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>Edit Komentar</header>
    <form action="update_data.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <table>
            <tr>
                <td>Nama Anda</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Email Anda</td>
                <td><input type="text" name="email" value="<?php echo $row['email']; ?>" required></td>
            </tr>
            <tr>
                <td>URL</td>
                <td><input type="text" name="url" value="<?php echo $row['url']; ?>" required></td>
            </tr>
            <tr>
                <td>Komentar Anda</td>
                <td><textarea name="komentar" required><?php echo $row['komentar']; ?></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
        <!-- Link untuk kembali ke halaman utama -->
        <div class="footer-link">
            <a href="index.php">Kembali ke Beranda</a>
        </div>
</body>
</html>
