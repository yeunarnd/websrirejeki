<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tagihan_model");
        $this->load->model("siswa_model");
        $this->load->model("jenisbayar_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Tagihan';
        // $data["tagihan"] = $this->tagihan_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tagihan'] = $this->db->get('tagihan')->result_array();

        $this->form_validation->set_rules('tagihan', 'Tagihan', 'required');
        // $this->form_validation->set_rules('nomor_induk', 'Nomor Induk', 'required|trim', ['required' => 'Nomor induk wajib di isi!']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tagihan/list', $data);
            $this->load->view('templates/footer');
        } else {
            // $this->db->insert('tagihan', ['tagihan' => $this->input->post('tagihan')]);
            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            // redirect('tagihan');
            $this->cariTagihan();
        }
    }

    public function cariTagihan()
    {
        $data['title'] = 'Daftar Tagihan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nomor_induk = $this->input->post('nomor_induk', true);
        $where = ['nomor_induk' => $nomor_induk];
        $data['siswa'] = $this->siswa_model->get_where('siswa', $where)->row_array();
        $idSiswa = $data['siswa']['nomor_induk'];

        if ($data['siswa'] == null) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"><i class="fas fa-info-circle"></i> NIS Siswa <strong>' . $nomor_induk . '</strong> Tidak Terdaftar.</div>');
            redirect('tagihan');
        }

        $where = ['nomor_induk' => $idSiswa];
        $data['tagihan'] = $this->tagihan_model->get_where('tagihan', $where)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tagihan/list', $data);
        $this->load->view('templates/footer');
    }

    public function cari_id()
    {
        $data['title'] = 'Tambah Daftar Tagihan';
        $data['id'] = $this->siswa_model->get_idsiswa();
        //I take here a sample view, you can put more view pages here
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tagihan/list', $data);
        $this->load->view('templates/footer');
    }

    public function tampil_data()
    {
        $kode_jenis = $_POST['kode_jenis'];
        $s = "SELECT jml as jml_b FROM jenis_pembayaran WHERE kode_jenis='$kode_jenis'";
        // $s = "SELECT harga FROM jenis_pembayaran WHERE kode_jenis = '$kode_jenis'";
        $res = $this->db->query($s)->row_array();
        echo json_encode($res);
    }

    public function add()
    {
        $data['title'] = 'Tambah Pendaftaran Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataid'] = $this->tagihan_model->getdata();
        $data['datatag'] = $this->tagihan_model->gettag();
        $data['jenisbayar'] = $this->db->get('jenis_pembayaran')->result_array();

        $tagihan = $this->tagihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tagihan->rules());

        if ($validation->run() == false) {
        } else {
            $tagihan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tagihan/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($kode_tagihan = null)
    {
        if (!isset($kode_tagihan)) redirect('tagihan');

        $data['title'] = 'Edit Daftar Tagihan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('kode_tagihan' => $kode_tagihan);
        $data['tagihan'] = $this->tagihan_model->edit_data($where, 'tagihan')->result_array();


        $tagihan = $this->tagihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tagihan->rules());

        if ($validation->run() == false) {
        } else {
            $tagihan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('tagihan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tagihan/edit_form', $data);
        $this->load->view('templates/footer');

        $data["tagihan"] = $tagihan->getById($kode_tagihan);
        if (!$data["tagihan"]) show_404();
    }

    public function delete($kode_tagihan = null)
    {
        if (!isset($kode_tagihan)) show_404();

        if ($this->tagihan_model->delete($kode_tagihan)) {
            redirect(site_url('tagihan'));
        }
    }
}
