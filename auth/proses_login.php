<?php
// auth/proses_login.php
session_start();
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password yang diinput dengan yang ada di database
        if (password_verify($password, $user['password'])) {
            // Set session untuk proteksi halaman admin
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];

            header("Location: ../admin/");
            exit;
        } else {
            echo "<script>
                    alert('Password salah!');
                    window.location='login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Email tidak terdaftar!');
                window.location='login.php';
              </script>";
    }
}
?>