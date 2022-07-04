<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jenisbayar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jenisbayar_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Jenis Pembayaran';
        $data["jenisbayar"] = $this->jenisbayar_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['jenisbayar'] = $this->db->get('jenis_pembayaran')->result_array();

        $this->form_validation->set_rules('jenisbayar', 'Jenisbayar', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jenisbayar/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('jenisbayar', ['jenisbayar' => $this->input->post('jenisbayar')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('jenisbayar');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Jenis Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $jenisbayar = $this->jenisbayar_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisbayar->rules());

        if ($validation->run() == false) {
        } else {
            $jenisbayar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jenisbayar/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($kode_jenis = null)
    {
        if (!isset($kode_jenis)) redirect('jenisbayar');

        $data['title'] = 'Edit Daftar Jenis Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('kode_jenis' => $kode_jenis);
        $data['jenisbayar'] = $this->jenisbayar_model->edit_data($where, 'jenis_pembayaran')->result_array();

        $jenisbayar = $this->jenisbayar_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisbayar->rules());

        if ($validation->run() == false) {
        } else {
            $jenisbayar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('jenisbayar');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jenisbayar/edit_form', $data);
        $this->load->view('templates/footer');

        $data["jenisbayar"] = $jenisbayar->getById($kode_jenis);
        if (!$data["jenisbayar"]) show_404();
    }

    public function delete($kode_jenis = null)
    {
        if (!isset($kode_jenis)) show_404();

        if ($this->jenisbayar_model->delete($kode_jenis)) {
            redirect(site_url('jenisbayar'));
        }
    }
}
