<?php defined('BASEPATH') or exit('No direct script access allowed');

class UangKas_model extends CI_Model
{
	// nama tabel
	private $tb_uangkas = "tb_uangkas";

	public function getAll()
	{
		// tb_uangkas adalah nama tabel
		// untuk mengembalikan array yang berisi objek dari row
		return $this->db->get($this->tb_uangkas)->result();
	}
	
	public function getById($id)
	{
		// mengembalikan sebuah objek
		// mengambil semua dari tb_uangkas yang dimana id_nama = id
		return $this->db->get_where($this->tb_uangkas, ["id_kegiatan" => $id])->result();
	}

	public function save()
    {
		$penanggung_jawab = implode(" , ", $this->input->post('penanggung_jawab'));

        $data = array(
			'id_kegiatan' => $this->input->post('id_kegiatan'), 
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'kategori_kegiatan' => $this->input->post('kategori_kegiatan'),
            'penanggung_jawab' => $penanggung_jawab,
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => $this->input->post('tanggal'),
            'kas_masuk' => $this->input->post('kas_masuk'),
            'kas_keluar' => $this->input->post('kas_keluar'),
            'total_kas' => $this->input->post('total_kas'),
        );
		
        $this->db->insert($this->tb_uangkas, $data);
		$this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
		redirect(site_url('admin/UangKas/index'));
    }
	
	public function update($id = NULL)
    {
		$penanggung_jawab = implode(" , ", $this->input->post('penanggung_jawab'));
        $id = $this->input->post('id_kegiatan');
		if (empty($penanggung_jawab)) $penanggung_jawab = "Kosong"; 

        $data = array(
            'id_kegiatan' => $id, 
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'kategori_kegiatan' => $this->input->post('kategori_kegiatan'),
            'penanggung_jawab' => $penanggung_jawab,
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => $this->input->post('tanggal'),
            'kas_masuk' => $this->input->post('kas_masuk'),
            'kas_keluar' => $this->input->post('kas_keluar'),
            'total_kas' => $this->input->post('total_kas'),
        );

        $this->db->update($this->tb_uangkas, $data, array('id_kegiatan' => $id));
		redirect(site_url('admin/UangKas/index'));
        // $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

	public function delete($id)
	{
		// menjalankan dengan memanggil db dan tabel kemudian mencari id yang sesuai
		return $this->db->delete($this->tb_uangkas, array("id_kegiatan" => $id));
	}
}
