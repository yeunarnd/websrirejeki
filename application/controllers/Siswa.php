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
        $data["siswa"] = $this->siswa_model->getAll();
        $this->load->view("siswa/list", $data);
    }

    public function add()
    {
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("siswa/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('siswa');

        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();

        $this->load->view("siswa/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->siswa_model->delete($id)) {
            redirect(site_url('siswa'));
        }
    }
}
