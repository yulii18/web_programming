document.addEventListener('DOMContentLoaded', function() {

    // VALIDASI BOOTSTRAP
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    // SWEET ALERT HAPUS
    const tombolHapus = document.querySelectorAll('.btn-hapus');
    tombolHapus.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();

            const link = this.getAttribute('href');

            Swal.fire({
                title: 'Yakin hapus?',
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                }
            });
        });
    });

    // DATATABLE FIX
    if (typeof $ !== 'undefined' && $.fn.DataTable) {

        if ($('#tabelSurat').length > 0) {
            $('#tabelSurat').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json'
                }
            });
        }

        if ($('#tabelSuratMasuk').length > 0) {
            $('#tabelSuratMasuk').DataTable({
                responsive: true
            });
        }

        if ($('#tabelSuratKeluar').length > 0) {
            $('#tabelSuratKeluar').DataTable({
                responsive: true
            });
        }
    }

});