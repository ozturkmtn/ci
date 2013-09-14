<?php
class Index extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $data['title']      =   'ILK CODEIGNITER UYGULAMASI';
        $data['content']    =   'Ilk codeigniter uygulamasina Hos geldiniz.';
        $this->load->view('index_view',$data);
        
    }
    
    function class_list(){
        $this->load->model("index_model");
        $data['classes'] = $this->index_model->classes();
        
        $this->load->view("index_view",$data);
    }
}


?>