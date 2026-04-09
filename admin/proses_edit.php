<?php
// admin/proses_edit.php
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id       = $_POST['id'];
    $nomor    = mysqli_real_escape_string($conn, $_POST['nomor']);
    $pengirim = mysqli_real_escape_string($conn, $_POST['pengirim']);
    $tanggal  = $_POST['tanggal'];
    $perihal  = mysqli_real_escape_string($conn, $_POST['perihal']);

    $query = "UPDATE surat SET 
                nomor_surat='$nomor', 
                pengirim_tujuan='$pengirim', 
                tanggal='$tanggal', 
                perihal='$perihal' 
              WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php?status=updated");
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>