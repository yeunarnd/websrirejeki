<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "siswa";

    public $no_induk;
    public $nama_siswa;
    public $jenis_kelamin;
    public $alamat;
    public $kelompok_kelas;

    public function rules()
    {
        return [
            [
                'field' => 'no_induk',
                'label' => 'no_induk',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_siswa',
                'label' => 'nama_siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_kelamin',
                'label' => 'jenis_kelamin',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'kelompok_kelas',
                'label' => 'kelompok_kelas',
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
        return $this->db->get_where($this->_table, ["no_induk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->no_induk = ["no_induk"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->kelompok_kelas = $post["kelompok_kelas"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->no_induk = ["no_induk"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->kelompok_kelas = $post["kelompok_kelas"];
        return $this->db->update($this->_table, $this, array('no_induk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("no_induk" => $id));
    }
}
