<?php defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    private $_table = "user_role";

    public $id;
    public $role;

    public function rules()
    {
        return [
            [
                'field' => 'role',
                'label' => 'role',
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
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nomor_induk = $post["nomor_induk"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->kelompok_kelas = $post["kelompok_kelas"];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->role = $post["role"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
