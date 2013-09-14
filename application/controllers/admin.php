<?php
class admin extends CI_Controller
{
    function __construct() {
        parent::__construct();
        //$this->load->library('session');
    }
    function index()
    {
        $online = $this->session->userdata('adminonline');
        if($online == 1)
        {
            redirect(site_url().'/admin/panel');
        }
        
        $this->load->view('login_view');
    }
    
    function login()
    {
        
        $username   =   $this->input->post('username',TRUE);
        $password   =   $this->input->post('password',TRUE);
        
        if($username == 'admin' && $password == 'admin' && !empty($username) && !empty($password))
        {
            //uye girisi
            
            $this->session->set_userdata('adminonline',1);
            redirect(site_url().'/admin/panel');
        }
        else
        {
            $data   =   array(
                        'title' => 'hata olustu',
                        'message' => 'wrong username or password'
                        );
            $this->load->view('hata_view',$data);
        }
    }
    
    function panel()
    {
        $online = $this->session->userdata('adminonline');
        
        if($online != 1)
        {
            redirect(site_url().'/admin');
        }
        
        $this->load->view('admin_view');
    }
    function logout()
    {
        $this->session->unset_userdata('adminonline');
        redirect(site_url() . '/admin');
    }
}

?>
