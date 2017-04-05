<html lang="en">
 <head>
  <?php $this->load->helper('url');?>
    
  



   

    <script>
  function myFunction(x) {
    x.style.borderColor = "black";
    var inputVal= document.getElementById("fn1");
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
  <body style="background-color: #edf0f5;">
  <div class="container-fluid">
   <div class="row">
 <div class="col-md-12">
 
 
 <div id="fb1" style="background-color: darkblue;height: 3cm;margin-top:-22px;width: 35.7cm;">
 <form action="<?php echo base_url().'index.php/Login/Login1'?>" method="post">
 <input type="text" id="fb4" style="margin-left: 20cm;margin-top: 50px;" name="email" value="seetha123@gmail.com">
 <input type="password" id="fb5" style="margin-left: 24cm;margin-top:-45px; " name="password" value="seethalakshmi"> 
 <input type="submit" value="LOGIN" style="margin-top:-49px;" >
<h6 style="border: 1px solid darkblue; width:3.5cm;height:0.5cm;color:white;margin-left: 20cm;margin-top: -70px;">Email or phone</h6> 
 <h6 style="border: 1px solid darkblue;  color:white;margin-left: 24cm;margin-top: -45px;" >Password</h6>
 </form>
 </div>
 <h1 id="fb3" style="color:white;margin-top: -70px;margin-left: 3cm; ">facebook</h1>
 
 </div>
 </div>
 <div class="row">
 <div class="col-md-12" style="height: 14.8cm;background-color: #edf0f5;"></div>
 <h2 id="fb6" style="color: darkblue;margin-left:5cm; margin-top: -495px;">Facebook helps you connect and share with the <br>people in your life.</h2>
 <img src="<?php echo base_url().'images/map.jpg';?>"  style="width:450px;height:228px; margin-left:5cm;background-color: #edf0f5;">

  <h1 id="fb7" style="margin-left:22cm;margin-top: -9cm; ">create an account</h1> 
  <h5 id="fb8" style="margin-left: 22cm;margin-top: -9px;">It's free and always will be.</h5>
  <input type="text" placeholder="First Name"  onfocusout="myFunction(this)" onfocus="myFunction1(this)" id="fn1" size="27" style="margin-left: 22cm; ">
  <input type="text" placeholder="Surname" onfocusout="myFunction2(this)" 
  onfocus="myFunction3(this)" id="lt1" size="27" style="margin-left: 27.3cm;margin-top:-30px; ">
  <input type="text" placeholder="Email or mobile number" id="em1" onfocusout="myFunction4(this)" onfocus="myFunction5(this)" size="61" style="margin-left: 22cm;margin-top: 11px;">
  <input type="text" placeholder="Re-enter email or mobile number" id="rem1" onfocusout="myFunction6(this)" onfocus="myFunction7(this)" size="61" style="margin-left: 22cm;margin-top: 11px;">
  <input type="password" placeholder="New password" id="np1" onfocusout="myFunction8(this)" onfocus="myFunction9(this)" size="61" style="margin-left: 22cm;margin-top: 11px;">
  <h3 style="margin-left: 22.3cm;">Birthday</h3>
  <form name="myform" style="margin-left: 13.1cm;">
 <table align="center">
 <tr><td></td>
 <td>
 <select name="date">
 <option>Day</option>
 <?php
 $a=1;
 while($a<=31)
 {
  echo"<option>$a</option>";
  $a++;
 
 }
 ?>
 </select>
 <select name="month">
 <option>Month</option>
 <?php
 $b=1;
 while($b<=12)
 {
  echo"<option>$b</option>";
  $b++;
 }
 ?>
 </select>
 <select name="year">
 <option>year</option>
 <?php
 $c=1880;
 while($c<=2025)
 {
  echo"<option>$c</option>";
  $c++;
 }
 ?>
 </select></td></tr></table></form>
 <h6 id="fb10" style="border: 1px solid blue;width:4.3cm;height: 0.8cm; margin-left: 27cm;margin-top: -50px;">Why do I need to provide my <br>date of birth?</h6>
 <input type="radio" name="gender" value="female" style="margin-left: 23cm;margin-top: -10px;">
 <p id="fb11" style="margin-left: 23.7cm; margin-top: -15px;">Female</p>
  
   <input type="radio" name="gender" value="male" style="margin-left: 26cm;margin-top: -33px;"> <p id="fb12" style="margin-left: 26.8cm; margin-top: -36px;">male</p>
   <h6 id="fb13" style="margin-left: 21.9cm;margin-top: ">By clicking create an account.You agree to our <span style="color:blue;">Terms</span> and that<br> you have read our<span style="color:blue;"> Data policy</span>including our cookie use.</h6>
   <input type="submit" value="Create an account!" style="color:white; width:5cm; height:1.1cm;background-color:green; border-radius: 6px;margin-left: 22cm;">
   <hr style="margin-left:22cm;height:1px;background-color:black; margin-top:32px; ">
<h6 id="fb14" style="margin-left: 22cm;margin-top: -5px;"><span style="color:blue;">Create a page</span> for a celebrity,band or business.</h6>
 </div></div>
 </body>
 </html>