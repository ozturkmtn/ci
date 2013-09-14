
<?php
class search_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_result($first_name)
    {
        $first_name = $this->db->escape_str($first_name);
        $this->db->select('first_name');
        $this->db->from('users');
        $this->db->like('first_name',$first_name);
        
        return $this->db->get()->result();
    }
}
?>