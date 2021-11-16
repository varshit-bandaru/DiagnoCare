<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class diagno extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
        //loading the model and session library
        $this->load->model('diagno_login_model',"",true);
        $this->load->library('session');       
    }
    // fucntion which shows initial login page
	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('login');
	}
	//function to verify login
	public function logincheck()
	{
		$status=$this->diagno_login_model->getLoginCheck();
		$this->session->set_userdata("user_id",$this->input->post("username"));
        $session_id=$this->session->userdata("user_id");
        $data['id']=$session_id;    
        $status=$this->diagno_login_model->getLoginCheck();
         if($status==1)
         {
         	$this->load->view('navbar',$data);
         	$this->load->view('bookapp',$data);
         }
         else
         {
         	$this->load->view('navbar',$data);
         	$this->load->view('login');        
         }
	}
//function which shows all diagnostic centers
	public function bookservice()
	{
        $session_id=$this->session->userdata("user_id");
        $data['id']=$session_id;    
		$center_div="";
		$centersList=$this->diagno_login_model->centersList();
		foreach($centersList as $centers)
		{
			$center_div.="<br><br><div   style='width:80%;padding:5px;box-shadow: 10px 10px 8px #888888;margin-left:5%;'><span>Name</span><span>".$centers->name."</span><br><span>Phone :</span> <span>".$centers->phone."</span><br><span>Location :</span><span>".$centers->location."</span><a href='http://localhost/diagno/index.php/diagno/all_tests/".$centers->id."'><input type='submit' value='BOOK'  id='".$centers->id."'
			 style='color:white;background-color:black;height:50px;width:170px;float:right'></a></div>";
		}
		$data['center_div']=$center_div;
		$this->load->view('navbar',$data);
		$this->load->view("centers",$data);
	}
//function which shows diagnostic tests from selected specific center
	public function all_tests()
	{
		$session_id=$this->session->userdata("user_id");
        $data['id']=$session_id;    
		$slno= $this->uri->segment(3);
		$testList=$this->diagno_login_model->testList($slno);
		$center_div="";
		$i=1;
		$session_id=$this->session->userdata("user_id");
        $data['id']=$session_id;
        $this->load->view('navbar',$data);       
		foreach($testList as $tests)
		{
			$center_div.="<br><br><div  id='".$i."'   style='font-size:20px; width:80%;padding:5px;box-shadow: 10px 10px 8px #888888;margin-left:5%'><br><span>Test Name :</span> <span>".$tests->name_test."</span><br><span>Price :</span><span>".$tests->charge."</span><div style='height:30px;width:20%'><div style='float:left;height:100%;width:30px;cursor:pointer' id='subb_".$i."' onclick='subnum(this.id)'  ><b>-</b></div><input type='hidden' value='0' id='add_".$i."' ><div id='sub_".$i."' style='float:left;margin:8px 0px 0px 30%'><b>0</b></div> <div style='float:right;height:100%;width:30px;cursor:pointer' onclick='addnum(this.id)' id='addd_".$i."'><b>+</b></div></div></div>";
			$i++;
		}
		$center_div.="<br><br><br><br>";
		$data['test_lists']=$center_div;
		$this->load->view("test_lists",$data);
	}
// function which directs to order completion page
	public function successful()
	{
		$session_id=$this->session->userdata("user_id");
        $data['id']=$session_id;
        $this->load->view('navbar',$data); 
		$this->load->view("success",$data);
	}
}

?>