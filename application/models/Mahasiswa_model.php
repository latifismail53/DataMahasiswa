<?php
class Mahasiswa_model extends CI_model
{
	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama_mhs"      => $this->input->post('nama_mhs', true),
            "nim"       => $this->input->post('nim', true),
            "jns_kelamin"     => $this->input->post('jns_kelamin', true),
            "alamat"   => $this->input->post('alamat', true),
            "no_hp"   => $this->input->post('no_hp', true),
            "jurusan"   => $this->input->post('jurusan', true),

        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id_mhs)
    {
        $this->db->where('id_mhs', $id_mhs);
        $this->db->delete('mahasiswa');
    }

    public function getMahasiswaById($id_mhs)
    {
        return $this->db->get_where('mahasiswa', ['id_mhs' => $id_mhs])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama_mhs"      => $this->input->post('nama_mhs', true),
            "nim"       => $this->input->post('nim', true),
            "jns_kelamin"     => $this->input->post('jns_kelamin', true),
            "alamat"   => $this->input->post('alamat', true),
            "no_hp"   => $this->input->post('no_hp', true),
            "jurusan"   => $this->input->post('jurusan', true),

        ];

        $this->db->where('id_mhs', $this->input->post('id_mhs'));
        $this->db->update('mahasiswa', $data);
    }

    // public function cariData()
    // {
    //     $cari = $this->input->post('cari', true);
    //     $this->db->like('nama', $cari);
    //     $this->db->or_like('jurusan',$cari);
    //     $this->db->or_like('nim',$cari);
    //     return $this->db->get('mahasiswa')->result_array();
    // }

}