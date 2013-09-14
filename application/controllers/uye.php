<?php
class uye extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function yeni()
    {
        $this->load->model('uye_model');
        $data['staffs'] = $this->uye_model->staffs();
        $this->load->view('uye_yeni_view',$data);
        
    }
    function ekle()
    {
        $name       =   $this->input->post('name',TRUE);
        $username   =   $this->input->post('username',TRUE);
        $password   =   $this->input->post('password',TRUE);
        if(empty($name) || empty($username) || empty($password))
        {
            $data = array('title'=> 'HATA Var','message'=>'Lutfen acele etmeyin herkese yeter');
            $this->load->view('hata_view');
        }
        else
        {
            $degerler = array($name,$username,$password);
            $this->load->model('uye_model');
            $sonuc = $this->uye_model->kayit($degerler);
            
            if($sonuc == 1)
            {
                $data = array('title' => 'kayit oldu', 'messge'=>'kayit basarili oldu. Tebriler');
                $this->load->view('hata_view',$data);
            }
            else
            {
                $data = array('title'=> 'hata var','messsage'=>'kayit sirasinda hata oldu yine dene');
                $this->load->view('hata_view',$data);
            }
        }
    }
}


?>
