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
        $data['title'] = 'Daftar Pengajuan Dispensasi';
        $data["dispensasi"] = $this->dispensasi_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['dispensasi'] = $this->db->get('dispensasi')->result_array();

        $this->form_validation->set_rules('dispensasi', 'Dispensasi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dispensasi/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user', ['dispensasi' => $this->input->post('dispensasi')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('dispensasi');
        }
    }

    public function details($id)
    {
        $data['title'] = 'Detail Pengajuan Dispensasi';
        $data["dispensasi"] = $this->dispensasi_model->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data["dispensasi"] = $this->dispensasi_model->getById($id);
        // echo json_encode($data["dispensasi"]);
        // exit;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dispensasi/detail', $data);
        $this->load->view('templates/footer');
    }

    // public function konfirmasi_tolak()
    // {
    //     $konfirmasi = '2';
    //     $data_dispensasi = array(
    //         'konfirmasi' => $konfirmasi,
    //         'alasan_tolak' => $this->input->post('alasanditolak'),
    //     );

    //     $this->Dispensasi_model->update_dispensasi($this->input->post('kode_dispensasi'), $data_dispensasi);

    //     redirect(site_url('dispensasi'));
    // }

    public function validasi($statusvalidasi, $id)
    {
        if ($statusvalidasi == 1) {
            echo "Diterima";
        } else {
            echo "Ditolak";
        }
        $this->dispensasi_model->upstatusvalidasi($statusvalidasi, $id);

        redirect('dispensasi');
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Pengajuan Dispensasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $dispensasi = $this->dispensasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($dispensasi->rules());

        if ($validation->run() == false) {
        } else {
            $dispensasi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dispensasi/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($kode_dispensasi = null)
    {
        if (!isset($kode_dispensasi)) redirect('siswa');

        $data['title'] = 'Edit Daftar Pengajuan Dispensasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('kode_dispensasi' => $kode_dispensasi);
        $data['dispensasi'] = $this->dispensasi_model->edit_data($where, 'dispensasi')->result_array();

        $dispensasi = $this->dispensasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($dispensasi->rules());

        if ($validation->run() == false) {
        } else {
            $dispensasi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('dispensasi');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dispensasi/edit_form', $data);
        $this->load->view('templates/footer');

        $data["dispensasi"] = $dispensasi->getById($kode_dispensasi);
        if (!$data["dispensasi"]) show_404();
    }

    public function delete($kode_dispensasi = null)
    {
        if (!isset($kode_dispensasi)) show_404();

        if ($this->dispensasi_model->delete($kode_dispensasi)) {
            redirect(site_url('dispensasi'));
        }
    }
}
