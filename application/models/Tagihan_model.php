<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan_model extends CI_Model
{
    private $_table = "tagihan";

    public $kode_tagihan;
    public $nomor_induk;
    public $nm_tagihan;
    public $jatuh_tempo;
    public $bulan;
    public $jml;
    public $ket;

    public function rules()
    {
        return [
            [
                'field' => 'nomor_induk',
                'label' => 'nomor_induk',
                'rules' => 'required'
            ],

            [
                'field' => 'nm_tagihan',
                'label' => 'nm_tagihan',
                'rules' => 'required'
            ],

            [
                'field' => 'jatuh_tempo',
                'label' => 'jatuh_tempo',
                'rules' => 'required'
            ],

            [
                'field' => 'bulan',
                'label' => 'bulan',
                'rules' => 'required'
            ],

            [
                'field' => 'jml',
                'label' => 'jml',
                'rules' => 'required'
            ],

            [
                'field' => 'ket',
                'label' => 'ket',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function tagihan_user()
    {
        $this->db->where('tagihan.user_id', $this->session->userdata('id'));

        return $this->db->get('tagihan')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_tagihan" => $id])->row();
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM siswa ORDER BY nomor_induk");

        return $query->result();
    }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->kode_tagihan = $post["kode_tagihan"];
    //     $this->nama_siswa = $post["nama_siswa"];
    //     $this->nama_tagihan = $post["nama_tagihan"];
    //     $this->jumlah_tagihan = $post["jumlah_tagihan"];
    //     $this->tgl_jatuh_tempo = $post["tgl_jatuh_tempo"];
    //     return $this->db->insert($this->_table, $this);
    // }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_tagihan = $post["kode_tagihan"];
        $this->nomor_induk = $post["nomor_induk"];
        $this->nm_tagihan = $post["nm_tagihan"];
        $this->jatuh_tempo = $post["jatuh_tempo"];
        $this->bulan = $post["bulan"];
        $this->jml = $post["jml"];
        $this->ket = $post["ket"];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_tagihan = $post["kode_tagihan"];
        $this->nomor_induk = $post["nomor_induk"];
        $this->nm_tagihan = $post["nm_tagihan"];
        $this->jatuh_tempo = $post["jatuh_tempo"];
        $this->bulan = $post["bulan"];
        $this->jml = $post["jml"];
        $this->ket = $post["ket"];
        return $this->db->update($this->_table, $this, array('kode_tagihan' => $post['kode_tagihan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_tagihan" => $id));
    }
}
