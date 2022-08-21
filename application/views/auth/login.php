<link href="<?= base_url('front-end/assets/img/logo-paud.png'); ?>" rel="icon">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="text-center">
                                <img src="<?= base_url('assets/img/gb-login.jpg') ?>" width="500" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat datang!</h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan kata sandi">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>
                                <hr>

                                <h2 style="text-align: center;">Pos PAUD Sri Rejeki</h2>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('home/index'); ?>">Kembali ke Beranda --></a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Buat Akun Baru!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>