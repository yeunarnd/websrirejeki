<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
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
            $this->load->view('siswa/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('siswa', ['siswa' => $this->input->post('siswa')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('siswa');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run() == false) {
        } else {
            $siswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('siswa');

        $data['title'] = 'Edit Daftar Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['siswa'] = $this->siswa_model->edit_data($where, 'siswa')->result_array();

        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run() == false) {
        } else {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('siswa');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/edit_form', $data);
        $this->load->view('templates/footer');

        $data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->siswa_model->delete($id)) {
            redirect(site_url('siswa'));
        }
    }
}
