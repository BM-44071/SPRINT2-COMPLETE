<html lang="en">
 <head>
 <link rel="stylesheet"  type="text/css">
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
   <div class="row">
 <div class="col-md-12">
 
 
 <div id="fb1" style="background-color: darkblue;width:20cm;height: 2cm;">
 </div>
 </div>
 </div>
 </body>
 </html>