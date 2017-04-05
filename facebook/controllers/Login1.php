<?php
class Login extends CI_controller
{
	public function Loginmain(){
		$this->load->view('fbmodify');
	}
	public function emailControl()
	{
		$this->load->view('fb4');
	}
	public function pasword()
	{
		 $this->load->view('fb3');
	}
	public function home()
	{
		$this->load->view('homepage');

	}
	public function login1()
	{ 
		$user['email']=$this->input->post('email');
		$user['password']=$this->input->post('password');
        print_r($user);
		$url='http://localhost/services/index.php/Login/loginService';
		     
		$option=array(
			'http'=>array(
				'header'=>"content-type:application/x-www-form-urlencoded\r\n",
				'method'=>'POST',
				'content'=>http_build_query($user),
				),
			);
		$context=stream_context_create($option);
		echo $result=file_get_contents($url,false,$context);
		$json=json_decode($result,true);
		$this->load->library('session');
		$this->session->set_userdata($json);
		if($json['ResponseCode']==200)
		{
			$this->load->view('homepage',$json);
		}
		/*
			

		}
		if($json['ResponseCode']==404){
			//print_r($json['ResponseCode']);
			Console.log("id"+$json['ResponseCode']);
			$this->load->view('emailerror');
		}*/
	// }
	public function verify()
	{
		$this->load->view('emailverify');
	}
}
?>