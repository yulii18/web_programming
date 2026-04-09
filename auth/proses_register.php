<?php
// auth/proses_register.php
include '../config/koneksi.php'; // Mengambil koneksi dari folder config

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama     = mysqli_real_escape_string($conn, $_POST['nama']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Enkripsi password agar aman
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan user baru
    $query = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password_hashed')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Registrasi Berhasil! Silakan Login.');
                window.location='login.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>