<?php
// layouts/header.php
session_start();

// Proteksi halaman admin
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

// Mengambil nama file yang sedang dibuka untuk logic menu aktif
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SI ARSIP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../style.css"> 
</head>
<body>
    <div class="sidebar d-flex flex-column p-3">
        <h4 class="fw-bold text-primary mb-4 ps-3">SI ARSIP</h4>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : ''; ?>">
                    <i class="fas fa-home me-2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="surat_masuk.php" class="nav-link <?= ($current_page == 'surat_masuk.php') ? 'active' : ''; ?>">
                    <i class="fas fa-envelope-open me-2"></i> Surat Masuk
                </a>
            </li>
            <li>
                <a href="surat_keluar.php" class="nav-link <?= ($current_page == 'surat_keluar.php') ? 'active' : ''; ?>">
                    <i class="fas fa-paper-plane me-2"></i> Surat Keluar
                </a>
            </li>
        </ul>
        <hr>
        <a href="../auth/logout.php" class="nav-link text-danger fw-bold">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </div>
    <div class="main-content">