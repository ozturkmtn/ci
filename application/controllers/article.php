<?php
class article extends CI_Controller
{
    function __construct() {
        parent::__construct();
        //$this->load->library('session');     
        $online = $this->session->userdata('adminonline');
        if($online != 1)
        {
            redirect(site_url().'/admin');
        }
    }
    function index()
    {
        
        
        $this->load->model('article_model');
        $data['list_array'] = $this->article_model->list_article();
        $this->load->view('article_view',$data);
    }
    
    function new_article()
    {
        $this->load->helper('form');
        $this->load->view('article_new_view');
    }
    function save_article()
    {
        $subject    = $this->input->post('subject',TRUE);
        $article    = $this->input->post('article',TRUE);
        
        if(empty($subject) || empty($article))
        {
            $data['title']      =   'Error!..';
            $data['message']    =   'Please fill all fields';
            
            $this->load->view('hata_view',$data);
        }
        else
        {
            $data['subject']    =   $this->db->escape_str($subject);
            $data['article']    =   $this->db->escape_str($article);
            $this->load->model('article_model');
            $result =   $this->article_model->save_article($data);
            
            if($result == 1)
            {
                $data['title']      =   'Saved';
                $data['message']    =   'Saved Successfully.';

                $this->load->view('hata_view',$data);
            }
            else                
            {
                $data['title']      =   'Error!..';
                $data['message']    =   'Database Error!..';

                $this->load->view('hata_view',$data);
            }
        }
    }
    
    function list_article()
    {
        $this->load->model('article_model');
        $data['list_array'] = $this->article_model->list_article();
        $this->load->view('article_list_view',$data);
    }
}
?>
