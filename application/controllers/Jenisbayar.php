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
        $data["jenisbayar"] = $this->jenisbayar_model->getAll();
        $this->load->view("jenisbayar/list", $data);
    }

    public function add()
    {
        $jenisbayar = $this->jenisbayar_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisbayar->rules());

        if ($validation->run()) {
            $jenisbayar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("jenisbayar/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('jenisbayar');

        $jenisbayar = $this->jenisbayar_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisbayar->rules());

        if ($validation->run()) {
            $jenisbayar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jenisbayar"] = $jenisbayar->getById($id);
        if (!$data["jenisbayar"]) show_404();

        $this->load->view("jenisbayar/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->jenisbayar_model->delete($id)) {
            redirect(site_url('jenisbayar'));
        }
    }
}
