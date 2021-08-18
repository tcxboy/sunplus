<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pertama extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
	   $id = $this->session->sess_user['id_user'];

		if ($id) {
         $pesan = hx_info('info','Sesi anda masih aktif');
         $this->session->set_flashdata('hx_info', $pesan);

		   redirect('mobile/login');
      }
      else {
         redirect('admin/login');
      }
	}

  
}