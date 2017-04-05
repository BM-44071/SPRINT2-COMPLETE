<html lang="en">
 <head>
  <?php $this->load->helper('url');?>
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet"  type="text/css" href="<?php 
  // echo base_url().'css/bootstrap.min.css';?>">  -->
  <!-- <script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script> -->
  



   

    <script>
  function myFunction(x) {
    x.style.borderColor = "black";
     
     var inputVal = document.getElementById("fn1");
    if (inputVal.placeholder=="First Name"&&inputVal.value=="") {
        inputVal.style.borderColor = "red";
        
        inputVal.placeholder="Enter First Name";
        inputVal.style.backgroundColor="#FFE4E1";
    }
    
   
}
function myFunction1(x ){ 
x.style.borderColor="black";
  
 var inputVal = document.getElementById("fn1");
 if(inputVal.placeholder=="Enter First Name"){
    
     inputVal.placeholder="First Name";
     inputVal.style.backgroundColor="white";   
       
    }

}
function myFunction2(x){
x.style.borderColor="black";
var inputVal= document.getElementById("lt1");
if(inputVal.placeholder=="Surname"&&inputVal.value==""){ 

  inputVal.style.borderColor = "red";
  inputVal.placeholder="Enter Surname";
   inputVal.style.backgroundColor="#FFE4E1";
  
  }
  }
  function myFunction3(x){

var inputVal= document.getElementById("lt1");
if(inputVal.placeholder=="Enter Surname"){ 

  inputVal.style.borderColor = "black";
  inputVal.placeholder="Surname";
   inputVal.style.backgroundColor="white";
   
  }
  }
  function myFunction4(x){
  	x.style.borderColor="black";
  	var inputVal=document.getElementById("em1");
  	if(inputVal.placeholder=="Email or mobile number"&&inputVal.value==""){
  	 inputVal.style.borderColor = "red";
  	 	 inputVal.placeholder="Enter email or mobile number";
  	 	 inputVal.style.backgroundColor="#FFE4E1";
  
  	}

  }
    function myFunction5(x){
  	
  	var inputVal=document.getElementById("em1");
  	if(inputVal.placeholder=="Enter email or mobile number"){
  	 inputVal.style.borderColor = "black";
  	 	 inputVal.placeholder="Email or mobile number";
  	 	 inputVal.style.backgroundColor="white";
  
  	}
  }

   function myFunction6(x){
  	x.style.borderColor="black";
  	var inputVal=document.getElementById("rem1");
  	if(inputVal.placeholder=="Re-enter email or mobile number"&&inputVal.value==""){
  	 inputVal.style.borderColor = "red";
  	 	 inputVal.placeholder="Enter re-enter email or mobile number";
  	 	 inputVal.style.backgroundColor="#FFE4E1";
  
  	}

  }
   function myFunction7(x){
  	
  	var inputVal=document.getElementById("rem1");
  	if(inputVal.placeholder=="Enter re-enter email or mobile number"){
  	 inputVal.style.borderColor = "black";
  	 	 inputVal.placeholder="re-enter email or mobile number";
  	 	 inputVal.style.backgroundColor="white";
  
  	}

  }
   function myFunction8(x){
  	x.style.borderColor="black";
  	var inputVal=document.getElementById("np1");
  	if(inputVal.placeholder=="New password"&&inputVal.value==""){
  	 inputVal.style.borderColor = "red";
  	  inputVal.placeholder="Enter new password";
  	 	 inputVal.style.backgroundColor="#FFE4E1";
  
  	}

  }
   function myFunction9(x){
  	
  	var inputVal=document.getElementById("np1");
  	if(inputVal.placeholder=="Enter new password"){
  	 inputVal.style.borderColor = "black";
  	 	 inputVal.placeholder="New password";
  	 	 inputVal.style.backgroundColor="white";
  
  	}

  }
  </script>
 
  </head>
  <body>
  <div class="container-fluid">
   <div class="row">
 <div class="col-md-12">
 
 
 <div id="fb1" style="background-color: darkblue;height: 3cm;margin-top:-22px;">
 <input type="text" id="fb4" style="margin-left: 20cm;margin-top: 50px;">
 <input type="password" id="fb5" style="margin-left: 24cm;margin-top:-45px; " > 
 <input type="button" value="LOGIN" style="margin-top:-49px;" >
<h6 style="border: 1px solid darkblue; width:3.5cm;height:0.5cm;color:white;margin-left: 20cm;margin-top: -70px;">Email or phone</h6> 
 <h6 style="border: 1px solid darkblue;  color:white;margin-left: 24cm;margin-top: -45px;" >Password</h6>
 </div>
 <h1 id="fb3" style="color:white;margin-top: -70px;margin-left: 3cm; ">facebook</h1>
 
 </div>
 </div>
 <div class="row">
 <div class="col-md-12" style="height: 14.8cm;background-color: #edf0f5;"></div>
 <h2 id="fb6" style="color: darkblue;margin-left:5cm; margin-top: -495px;">Facebook helps you connect and share with the <br>people in your life.</h2>
 <img src="<?php echo base_url().'images/map.jpg';?>"  style="width:450px;height:228px; margin-left:5cm;background-color: #edf0f5;">

  <h1 id="fb7" style="margin-left:22cm;margin-top: -9cm; ">create an account</h1> 
  <h5 id="fb8" style="margin-left: 22.1cm;margin-top: -9px;">It's free and always will be.</h5>
 </div></div>
 </body>
 </html>