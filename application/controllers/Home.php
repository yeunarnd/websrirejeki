<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftar_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["daftar"] = $this->daftar_model->getAll();
        $this->load->view('index');
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

        $this->load->view("index");
    }
}
