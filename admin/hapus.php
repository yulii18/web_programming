<?php
// admin/hapus.php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query hapus dengan syntax yang benar
    $query = mysqli_query($conn, "DELETE FROM surat WHERE id='$id'");

    if ($query) {
        // Kembali ke halaman index admin setelah berhasil
        header("Location: index.php?status=terhapus");
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
}
?>