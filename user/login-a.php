 <?php    
  require_once '../function/database/database.php';
  if(isset($_POST["login"])){
		$uname =  $_POST["username"];
		$pass    = mysqli_real_escape_string($conn,$_POST['pass']);
	
   
   echo $hashedPassword;
		$sql = "select * from `user` where `user_name` ='$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
		          
		          $p1 = $row['password'];
		          if (password_verify($pass, $p1))
                   {
                     $user_name = $row["user_name"];		  
				  $email = $row["email"];
				  $password = $row["password"];
				     ?>
			 <script type="text/javascript">
		       var date = new Date();
                           date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = "<?php echo $user_name; ?>";
		 var p = "<?php echo $password; ?>";
		 var e = "normal";
		 var ppp = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserEmail"+"="+ppp+expires+"; path=/";
                 
                 window.location.href = '../';
		 </script>
			 <?php 
                   }else{
                      ?>   <script type="text/javascript"> window.location.href = 'login.php?error'; </script> <?php
                   }
				  
			   }
			  }else{
				
                                ?>   <script type="text/javascript"> window.location.href = 'login.php?error'; </script> <?php
			  }
	 }
?>
    