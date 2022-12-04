<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model");
        $this->load->model("daftar_model");
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

    public function tampil_data()
    {
        $kd_daftar = $_POST['kd_daftar'];
        // $s = "SELECT nm_calon_siswa as nm_calon_siswa_b FROM daftar WHERE kd_daftar = '$kd_daftar'";
        $s = "SELECT nama_siswa,jkel,alamat,kelas FROM daftar WHERE kd_daftar = '$kd_daftar'";
        $res = $this->db->query($s)->row_array();
        echo json_encode($res);
    }

    // public function cari()
    // {
    //     $kd_daftar = $_GET['kd_daftar'];
    //     $cari = $this->daftar_model->cari($kd_daftar)->result();
    //     echo json_encode($cari);
    // }

    // public function get_autocomplete()
    // {
    //     if (isset($_GET['term'])) {
    //         $result = $this->daftar_model->get_data($_GET['term']);
    //         if (count($result) > 0) {
    //             foreach ($result as $row)
    //                 $result_array[] = array(
    //                     'label' => $row->kd_daftar,
    //                     'nm_calon_siswa' => strtoupper($row->nama)
    //                 );
    //             echo json_encode($result_array);
    //         }
    //     }
    // }


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

    public function edit($nomor_induk = null)
    {
        if (!isset($nomor_induk)) redirect('siswa');

        $data['title'] = 'Edit Daftar Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('nomor_induk' => $nomor_induk);
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

        $data["siswa"] = $siswa->getById($nomor_induk);
        if (!$data["siswa"]) show_404();
    }

    public function delete($nomor_induk = null)
    {
        if (!isset($nomor_induk)) show_404();

        if ($this->siswa_model->delete($nomor_induk)) {
            redirect(site_url('siswa'));
        }
    }
}
