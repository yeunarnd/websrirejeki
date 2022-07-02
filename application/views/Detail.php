<?php class Mahasiswa_m extends CI_Model
{
    function tampil_mahasiswa()
    {
        $hasil = $this->db->query("select * from mahasiswa order by mhs_id asc");
        return $hasil;
    }

    function tambah_mahasiswa()
    {
        $data = array(
            'namamhs'     => $this->input->post('nama'),
            'alamatmhs'   => $this->input->post('alamat'),
            'notelp'   => $this->input->post('notelp')
        );
        $this->db->insert('mahasiswa', $data);
    }

    function get($id)
    {
        $param = array('mhs_id' => $id);
        return $this->db->get_where('mahasiswa', $param);
    }

    function edit()
    {
        $data = array(
            'namamhs'     => $this->input->post('nama'),
            'alamatmhs'   => $this->input->post('alamat'),
            'notelp'   => $this->input->post('notelp')
        );
        $this->db->where('mhs_id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    function hapus($id)
    {
        $this->db->where('mhs_id', $id);
        $this->db->delete('mahasiswa');
    }
}
