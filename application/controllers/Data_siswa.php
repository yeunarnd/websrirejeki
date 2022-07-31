<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Siswa';
        $data["siswa"] = $this->siswa_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get('siswa')->result_array();

        $this->form_validation->set_rules('siswa', 'Siswa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data_siswa/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('siswa', ['siswa' => $this->input->post('siswa')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('data_siswa');
        }
    }
}
