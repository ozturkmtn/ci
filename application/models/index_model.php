<?php

class index_model extends CI_Model{
    function __construct() {
        parent::__construct();
      //  $this->load->database(); autoload.php de yukleniyor.
    }
    
    function classes(){
        // SELECT type_id FROM sc_classes WHERE type_id = 4
        $this->db->select("type_id");
        $this->db->from("sc_classes");
        $this->db->where("type_id",4);
        $query = $this->db->get();
        
        //echo $this->db->last_query();
        //print_r($query->result());
        return $query->result();
    }
}
class index_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function classes()
    {
        $this->db->select('type_id,class_name');
        $this->db->from('sc_classes');
        $this->db->where('type_id',5);
        $query = $this->db->get();
        
        return $query->result();
    }
}

?>
