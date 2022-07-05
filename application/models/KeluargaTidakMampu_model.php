<?php defined('BASEPATH') or exit('No direct script access allowed');

class KeluargaTidakMampu_model extends CI_Model
{
	// nama tabel
	private $tb_keluargatidakmampu = "tb_keluargatidakmampu";

	public function getAll()
	{
		// tb_keluargatidakmampu adalah nama tabel
		// untuk mengembalikan array yang berisi objek dari row
		return $this->db->get($this->tb_keluargatidakmampu)->result();
	}
	
	public function getById($id)
	{
		// mengembalikan sebuah objek
		// mengambil semua dari tb_data-rt yang dimana id_nama = id
		return $this->db->get_where($this->tb_keluargatidakmampu, ["id_keluarga" => $id])->result();
	}

	public function save()
    {
        $data = array(
            'id_keluarga' => Null, 
            'kepalakeluarga' => $this->input->post('kepalakeluarga'),
            'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
            'jumlah_tanggungan' => $this->input->post('jumlah_tanggungan'),
        );
		
        $this->db->insert($this->tb_keluargatidakmampu, $data);
		$this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
		redirect(site_url('admin/KeluargaTidakMampu/index'));
    }
    
	public function update($id = NULL)
    {
        $id = $this->input->post('id');
        
        $data = array(
            'id_keluarga' => $id, 
            'kepalakeluarga' => $this->input->post('kepalakeluarga'),
            'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
            'jumlah_tanggungan' => $this->input->post('jumlah_tanggungan'),
        );

        $this->db->update($this->tb_keluargatidakmampu, $data, array('id_keluarga' => $id));
        $this->session->set_flashdata('success', 'Berhasil diupdate');
		redirect(site_url('admin/KeluargaTidakMampu/index'));
    }

	public function delete($id)
	{
		// menjalankan dengan memanggil db dan tabel kemudian mencari id yang sesuai
		return $this->db->delete($this->tb_keluargatidakmampu, array("id_keluarga" => $id));
	}
}
