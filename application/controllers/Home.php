<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index()
	{
        header("Access-Control-Allow-Origin: *");
        $data=[
            'title'=>'Home'
        ];
        $this->template->load('main','contents','home',$data);
	}
}
