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
        $data["pembayaran"] = $this->pembayaran_model->getAll();
        $this->load->view("pembayaran/list", $data);
    }

    public function add()
    {
        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run()) {
            $pembayaran->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pembayaran/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pembayaran');

        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run()) {
            $pembayaran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pembayaran"] = $pembayaran->getById($id);
        if (!$data["pembayaran"]) show_404();

        $this->load->view("pembayaran/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->pembayaran_model->delete($id)) {
            redirect(site_url('pembayaran'));
        }
    }
}
