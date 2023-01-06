<!DOCTYPE html>
<?php
 require_once '../function/database/database.php';
 $title ="Login Durakathanapala.lk -Phones, Phone Shops, Phone Parts and Services Shops, Buy & Sell Phones in Sri Lanka";
?>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--===============================================================================================-->	

<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
        	 	 <link rel="icon" href="../images/webLogo.png"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '797792577899990',
		  cookie     : true,
		  xfbml      : true,
		  version    : 'v14.0'
		});
		FB.AppEvents.logPageView();   
		
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	   
	   function fbLogin(){
			FB.login(function(response){
				if(response.authResponse){
					fbAfterLogin();
				}
			});
	   }
	   
	   function fbAfterLogin(){

		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {   // Lo
				FB.api('/me', function(response) {
					window.location.href = 'facebook/check_login.php?id='+response.id+'&name='+response.name;	
				});
			}
		});
	   }
</script>
	<style type="text/css">
	
input[type=password], input[type=text], select, textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #aaaaaa;
  border-radius: 4px;
  background-color:#ddd;
}	

label {
  
  display: inline-block;
  margin:0px 0px 5px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
}

.col-25 {
  float: left;
  width: 100%;
  margin-top: 15px;
}

.col-75 {
  float: left;
  width: 95%;
  margin-top: 5px;
}
.city, .reg {
  float: left;
  width: 98%;
  margin-top: 2px;
}
.reg{margin:40px 0;}

.navbar-togglr{
  display:inline;	
  position: absolute;
  margin-left: 300px;
  margin-top:-50px;
  opacity:0.8;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#secRegBtn, #secBack{display:none;}
#secRegMenu{display:none;}
#regFormMenu{opacity:0.8;}
.redborder(border:1px solid red;)
.disable-div {
    pointer-events: none;
	opacity: 0.4;
}
.msgmanu {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 25; /* Sit on top */
  padding-top: 60px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* log Content */
.msg-content {
  background-color: #fefefe;
  margin: auto;
  padding:30px 10px;
  border: 1px solid #888;
  border-radius:5px;
  width: 60%;
  height:auto;
}
@media only screen and (max-device-width: 900px){
.navbar-togglr{
display: none;
}
}
.disable-div {
    pointer-events: none;
	opacity: 0.4;
}
.disable-div-uname {
    pointer-events: none;
	opacity: 1;
}
#loader{display:none;}
.loader {
  position: fixed;
  top:0;
  left:0;
  z-index: 100;
  width: 100%;
  height:100%; 
  background-color: white; /* Fallback color */
  opacity:0.8;

}
#loader-main {
  position: absolute;
  top:40%;
  left:0;
  opacity:1;
  z-index: 100;
  width: 100%;
  height:auto; 

}
.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.wrap-login100 {
  width: 550px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
}
/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.wrap-login100-form-btn {
  width: 100%;
    height:40px;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;

  box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -moz-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -webkit-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -o-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -ms-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
}

.login100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: #a64bf4;
  background: -webkit-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -o-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -moz-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  top: 0;
  left: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 40px;
}

.wrap-login100-form-btn:hover .login100-form-bgbtn {
  left: 0;
}
/*---------------------------------------------*/
input {
	outline: inline;
	border: inline;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}

