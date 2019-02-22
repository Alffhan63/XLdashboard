<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Welcome';
        $data['page'] = 'Home/content/v_welcomepage';
        $this->load->view('Home/include/layout',$data);
    }

    public function login()
    {
        $data['title'] = 'Login';
        $data['page'] = 'Home/content/v_login';
        $this->load->view('Home/include/layout',$data);
    }
}