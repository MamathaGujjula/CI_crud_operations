<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
        $this->load->model('usermodel');
        $users=$this->usermodel->getall();
        $data['users']=$users;
	    $this->load->view('list',$data);

	}
    public function create()
    {
        $this->load->model('usermodel');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('create');
        }
        else
        {
            //to save records in database
            /*$formarray=array();
            $formarray['name']=$this->input->post('name');
            $formarray['email']=$this->input->post('email');
            $formarray['created_at']=date('Y-m-d');
            $this->usermodel->create($formarray);
            echo "record added successfully";*/

            $data = [         
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email')
            ];
            $this->usermodel->create($data);
            echo "record added successfully";

          //  $this->session->set_finishdata('success','Record added successfully');
           // redirect(base_url().'index.php/user/index');

        }
    }
    public function edit($userId)
    {
        $this->load->model('usermodel');      
        $user=$this->usermodel->getUser($userId); 
        $data=array();
        $data['user']=$user;    //$user foreach variable $user

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');

        if($this->form_validation->run()==false)
        {
            $this->load->view('edit',$data);
        }
        else
        {      
            $formarray=array();
            $formarray['name']=$this->input->post('name');
            $formarray['email']=$this->input->post('email');
            $this->usermodel->updateUser($userId,$formarray);
            echo 'Record updated successfully';
           // $this->session->set_finishdata('success','Record updated successfully');
           // redirect(base_url().'index.php/user/index');
        }
    }
    public function delete($userId)
    {
        $this->load->model('usermodel');      
        $users=$this->usermodel->getUser($userId); 
        if(empty($users))
        {
            echo "record not found";
        }
        else{
         
            $this->usermodel->deleteUser($userId);
            echo "deleted record successfully";
        }
        
    }
}
