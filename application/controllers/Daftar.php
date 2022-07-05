<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
        $data['title'] = 'Rekap Pendaftaran';
        $data["daftar"] = $this->daftar_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['daftar'] = $this->db->get('daftar')->result_array();

        $this->form_validation->set_rules('daftar', 'Daftar', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('daftar/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user', ['daftar' => $this->input->post('daftar')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('daftar');
        }
    }

    public function details($kd_daftar)
    {
        $data['title'] = 'Detail Pendaftaran Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data["daftar"] = $this->daftar_model->getById($kd_daftar);
        // echo json_encode($data["daftar"]);
        // exit;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('daftar/detail', $data);
        $this->load->view('templates/footer');
    }

    public function validasi($statusvalidasi, $kd_daftar)
    {
        if ($statusvalidasi == 1) {
            $jml = $this->daftar_model->hitungTervalidasi();
            // echo json_encode($jml);
            // exit;
            if ($jml[0]['jml'] >= 2) {

                redirect('daftar');
            }
        }
        $this->daftar_model->upstatusvalidasi($statusvalidasi, $kd_daftar);

        redirect('daftar');
    }


    public function add()
    {
        $data['title'] = 'Tambah Pendaftaran Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $daftar = $this->daftar_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run() == false) {
        } else {
            $daftar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('daftar/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_daftar()
    {
        $tambah_daftar = $this->daftar_model;
        $validation = $this->form_validation;
        $validation->set_rules($tambah_daftar->rules());

        if ($validation->run() == false) {
        } else {
            $tambah_daftar->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan, tunggu informasi selanjutnya!');
        }
        $this->load->view('index');
    }

    public function edit($kd_daftar = null)
    {
        if (!isset($kd_daftar)) redirect('daftar');

        $data['title'] = 'Edit Pendaftaran Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('kd_daftar' => $kd_daftar);
        $data['daftar'] = $this->daftar_model->edit_data($where, 'daftar')->result_array();

        $daftar = $this->daftar_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run() == false) {
        } else {
            $daftar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('daftar');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('daftar/edit_form', $data);
        $this->load->view('templates/footer');

        $data["daftar"] = $daftar->getById($kd_daftar);
        if (!$data["daftar"]) show_404();
    }

    public function delete($kd_daftar = null)
    {
        if (!isset($kd_daftar)) show_404();

        if ($this->daftar_model->delete($kd_daftar)) {
            redirect(site_url('daftar'));
        }
    }
}
