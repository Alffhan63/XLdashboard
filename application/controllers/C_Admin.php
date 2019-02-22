<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'WIBPUSH | Dashboard';
        $data['page'] = 'Admin/content/xldashboard2';
        $this->load->view('Admin/include/layout',$data);
    }

    public function report()
    {
        $data['title'] = 'Report';
        $data['page'] = 'Admin/content/v_reports';
        $this->load->view('Admin/include/layout',$data);
    }

    public function register()
    {
        $data['title'] = 'Register';
        $data['page'] = 'Admin/content/v_register';
        $this->load->view('Admin/include/layout',$data);
    }

    public function campaignlist()
    {
        $data['title'] = 'Campaign List';
        $data['page'] = 'Admin/content/v_campaignlist';
        $this->load->view('Admin/include/layout',$data);
	}
	
	public function addmanual()
    {
        $data['title'] = 'Add Manual';
        $data['page'] = 'Admin/content/v_addmanual';
        $this->load->view('Admin/include/layout',$data);
	}

	public function addauto()
    {
        $data['title'] = 'Add Auto';
        $data['page'] = 'Admin/content/v_addauto';
        $this->load->view('Admin/include/layout',$data);
	}

	public function usermanagement()
    {
        $data['title'] = 'User Management';
        $data['page'] = 'Admin/content/v_usermanagement';
        $this->load->view('Admin/include/layout',$data);
    }
}
