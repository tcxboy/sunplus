<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller  {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
		
	  $data = $this->mm->get('t_outbox',array('where'=>'t_outbox.verifikasi3= "On Progress"'));
		
		if($data){
			foreach($data as $rw){
				if($rw['auto_verified']){
					date_default_timezone_set("Asia/Bangkok");
					$today = date("Y-m-d H:i:s");
					$expire = $rw['auto_verified']; 

					$today_time = strtotime($today);
					$expire_time = strtotime($expire);

					if ($expire_time < $today_time) { 
						$save = $this->mm->save('t_outbox',array('verifikasi1'=>'Verified','verifikasi2'=>'Verified'),array('id_outbox'=>$rw['id_outbox']));  
					}
				}
			}
		}
	}
}