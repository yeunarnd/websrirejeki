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
        $data['title'] = 'Laporan Pembayaran';
        $data["pembayaran"] = $this->pembayaran_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pembayaran'] = $this->db->get('pembayaran')->result_array();

        $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembayaran/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('pembayaran', ['pembayaran' => $this->input->post('pembayaran')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('pembayaran');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run() == false) {
        } else {
            $pembayaran->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pembayaran/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function export_pembayaran()
    {
        $data['bayar'] = $this->pembayaran_model->tampil_data('bayar')->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        ob_end_clean();

        $objek = new PHPExcel();

        $objek->getProperties()->setCreator("Web PAUD Sri Rejeki");
        $objek->getProperties()->setLastModifiedBy("Web PAUD Sri Rejeki");

        $objek->getProperties()->setTitle("Laporan Pembayaran");

        $objek->setActiveSheetIndex(0);

        $objek->getActiveSheet()->setCellValue('A1', 'NO');
        $objek->getActiveSheet()->setCellValue('B1', 'NAMA SISWA');
        $objek->getActiveSheet()->setCellValue('C1', 'JENIS BAYAR');
        $objek->getActiveSheet()->setCellValue('D1', 'TANGGAL BAYAR');
        $objek->getActiveSheet()->setCellValue('E1', 'JUMLAH BAYAR');

        $baris = 2;
        $no = 1;

        foreach ($data['bayar'] as $byr) {
            $objek->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $objek->getActiveSheet()->setCellValue('B' . $baris, $byr->nama_siswa);
            $objek->getActiveSheet()->setCellValue('C' . $baris, $byr->jenis_bayar);
            $objek->getActiveSheet()->setCellValue('D' . $baris, $byr->tgl_pembayaran);
            $objek->getActiveSheet()->setCellValue('E' . $baris, $byr->jumlah_bayar);

            $baris++;
        }

        $filename = "Rekap Laporan Pembayaran" . '.xlsx';
        $objek->getActiveSheet()->setTitle("Laporan Pembayaran");

        header('Content-Type: application/ vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($objek, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function edit($kode_pembayaran = null)
    {
        if (!isset($kode_pembayaran)) redirect('pembayaran');

        $data['title'] = 'Edit Daftar pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('kode_pembayaran' => $kode_pembayaran);
        $data['pembayaran'] = $this->pembayaran_model->edit_data($where, 'pembayaran')->result_array();

        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run() == false) {
        } else {
            $pembayaran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('pembayaran');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pembayaran/edit_form', $data);
        $this->load->view('templates/footer');

        $data["pembayaran"] = $pembayaran->getById($kode_pembayaran);
        if (!$data["pembayaran"]) show_404();
    }

    public function delete($kode_pembayaran = null)
    {
        if (!isset($kode_pembayaran)) show_404();

        if ($this->pembayaran_model->delete($kode_pembayaran)) {
            redirect(site_url('pembayaran'));
        }
    }
}
