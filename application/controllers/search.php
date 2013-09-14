<?php
class search extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->view('search_view');
    }
    
    function result()
    {
        $first_name = $this->input->post('first_name',TRUE);
        
        if(empty($first_name))
        {
            $this->load->view('hata_view');
        }
        else
        {
            $this->load->model('search_model');
            $data['results']    = $this->search_model->get_result($first_name);
            $this->load->view('search_result_view',$data);
        }
    }
}
?>