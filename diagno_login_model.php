<?php

class diagno_login_model extends CI_Model
{
    //put your code here
    function  __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    function getLoginCheck()
    {      
        $array=array('user_name'=>$this->input->post('username'),
                'password'=>$this->input->post('password'));        
        $query=$this->db->get_where('user_details',$array);       
	    $admin_empcode_rows=$query->num_rows();        
        if($admin_empcode_rows>0){
              return 1;
        }
        return $query->num_rows();
    }
    function centersList()
    {
        $query=$this->db->query("SELECT * FROM `hospital` ");       
	    $hospital_rows=$query->result();
	    return $hospital_rows;
    }
     function testList($slno)
    {       
        $query=$this->db->query("SELECT * FROM `center_tests` where id=".$slno."  ");       
	    $test_rows=$query->result();
	    return $test_rows;
    }
}
?>