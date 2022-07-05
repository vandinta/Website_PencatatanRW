<?php defined('BASEPATH') or exit('No direct script access allowed');

class AnggotaKeluarga_model extends CI_Model
{
	// nama tabel
	private $tb_anggotakeluarga = "tb_anggotakeluarga";

	public function getAll()
	{
		// tb_anggotakeluarga adalah nama tabel
		// untuk mengembalikan array yang berisi objek dari row
		return $this->db->get($this->tb_anggotakeluarga)->result();
	}
	
	public function getById($id)
	{
		// mengembalikan sebuah objek
		// mengambil semua dari tb_data-rt yang dimana id_nama = id
		return $this->db->get_where($this->tb_anggotakeluarga, ["id_anggotakeluarga" => $id])->result();
	}

	public function save()
    {
        $data = array(
            'id_anggotakeluarga' => Null, 
            'kepalakeluarga' => $this->input->post('id_kepalakeluarga'),
            'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'nama_istri' => $this->input->post('nama_istri'),
            'nama_anak_pertama' => $this->input->post('nama_anak_pertama'),
            'nama_anak_kedua' => $this->input->post('nama_anak_kedua'),
            'tambahan_anggotakeluarga' => $this->input->post('tambahan_anggotakeluarga'),
        );
		
        $this->db->insert($this->tb_anggotakeluarga, $data);
		$this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
		redirect(site_url('admin/AnggotaKeluarga/index'));
    }

	public function update($id = NULL)
    {
        $id = $this->input->post('id');

        $data = array(
            'id_anggotakeluarga' => $id, 
            'kepalakeluarga' => $this->input->post('id_kepalakeluarga'),
			'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'nama_istri' => $this->input->post('nama_istri'),
            'nama_anak_pertama' => $this->input->post('nama_anak_pertama'),
            'nama_anak_kedua' => $this->input->post('nama_anak_kedua'),
            'tambahan_anggotakeluarga' => $this->input->post('tambahan_anggotakeluarga'),
        );

        $this->db->update($this->tb_anggotakeluarga, $data, array('id_anggotakeluarga' => $id));
        $this->session->set_flashdata('success', 'Berhasil diupdate');
		redirect(site_url('admin/AnggotaKeluarga/index'));
    }

	public function delete($id)
	{
		// menjalankan dengan memanggil db dan tabel kemudian mencari id yang sesuai
		return $this->db->delete($this->tb_anggotakeluarga, array("id_anggotakeluarga" => $id));
	}
}
