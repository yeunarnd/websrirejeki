<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftar_model");
        $this->load->model("pembayaran_model");
        $this->load->library('form_validation');
    }

    public function lap_daftar()
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
            $this->load->view('laporan/lap_daftar', $data);
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
        $this->load->view('laporan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function export_pendaftaran()
    {
        $data['daftar'] = $this->daftar_model->tampil_data('daftar')->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        ob_end_clean();

        $objek = new PHPExcel();

        $objek->getProperties()->setCreator("Web PAUD Sri Rejeki");
        $objek->getProperties()->setLastModifiedBy("Web PAUD Sri Rejeki");

        $objek->getProperties()->setTitle("Laporan Pendaftaran");

        $objek->setActiveSheetIndex(0);

        $objek->getActiveSheet()->setCellValue('A1', 'NO');
        $objek->getActiveSheet()->setCellValue('B1', 'TANGGAL DAFTAR');
        $objek->getActiveSheet()->setCellValue('C1', 'NAMA CALON SISWA');
        $objek->getActiveSheet()->setCellValue('D1', 'UMUR');
        $objek->getActiveSheet()->setCellValue('E1', 'KELAS');
        $objek->getActiveSheet()->setCellValue('F1', 'TEMPAT LAHIR');
        $objek->getActiveSheet()->setCellValue('G1', 'TANGGAL LAHIR');
        $objek->getActiveSheet()->setCellValue('H1', 'JENIS KELAMIN');
        $objek->getActiveSheet()->setCellValue('I1', 'AGAMA');
        $objek->getActiveSheet()->setCellValue('J1', 'ALAMAT');

        $baris = 2;
        $no = 1;

        foreach ($data['daftar'] as $df) {
            $objek->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $objek->getActiveSheet()->setCellValue('B' . $baris, $df->tgl_daftar);
            $objek->getActiveSheet()->setCellValue('C' . $baris, $df->nm_calon_siswa);
            $objek->getActiveSheet()->setCellValue('D' . $baris, $df->umur);
            $objek->getActiveSheet()->setCellValue('E' . $baris, $df->kelas);
            $objek->getActiveSheet()->setCellValue('F' . $baris, $df->tempat_lahir);
            $objek->getActiveSheet()->setCellValue('G' . $baris, $df->tgl_lahir);
            $objek->getActiveSheet()->setCellValue('H' . $baris, $df->jkel);
            $objek->getActiveSheet()->setCellValue('I' . $baris, $df->agama);
            $objek->getActiveSheet()->setCellValue('J' . $baris, $df->alamat);

            $baris++;
        }

        $filename = "Rekap Laporan Pendaftaran" . '.xlsx';
        $objek->getActiveSheet()->setTitle("Laporan Pendaftaran");

        header('Content-Type: application/ vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($objek, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
