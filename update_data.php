<?php
include 'koneksi.php';

// Cek jika data telah dikirim melalui form
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $komentar = $_POST['komentar'];

    $sql = "UPDATE bukutamu SET nama='$nama', email='$email', url='$url', komentar='$komentar' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
header('Location: tampil_data.php');
exit;
?>
