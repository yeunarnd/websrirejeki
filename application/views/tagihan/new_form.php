<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('tagihan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-3">
                <!-- <div class="card-header">
                    <a href="<?php echo site_url('tagihan') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div> -->
                <div class="card-body">

                    <form class="user" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="nomor_induk">Nomor Induk Siswa</label>
                            <select name="nomor_induk" class="form-control">
                                <option value="">Pilih No. induk</option>
                                <?php foreach ($dataid as $data) : ?>
                                    <!-- <option value="<?php echo $data->nomor_induk ?>"><?php echo $data->nama_siswa ?></option> -->
                                    <option value="<?php echo $data->nomor_induk ?>"><?php echo $data->nomor_induk ?> - <?php echo $data->nama_siswa ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nm_tagihan">Nama Tagihan</label>
                            <select class="form-control <?php echo form_error('kode_jenis') ? 'is-invalid' : '' ?>" name="kode_jenis" id="kode_jenis" onchange="pilih_kodejenis()">
                                <option value="">Pilih jenis tagihan</option>
                                <?php
                                $list = $this->db->query("SELECT * FROM jenis_pembayaran");
                                foreach ($list->result() as $t) {
                                ?>
                                    <option value="<?php echo $t->kode_jenis ?>"><?php echo $t->kode_jenis ?> - <?php echo $t->jenis_bayar ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jatuh_tempo">Tanggal Jatuh Tempo</label>
                            <input class="form-control <?php echo form_error('jatuh_tempo') ? 'is-invalid' : '' ?>" type="date" name="jatuh_tempo" />
                            <div class="invalid-feedback">
                                <?php echo form_error('jatuh_tempo') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jml">Jumlah Tagihan</label>
                            <input class="form-control" type="text" name="jml" id="jml" placeholder="jml" />
                            <div class="invalid-feedback">
                                <?php echo form_error('jml') ?>
                            </div>
                        </div>

                        <input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
                    </form>

                </div>

                <div class="card-footer small text-muted">
                    *Wajib diisi
                </div>


            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!--  MODAL jenis bayar -->

<div class="modal fade" id="id_tabelTagihan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pilih Jenis Pembayaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <!-- DataTables -->
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Jenis</th>
                                <th>Jenis Pembayaran</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($jenisbayar as $jb) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $jb['kode_jenis']; ?></td>
                                    <td><?= $jb['jenis_bayar']; ?></td>
                                    <td>Rp<?= number_format($jb['harga']); ?></td>
                                    <td>
                                        <button class='td_btn btn btn-primary btn-custom dis'>Pilih</button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END MODAL BODY-->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnCloseModalDataUser">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--  END  MODAL Data Karyawan -->

<script>
    $('.td_btn').click(function(event) {

        event.preventDefault();

        var kode = $(this).closest('tr').find('.td_kode').text();
        var jenis = $(this).closest('tr').find('.td_jenis').text();
        var harga = $(this).closest('tr').find('.input_td_harga').val();
        $('#Jenis').val(jenis);
        $('#Harga').val(harga);
        $('#Kode').val(kode);

        $('#id_tabelTagihan').modal('hide');
    });
</script>