<?php
// admin/proses_tambah.php
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menghindari SQL Injection dasar
    $nomor    = mysqli_real_escape_string($conn, $_POST['nomor']);
    $kategori = $_POST['kategori'];
    $perihal  = mysqli_real_escape_string($conn, $_POST['perihal']);
    $pengirim = mysqli_real_escape_string($conn, $_POST['pengirim']);
    $tanggal  = $_POST['tanggal'];

    // Query untuk menyimpan ke tabel surat
    $query = "INSERT INTO surat (nomor_surat, kategori, perihal, pengirim_tujuan, tanggal) 
              VALUES ('$nomor', '$kategori', '$perihal', '$pengirim', '$tanggal')";

    if (mysqli_query($conn, $query)) {
        // Redirect kembali ke halaman index admin jika sukses
        header("Location: index.php?status=sukses");
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>