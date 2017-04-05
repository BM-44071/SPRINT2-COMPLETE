<?php
class Login extends CI_controller
{
	public function loginService()
	{
		$user['EmailId']=$this->input->get_post('email');
		$user['Password']=$this->input->get_post('password');
		$this->load->model('loginm');
		$this->loginm->loginmService($user);
	}
}
?>