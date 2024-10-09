<?php
include 'koneksi.php';

// Cek apakah ID telah diberikan sebagai input
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM bukutamu WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak diberikan.";
}
header('Location: tampil_data.php');
exit;
?>
