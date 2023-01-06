	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '450435463116742',
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
	   