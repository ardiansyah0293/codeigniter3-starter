<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        show_404();
	}

    public function login()
    {
        ///If Already login
        if($this->session->has_userdata('user_id')){
            redirect('admin');
        }

        $data=['title'=>'Login'];
        $this->load->model('Auth_model');
        $this->load->library('form_validation');

        $rules=$this->Auth_model->rules();
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run()==false){
            return $this->template->load('main','contents','auth/login',$data);
        }

        $username=$this->input->post('username');
        $password=$this->input->post('password');

        if($this->Auth_model->login($username,$password)){
            redirect('admin');
        }else{
            $this->session->set_flashdata('message_login_error','Login Gagal, pastikan username dan password benar');
        }

            $this->template->load('main','contents','auth/login',$data);
    }

    public function logout()
    {
        ///If Already logout
        $data=['title'=>'Home'];
        if(!$this->session->has_userdata('user_id')){
            redirect('home',$data);
        }

        $this->load->model('Auth_model');
        $this->Auth_model->logout();
        redirect(site_url());
    }
}
