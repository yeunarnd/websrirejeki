<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dispensasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dispensasi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dispensasi"] = $this->dispensasi_model->getAll();
        $this->load->view("dispensasi/list", $data);
    }

    public function add()
    {
        $dispensasi = $this->dispensasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($dispensasi->rules());

        if ($validation->run()) {
            $dispensasi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("dispensasi/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dispensasi');

        $dispensasi = $this->dispensasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($dispensasi->rules());

        if ($validation->run()) {
            $dispensasi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["dispensasi"] = $dispensasi->getById($id);
        if (!$data["dispensasi"]) show_404();

        $this->load->view("dispensasi/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->dispensasi_model->delete($id)) {
            redirect(site_url('dispensasi'));
        }
    }
}
