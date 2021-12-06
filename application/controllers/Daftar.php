<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftar_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dftr"] = $this->daftar_model->getAll();
        $this->load->view("daftar/list", $data);
    }

    public function add()
    {
        $daftar = $this->daftar_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run()) {
            $daftar->save();
            $this->session->set_flashdata('success', 'Data anda berhasil disimpan. Silahkan menunggu pengumunan selanjutnya');
        }

        $this->load->view("daftar/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('daftar');
       
        $daftar = $this->daftar_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run()) {
            $daftar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["daftar"] = $daftar->getById($id);
        if (!$data["daftar"]) show_404();
        
        $this->load->view("daftar/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->daftar_model->delete($id)) {
            redirect(site_url('daftar'));
        }
    }
}