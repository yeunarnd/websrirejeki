<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "siswa";

    public $nomor_induk;
    public $nama_siswa;
    public $jkel;
    public $alamat;
    public $kelas;

    public function rules()
    {
        return [
            [
                'field' => 'nama_siswa',
                'label' => 'nama_siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'jkel',
                'label' => 'jkel',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'kelas',
                'label' => 'kelas',
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
        return $this->db->get_where($this->_table, ["nomor_induk" => $id])->row();
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function cari($id)
    {
        $query = $this->db->get_where('daftar', array('kd_daftar' => $id));
        return $query;
    }

    public function get_idsiswa()
    {
        $query = $this->db->query('SELECT nomor_induk FROM siswa');
        return $query->result();
    }

    // public function get_data($title)
    // {
    //     $this->db->like('kd_daftar', $title, 'BOTH');
    //     $this->db->order_by('kd_daftar', 'asc');
    //     $this->db->limit(10);
    //     return $this->db->get('daftar')->result();
    // }

    public function save()
    {
        $post = $this->input->post();
        $this->nomor_induk = $post["nomor_induk"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jkel = $post["jkel"];
        $this->alamat = $post["alamat"];
        $this->kelas = $post["kelas"];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nomor_induk = $post["nomor_induk"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jkel = $post["jkel"];
        $this->alamat = $post["alamat"];
        $this->kelas = $post["kelas"];
        return $this->db->update($this->_table, $this, array('nomor_induk' => $post['nomor_induk']));
    }

    public function delete($nomor_induk)
    {
        return $this->db->delete($this->_table, array("nomor_induk" => $nomor_induk));
    }
}
