<style>
    @media print {
        .no-print {
            display: none;
        }
    }
</style>
<div class="container py-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <h4 class="text-center">POS PAUD SRI REJEKI</h4>
                <small class="text-center">Laporan Pembayaran</small>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>No. Induk Siswa</th>
                                <td>:</td>
                                <td><?= $siswa['nomor_induk']; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Siswa</th>
                                <td>:</td>
                                <td><?= $siswa['nama_siswa']; ?></td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>:</td>
                                <td><?= $siswa['kelas']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>Pembayaran Bulan</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                    </tr>
                    <?php foreach ($bayar as $b) : ?>
                        <tr>
                            <td><?= $b['bulan']; ?></td>
                            <td><?= $b['jml']; ?></td>
                            <td><?= $b['ket']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <div class="row">
                    <div class="col-md-3 offset-md-9">
                        <table>
                            <tr>
                                <td></td>
                                <td>
                                    <p>Malang, <?= date('d-m-Y'); ?><br>
                                        Operator</p>
                                    <br><br>
                                    <p>_______________________</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.print();
</script>