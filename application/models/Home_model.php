<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
    private $_table = "daftar";

    public $kd_daftar;
    public $nm_calon_siswa;
    public $umur;
    public $kelas;
    public $ttl;
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
    public $kartu_keluarga = "default.jpg";
    public $foto_siswa = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'nm_calon_siswa',
            'label' => 'nm_calon_siswa',
            'rules' => 'required'],

            ['field' => 'umur',
            'label' => 'umur',
            'rules' => 'required'],

            ['field' => 'kelas',
            'label' => 'kelas',
            'rules' => 'required'],

            ['field' => 'ttl',
            'label' => 'ttl',
            'rules' => 'required'],

            ['field' => 'jkel',
            'label' => 'jkel',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'agama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'nama_ayah',
            'label' => 'nama_ayah',
            'rules' => 'required'],

            ['field' => 'umur_ayah',
            'label' => 'umur_ayah',
            'rules' => 'required'],

            ['field' => 'alamat_ayah',
            'label' => 'alamat_ayah',
            'rules' => 'required'],

            ['field' => 'pendidikan_ayah',
            'label' => 'pendidikan_ayah',
            'rules' => 'required'],

            ['field' => 'pekerjaan_ayah',
            'label' => 'pekerjaan_ayah',
            'rules' => 'required'],

            ['field' => 'telepon_ayah',
            'label' => 'telepon_ayah',
            'rules' => 'required'],

            ['field' => 'nama_ibu',
            'label' => 'nama_ibu',
            'rules' => 'required'],

            ['field' => 'umur_ibu',
            'label' => 'umur_ibu',
            'rules' => 'required'],

            ['field' => 'alamat_ibu',
            'label' => 'alamat_ibu',
            'rules' => 'required'],

            ['field' => 'pendidikan_ibu',
            'label' => 'pendidikan_ibu',
            'rules' => 'required'],

            ['field' => 'pekerjaan_ibu',
            'label' => 'pekerjaan_ibu',
            'rules' => 'required'],

            ['field' => 'telepon_ibu',
            'label' => 'telepon_ibu',
            'rules' => 'required'],
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

    public function save()
    {
        $post = $this->input->post();
        $this->nm_calon_siswa = $post["nm_calon_siswa"];
		$this->umur = $post["umur"];
        $this->kelas = $post["kelas"];
        $this->ttl = $post["ttl"];
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
        $this->akta_lahir = $this->_uploadImage();
        $this->kartu_keluarga = $this->_uploadImage2();
        $this->foto_siswa = $this->_uploadImage3();

        $this->db->insert($this->_table, $this);
    }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->kd_daftar = $post["id"];
    //     $post = $this->input->post();
    //     $this->nm_calon_siswa = $post["nm_calon_siswa"];
	// 	$this->umur = $post["umur"];
    //     $this->kelas = $post["kelas"];
    //     $this->ttl = $post["ttl"];
    //     $this->jkel = $post["jkel"];
    //     $this->agama = $post["agama"];
    //     $this->alamat = $post["alamat"];
    //     $this->nama_ayah = $post["nama_ayah"];
    //     $this->umur_ayah = $post["umur_ayah"];
    //     $this->alamat_ayah = $post["alamat_ayah"];
    //     $this->pendidikan_ayah = $post["pendidikan_ayah"];
    //     $this->pekerjaan_ayah = $post["pekerjaan_ayah"];
    //     $this->telepon_ayah = $post["telepon_ayah"];
    //     $this->nama_ibu = $post["nama_ibu"];
    //     $this->umur_ibu = $post["umur_ibu"];
    //     $this->alamat_ibu = $post["alamat_ibu"];
    //     $this->pendidikan_ibu = $post["pendidikan_ibu"];
    //     $this->pekerjaan_ibu = $post["pekerjaan_ibu"];
    //     $this->telepon_ibu = $post["telepon_ibu"];

    //     if (!empty($_FILES["akta_lahir"]["name"])) {
    //         $this->gambar = $this->_uploadImage();
    //     } else {
    //         $this->gambar = $post["old_image"];
	// 	}

    //     if (!empty($_FILES["kartu_keluarga"]["name2"])) {
    //         $this->gambar = $this->_uploadImage2();
    //     } else {
    //         $this->gambar = $post["old_image"];
	// 	}

    //     if (!empty($_FILES["foto_siswa"]["name3"])) {
    //         $this->gambar = $this->_uploadImage3();
    //     } else {
    //         $this->gambar = $post["old_image"];
	// 	}

    //     $this->db->update($this->_table, $this, array('kd_daftar' => $post['id']));
    // }

    // public function delete($id)
    // {
    //     $this->_deleteImage($id);
    //     $this->_deleteImage2($id);
    //     $this->_deleteImage3($id);
    //     return $this->db->delete($this->_table, array("id_user" => $id));
	// }

    private function _uploadImage()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->kd_daftar;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('akta_lahir')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

    private function _uploadImage2()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->kd_daftar;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('kartu_keluarga')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

    private function _uploadImage3()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->kd_daftar;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto_siswa')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	// private function _deleteImage($id)
	// {
	// 	$daftar = $this->getById($id);
	// 	if ($daftar->akta_lahir != "default.jpg") {
	// 		$filename = explode(".", $daftar->akta_lahir)[0];
	// 		return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
	// 	}
	// }

    // private function _deleteImage2($id)
	// {
	// 	$daftar = $this->getById($id);
	// 	if ($daftar->kartu_keluarga != "default.jpg") {
	// 		$filename = explode(".", $daftar->kartu_keluarga)[0];
	// 		return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
	// 	}
	// }

    // private function _deleteImage3($id)
	// {
	// 	$daftar = $this->getById($id);
	// 	if ($daftar->foto_siswa != "default.jpg") {
	// 		$filename = explode(".", $daftar->foto_siswa)[0];
	// 		return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
	// 	}
	// }

}
