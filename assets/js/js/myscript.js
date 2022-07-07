const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Data berhasil disimpan! Mohon tunggu informasi selanjutya ' + flashData,
        showConfirmButton: false,
        timer: 3000
    });
}