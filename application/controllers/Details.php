<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Details extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftar_model");
        $this->load->library('form_validation');
    }

    public function index($kd_daftar)
    {
        $data['title'] = 'Detail Pendaftaran Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data["daftar"] = $this->daftar_model->getById($kd_daftar);
        // echo json_encode($data["daftar"]);
        // exit;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('daftar/detail', $data);
        $this->load->view('templates/footer');
    }

    public function validasi($statusvalidasi, $kd_daftar)
    {
        if ($statusvalidasi == 1) {
            $jml = $this->daftar_model->hitungTervalidasi();
            // echo json_encode($jml);
            // exit;
            if ($jml[0]['jml'] >= 2) {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftaran sudah penuh!</div>');
                redirect('details');
            }
        }
        $this->daftar_model->upstatusvalidasi($statusvalidasi, $kd_daftar);


        redirect('details');
    }

    public function tolak_validasi()
    {
        $this->form_validation->set_rules('alasan_ditolak', 'alasan_ditolak', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('daftar');
        } else {
            $data = array(
                "alasan_ditolak" => $_POST['alasan_ditolak']
            );
            $this->db->insert('daftar', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('daftar');
        }
    }
}
