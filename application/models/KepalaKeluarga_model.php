<?php defined('BASEPATH') or exit('No direct script access allowed');

class KepalaKeluarga_model extends CI_Model
{
	// nama tabel
	private $tb_kepalakeluarga = "tb_kepalakeluarga";

	public function getAll()
	{
		// tb_kepalakeluarga adalah nama tabel
		// untuk mengembalikan array yang berisi objek dari row
		return $this->db->get($this->tb_kepalakeluarga)->result();
	}

	public function getById($id)
	{
		// mengembalikan sebuah objek
		// mengambil semua dari tb_data-rt yang dimana id_nama = id
		return $this->db->get_where($this->tb_kepalakeluarga, ["id_kepalakeluarga" => $id])->result();
	}

	public function save()
    {
      $foto = $this->upload->do_upload('foto_kk');

      if ($foto) {
			$foto = $this->upload->data('file_name');
			$this->session->flashdata('success', 'Berhasil Disimpan');
			
        } else {
            echo "else terjalankan";
            $file = '';
        }

        $data = array(
            'id_kepalakeluarga' => Null, 
            'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'tanggal_lahir' => $this->input->post("tanggal_lahir"),
            'jumlah_anggotakeluarga' => $this->input->post('jumlah_anggotakeluarga'), 
            'pekerjaan' => $this->input->post('pekerjaan'), 
            'nomor_hp' => $this->input->post('nomor_hp'),
            'foto_kk' => $foto,
            'keterangan' =>  $this->input->post("keterangan"), 

        );
		
        $this->db->insert($this->tb_kepalakeluarga, $data);
		$this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
		redirect(site_url('admin/KepalaKeluarga/index'));
    }

	public function update($id = NULL)
    {
        $foto = $this->upload->do_upload('foto_kk');
        // update foto
        if ($foto) {
            $data = $this->upload->data();
            $foto = $data['file_name'];
			
        } else {
            $foto = $this->input->post('fotolama');
        }
        
        $id = $this->input->post('id');

        $data = array(
            'id_kepalakeluarga' => $id, 
            'nama_kepalakeluarga' => $this->input->post('nama_kepalakeluarga'),
            'tanggal_lahir' => $this->input->post("tanggal_lahir"),
            'jumlah_anggotakeluarga' => $this->input->post('jumlah_anggotakeluarga'), 
            'pekerjaan' => $this->input->post('pekerjaan'), 
            'nomor_hp' => $this->input->post('nomor_hp'),
            'foto_kk' => $foto,
            'keterangan' =>  $this->input->post("keterangan"),
        );

        $this->db->update($this->tb_kepalakeluarga, $data, array('id_kepalakeluarga' => $id));
        $this->session->set_flashdata('success', 'Berhasil diupdate');
		redirect(site_url('admin/KepalaKeluarga/index'));
    }

	public function delete($id)
	{
		// menjalankan dengan memanggil db dan tabel kemudian mencari id yang sesuai
		return $this->db->delete($this->tb_kepalakeluarga, array("id_kepalakeluarga" => $id));
	}
}
