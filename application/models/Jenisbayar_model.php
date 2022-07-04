<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jenisbayar_model extends CI_Model
{
    private $_table = "jenis_pembayaran";

    public $kode_jenis;
    public $jenis_bayar;
    public $dateline;

    public function rules()
    {
        return [
            [
                'field' => 'kode_jenis',
                'label' => 'kode_jenis',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_bayar',
                'label' => 'jenis_bayar',
                'rules' => 'required'
            ],

            [
                'field' => 'dateline',
                'label' => 'dateline',
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
        return $this->db->get_where($this->_table, ["kode_jenis" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_jenis = $post["kode_jenis"];
        $this->jenis_bayar = $post["jenis_bayar"];
        $this->dateline = $post["dateline"];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_jenis = $post["kode_jenis"];
        $this->jenis_bayar = $post["jenis_bayar"];
        $this->dateline = $post["dateline"];
        return $this->db->update($this->_table, $this, array('kode_jenis' => $post['kode_jenis']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_jenis" => $id));
    }
}
