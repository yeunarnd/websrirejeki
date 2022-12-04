<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; PAUD Sri Rejeki <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar???</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih Keluar di bawah jika anda siap untuk mengakhiri sesi anda saat ini.</div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="<?= base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery-1.11.2.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Demo scripts for this page-->
<script src="<?= base_url('assets/js/demo/datatables-demo.js'); ?>"></script>
<script src="<?= base_url('assets/js/demo/chart-area-demo.js'); ?>"></script>

<script>
    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        })
    });
</script>

<script type="text/javascript">
    function pilih_kode() {
        var kd_daftar = $("#kd_daftar").val();
        $.ajax({
            url: "<?php echo base_url('siswa/tampil_data') ?>",
            data: "kd_daftar=" + kd_daftar,
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $("#nama_siswa").val(data.nama_siswa);
                $("#jkel").val(data.jkel);
                $("#alamat").val(data.alamat);
                $("#kelas").val(data.kelas);
            }
        });
    }
    $(function() {
        $(document).ready(function() {
            $('#kd_daftar').select2()
        });
    });
</script>

<script type="text/javascript">
    function datatahun() {
        var kd_daftar = $("#kd_daftar").val();
        $.ajax({
            url: "<?php echo base_url('daftar/list_tahun') ?>",
            data: "kd_daftar=" + kd_daftar,
            success: function(html) {
                data = JSON.parse(html);
                isi_tabel = '';
                data.forEach(function(item, index) {
                    isi_tabel += `
                    <tr>
                    <td>` + (index + 1) + `</td>
                    <td>` + item.kd_daftar + `</td>
                    <td>` + item.tgl_daftar + `</td>
                    <td>` + item.nama_siswa + `</td>
                    <td>` + item.status + `</td>

                    <td>
                    <button class="btn btn-tambah btn-danger btn-xs" onclick="add('` + item.kd_daftar + `','` + item.tgl_daftar + `','` + item.nama_siswa + `','` + item.status + `')" data-dismiss="modal">Pilih</button>
                    </td>
                    </tr>
                    `;
                });
                $('#list_tahun').html(isi_tabel);
                // $("#xtahun").dataTable();
            }
        });
    }
</script>

</body>

</html>