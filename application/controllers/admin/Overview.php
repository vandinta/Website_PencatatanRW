<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data['hasil']=$this->user_model->Jum_kas();
        // load view admin/overview.phpk
        $this->load->view("admin/overview",$data);
	}
}
