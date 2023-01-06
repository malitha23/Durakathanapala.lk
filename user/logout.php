<?php


    		     ?>
			 <script type="text/javascript">
		       var date = new Date();
                           date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = '../';
		 </script>
			 <?php
?>