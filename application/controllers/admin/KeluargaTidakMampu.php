<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KeluargaTidakMampu extends CI_Controller
{
    // membuat class construct
    public function __construct()
    {
        // untuk menjalankan program pertama kali dieksekusi
        parent::__construct();
        // load model dan library
        $this->load->model('KeluargaTidakMampu_model');
        $this->load->model('KepalaKeluarga_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));

    }

    // mengambil data model dan di render
    public function index()
    {
        // untuk mengambil data dari model secara keseluruhan
        $data["KeluargaTidakMampu"] = $this->KeluargaTidakMampu_model->getAll();
        // meload data pada view yang sudah dibuat pada folder view
        $this->load->view("admin/keluargatidakmampu/list", $data);
    }
    
    public function relasi(){
        $data["KepalaKeluarga"] = $this->KepalaKeluarga_model->getAll();
        $this->load->view("admin/keluargatidakmampu/new_form", $data);
    }

    // Digunakan untuk memanggil form
    public function input()
    {
        // untuk meload tampilan newform pada bagian view
        $this->load->view('admin/keluargatidakmampu/new_form');
    }

    // menambahkan data
    public function add()
    {
        $this->KeluargaTidakMampu_model->save();
        $this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
    }

    // untuk fungsi edit dengan nilai defaultnya null
    public function edit( $id = NULL )
    {
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan_Ayah', 'required');
        $this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan_Ayah', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan_Ibu', 'required');
        $this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan_Ibu', 'required');

        // $data["KepalaKeluarga"] = $this->KepalaKeluarga_model->getAll();
        $data['KeluargaTidakMampu']  = $this->KeluargaTidakMampu_model->getById($id);
        
        if ($this->form_validation->run()) {
            $this->KeluargaTidakMampu_model->update();

        }
        $this->load->view("admin/keluargatidakmampu/edit_form", $data);
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    // untuk fungsi delete dengan nilai defaultnya null
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->KeluargaTidakMampu_model->delete($id)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect(site_url('admin/keluargatidakmampu'));
        }
    }
}
