<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        if(!$this->Auth_model->current_user()){
            redirect('auth/login');
        }
    }

    public function index()
	{
        $data=[
            'title'=>'Dashboard',
            'current_user'=>$this->Auth_model->current_user(),
        ];
        return $this->template->load('main','contents','admin/dashboard',$data);
	}

    
}
