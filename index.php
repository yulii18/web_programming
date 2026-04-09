<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI ARSIP - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container py-2">
            <a class="navbar-brand fw-bold text-primary" href="index.php">SI ARSIP</a>
            <div class="d-flex align-items-center">
                <a href="auth/login.php" class="btn btn-outline-primary btn-interactive me-2">Login</a>
                <a href="auth/register.php" class="btn btn-primary btn-interactive">Register</a>
            </div>
        </div>
    </nav>

    <section class="hero-section text-center py-5">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3 animate-fade-in-up">Manajemen Arsip Surat Digital</h1>
            <p class="lead text-muted mb-5 animate-fade-in-up-delay-1">Kelola surat masuk dan keluar dengan lebih terstruktur, aman, dan efisien dalam satu dashboard terintegrasi.</p>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 animate-fade-in-up-delay-2">
                    <a href="auth/login.php" class="feature-card-link">
                        <div class="card feature-card p-4 h-100 text-center">
                            <div class="icon-box mb-4">
                                <i class="fas fa-bolt fa-3x"></i>
                            </div>
                            <h3>Cepat</h3>
                            <p>Pencarian data surat hanya dalam hitungan detik.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4 animate-fade-in-up-delay-3">
                    <a href="auth/login.php" class="feature-card-link">
                        <div class="card feature-card p-4 h-100 text-center">
                            <div class="icon-box mb-4">
                                <i class="fas fa-folder-open fa-3x"></i>
                            </div>
                            <h3>Terorganisir</h3>
                            <p>Pemisahan kategori surat masuk dan keluar secara otomatis.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4 animate-fade-in-up-delay-4">
                    <a href="auth/login.php" class="feature-card-link">
                        <div class="card feature-card p-4 h-100 text-center">
                            <div class="icon-box mb-4">
                                <i class="fas fa-lock fa-3x"></i>
                            </div>
                            <h3>Aman</h3>
                            <p>Sistem login terproteksi untuk menjaga kerahasiaan dokumen.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4 bg-white shadow-sm mt-5">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2026 Sneat ARSIP - Solusi Pengarsipan Digital Anda</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>