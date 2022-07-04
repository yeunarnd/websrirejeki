<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    private $_table = "pembayaran";

    public $kode_pembayaran;
    public $nama_siswa;
    public $jenis_bayar;
    public $tgl_pembayaran;
    public $jumlah_bayar;

    public function rules()
    {
        return [
            [
                'field' => 'kode_pembayaran',
                'label' => 'kode_pembayaran',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_siswa',
                'label' => 'nama_siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_bayar',
                'label' => 'jenis_bayar',
                'rules' => 'required'
            ],

            [
                'field' => 'tgl_pembayaran',
                'label' => 'tgl_pembayaran',
                'rules' => 'required'
            ],

            [
                'field' => 'jumlah_bayar',
                'label' => 'jumlah_bayar',
                'rules' => 'numeric'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_pembayaran" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_pembayaran = $post["kode_pembayaran"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_bayar = $post["jenis_bayar"];
        $this->tgl_pembayaran = $post["tgl_pembayaran"];
        $this->jumlah_bayar = $post["jumlah_bayar"];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_pembayaran = $post["kode_pembayaran"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_bayar = $post["jenis_bayar"];
        $this->tgl_pembayaran = $post["tgl_pembayaran"];
        $this->jumlah_bayar = $post["jumlah_bayar"];
        return $this->db->update($this->_table, $this, array('kode_pembayaran' => $post['kode_pembayaran']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_pembayaran" => $id));
    }
}
