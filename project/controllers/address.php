<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class address extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('address_model');
    }	

	public function index()
	{
		$data['addresses']=$this->address_model->display_address();
		$this->load->view('address',$data);
		
	}
	public function add()
	{
		$this->load->view('address_insert');
		
	}

	public function insert()
	{
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('thana', 'Thana', 'required');

        if ($this->form_validation->run() == FALSE)
        {	$aData['errors']=validation_errors();
            $this->load->view('address_insert',$aData);
        }else{
			$data['country']=$this->input->post('country');
			$data['city']=$this->input->post('city');
			$data['thana']=$this->input->post('thana');
			$this->address_model->insert($data);
			redirect('address');
		}
	}


	public function delete($id){
		$this->address_model->delete($id);
		redirect('address');
	}


	public function edit($id){
		$data['list']=$this->address_model->get_single_address($id);
		$this->load->view('address_edit',$data);
	}


	public function update_address(){
		$data['country']=$this->input->post('country');
		$data['city']=$this->input->post('city');
		$data['thana']=$this->input->post('thana');

		$this->address_model->update_address($data,$_POST['hid']);
		$this->index();
	}
}
