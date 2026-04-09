<?php 
include '../layouts/header.php'; 
include '../config/koneksi.php'; 
?>


    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold"><span class="text-muted fw-light">Arsip /</span> Surat Keluar</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">+ Tambah Surat Keluar</button>
    </div>

    <div class="card p-4">
        <div class="table-responsive">
            <table id="tabelSuratKeluar" class="table table-hover w-100">
                <thead>
                    <tr>
                        <th>No. Agenda</th>
                        <th>Tujuan Surat</th>
                        <th>No. Surat</th>
                        <th>Tgl Kirim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = mysqli_query($conn, "SELECT * FROM surat WHERE kategori='keluar'");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?= $d['id']; ?></td>
                        <td><?= $d['pengirim_tujuan']; ?></td>
                        <td><?= $d['nomor_surat']; ?></td>
                        <td><?= $d['tanggal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm btn-hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../layouts/modal.php'; ?>
<?php include '../layouts/footer.php'; ?>
