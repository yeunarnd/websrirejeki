<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
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
        $data["tagihan"] = $this->tagihan_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tagihan'] = $this->db->get('tagihan')->result_array();

        $this->form_validation->set_rules('tagihan', 'Tagihan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tagihan/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('tagihan', ['tagihan' => $this->input->post('tagihan')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('tagihan');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Tagihan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $tagihan = $this->tagihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tagihan->rules());

        if ($validation->run() == false) {
        } else {
            $tagihan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tagihan/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($kode_tagihan = null)
    {
        if (!isset($kode_tagihan)) redirect('tagihan');

        $data['title'] = 'Edit Daftar Tagihan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('kode_tagihan' => $kode_tagihan);
        $data['tagihan'] = $this->tagihan_model->edit_data($where, 'tagihan')->result_array();

        $tagihan = $this->tagihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tagihan->rules());

        if ($validation->run() == false) {
        } else {
            $tagihan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('tagihan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tagihan/edit_form', $data);
        $this->load->view('templates/footer');

        $data["tagihan"] = $tagihan->getById($kode_tagihan);
        if (!$data["tagihan"]) show_404();
    }

    public function delete($kode_tagihan = null)
    {
        if (!isset($kode_tagihan)) show_404();

        if ($this->tagihan_model->delete($kode_tagihan)) {
            redirect(site_url('tagihan'));
        }
    }
}
