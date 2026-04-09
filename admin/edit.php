<?php
// admin/edit.php
include '../layouts/header.php';
include '../config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM surat WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Edit Arsip Surat</h4>
</div>

<div class="card p-4">
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Nomor Surat</label>
            <input type="text" name="nomor" value="<?= $d['nomor_surat']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pengirim / Tujuan</label>
            <input type="text" name="pengirim" value="<?= $d['pengirim_tujuan']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" value="<?= $d['tanggal']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Perihal</label>
            <textarea name="perihal" class="form-control" rows="3" required><?= $d['perihal']; ?></textarea>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="index.php" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>
</div>

<?php include '../layouts/footer.php'; ?>