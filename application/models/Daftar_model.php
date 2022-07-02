<?php defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    private $_table = "daftar";

    // public $kd_daftar;
    public $tgl_daftar;
    public $nm_calon_siswa;
    public $umur;
    public $kelas;
    public $tempat_lahir;
    public $tgl_lahir;
    public $jkel;
    public $agama;
    public $alamat;
    public $nama_ayah;
    public $umur_ayah;
    public $alamat_ayah;
    public $pendidikan_ayah;
    public $pekerjaan_ayah;
    public $telepon_ayah;
    public $nama_ibu;
    public $umur_ibu;
    public $alamat_ibu;
    public $pendidikan_ibu;
    public $pekerjaan_ibu;
    public $telepon_ibu;
    public $akta_lahir = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'nm_calon_siswa',
                'label' => 'nm_calon_siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'umur',
                'label' => 'umur',
                'rules' => 'numeric'
            ],

            [
                'field' => 'kelas',
                'label' => 'kelas',
                'rules' => 'required'
            ],

            [
                'field' => 'tempat_lahir',
                'label' => 'tempat_lahir',
                'rules' => 'required'
            ],

            [
                'field' => 'tgl_lahir',
                'label' => 'tgl_lahir',
                'rules' => 'required'
            ],

            [
                'field' => 'jkel',
                'label' => 'jkel',
                'rules' => 'required'
            ],

            [
                'field' => 'agama',
                'label' => 'agama',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_ayah',
                'label' => 'nama_ayah',
                'rules' => 'required'
            ],

            [
                'field' => 'umur_ayah',
                'label' => 'umur_ayah',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat_ayah',
                'label' => 'alamat_ayah',
                'rules' => 'required'
            ],

            [
                'field' => 'pendidikan_ayah',
                'label' => 'pendidikan_ayah',
                'rules' => 'required'
            ],

            [
                'field' => 'pekerjaan_ayah',
                'label' => 'pekerjaan_ayah',
                'rules' => 'required'
            ],

            [
                'field' => 'telepon_ayah',
                'label' => 'telepon_ayah',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_ibu',
                'label' => 'nama_ibu',
                'rules' => 'required'
            ],

            [
                'field' => 'umur_ibu',
                'label' => 'umur_ibu',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat_ibu',
                'label' => 'alamat_ibu',
                'rules' => 'required'
            ],

            [
                'field' => 'pendidikan_ibu',
                'label' => 'pendidikan_ibu',
                'rules' => 'required'
            ],

            [
                'field' => 'pekerjaan_ibu',
                'label' => 'pekerjaan_ibu',
                'rules' => 'required'
            ],

            [
                'field' => 'telepon_ibu',
                'label' => 'telepon_ibu',
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
        return $this->db->get_where($this->_table, ["kd_daftar" => $id])->row();
    }

    function get($id)
    {
        $param = array('kd_daftar' => $id);
        return $this->db->get_where('daftar', $param);
    }

    public function upstatusvalidasi($statusvalidasi, $kd_daftar)
    {

        $this->db->where('kd_daftar', $kd_daftar);
        $this->db->update('daftar', array('status' => $statusvalidasi));
        return true;
    }

    public function hitungTervalidasi()
    {
        $this->db->select('count(*) AS jml');
        $this->db->from('daftar');
        $this->db->where('status', '1');
        $this->db->group_by('daftar.status');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->tgl_daftar = date("Y-m-d");
        $this->nm_calon_siswa = $post["nm_calon_siswa"];
        $this->umur = $post["umur"];
        $this->kelas = $post["kelas"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->jkel = $post["jkel"];
        $this->agama = $post["agama"];
        $this->alamat = $post["alamat"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->umur_ayah = $post["umur_ayah"];
        $this->alamat_ayah = $post["alamat_ayah"];
        $this->pendidikan_ayah = $post["pendidikan_ayah"];
        $this->pekerjaan_ayah = $post["pekerjaan_ayah"];
        $this->telepon_ayah = $post["telepon_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->umur_ibu = $post["umur_ibu"];
        $this->alamat_ibu = $post["alamat_ibu"];
        $this->pendidikan_ibu = $post["pendidikan_ibu"];
        $this->pekerjaan_ibu = $post["pekerjaan_ibu"];
        $this->telepon_ibu = $post["telepon_ibu"];
        $this->akta_lahir = $this->_uploadImage('akta_lahir');
        $this->kartu_keluarga = $this->_uploadImage2('kartu_keluarga');
        return $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_daftar = $post["kd_daftar"];
        $this->tgl_daftar = $post["tgl_daftar"];
        $this->nm_calon_siswa = $post["nm_calon_siswa"];
        $this->umur = $post["umur"];
        $this->kelas = $post["kelas"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->jkel = $post["jkel"];
        $this->agama = $post["agama"];
        $this->alamat = $post["alamat"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->umur_ayah = $post["umur_ayah"];
        $this->alamat_ayah = $post["alamat_ayah"];
        $this->pendidikan_ayah = $post["pendidikan_ayah"];
        $this->pekerjaan_ayah = $post["pekerjaan_ayah"];
        $this->telepon_ayah = $post["telepon_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->umur_ibu = $post["umur_ibu"];
        $this->alamat_ibu = $post["alamat_ibu"];
        $this->pendidikan_ibu = $post["pendidikan_ibu"];
        $this->pekerjaan_ibu = $post["pekerjaan_ibu"];
        $this->telepon_ibu = $post["telepon_ibu"];

        // if (!empty($_FILES["gambar"]["name"])) {
        //     $this->akta_lahir = $this->_uploadImage('akta_lahir');
        // } else {
        //     $this->akta_lahir = $post["old_image"];
        // }

        return $this->db->update($this->_table, $this, array('kd_daftar' => $post['kd_daftar']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("kd_daftar" => $id));
    }

    private function _uploadImage($name_id)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $name_id . time();
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($name_id)) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _uploadImage2($name_id)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $name_id . time();
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload2', $config);

        if ($this->upload2->do_upload($name_id)) {
            return $this->upload2->data("file_name");
        }

        return "default.jpg";
    }

    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function _deleteImage($id)
    {
        $daftar = $this->getById($id);
        if ($daftar->akta_lahir != "default.jpg") {
            $filename = explode(".", $daftar->akta_lahir)[0];
            return array_map('unlink', glob(FCPATH . "uploads/$filename.*"));
        }
    }

    private function _deleteImage1($id)
    {
        $daftar = $this->getById($id);
        if ($daftar->kartu_keluarga != "default.jpg") {
            $filename = explode(".", $daftar->kartu_keluarga)[0];
            return array_map('unlink', glob(FCPATH . "uploads/$filename.*"));
        }
    }
}
