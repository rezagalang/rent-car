// Sweetalert delete
$('.deleteBtn').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    Swal.fire({
        title: 'Yakin hapus data ini?',
        text: 'Pastikan dulu agar tidak salah 🙏',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oke'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
    });
});

// Datatables
$(document).ready( function () {
    $('#dataTable').DataTable();
});