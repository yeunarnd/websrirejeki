<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model("siswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('keuangan/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat()
    {
        $data['title'] = 'Daftar Siswa';
        $data["siswa"] = $this->siswa_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get('siswa')->result_array();

        $this->form_validation->set_rules('siswa', 'Siswa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('keuangan/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('siswa', ['siswa' => $this->input->post('siswa')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('siswa');
        }
    }
}
