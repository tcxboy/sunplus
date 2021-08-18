<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class HX_Controller extends CI_Controller {

   public $us;
   public $limit = 10;

   public function __construct()
   {
      parent::__construct();

      $this->us = $this->session->sess_user;
   }

   public function view_admin($view,$load)
   {
      if (empty($this->us)) {
         $pesan = hx_info('warning','Silahkan Login terlebih dahulu');
         $this->session->set_flashdata('hx_info', $pesan);

		   redirect('admin/login');
      }

      $load['_konten'] = $this->load->view('admin/'.$view,$load,TRUE);

      $this->load->view('admin/template',$load);
   }
   
    public function view_user($view,$load)
   {
      if (empty($this->us)) {
         $pesan = hx_info('warning','Silahkan Login terlebih dahulu');
         $this->session->set_flashdata('hx_info', $pesan);

		   redirect('admin/login');
      }

      $load['_konten'] = $this->load->view($view,$load,TRUE);

      $this->load->view('usertemplate',$load);
   }

   public function view_publik($view,$load)
   {
      $load['_konten'] = $this->load->view($view,$load,TRUE);

      $this->load->view('admin/public_template',$load);
   }
}