textarea::-webkit-input-placeholder { color: #adadad;}
textarea:-moz-placeholder { color: #adadad;}
textarea::-moz-placeholder { color: #adadad;}
textarea:-ms-input-placeholder { color: #adadad;}


/*---------------------------------------------*/
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::after {
  content: attr(data-symbol);
  font-family: Material-Design-Iconic-Font;
  color: #adadad;
  font-size: 22px;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: calc(100% - 20px);
  bottom: 0;
  left: 0;
  padding-left: 13px;
  padding-top: 3px;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: #7f7f7f;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}


.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.input100:focus + .focus-input100::after {
  color: #a64bf4;
}

.has-val.input100 + .focus-input100::after {
  color: #a64bf4;
}

.profile-pic {
    width: 200px;
    max-height: 200px;
    display: inline-block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 100% !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 2px solid rgba(255, 255, 255, 0.2);
	background-color:black;
	opacity:0.6;
	margin:0 auto;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
  position:relative;	
  text-align:center;
  margin-left:100px;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);

}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}

	</style>
<!--===============================================================================================-->
</head>
<body>

	<div id="loader" class="loader"><div id="loader-main"><p style="text-align:center;"><img style="display:inline; width:80px; opacity:1;" src="../images/wait.gif"></p></div></div>
	 <div id="msgModal" class="msgmanu" >
      <div class="msg-content" id="p" style="opacity:1;">
     </div>
    </div>
	<div class="limiter">
		<div class="container-login100" style="background-color:#6666FF; opacity:0.9;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" >
				<a id="firstBack"href="../index.php"><i class="fa fa-arrow-circle-left" style="font-size:24px"></i></a>
				<a id="secBack" onclick="secBack()"><i class="fa fa-arrow-circle-left" style="font-size:24px"></i></a>
				<p class="navbar-togglr"><a href="index.html"><img class="logopic" src=""></a></p>
				<form class="login100-form validate-form" action="login-a.php" method="post">
					<span class="login100-form-title p-b-49">
						Login
					</span>
                <div id="firstRegMenu" class="firstRegMenu">
					<div class="margin ">
				<?php	
				      if(isset($_GET["error"])){
				   ?> <div class="alert alert-danger">
                       invalid login !, please check your <b>User Name</b> OR <b>Passowrd</b>, 
                      </div>
                    <?php					  
					  } 	
				?>
						<div class="col-25">
						  <label for="fname"><b>User Name/ Email:</b></label>
						</div>
						<div class="col-75">
						  <input type="text" name="username" placeholder="Type your username">
						</div>
					  </div>
					  <div class="margin ">
						<div class="col-25">
						  <label for="lname"><b>Password:</b></label>
						</div>
						<div class="col-75">
						  <input  type="password" name="pass" placeholder="Type your password">
						</div>
					  </div>
						<a href="../index.php?forgot=yes" style="float:right; margin:8px 25px 0;">
							Forgot password ?
						</a>

				      <div class="submit ">
						<div class="col-75 reg">
							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button  type="submit" name="login"  class="login100-form-btn firstRegBtn">
										Login
									</button>
								</div>
							</div>
						</div>
							<div class="col-75">
							<div class="txt1 text-center  p-b-20">
								<span>
									Or Sign In Using
								</span>
							</div>
							<div class="flex-c-m">
						
								<a href="javascript:void(0)" onclick="fbLogin()" class="login100-social-item bg1">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="google_login/googleLoginIndex.php?normalGoogleLogin=yes" class="login100-social-item bg3">
									<i class="fa fa-google"></i>
								</a>
							</div>
		
							<div class="flex-col-c">
								<span class="txt1 p-b-17">
									Or Sign In Using
								</span>
		
								<a href="register.php" class="txt2">
									Sign Up
								</a>
							</div> 
						</div>
					  </div>	
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
		
	<script>
	
	     function regMainenterNum1() {
	          var pno = document.getElementById("mainRegNumber").value;
			  var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
			 if(pno.match(phoneno)){
	             document.getElementById("mainRegNumberHint").innerText="";
				 $(".firstRegBtn").removeClass("disable-div");
			    }else{				
				 document.getElementById("mainRegNumberHint").innerText="Enter valid Phone number.( Ex: 07#-#######)!." ;
				 $(".firstRegBtn").addClass("disable-div");
			    } 
        }
	    function regMainenterEmail(){
		var Email = document.getElementById("mainRegEmail").value;
		$.ajax({
         url: 'register-a.php',
          type: 'POST',
          data: {
              mainRegcheckEmail : Email
               },
          cache: false,
          success: function (result) {
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("loader-main").style.display = "none";
		  $("#loader").removeClass("loader");	  
	      $("#mainRegEmailHint").html(result);
		  mainRegcheckEmail();
        }
    });
									
		}
		
		  $(document).ready(function() {
         $('#firstRegBtn').click(function() { 
			 
			 var fname = document.getElementById("mainRegFname").value;
			 var lname = document.getElementById("mainRegLname").value;
			 var email = document.getElementById("mainRegEmail").value;
			 var pno  = document.getElementById("mainRegNumber").value;
			 var city = document.getElementById("mainRegCity").value;
			 var gender  = document.getElementById("mainRegGender").value;
			
			 var error1,error2,error3,error4,error5,error6;
			
			if(fname == ""){
				error1 = "1";
				document.getElementById("mainRegFnameHint").innerText = 'Please Enter Your First Name !';
			}else{
				error1="";
				document.getElementById("mainRegFnameHint").innerText = '';
			}
			if(lname == ""){
				error2 = "1";
				document.getElementById("mainRegLnameHint").innerText = 'Please Enter Your Last Name !';
			}else{
				error2="";
				document.getElementById("mainRegLnameHint").innerText = '';
			}
			
			if(city == ""){
				error3 = "1";
				document.getElementById("mainRegCityHint").innerText = 'Please Select Your City !';
			}else{
				error3="";
				document.getElementById("mainRegCityHint").innerText = '';
			}
			if(gender == ""){
				error4 = "1";
				document.getElementById("mainRegGenderHint").innerText = 'Please Select Your Gender !';
			}else{
				error4="";
				document.getElementById("mainRegGenderHint").innerText = '';
			}
			if(email == ""){
				error5 = "1";
				document.getElementById("mainRegEmailHint").innerText = 'Please Enter Your Email !';
			}else{
				error5="";
				document.getElementById("mainRegEmailHint").innerText = '';
			}
			if(pno == ""){
				error6 = "1";
				document.getElementById("mainRegNumberHint").innerText = 'Please Enter Your Phone Number ! ';
			}else{
				error6="";
				document.getElementById("mainRegNumberHint").innerText = '';
			}
		if(error1 == "" && error2 == "" && error3 == "" && error4 == "" && error5 == "" && error6 == "" ){	
		   var Email = document.getElementById("mainRegEmail").value;
		      $.ajax({
              url: 'register-a.php',
              type: 'POST',
              data: {
                 mainRegClickcheckEmail : Email
               },
              cache: false,
              success: function (result) {  
	          $("#mainRegEmailHint").html(result);         
		      }			
			/* var email = document.getElementById("mainRegUname").value;*/
         });
		}
		 });
  });

  function secBack(){
	         document.getElementById("firstRegBtn").style.display = "inline";
			 document.getElementById("secRegBtn").style.display = "none";
			 document.getElementById("firstBack").style.display = "inline";
			 document.getElementById("secBack").style.display = "none";
			 document.getElementById("firstRegMenu").style.display = "inline";
			 document.getElementById("secRegMenu").style.display = "none";
  }
  
          function enterPass(){
			    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var password = document.getElementById("mainRegPassword").value;
				if(password.match(paswd)){
				   document.getElementById("mainRegPasswordHint").innerText="";
				   $(".secRegBtn").removeClass("disable-div");  
				   
				   var pass1 = document.getElementById("mainRegPassword").value;
				   var pass2 = document.getElementById("mainRegRePassword").value;
				   if(pass1 == pass2){
					   $(".secRegBtn").removeClass("disable-div");
					   document.getElementById("mainRegPasswordHint").innerText="";
					   document.getElementById("mainRegRePasswordHint").innerText="";
				   }else{
					   document.getElementById("mainRegRePasswordHint").innerText=" Your Passwords Are Not Match!";
					   $(".secRegBtn").addClass("disable-div");  
				   }
				   
				}else{
			     document.getElementById("mainRegPasswordHint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 $(".secRegBtn").addClass("disable-div");  
				}
		}	
		 function enterRePass(){
			    var rpaswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var rpassword = document.getElementById("mainRegRePassword").value;
				if(rpassword.match(rpaswd)){
				   document.getElementById("mainRegRePasswordHint").innerText="";
				   $(".secRegBtn").removeClass("disable-div");  
				   
				   var pass1 = document.getElementById("mainRegPassword").value;
				   var pass2 = document.getElementById("mainRegRePassword").value;
				   if(pass1 == pass2){
					   document.getElementById("mainRegRePasswordHint").innerText="";
					   document.getElementById("mainRegPasswordHint").innerText="";
					   $(".secRegBtn").removeClass("disable-div"); 
				   }else{
					   document.getElementById("mainRegRePasswordHint").innerText=" Your Passwords Are Not Match!";
					   $(".secRegBtn").addClass("disable-div");  
				   }
				}else{
			     document.getElementById("mainRegRePasswordHint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 $(".secRegBtn").addClass("disable-div");  
				}
		}
		
		
  		  
   $(document).ready(function() {
         $('#secRegBtn').click(function() { 
			 
			 var uname = document.getElementById("mainRegUname").value;
			 var pass = document.getElementById("mainRegPassword").value;
			 var pass2 = document.getElementById("mainRegRePassword").value;
			
			 var error1,error2,error3;
			
			if(uname == ""){
				error1 = "1";
				document.getElementById("mainRegUnameHint").innerText = 'Please Enter User Name !';
			}else{
				error1="";
				document.getElementById("mainRegUnameHint").innerText = '';
			}
			if(pass == ""){
				error2 = "1";
				document.getElementById("mainRegPasswordHint").innerText = 'Please Enter Your Password!';
			}else{
				error2="";
				document.getElementById("mainRegPasswordHint").innerText = '';
			}
			
			if(pass2 == ""){
				error3 = "1";
				document.getElementById("mainRegRePasswordHint").innerText = 'Please Enter Your Re-Password !';
			}else{
				error3="";
				document.getElementById("mainRegRePasswordHint").innerText = '';
			}
			
		if(error1 == "" && error2 == "" && error3 == "" ){	
			document.getElementById("loader").style.display = "inline";
		    document.getElementById("loader-main").style.display = "inline";
		    $("#loader").addClass("loader");
	        var myVar = setTimeout(mainRegwait, 3000);
		}			
			/* var email = document.getElementById("mainRegUname").value;*/
		 });
  });

    function mainRegwait(){
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("loader-main").style.display = "none";
		  $("#loader").removeClass("loader");

	}
	
	function mainRegcheckEmail(){
       		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/;
			var Email = document.getElementById("mainRegEmail").value;
			
			  if(Email.match(filter)){
				  $(".firstRegBtn").removeClass("disable-div");
			  }else{
				 document.getElementById("mainRegEmailHint").innerText="Enter valid email address.( Ex: example123@gmail.com)" ;
                  $(".firstRegBtn").addClass("disable-div");
			  }
	}
	</script>
	<script>

  
       $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
  
    $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
	</script>

</body>
</html>