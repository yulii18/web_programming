<?php 
include '../layouts/header.php'; 
include '../config/koneksi.php'; 
?>


<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Manajemen Surat</h4>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">+ Tambah Data</button>
</div>

<div class="card p-4">
    <table id="tabelSurat" class="table table-hover">
        <thead>
            <tr>
                <th>Nomor Surat</th>
                <th>Kategori</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM surat"); // Ambil data dari tabel surat
            while($d = mysqli_fetch_array($data)){
                ?>
            <tr>
                <td><?= $d['nomor_surat']; ?></td>
                <td><?= $d['kategori']; ?></td>
                <td><?= $d['perihal']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm btn-hapus">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</div>

<?php include '../layouts/modal.php'; ?>
<?php include '../layouts/footer.php'; ?>