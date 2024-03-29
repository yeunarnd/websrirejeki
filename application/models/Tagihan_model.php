<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan_model extends CI_Model
{
    private $_table = "tagihan";

    public $kode_tagihan;
    public $nomor_induk;
    public $nm_tagihan;
    public $jatuh_tempo;
    public $jml;

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
                'field' => 'jml',
                'label' => 'jml',
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
        $this->db->where('tagihan.nomor_induk', $this->session->userdata('id'));

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

    public function gettag()
    {
        $query = $this->db->query("SELECT * FROM jenis_pembayaran ORDER BY kode_jenis");

        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_tagihan = $post["kode_tagihan"];
        $this->nomor_induk = $post["nomor_induk"];
        $this->nm_tagihan = $post["nm_tagihan"];
        $this->jatuh_tempo = $post["jatuh_tempo"];
        $this->jml = $post["jml"];
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
        $this->jml = $post["jml"];
        return $this->db->update($this->_table, $this, array('kode_tagihan' => $post['kode_tagihan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_tagihan" => $id));
    }
}
