<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayatlogin extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'rektor'){
			$array=array('page'=>5);
			$this->load->view('header_v',$array);
		$this->load->view('rektor/riwayatlogin_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
