<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="proses_tambah_surat.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="modalTambahTitle">Tambah Arsip Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label for="nomor" class="form-label">Nomor Surat</label>
              <input type="text" id="nomor" name="nomor" class="form-control" placeholder="Masukkan Nomor Surat" required />
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select id="kategori" name="kategori" class="form-select" required>
                <option value="">Pilih Kategori...</option>
                <option value="masuk">Surat Masuk</option>
                <option value="keluar">Surat Keluar</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="perihal" class="form-label">Perihal</label>
              <textarea id="perihal" name="perihal" class="form-control" rows="3" placeholder="Isi perihal surat..." required></textarea>
            </div>
          </div>
          <div class="row g-2">
            <div class="col mb-0">
              <label for="pengirim" class="form-label">Pengirim / Tujuan</label>
              <input type="text" id="pengirim" name="pengirim" class="form-control" placeholder="Nama Instansi/Orang" required />
            </div>
            <div class="col mb-0">
              <label for="tanggal" class="form-label">Tanggal</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>