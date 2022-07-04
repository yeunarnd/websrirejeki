<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pembayaran_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Laporan Pembayaran';
        $data["pembayaran"] = $this->pembayaran_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pembayaran'] = $this->db->get('pembayaran')->result_array();

        $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembayaran/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('pembayaran', ['pembayaran' => $this->input->post('pembayaran')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('pembayaran');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run() == false) {
        } else {
            $pembayaran->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pembayaran/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($kode_pembayaran = null)
    {
        if (!isset($kode_pembayaran)) redirect('pembayaran');

        $data['title'] = 'Edit Daftar pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('kode_pembayaran' => $kode_pembayaran);
        $data['pembayaran'] = $this->pembayaran_model->edit_data($where, 'pembayaran')->result_array();

        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run() == false) {
        } else {
            $pembayaran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('pembayaran');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pembayaran/edit_form', $data);
        $this->load->view('templates/footer');

        $data["pembayaran"] = $pembayaran->getById($kode_pembayaran);
        if (!$data["pembayaran"]) show_404();
    }

    public function delete($kode_pembayaran = null)
    {
        if (!isset($kode_pembayaran)) show_404();

        if ($this->pembayaran_model->delete($kode_pembayaran)) {
            redirect(site_url('pembayaran'));
        }
    }
}
