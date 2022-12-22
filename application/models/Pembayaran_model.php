<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    private $_table = "pembayaran";

    public $kode_pembayaran;
    public $nama_siswa;
    public $jenis_bayar;
    public $tgl_bayar;
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
                'field' => 'tgl_bayar',
                'label' => 'tgl_bayar',
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

    public function tampil_data()
    {
        return $this->db->get('pembayaran');
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_join_where($table, $where)
    {
        // $query = "SELECT spp.*, siswa.nis, siswa.nama_siswa, siswa.kelas FROM spp INNER JOIN siswa ON siswa.id_siswa = spp.id_siswa WHERE id_spp = '$' ORDER BY tgl_bayar ASC";
        // return $this->db->query($query);
        $this->db->join('siswa', 'siswa.nomor_induk = pembayaran.nomor_induk');
        return $this->db->get_where($table, $where);
    }

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM siswa ORDER BY nomor_induk");

        return $query->result();
    }

    public function update_where($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_pembayaran = $post["kode_pembayaran"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_bayar = $post["jenis_bayar"];
        $this->tgl_bayar = $post["tgl_bayar"];
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
