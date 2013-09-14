<?php
class uye_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function staffs()
    {
        $query  = $this->db->query("SELECT staff_id, st_firstname, st_lastname FROM sc_staff WHERE IsDeleted = 0 ORDER BY st_firstname ASC");
        return $query->result_array();
    }
    function kayit($degerler)
    {
        $name       = $this->db->escape_str($degerler[0]);
        $username   = $this->db->escape_str($degerler[1]);
        $password   = $this->db->escape_str($degerler[2]);
        $data   =   array(
                    'staff_id'=>$name,
                    'loginname'=>$username,
                    'password'=>$password
                    );
        $ekle   = $this->db->insert('admin_login',$data);
        
        if ($ekle   ==  1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
}


?>
