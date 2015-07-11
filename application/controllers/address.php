<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class address extends CI_Controller {

	public function index()
	{
		$data['hafiz']=array('Hafiz','Joy','Sumon');
		$this->load->view('address',$data);
		
	}
}
