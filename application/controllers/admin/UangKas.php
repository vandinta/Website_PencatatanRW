<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UangKas extends CI_Controller
{
    // membuat class construct
    public function __construct()
    {
        // untuk menjalankan program pertama kali dieksekusi
        parent::__construct();
        // load model dan library
        $this->load->model('uangkas_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }
    
    // mengambil data model dan di render
    public function index()
    {
        // untuk mengambil data dari model secara keseluruhan
        $data["UangKas"] = $this->uangkas_model->getAll();
        // meload data pada view yang sudah dibuat pada folder view
        $this->load->view("admin/uangkas/list", $data);
    }
    
    // Digunakan untuk memanggil form
    public function input()
    {
        // untuk meload tampilan newform pada bagian view
        $this->load->view('admin/uangkas/new_form');
    }

    // menambahkan data
    public function add()
    {
        $this->uangkas_model->save();
        $this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
    }

    // untuk fungsi edit dengan nilai defaultnya null
    public function edit( $id = NULL )
    {
        $this->form_validation->set_rules('nama_kegiatan', 'Nama_Kegiatan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        
        $data['UangKas']  = $this->uangkas_model->getById($id);
        
        if ($this->form_validation->run()) {
            $this->uangkas_model->update();
            
        }
        $this->load->view("admin/uangkas/edit_form", $data);
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }
    
    // untuk fungsi delete dengan nilai defaultnya null
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->uangkas_model->delete($id)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect(site_url('admin/UangKas'));
        }
    }
    
    public function print(){
        $data['UangKas']  = $this->uangkas_model->getAll();
        $this->load->view('admin/uangkas/print_uangkas', $data);
    }

    public function pdf()
    {
        $this->load->library('pdfgenerator');
        $this->data['UangKas'] = $this->uangkas_model->getAll();
        
        $file_pdf = 'Laporan Data Uang Kas ('. date('d-m-Y') . ')';
        $paper = 'A4';
        $orientation = "landscape";
        
		$html = $this->load->view('admin/uangkas/laporan_pdf',$this->data, true);	    
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}