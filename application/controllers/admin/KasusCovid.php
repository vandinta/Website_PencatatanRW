<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KasusCovid extends CI_Controller
{
    // membuat class construct
    public function __construct()
    {
        // untuk menjalankan program pertama kali dieksekusi
        parent::__construct();
        // load model dan library
        $this->load->model('kasuscovid_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }
    
    // mengambil data model dan di render
    public function index()
    {
        // untuk mengambil data dari model secara keseluruhan
        $data["KasusCovid"] = $this->kasuscovid_model->getAll();
        // meload data pada view yang sudah dibuat pada folder view
        $this->load->view("admin/kasuscovid/list", $data);
    }
    
    // Digunakan untuk memanggil form
    public function input()
    {
        // untuk meload tampilan newform pada bagian view
        $this->load->view('admin/kasuscovid/new_form');
    }

    // menambahkan data
    public function add()
    {
        $this->kasuscovid_model->save();
        $this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
    }

    // untuk fungsi edit dengan nilai defaultnya null
    public function edit( $id = NULL )
    {
        $this->form_validation->set_rules('nama_warga', 'Nama_Warga', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('kondisi', 'Kondisi', 'required');
        
        $data['KasusCovid']  = $this->kasuscovid_model->getById($id);
        
        if ($this->form_validation->run()) {
            $this->kasuscovid_model->update();
            
        }
        $this->load->view("admin/kasuscovid/edit_form", $data);
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }
    
    // untuk fungsi delete dengan nilai defaultnya null
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kasuscovid_model->delete($id)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect(site_url('admin/KasusCovid'));
        }
    }
}