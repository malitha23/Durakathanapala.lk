 <?php /*main registre step*/
  require_once '../function/database/database.php';
  if(isset($_POST["mainRegcheckEmail"])){
	  $v = $_POST["mainRegcheckEmail"];
	  $sql = "select * from `user` where `email` = '$v'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
				  echo"your email is alredy used !";
		    }else{
				echo"";
			}		
				  
  }
   /*end main registre step*/
   
   if(isset($_POST["mainRegClickcheckEmail"])){
	    $v = $_POST["mainRegClickcheckEmail"];
	    $sql = "select * from `user` where `email` = '$v'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
				  echo"your email is alredy used !";
		    }else{
				?>
    <script type="text/javascript">
		document.getElementById("mainRegUname").value = "<?php echo $v ?>";	
    </script>
    <?php
				 echo '<script>
 
	         document.getElementById("firstRegBtn").style.display = "none";
			 document.getElementById("secRegBtn").style.display = "inline";
			 document.getElementById("firstBack").style.display = "none";
			 document.getElementById("secBack").style.display = "inline";
			 document.getElementById("firstRegMenu").style.display = "none";
			 document.getElementById("secRegMenu").style.display = "inline";
	                 </script>';
			}
   }
   
      if(isset($_POST["mainRegFname"])){
	   $fname     = $_POST['mainRegFname'];
	   $lname     = $_POST['mainRegLname'];
       $email     = $_POST['mainRegEmail'];
       $pno1      = $_POST['mainRegNumber'];
       $gender    = $_POST['mainRegGender'];
       $city      = $_POST['mainRegCity'];
	   $uname     = $_POST['mainRegUname'];
	   
	   // hashed password set
	   
	   $password    = mysqli_real_escape_string($conn,$_POST['mainRegPassword']);
       $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
 
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $log_Time       = $date->format('Y-m-d H:i:s');
	   	$sql4 = "select * from `cities`  where `id` = '$city'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
									$lat =  $row4["latitude"];
									$lng =  $row4["longitude"];
								   }}
	   if(!empty($_FILES['mainRegImage']['name'])){ 
         	           if (!file_exists("images/profilePic/{$uname}")) {
	                     mkdir("images/profilePic/{$uname}", 0777, true);
                         }
	                    $location="images/profilePic/{$uname}/";
	                    $file1= "profile_pic_".rand(0000,9999).'.'."jpg";
	                    $file_tmp1=$_FILES['mainRegImage']['tmp_name'];
						move_uploaded_file($file_tmp1, $location.$file1); 
						
       }else{
                       $file1="no";
       }                   
	                    $sql = "INSERT INTO `user`(`UserId`, `fname`, `lname`, `email`, `pno1`, `pno2`, `user_name`, `password`, `image_name`, `gender`, `city`, `login_time`,`lat`,`lng`) 
	                    VALUES ('','$fname','$lname','$email','$pno1','','$uname','$hashedPassword','$file1','$gender','$city','$log_Time','$lat','$lng')";
	                    $fire=mysqli_query($conn,$sql);
	                    if($fire){
			             
				   ?>
		      	 <script type="text/javascript">
		         var date = new Date();
                           date.setTime(date.getTime()+(1000*60*60*24*365));
                         var expires = "; expires="+date.toGMTString();
                         var n = "<?php echo $uname; ?>";
		 var p = "<?php echo $hashedPassword; ?>";
		 var e = "normal";
		 var ppp = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserEmail"+"="+ppp+expires+"; path=/";
		 </script>
			 <?php 		
                       
                                         echo '<script>location.href="../";</script>' ;
		                }else{
							
                                                        echo '<script>location.href="register.php";</script>' ;
						}	
}
   ?>
   