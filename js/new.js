function reportAd(x){
		document.getElementById("msgModal").style.display = "inline";
		document.getElementById("reportForm").style.display = "inline";
		localStorage.setItem("reportId", x);
	}
	function reportSave(){
		 var email = document.getElementById("reportEmail").value;
		 var reason = document.getElementById("reportCategory").value;
		 var msg = document.getElementById("reportMsg").value;
		  var n = localStorage.getItem("reportId");
		  if(email !="" && reason != ""){
		 $.ajax({
              url: "php/php-ajax.php",
               type: "POST",
               data: {
			   reportPostId:n,  
			   reportPostemail:email,
			   reportPostmsg:msg,
			   reportPostreason:reason
               },
            cache: false,
            success: function(result){
                document.getElementById("successMsgReport").style.display = "block";
				document.getElementById("successMsgReport").innerHTML = '<strong>Success!</strong> Your submission is successful.';
		        $(".llll").addClass("alert-success");
		        $(".llll").removeClass("alert-warning");
			    setTimeout(reportOk, 3000);
             }
           });
	 }else{
		 document.getElementById("successMsgReport").style.display = "block";
		 document.getElementById("successMsgReport").innerHTML = "Enter your email and select reason! ";
		 $(".llll").removeClass("alert-success");
		 $(".llll").addClass("alert-warning");
		 
	 }
	}
	
	function reportOk(){
		document.getElementById("msgModal").style.display = "none";
		document.getElementById("reportForm").style.display = "none";
	}
	function reportFormClose(){
		document.getElementById("msgModal").style.display = "none";
		document.getElementById("reportForm").style.display = "none";
	}

    document.querySelector('.userLogin').addEventListener('click', function() {
	    	  window.location.href ='user/login.php'; 
	 });
		  
	 function postLogin() {
		document.getElementById("loader").style.display = "inline";
		document.getElementById("loader-main").style.display = "inline";
		$("#loader").addClass("loader");
	    var myVar = setTimeout(loginwait, 3000);
	 }
	function loginwait(){
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "inline";

		var username = document.getElementById("username").value; 
		var password = document.getElementById("logPassword").value;
		localStorage.setItem("logName", username);
		localStorage.setItem("logPass", password);
		var yes = "yes";
		$.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postLogin: yes,	 
                 username: username,
				 userpassword: password
               },
               cache: false,
              success: function(result){
				$("#p").html(result);
				 $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "inline";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
             }
           });
	}  
	  
	function selectAccount() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "inline";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
        }
	 function ok(){
		document.getElementById("loader").style.display = "inline";
		document.getElementById("loader-main").style.display = "inline";
		document.getElementById("msgModal").style.display = "none";
		$("#loader").addClass("loader");
	    var myVar = setTimeout(showsuccesspage, 2000);
	 }
	 
	 function showsuccesspage() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("msgModal").style.display = "inline";
		document.getElementById("loader-main").style.display = "none";
		 var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
            $("#loader").removeClass("loader");
			var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postloginConform: yes,
                 logname: n,
                 logpass: p				 
               },
               cache: false,
               success: function(result){
				$("#p").html(result);
				 var myVar2 = setTimeout(conform, 3000);
             }
           });
      }
		 
	 function conform(){
		 $("#postForm").removeClass("disable-div"); 
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "none";
         $("#contactCard").removeClass("disable-div");
		 document.getElementById("contactCard").style.display = "inline";
	     document.getElementById("contactCard2").style.display = "inline";
		 document.getElementById("checkDetials").style.display = "none";
		 document.getElementById("postnow").style.display = "inline";
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
		 var e = "normal";
		 document.cookie = "login"+"="+e+expires+"; path=/"; 
		 document.cookie = "loginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "loginUserPass"+"="+p+expires+"; path=/";
		 
         let user = getCookie("loginUserName");
		 let pass = getCookie("loginUserPass")
         if (user != "") {

		   var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postGetContact: yes,	 
                 username: user,
				 userpassword: pass
               },
               cache: false,
            success: function(result){
				$("#contactCard").html(result);
             }
           });
         }else {
           
         }    
	 }
	 
	
	function wrongcode(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(wrongcodewait, 3000);
	}
	function wrongcodewait(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
			document.getElementById("fogveryModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
	}
    function no(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(wrongProfile, 3000);
	}	
    function wrongProfile() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
			document.getElementById("myModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }
    function fogno(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fogwrongProfile, 1000);
	}	
    function fogwrongProfile() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
			document.getElementById("fogModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }  
	function regnouname(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(regerroruname, 3000);
	}	
    function regerroruname() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
		    document.getElementById("regModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
			document.getElementById("prevBtn").style.display = "none";
      } 
	function regnoemail(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(regerroremail, 3000);
	}	
    function regerroremail() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
		    document.getElementById("regModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
			document.getElementById("prevBtn").style.display = "inline";
      }  
	function backLog(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(backtologin, 3000);
	}	
      function backtologin() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("myModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }
	
    function postRegister(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(postreg, 3000);
	}	
	  function postreg() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("regModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }
	function backLogregpost(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(backLoginpostreg, 3000);
	}  
	  function backLoginpostreg(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("myModal").style.display = "inline";
			document.getElementById("regModal").style.display = "none";
			document.getElementById("loader-main").style.display = "none";  
	  }
	  function closeregform(){
		    document.getElementById("myModal").style.display = "inline";
			document.getElementById("regModal").style.display = "none";
	  }  
      function closefogform(){
		    document.getElementById("myModal").style.display = "inline";
			document.getElementById("fogModal").style.display = "none";
	  }
	  function backfogform(){
		    document.getElementById("myModal").style.display = "inline";
			document.getElementById("fogModal").style.display = "none";
	  }
	  	
      function enterNum1() {
	          var pno = document.getElementById("pno1").value;
			  var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
			 if(pno.match(phoneno)){
	             document.getElementById("pno1hint").innerText="";
                 document.getElementById("pno1").style.border = "1px solid #aaaaaa";
				 $(".nextbtn").removeClass("disable-div");
				 $(".prebtn").removeClass("disable-div");
			    }else{				
				 document.getElementById("pno1hint").innerText="Enter valid Phone number.( Ex: 07#-#######)!." ;
				 document.getElementById("pno1").style.border = "1px solid red";
				 $(".nextbtn").addClass("disable-div");
				  $(".prebtn").addClass("disable-div");
			    } 
            }
		
		function enterEmail(){
			var pno = document.getElementById("pno1").value;
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/;
			var Email = document.getElementById("email").value;
			
			  if(Email.match(filter)){
                 document.getElementById("emailhint").innerText="";
				 document.getElementById("email").style.border = "1px solid #aaaaaa";
				 $(".nextbtn").removeClass("disable-div");  
                 $(".prebtn").removeClass("disable-div");				 
			  }else{
				 document.getElementById("emailhint").innerText="Enter valid email address.( Ex: example123@gmail.com)" ;
				 document.getElementById("email").style.border = "1px solid red";
				 $(".nextbtn").addClass("disable-div");
				 $(".prebtn").addClass("disable-div");
			  }
		    }
        function enterPass(){
			    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var password = document.getElementById("password").value;
				if(password.match(paswd)){
				   document.getElementById("pass1hint").innerText="";
				   document.getElementById("password").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("password").value;
				   var pass2 = document.getElementById("repassword").value;
				   if(pass1 == pass2){
					   document.getElementById("password").style.border = "1px solid #aaaaaa";
					   document.getElementById("repassword").style.border = "1px solid #aaaaaa";
					   document.getElementById("pass2hint").innerText="";
					   document.getElementById("pass1hint").innerText="";
				   }else{
					   document.getElementById("password").style.border = "1px solid red";
					   document.getElementById("repassword").style.border = "1px solid red";
					   document.getElementById("pass2hint").innerText=" Your Passwords Are Not Match!";
				   }
				   
				}else{
			     document.getElementById("pass1hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("password").style.border = "1px solid red";
				}
		}	
		 function enterRePass(){
			    var rpaswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var rpassword = document.getElementById("repassword").value;
				if(rpassword.match(rpaswd)){
				   document.getElementById("pass2hint").innerText="";
				   document.getElementById("repassword").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("password").value;
				   var pass2 = document.getElementById("repassword").value;
				   if(pass1 == pass2){
					   document.getElementById("password").style.border = "1px solid #aaaaaa";
					   document.getElementById("repassword").style.border = "1px solid #aaaaaa";
					   document.getElementById("pass2hint").innerText="";
					   document.getElementById("pass1hint").innerText="";
				   }else{
					   document.getElementById("password").style.border = "1px solid red";
					   document.getElementById("repassword").style.border = "1px solid red";
					   document.getElementById("pass2hint").innerText=" Your Passwords Are Not Match!";
				   }
				}else{
			     document.getElementById("pass2hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("repassword").style.border = "1px solid red";
				}
		}
		function enterPas(){
			    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var password = document.getElementById("pass").value;
				if(password.match(paswd)){
				   document.getElementById("pas1hint").innerText="";
				   document.getElementById("pass").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("pass").value;
				   var pass2 = document.getElementById("repass").value;
				   if(pass1 == pass2){
					   document.getElementById("pass").style.border = "1px solid #aaaaaa";
					   document.getElementById("repass").style.border = "1px solid #aaaaaa";
					   document.getElementById("pas2hint").innerText="";
					   document.getElementById("pas1hint").innerText="";
				   }else{
					   document.getElementById("pass").style.border = "1px solid red";
					   document.getElementById("repass").style.border = "1px solid red";
					   document.getElementById("pas2hint").innerText=" Your Passwords Are Not Match!";
				   }
				   
				}else{
			     document.getElementById("pas1hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("pass").style.border = "1px solid red";
				}
		}	
		 function enterRePas(){
			    var rpaswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var rpassword = document.getElementById("repass").value;
				if(rpassword.match(rpaswd)){
				   document.getElementById("pas2hint").innerText="";
				   document.getElementById("repass").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("pass").value;
				   var pass2 = document.getElementById("repass").value;
				   if(pass1 == pass2){
					   document.getElementById("pass").style.border = "1px solid #aaaaaa";
					   document.getElementById("repass").style.border = "1px solid #aaaaaa";
					   document.getElementById("pas2hint").innerText="";
					   document.getElementById("pas1hint").innerText="";
				   }else{
					   document.getElementById("pass").style.border = "1px solid red";
					   document.getElementById("repass").style.border = "1px solid red";
					   document.getElementById("pas2hint").innerText=" Your Passwords Are Not Match!";
				   }
				}else{
			     document.getElementById("pas2hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("repass").style.border = "1px solid red";
				}
		}
		
	 function  addpostRegister(){  
       	var pass1 = document.getElementById("pass").value;
			var pass2 = document.getElementById("repass").value;
			
			if(pass1 == pass2){
	         document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(regwait, 3000);
			  
			 }else{
				 document.getElementById("pass").style.border = "1px solid red";
				 document.getElementById("repass").style.border = "1px solid red";
				 document.getElementById("pas2hint").innerText=" Your Passwords Are Not Match!" ;
			 }      
     }
	   
    	function regwait() {

			var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;		
        var password = document.getElementById("pass").value;
        var repassword = document.getElementById("repass").value;
        var email = document.getElementById("email").value;
		var pno1 = document.getElementById("pno1").value; 
		var city = document.getElementById("city").value;
		var gender = document.getElementById("gender").value;		
		var uname = document.getElementById("uname").value;
        
        var form = $('#regForm')[0];
          // FormData object 
        var data = new FormData(form);
		
		$.ajax({
         url: 'php/php-ajax.php',
		  contentType: false,
          processData: false,
          type: 'POST',
          data: data,
          cache: false,
          success: function (result) {
	      $("#p").html(result);
		  localStorage.setItem("logName", uname);
		  localStorage.setItem("logPass", repassword);
		  document.getElementById("msgModal").style.display = "inline";
		  document.getElementById("regModal").style.display = "none";
        }
    });
        }
		 
	 function regConform(){
		 $("#postForm").removeClass("disable-div"); 
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "none";
         $("#contactCard").removeClass("disable-div");
		 document.getElementById("contactCard").style.display = "inline";
	     document.getElementById("contactCard2").style.display = "inline";
		 document.getElementById("checkDetials").style.display = "none";
		 document.getElementById("postnow").style.display = "inline";
		 
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
		 var e = "normal";
		 document.cookie = "login"+"="+e+expires+"; path=/"; 
		 document.cookie = "loginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "loginUserPass"+"="+p+expires+"; path=/";		 
		
         let user = getCookie("loginUserName");
		 let pass = getCookie("loginUserPass");
         if (user != "" && pass !="") {
           
		   var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postGetContact: yes,	 
                 username: user,
				 userpassword: pass
               },
               cache: false,
            success: function(result){
				$("#contactCard").html(result);
             }
           });
         }else {
           
         }    
	 }
	  function regconformsaved(){
			
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		}
		
	document.querySelector('.fogPost').addEventListener('click', function() {  
	      var uname =   document.getElementById("foguname").value;
		  var email =	document.getElementById("fogemail").value;
		  if(uname != "" && email !=""){			  
			   document.getElementById("fogenterhint").innerText=' Please use one option ( user-name/email )!.' ;
		  }else{
			if(uname == "" && email ==""){  
			   document.getElementById("fogenterhint").innerText=' Your Fields are 	Empty!.' ;
			}else{
	         document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fogwait, 3000);
			}
		  }
     });
    	function fogwait() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
	    var fogunamep = document.getElementById("foguname").value;
        var fogemailp = document.getElementById("fogemail").value;
        var form = $('#forgot-form')[0];
          // FormData object 
        var data = new FormData(form);
		
		$.ajax({
         url: 'php/php-ajax.php',
		  contentType: false,
          processData: false,
          type: 'POST',
          data: data,
          cache: false,
          success: function (result) {
	      $("#p").html(result);
		  localStorage.setItem("fogmailuname", fogunamep);
		  localStorage.setItem("fogmailemail", fogemailp);
        }
    });
    }
		
	function postforgot(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(postforgotwait, 3000);
	}	
	function postforgotwait() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("fogModal").style.display = "inline";
      }
	function sendfogcode(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(pforgotmail, 3000);
	}  
	function pforgotmail(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		         var n = localStorage.getItem("fogmailuname");
		         var p = localStorage.getItem("fogmailemail");
				  
				 $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
                 fogmailuname: n,
				 fogmailemail: p
               },
               cache: false,
               success: function(result){
				$("#fogErroMsg2").html(result);
				codeSentUname("codeSentUname",n, 10)
				codeSentEmail("codeSentEmail",p, 10)
               }
               });
	}	
	
	function wrongcode(){
		document.getElementById('fogveryModal').style.display = "inline";
		document.getElementById('msgModal').style.display = "inline";
	    document.getElementById('timer').innerHTML = 05 + ":" + 00;
        startTimer();
		  var nn = localStorage.getItem("fogmailuname");
		  var pp = localStorage.getItem("fogmailemail");	
          var yes ="yes";		  
				 $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 getemail: yes, 
                 fogmuname: nn,
				 fogmemail: pp
               },
               cache: false,
               success: function(result){
				$("#emailgetfog").html(result);
               }
               });
	}
	function fogConform(){
		createCookie("fogCodeSend", "yes", 5);
		document.getElementById('fogveryModal').style.display = "inline";
		document.getElementById('msgModal').style.display = "inline";
	    document.getElementById('timer').innerHTML = 05 + ":" + 00;
        startTimer();
		  var nn = localStorage.getItem("fogmailuname");
		  var pp = localStorage.getItem("fogmailemail");	
          var yes ="yes";		  
				 $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 getemail: yes, 
                 fogmuname: nn,
				 fogmemail: pp
               },
               cache: false,
               success: function(result){
				$("#emailgetfog").html(result);
               }
               });
	}

	function fognewPass(){
		      document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fognewPasswait, 3000);
	}
	function fognewPasswait(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		var nnn = localStorage.getItem("fogmailuname");
		var ppp = localStorage.getItem("fogmailemail");
		document.getElementById('fogotenEmail').value = ppp;
		document.getElementById('fogotenUname').value = nnn;
		document.getElementById('fogveryModal').style.display = "none";
		document.getElementById('msgModal').style.display = "none";
		document.getElementById('fognewPassModal').style.display = "inline";
	}

	function fogCreateNewPassword(){
		      document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fogCreateNewPasswordwait, 3000);
	}
	function fogCreateNewPasswordwait(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		var pass1 = document.getElementById('password').value;
		var pass2 = document.getElementById('repassword').value;
		var paswd =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
		if(pass1.match(paswd) && pass2.match(paswd)){
			if(pass1 == pass2){
	         var form = $('#fogCreateNewPassword')[0];
             // FormData object 
             var data = new FormData(form);
	    	$.ajax({
              url: 'php/php-ajax.php',
		      contentType: false,
              processData: false,
              type: 'POST',
              data: data,
              cache: false,
              success: function (result) {
	           $("#fogErroMsg4").html(result);
			   localStorage.setItem("fognewpass", pass2);
           }
         });
		 }
		}
	}
	function fognewlogin(){
              document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fognewloginwait, 3000);
	}

	function fognewloginwait(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
	     var nnn = localStorage.getItem("fogmailuname");
		 var ppp = localStorage.getItem("fogmailemail");
		 var rrr = localStorage.getItem("fognewpass");
		 
		var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();

		 document.cookie = "login"+"="+e+expires+"; path=/"; 
		 document.cookie = "loginUserName"+"="+nnn+expires+"; path=/";
		 document.cookie = "loginUserPass"+"="+rrr+expires+"; path=/";
		 document.cookie = "loginUserEmail"+"="+ppp+expires+"; path=/";
		 
		 var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 fogpostGetContact: yes,	 
                 username: nnn,
				 userpassword: rrr,
				 useremail: ppp
               },
               cache: false,
            success: function(result){
				$("#contactCard").html(result);
				document.getElementById('msgModal').style.display = "none";
                $("#postForm").removeClass("disable-div"); 
		        document.getElementById("myModal").style.display = "none";
		        document.getElementById("msgModal").style.display = "none";
                $("#contactCard").removeClass("disable-div");
			    document.getElementById("contactCard").style.display = "inline";
	            document.getElementById("contactCard2").style.display = "inline";
		        document.getElementById("checkDetials").style.display = "none";
		        document.getElementById("postnow").style.display = "inline";
             }
           });
	}
	
	function createCookie(name,value,minutes) {
		
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        var expires = "; expires="+date.toGMTString();
    } else {
        var expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
    }


	function codeSentUname(name,value,minutes) {
		
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        var expires = "; expires="+date.toGMTString();
		
    } else {
        var expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
    }
	
	function codeSentEmail(name,value,minutes) {
		
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        var expires = "; expires="+date.toGMTString();
		
    } else {
        var expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
    }
    
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    return
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(startTimer, 1000);
  
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}    
