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
    
    public function automatictarget()
    {
        $data['title'] = 'Automatic Target';
        $data['page'] = 'Admin/content/v_automatictarget';
        $this->load->view('Admin/include/layout',$data);
    }
    public function campaignrecepient()
    {
        $data['title'] = 'Campaign Recepient';
        $data['page'] = 'Admin/content/v_campaignrecepient';
        $this->load->view('Admin/include/layout',$data);
    }
    public function recepientskip()
    {
        $data['title'] = 'Recepient Skip';
        $data['page'] = 'Admin/content/v_recepientskip';
        $this->load->view('Admin/include/layout',$data);
    }
    public function campaignapproval()
    {
        $data['title'] = 'Campaign Approval';
        $data['page'] = 'Admin/content/v_campaignapproval';
        $this->load->view('Admin/include/layout',$data);
    }
    public function blacklist()
    {
        $data['title'] = 'Blacklist';
        $data['page'] = 'Admin/content/v_blacklist';
        $this->load->view('Admin/include/layout',$data);
    }
    public function pushcapacity()
    {
        $data['title'] = 'Push Capacity';
        $data['page'] = 'Admin/content/v_pushcapacity';
        $this->load->view('Admin/include/layout',$data);
    }
    public function edituser()
    {
        $data['title'] = 'Push Capacity';
        $data['page'] = 'Admin/content/v_edituser';
        $this->load->view('Admin/include/layout',$data);
    }
}
