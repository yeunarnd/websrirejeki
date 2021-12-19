<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan_model extends CI_Model
{
    private $_table = "tagihan";

    public $kode_tagihan;
    public $nama_siswa;
    public $nama_tagihan;
    public $jumlah_tagihan;
    public $tgl_jatuh_tempo;

    public function rules()
    {
        return [
            [
                'field' => 'kode_tagihan',
                'label' => 'kode_tagihan',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_siswa',
                'label' => 'nama_siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_tagihan',
                'label' => 'nama_tagihan',
                'rules' => 'required'
            ],

            [
                'field' => 'jumlah_tagihan',
                'label' => 'jumlah_tagihan',
                'rules' => 'required'
            ],

            [
                'field' => 'tgl_jatuh_tempo',
                'label' => 'tgl_jatuh_tempo',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_tagihan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_tagihan = ["kode_tagihan"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->nama_tagihan = $post["nama_tagihan"];
        $this->jumlah_tagihan = $post["jumlah_tagihan"];
        $this->tgl_jatuh_tempo = $post["tgl_jatuh_tempo"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_tagihan = ["kode_tagihan"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->nama_tagihan = $post["nama_tagihan"];
        $this->jumlah_tagihan = $post["jumlah_tagihan"];
        $this->tgl_jatuh_tempo = $post["tgl_jatuh_tempo"];
        return $this->db->update($this->_table, $this, array('kode_tagihan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_tagihan" => $id));
    }
}
