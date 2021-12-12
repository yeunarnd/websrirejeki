<!DOCTYPE html>
<html lang="en">
<title> PAUD Sri Rejeki </title>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- <title>Green Bootstrap Template - Index</title> -->
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('front-end/assets/img/logo-paud.png'); ?>" rel="icon">
    <link href="<?= base_url('front-end/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?= base_url('front-end/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i'); ?>" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('front-end/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('front-end/assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('front-end/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('front-end/assets/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('front-end/assets/vendor/owl.carousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('front-end/assets/vendor/venobox/venobox.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('front-end/assets/css/style.css'); ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Green - v2.3.1
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href=""><img src="<?php echo base_url() ?>front-end/assets/img/logo-paud.png" width="40" height="50"><span> Sri</span> Rejeki</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Profil</a></li>
                    <li><a href="#petunjuk">Petunjuk</a></li>
                    <li><a href="#daftar">Daftar</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#contact">Kontak</a></li>

                </ul>
            </nav><!-- .nav-menu -->

            <a href="<?= base_url('login'); ?>" class="get-started-btn scrollto">Masuk</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"> <img src="<?php echo base_url() ?>front-end/assets/img/slide/paud1.jpg" style="width:1550px;height:800px">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
                            <p class="animate__animated animate__fadeInUp">Selamat Datang di Website Resmi POS PAUD Sri Rejeki</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)"><img src="<?php echo base_url() ?>front-end/assets/img/slide/slide-2.jpg">
                    <div class="carousel-container">
                        <div class="container">
                            <!-- <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
                            <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)"><img src="<?php echo base_url() ?>front-end/assets/img/slide/slide-3.jpg">
                    <div class="carousel-container">
                        <div class="container">
                            <!-- <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Sebelumnya</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Selanjutnya</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Profil Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="<?php echo base_url() ?>front-end/assets/img/logo-paud.png">
                        <h2>pos paud sri rejeki</h2>
                        <h3>Mendidik anak menjadi generasi sholeh, sholihah, terampil, kreatif dan inovatif</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-left">
                        <p>
                            PAUD Sri Rejeki merupakan salah satu tempat pendidikan yang bentuk penyelenggaraannya memfokuskan
                            kepada pembelajaran dasar menuju kepada pertumbuhan dan perkembangan pada anak yang meliputi:
                            agama, moral, bahasa, seni, serta perkembangan emosional yang sesuai dengan keunikan pada tahap
                            perkembangan sesuai kelompok usia yang dilalui oleh anak usia dini.
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Fun Calistung</li>
                            <li><i class="icofont-check-circled"></i> Everyday with surat-surat pendek</li>
                            <li><i class="icofont-check-circled"></i> Pengenalan huruf hijaiyah</li>
                            <li><i class="icofont-check-circled"></i> Everyday with shalawat</li>
                            <li><i class="icofont-check-circled"></i> Outbound</li>
                            <li><i class="icofont-check-circled"></i> Mewarnai dengan berbagai media</li>
                            <li><i class="icofont-check-circled"></i> Outdoor studying</li>
                        </ul>
                        <p class="font-italic">
                            Mendidik anak menjadi generasi sholeh, sholihah, terampil, kreatif dan inovatif.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Petunjuk Section ======= -->
        <section id="petunjuk" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Petunjuk Pendaftaran</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <h4>1</h4>
                            <span>Isi Formulir Pendaftaran</span>
                            <p>
                                Buka website sekolah online Sri Rejeki, pilih menu "Daftar" untuk melakukan pendaftaran online.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <h4>2</h4>
                            <span>Konfirmasi Pendaftaran</span>
                            <p>
                                Staff PAUD Sri Rejeki akan menghubungi anda melalui whatsapp untuk menginformasikan tentang tes masuk PAUD.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <h4>3</h4>
                            <span>Pengumuman Pendaftaran</span>
                            <p>
                                Setelah melakukan tes, staff PAUD akan memberi informasi mengenai berkas yang dibutuhkan untuk melakukan daftar ulang.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= daftar Section ======= -->
        <section id="daftar" class="daftar section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daftar</strong></h2>
                    <p>Silahkan Mengisi Data Pendaftaran Di Bawah Ini</p>
                </div>

                <form id="daftar" method="post">
                    <div class="alert alert-primary">
                        <strong>Data Calon Siswa</strong>
                    </div>
                    <form action="<?php base_url('daftar/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label>Nama Lengkap:</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Usia:</label>
                                    <input type="text" name="usia" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kelas:</label>
                                    <input type="text" name="kelas" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tempat Lahir:</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Jenis Kelamin:</label>
                                    <select class="form-control" name="jk">
                                        <option>Pilih</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Agama:</label>
                                    <select class="form-control" name="agama">
                                        <option>Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Alamat Tinggal:</label>
                                    <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        </div>
                        <div class="alert alert-primary">
                            <strong>Data Ayah</strong>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Ayah:</label>
                                    <input type="text" name="nm_ayah" class="form-control" placeholder="Masukan Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Umur Ayah:</label>
                                    <input type="text" name="umur_ayah" class="form-control" placeholder="Umur Ayah">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Alamat Tinggal:</label>
                                    <textarea class="form-control" name="alamat_ayah" rows="2" id="alamat"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Pendidikan Terakhir:</label>
                                    <select class="form-control" name="pd_ayah">
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma_smk">SMA/SMK</option>
                                        <option value="diploma">DIPLOMA</option>
                                        <option value="sarjana">SARJANA</option>
                                        <option value="tidak_sekolah">Tidak Sekolah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Pekerjaan Ayah:</label>
                                    <input type="text" name="pk_ayah" class="form-control" placeholder="Masukan Pekerjaan">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>No. Telepon:</label>
                                    <input type="text" name="no_ayah" class="form-control" placeholder="No. Telp/HP">
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-primary">
                            <strong>Data Ibu</strong>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Ibu:</label>
                                    <input type="text" name="nm_ibu" class="form-control" placeholder="Masukan Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Umur Ibu:</label>
                                    <input type="text" name="umur_ibu" class="form-control" placeholder="Umur Ibu">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Alamat Tinggal:</label>
                                    <textarea class="form-control" name="alamat_ibu" rows="2" id="alamat"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Pendidikan Terakhir:</label>
                                    <select class="form-control" name="pd_ayah">
                                        <option value="SMA-IPA">SD</option>
                                        <option value="SMA-IPS">SMP</option>
                                        <option value="SMK-IPA">SMA/SMK</option>
                                        <option value="SMK-IPS">DIPLOMA</option>
                                        <option value="SMK-IPS">SARJANA</option>
                                        <option value="SMK-IPS">Tidak Sekolah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Pekerjaan Ibu:</label>
                                    <input type="text" name="pk_ibu" class="form-control" placeholder="Masukan Pekerjaan">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>No. Telepon:</label>
                                    <input type="text" name="no_ibu" class="form-control" placeholder="No. Telp/HP">
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-primary">
                            <strong>Data Lain-lain</strong>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Akta Lahir:</label>
                                    <input type="file" name="akta" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Kartu Keluarga:</label>
                                    <input type="file" name="kk" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Foto Siswa:</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" name="btn" class="btn btn-primary">Daftar</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>

                        </div>
                    </form>
                </form>
        </section><!-- End Daftar Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="galeri" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri</h2>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-1.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Memperingati Hari Kartini</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-1.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Peringatan Hari Kartini"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-2.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Kegiatan Menyanyi</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-2.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Kegiatan Menyanyi"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-3-1.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Menyobek Koran Bekas untuk melemaskan jari-jari tangan</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-3-1.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Menyobek Koran Bekas untuk melemaskan jari-jari tangan"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-4.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Melakukan Senam Bersama</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-4.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Melakukan Senam Bersama"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-5-1.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pengenalan Hewan Kambing</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-5-1.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Pengenalan Hewan Kambing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-6.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Outbound Menanam Padi</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-6.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Outbound Menanam Padi"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-7.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Perpisahan Siswa PAUD</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-7.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Perpisahan Siswa PAUD"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-8.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pentas Seni Memperingati Hari Kemerdekaan</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-8.jp'); ?>g" data-gall="portfolioGallery" class="venobox" title="Pentas Seni Memperingati Hari Kemerdekaan"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('front-end/assets/img/portfolio/galeri-9.jpg'); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Kolase Menempel Sayuran</h4>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('front-end/assets/img/portfolio/galeri-9.jpg'); ?>" data-gall="portfolioGallery" class="venobox" title="Kolase Menempel Sayuran"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>POS PAUD SRI REJEKI</h4>
                                <p>Jl. Muharto V No. 9 Malang</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>srirejeki@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telepon:</h4>
                                <p>083867936213</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4564.819843398507!2d112.63659792442017!3d-7.99703197730456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62985774488a7%3A0x512bb5999c34587e!2sPaud%20sri%20rejeki!5e0!3m2!1sen!2sid!4v1632842213133!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen=""></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Anda</label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Masukkan naman anda" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email Anda</label>
                                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Masukkan email anda" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subyek</label>
                                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Masukkan subyek pesan" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Ketikkan Pesan</label>
                                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Tulis sesuatu untuk kami"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan anda telah terkirim. Terima Kasih!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>POS PAUD SRI REJEKI</h3>
            <p>Jl. Muharto V No. 9 Kelurahan Kotalama, Kecamatan Kedungkandang, Kota Malang</p>
            <!-- <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div> -->
            <div class="copyright">
                &copy; 2021 <strong><span> PAUD Sri Rejeki</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('front-end/assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('front-end/assets/vendor/jquery.easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('front-end/assets/vendor/php-email-form/validate.js'); ?>"></script>
    <script src="<?= base_url('front-end/assets/vendor/owl.carousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('front-end/assets/vendor/venobox/venobox.min.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('front-end/assets/js/main.js'); ?>"></script>

</body>

</html>