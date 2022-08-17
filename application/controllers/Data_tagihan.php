<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_tagihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tagihan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Tagihan';
        $data['tagihan'] = $this->tagihan_model->tagihan_user();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tagihan'] = $this->db->get('tagihan')->result_array();

        $this->form_validation->set_rules('tagihan', 'Tagihan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data_tagihan/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('tagihan', ['tagihan' => $this->input->post('tagihan')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('data_tagihan');
        }
    }
}
