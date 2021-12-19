<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dispensasi_model extends CI_Model
{
    private $_table = "dispensasi";

    public $kode_dispensasi;
    public $no_induk;
    public $nama_dispensasi;
    public $alasan_pengajuan;

    public function rules()
    {
        return [
            [
                'field' => 'kode_dispensasi',
                'label' => 'kode_dispensasi',
                'rules' => 'required'
            ],

            [
                'field' => 'no_induk',
                'label' => 'no_induk',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_dispensasi',
                'label' => 'nama_dispensasi',
                'rules' => 'required'
            ],

            [
                'field' => 'alasan_pengajuan',
                'label' => 'alasan_pengajuan',
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
        return $this->db->get_where($this->_table, ["kode_dispensasi" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_dispensasi = ["kode_dispensasi"];
        $this->no_induk = $post["no_induk"];
        $this->nama_dispensasi = $post["nama_dispensasi"];
        $this->alasan_pengajuan = $post["alasan_pengajuan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_dispensasi = ["kode_dispensasi"];
        $this->no_induk = $post["no_induk"];
        $this->nama_dispensasi = $post["nama_dispensasi"];
        $this->alasan_pengajuan = $post["alasan_pengajuan"];
        return $this->db->update($this->_table, $this, array('kode_dispensasi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_dispensasi" => $id));
    }
}
