<?php
class Loginm extends CI_model
{
	public function loginmService($user)
	{
	
	$query=$this->db->select('*')
					->from('registration')
					->where($user)
					->get();
	$result=$query->result_array();
		// print_r($result);
		if($query->num_rows()==1)
		{
			$response = array('ResponseCode' =>200,'message'=>'suceess','profile'=>$result[0]['Prof_pic'],'fname'=>$result[0]['Firstname'],'lname'=>$result[0]['Lastname'],'id'=>$result[0]['LoginId']);
 			echo json_encode($response);

		}
		 else
		 {
	$query=$this->db->select('*')
						 ->from('registration')
						->where('EmailId',$user['EmailId'])
						->get();
		 $result=$query->result_array();
		
	 	 if($query->num_rows()==1)
	 	  {
	 		// print_r($result);
	 		  $response= array('ResponseCode' =>500,'message'=>'password error','profile'=>$result[0]['Prof_pic'],'fname'=>$result[0]['Firstname'],'lname'=>$result[0]['Lastname'],'id'=>$result[0]['LoginId'],'email'=>$result[0]['EmailId']);
	 	 echo json_encode($response);
	  }
	else
	{

		$response= array('ResponseCode' =>404,'message'=>'user name and password eror');
		//print_r($response);
		echo json_encode($response);
	}
 }

				
	 }
}
?>