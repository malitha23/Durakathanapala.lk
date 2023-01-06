	   window.fbAsyncInit = function() {
    FB.init({
      appId      :'797792577899990',
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
                  var r = "Facebook";
                      $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               facebookLoginPost: r,
			   facebookLoginPostid: response.id,
			   facebookLoginPostname: response.name
               },
            cache: false,
            success: function(result){	
			localStorage.setItem("facebbokLogId", response.id);
			document.getElementById("facebookgetcityform").style.display = "inline";
			document.getElementById("msgModal").style.display = "inline";
			document.getElementById("myModal").style.display = "none";			
             }
           });					
				});
			}
		});
	   }
	   
	   
function facebookgetcity(){
	var city = document.getElementById("facebookcity").value;
	var pno =  document.getElementById("facebookpno").value;
	 var n = localStorage.getItem("facebbokLogId");
	 
	if(city != "" && pno != ""){
		var createPost = localStorage.getItem("createPost");
		if(createPost == "1"){
		     var r = "Facebook";
		        $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               facebookLoginid: n,
			   facebookLoginpno: pno,
			   facebookLogincity: city
               },
            cache: false,
            success: function(result){	
			var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
		 var p = "";
		 var ppp = "";
		 var e = "facebook";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserEmail"+"="+ppp+expires+"; path=/";
	   $("#contactCard").html(result);
		document.getElementById("facebookgetcityform").style.display = "none";
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
		}else if(createPost == "2"){
		     var r = "Facebook";
		        $.ajax({
               url: "php/phoneShopAjax.php",
               type: "POST",
               data: {
               facebookLoginid: n,
			   facebookLoginpno: pno,
			   facebookLogincity: city
               },
            cache: false,
            success: function(result){	
			var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
         var expires = "; expires="+date.toGMTString();
		 var p = "";
		 var ppp = "";
		 var e = "facebook";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserEmail"+"="+ppp+expires+"; path=/";
	   $("#shopcontactCard").html(result);
		document.getElementById("facebookgetcityform").style.display = "none";
		$("#postFormshop").removeClass("disable-div"); 
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "none";
         $("#shopcontactCard").removeClass("disable-div");
		 document.getElementById("shopcontactCard").style.display = "inline";
           document.querySelector(".checkDetials").style.display = "none";
		        document.querySelector(".postnow").style.display = "inline";
				
             }
           });
		}   
	}
}	   