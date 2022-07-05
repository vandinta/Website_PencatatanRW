<?php defined('BASEPATH') or exit('No direct script access allowed');

class AnakPenerimaBantuan_model extends CI_Model
{
	// nama tabel
	private $tb_anakpenerimabantuan = "tb_anakpenerimabantuan";

	public function getAll()
	{
		// tb_anakpenerimabantuan adalah nama tabel
		// untuk mengembalikan array yang berisi objek dari row
		return $this->db->get($this->tb_anakpenerimabantuan)->result();
	}

	public function getById($id)
	{
		// mengembalikan sebuah objek
		// mengambil semua dari tb_sensusrw yang dimana id_nama = id
		return $this->db->get_where($this->tb_anakpenerimabantuan, ["id_anak" => $id])->result();
	}

	public function save()
    {
      $foto = $this->upload->do_upload('foto_formal');

      if ($foto) {
			$foto = $this->upload->data('file_name');
			$this->session->flashdata('success', 'Berhasil Disimpan');
			
        } else {
            echo "else terjalankan";
            $file = '';
        }

        $data = array(
            'id_anak' => Null, 
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'kepalakeluarga' => $this->input->post('id_kepalakeluarga'),
            'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tempat_lahir' => $this->input->post("tempat_lahir"),
            'tanggal_lahir' => $this->input->post("tanggal_lahir"),
            'prestasi' => $this->input->post('prestasi'), 
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'), 
            'jenis_bantuan' => $this->input->post('jenis_bantuan'),
            'jumlah_saudara' =>  $this->input->post("jumlah_saudara"), 
            'foto_formal' => $foto,

        );
		
        $this->db->insert($this->tb_anakpenerimabantuan, $data);
		$this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
		redirect(site_url('admin/AnakPenerimaBantuan/index'));
    }

	public function update($id = NULL)
    {
        $foto = $this->upload->do_upload('foto_formal');
        // update foto
        if ($foto) {
            $data = $this->upload->data();
            $foto = $data['file_name'];
			
        } else {
            $foto = $this->input->post('fotolama');
        }
        
        $id = $this->input->post('id');

        $data = array(
            'id_anak' => $id, 
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'kepalakeluarga' => $this->input->post('kepalakeluarga'),
            'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tempat_lahir' => $this->input->post("tempat_lahir"),
            'tanggal_lahir' => $this->input->post("tanggal_lahir"),
            'prestasi' => $this->input->post('prestasi'), 
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'), 
            'jenis_bantuan' => $this->input->post('jenis_bantuan'),
            'jumlah_saudara' =>  $this->input->post("jumlah_saudara"), 
            'foto_formal' => $foto,
        );

        $this->db->update($this->tb_anakpenerimabantuan, $data, array('id_anak' => $id));
        $this->session->set_flashdata('success', 'Berhasil diupdate');
		redirect(site_url('admin/AnakPenerimaBantuan/index'));
    }

	public function delete($id)
	{
		// menjalankan dengan memanggil db dan tabel kemudian mencari id yang sesuai
		return $this->db->delete($this->tb_anakpenerimabantuan, array("id_anak" => $id));
	}
}
