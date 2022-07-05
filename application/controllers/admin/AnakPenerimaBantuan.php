<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AnakPenerimaBantuan extends CI_Controller
{
    // membuat class construct
    public function __construct()
    {
        // untuk menjalankan program pertama kali dieksekusi
        parent::__construct();
        // load model dan library
        $this->load->model('anakpenerimabantuan_model');
        $this->load->model('KepalaKeluarga_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));

    }

    // mengambil data model dan di render
    public function index()
    {
        // untuk mengambil data dari model secara keseluruhan
        $data["AnakPenerimaBantuan"] = $this->anakpenerimabantuan_model->getAll();
        // meload data pada view yang sudah dibuat pada folder view
        $this->load->view("admin/anakpenerimabantuan/list", $data);
    }

    public function relasi(){
        $data["KepalaKeluarga"] = $this->KepalaKeluarga_model->getAll();
        $this->load->view("admin/anakpenerimabantuan/new_form", $data);
    }
    
    // Digunakan untuk memanggil form
    public function input()
    {
        // untuk meload tampilan newform pada bagian view
        $this->load->view('admin/anakpenerimabantuan/new_form');
    }

    // menambahkan data
    public function add()
    {
        // Configurasi File
        $config['upload_path'] = './assets/fotopenerimabantuan';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // Mengatur ukuran maksimal file
        $config['max_size'] = '2048';
        // mengatur ukuran lebar maksimal yang dilakukan
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->anakpenerimabantuan_model->save();
        $this->session->set_flashdata('berhasil', 'Berhasil ditambahkan');
    }

    // untuk fungsi edit dengan nilai defaultnya null
    public function edit( $id = NULL )
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama_Lengkap', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama_Ibu', 'required');

        $data['AnakPenerimaBantuan']  = $this->anakpenerimabantuan_model->getById($id);
        // Configurasi File
        $config['upload_path'] = './assets/fotopenerimabantuan';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // Mengatur ukuran maksimal file
        $config['max_size'] = '2048';
        // mengatur ukuran lebar maksimal yang dilakukan
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if ($this->form_validation->run()) {
            $this->anakpenerimabantuan_model->update();

        }
        $this->load->view("admin/anakpenerimabantuan/edit_form", $data);
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    // untuk fungsi delete dengan nilai defaultnya null
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->anakpenerimabantuan_model->delete($id)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect(site_url('admin/anakpenerimabantuan'));
        }
    }
}
