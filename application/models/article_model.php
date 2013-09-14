<?php
class article_model extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    function save_article($data)
    {
        $save   = $this->db->insert('article',$data);
        return $save;
    }
    
    function list_article()
    {
        $query  = $this->db->query("SELECT * FROM article ORDER BY article_id ASC");
        return $query->result_array();
    }
}









?>
