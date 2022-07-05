<?php defined('BASEPATH') or exit('No direct script access allowed');

class KasusCovid_model extends CI_Model
{
	// nama tabel
	private $tb_kasuscovid = "tb_kasuscovid";

	public function getAll()
	{
		// tb_kasuscovid adalah nama tabel
		// untuk mengembalikan array yang berisi objek dari row
		return $this->db->get($this->tb_kasuscovid)->result();
	}
	
	public function getById($id)
	{
		// mengembalikan sebuah objek
		// mengambil semua dari tb_kasuscovid yang dimana id_nama = id
		return $this->db->get_where($this->tb_kasuscovid, ["id_kasus" => $id])->result();
	}

	public function save()
    {
		$gejala = implode(" , ", $this->input->post('gejala'));

        $data = array(
			'id_kasus' => $this->input->post('id_kasus'), 
            'nama_warga' => $this->input->post('nama_warga'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'usia' => $this->input->post('usia'),
            'jenis_konfirmasi' => $this->input->post('jenis_konfirmasi'),
            'tanggal_konfirmasi' => $this->input->post('tanggal_konfirmasi'),
            'gejala' => $gejala,
            'jenis_isolasi' => $this->input->post('jenis_isolasi'),
            'kondisi' => $this->input->post('kondisi'),
        );
		
        $this->db->insert($this->tb_kasuscovid, $data);
		$this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
		redirect(site_url('admin/KasusCovid/index'));
    }
	
	public function update($id = NULL)
    {
		$gejala = implode(" , ", $this->input->post('gejala'));
        $id = $this->input->post('id_kasus');
		if (empty($gejala)) $gejala = "Kosong"; 

        $data = array(
            'id_kasus' => $id, 
            'nama_warga' => $this->input->post('nama_warga'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'usia' => $this->input->post('usia'),
            'jenis_konfirmasi' => $this->input->post('jenis_konfirmasi'),
            'tanggal_konfirmasi' => $this->input->post('tanggal_konfirmasi'),
            'gejala' => $gejala,
            'jenis_isolasi' => $this->input->post('jenis_isolasi'),
            'kondisi' => $this->input->post('kondisi'),
        );

        $this->db->update($this->tb_kasuscovid, $data, array('id_kasus' => $id));
		redirect(site_url('admin/KasusCovid/index'));
        // $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

	public function delete($id)
	{
		// menjalankan dengan memanggil db dan tabel kemudian mencari id yang sesuai
		return $this->db->delete($this->tb_kasuscovid, array("id_kasus" => $id));
	}
}
