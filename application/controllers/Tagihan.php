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
        $data["tagihan"] = $this->tagihan_model->getAll();
        $this->load->view("tagihan/list", $data);
    }

    public function add()
    {
        $tagihan = $this->tagihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tagihan->rules());

        if ($validation->run()) {
            $tagihan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("tagihan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('tagihan');

        $tagihan = $this->tagihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tagihan->rules());

        if ($validation->run()) {
            $tagihan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tagihan"] = $tagihan->getById($id);
        if (!$data["tagihan"]) show_404();

        $this->load->view("tagihan/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->tagihan_model->delete($id)) {
            redirect(site_url('tagihan'));
        }
    }
}
