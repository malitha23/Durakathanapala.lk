<?php
   use PHPMailer\PHPMailer\PHPMailer;
   require_once '../function/database/database.php';
   /* select search city in district on district click*/
   
   
   if(isset($_POST["SDid"])){

     $SDid =  $_POST["SDid"];
	 $SDName =  $_POST["SDName"];
	 ?>
	   <tr><td class="g" style="width:50%"></td></tr>
	   <tr><td class="getDistricsearch" id="<?php echo $SDName; ?>"  style="font-size:16px; font-weight:bold;"> In all the cities of <?php echo $SDName; ?> districts</td></tr>
	 <?php
	 
	  $sql = "select * from `cities` where `district_id` = '$SDid' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $scityName = $row["name_en"];
			 $scityId = $row["id"];
			 
			?> 
			  <tr>
			      <td class="getCitysearch"  id="<?php echo $scityId; ?>"> <span style="margin:0 5px;"><?php echo $scityName; ?></span> <i class='fa fa-angle-right' style="float:right; margin:0 5px;  font-size:20px; color:#808080;"></i></td>
              </tr>
			<?php
			}
		 }
   }
/* end select search city in district on district click*/

 /* select add post choose city in district on district click*/
   if(isset($_POST["Did"])){
     $Did =  $_POST["Did"];
	 ?>
	   <tr><td style="width:50%"></td></tr>
	 <?php
	 
	   $sql = "select * from `cities`  where `district_id` = ' $Did' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $cityName = $row["name_en"];
			 $cityId = $row["id"];
			?>
			  <tr>
                <td class="getCity" id="<?php echo $cityId; ?>"><span style="margin:0 5px;"><?php echo $cityName; ?></span><i class='fa fa-angle-right' style="float:right; margin:0 5px;  font-size:20px; color:#808080;"></i></td>
              </tr>
			<?php
			}
		 }
   }
/* end add post choose city in district on district click*/

 /* post get city id*/
   if(isset($_POST["CityId"])){
     $Cid =  $_POST["CityId"]; 
	   $sql = "select * from `cities`  where `id` = '$Cid' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $CName = $row["name_en"];
			 $disId = $row["district_id"];
			  $sql = "select * from `districts`  where `id` = '$disId' ";
	          $res = mysqli_query($conn,$sql);
			  while($row=mysqli_fetch_assoc($res)){
				$DName = $row["name_en"];  
              ?><span onclick="changePostLocation()"   id="t" style='font-size:15px; margin:0 10px; color:#6666FF; cursor:pointer;'><i class="fa fa-map-marker" style='font-size:18px; margin:0 5px;'></i><input style="display:none;" type="number" name="city_Id" value="<?php echo $Cid ?>"><span style="color:black;"><?php echo $DName; ?>/ <?php echo $CName ; ?> <span style="font-size:12px; color:blue;">change</span> </span></span>
			  <span   onclick="changePostcategory()" style='font-size:15px; margin:0 10px;color:#6666FF; cursor:pointer;'><i class='fa fa-tag' style='font-size:18px; margin:0 5px; '></i> <span style="color:black;">Phone <span style="font-size:12px; color:blue;">change</span> </span> </span><?php
			  }
			}
		 }

		 
   }
/* end  get city id*/

/* search get city id and find location button*/
   if(isset($_POST["sCityId"])){
     $Cid =  $_POST["sCityId"]; 
	 if(is_numeric($Cid)){
		 $sql = "select * from `cities`  where `id` = '$Cid' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $sCName = $row["name_en"];
			 $str = $sCName;
             if (strlen($str) > 5){ 
                     $new_text = substr($str, 0, 10);
                     $new_text = trim($new_text);
                     $newcName =  $new_text . "...";
                }
			 $disId = $row["district_id"];
			  $sql = "select * from `districts`  where `id` = '$disId' ";
	          $res = mysqli_query($conn,$sql);
			  while($row=mysqli_fetch_assoc($res)){
				$sDName = $row["name_en"]; 
                				
              ?><span style="margin:0 5px; color:blue;"><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i> <?php echo $sDName; ?>/ <?php echo $newcName; ?></span><?php
			  }
			}
		 }  
	 }else{
		 if($Cid != "Srilanka"){
	        ?><span style="margin:0 5px; color:blue;"><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i> All Of <?php echo $Cid; ?></span><?php
		 }else{
			?><span style="margin:0 5px; color:blue;"><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i> All Of <?php echo $Cid; ?></span><?php 
		 }	 
	   }
		 
   }
/* end post get city id*/

/* threewheel add phone number click engage update*/
    if(isset($_POST["numberClick"])){
		$adId = $_POST["ADID"];
	         $sql = "select * from `phoneads`  where `id` = '$adId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
			    $pEnage = $row["post_Engage"];
			    $updatepEnage = $pEnage + 1 ;
			 
			     $sql = "UPDATE `phoneads` SET `post_Engage`=' $updatepEnage' WHERE `id` = '$adId' ";
			     $fire=mysqli_query($conn,$sql);
			   }}
	}
/* end threewheel add phone number click engage*/

/* create to post for login check*/

     if(isset($_POST["postLogin"])){
		$uname =  $_POST["username"];
		$pass =  $_POST["userpassword"];

		$sql = "select * from `user` where `user_name` ='$uname' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $user_name = $row["user_name"];		  
				  $email = $row["email"];
				  $image = $row["image_name"];
				     if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$user_name}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }	
				?>
			   <br>
				 <h3 style="text-align:center; color:black; font-weight:bold; margin:10px 0 0; opacity:0.9;">Verifying the owner's account,</h3>
				<div class="postProfilecard" style="opacity:0.9;">
				 <br>
				 <div class="vmanu" >
                  <img style="display:inline; width:140px; height:140px; border-radius:140px; border:1px solid gray;" src="<?php echo $src; ?>" alt="John" style="width:100%">
                  <br><h1 style="font-weight:bold; color:#7777FF;"><?php echo  $user_name; ?></h1>
				  <p style="font-size:12px; color:black; opacity:0.7;">Durakathanapala user</p>
				  <p class="title"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $email; ?></p>
				  </div>
				  <p class="vbtn"><button onclick="ok()">Continue</button><button onclick="no()">Not you?</button></p>
               </div>
				<?php  
			   }
			  }else{
					?><br>
					  <br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Your login is not successful;<br/> check your username Or password!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="no()">Try Again</button></p>
                    </div>
       	       <?php  
			  }
	 }
/*end create to post for login check*/	 
    if(isset($_POST["postloginConform"])){
		$name = $_POST["logname"];
		$pass = $_POST["logpass"];
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $nowdate       = $date->format('Y-m-d H:i:s');
		$query="UPDATE `user` SET `login_time`='$nowdate' WHERE `user_name`='$name' AND `password` ='$pass'";
	    $fire=mysqli_query($conn,$query);
	      if($fire){
      	  ?>		<br>
					<br>
	   				<div class="successcard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/success.gif"></p><br>
                     <h1>Success</h1> 
                     <p>Your login is successful;<br/> Now you can post the ad!</p>
					 </div>
                    </div>
       	    <?php  
		  }
    }
/*get contact  create to post for login */
	    if(isset($_POST["postGetContact"])){
		$uname =  $_POST["username"];
		$pass =  $_POST["userpassword"];

		$sql = "select * from `user` where `user_name` ='$uname' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   setcookie('lo','success', time()+60*60*7);
				   $fname = $row["fname"];
				  $lname = $row["lname"];
				  $fullname = $fname." ".$lname;
				  $gender = $row["gender"];
				  if( $gender == "male"){
					  $m = "Mr.";
				  }else if( $gender == "female"){
					  $m = "Mrs.";
				  }else{
					  $m = "";
				  }
				   $email = $row["email"];
				   $pno1 = $row["pno1"];
				   $pno2 = $row["pno2"];
                   $id = $row["UserId"];				   
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="normal">
	  <div class="w3-half"><label><B>Name</B> -  <?php echo $m; ?> <?php echo  $fullname; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
			 <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a  style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
			  }else{
			  	?>	 <br>
					  <br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Please Try Again!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="no()">Try Again</button></p>
                    </div>
       	       <?php
			  }
	 }
	 
/*end get contact  create to post for login */	
 
 /* to post for register ad post */  
   if(isset($_POST["prfname"])){
	   $fname     = $_POST['prfname'];
	   $lname     = $_POST['prlname'];
       $email     = $_POST['premail'];
       $pno1      = $_POST['prpno1'];
       $pno2      = "0";
       $gender    = $_POST['prgender'];
       $city      = $_POST['prcity'];
	   $uname     = $_POST['pruname'];
       $password    = $_POST['pword'];
 
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

        		
					
					
					
					
					
					
					$sql = "select `user_name` from `user` where `user_name`='$uname' ";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
		              $error2 = "Your <font color=red>".$uname."</font> is alredy used.please use another User-name ";
				?>	 <script type="text/javascript">  regconformsaved(); </script>
				   <br>
					<br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Your Register is not successful;<br/> <?php echo $error2; ?>!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="regnouname()">Try Again</button></p>
                    </div>
       	       <?php
				}else{
					 $sql = "select `email` from `user` where `email` ='$email'";
	                 $res = mysqli_query($conn,$sql);
                     $count = mysqli_num_rows($res);
		            if($count>0){
                     $error = "Your <font color=red>".$email."</font> is alredy used.please use another email ";
				     ?>	
					 <script type="text/javascript">  regconformsaved(); </script>
					<br>
					<br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Your Register is not successful;<br/> <?php echo $error; ?>!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="regnoemail()">Try Again</button></p>
                    </div>
       	       <?php
				    }else{
				
					if(!empty($_FILES['profile']['name'])){ 
					    if (!file_exists("../user/images/profilePic/{$uname}")) {
	                     mkdir("../user/images/profilePic/{$uname}", 0777, true);
                         }
	                    $location="../user/images/profilePic/{$uname}/";
	                    $file1= "profile_pic_".rand(0000,9999).'.'."jpg";
	                    $file_tmp1=$_FILES['profile']['tmp_name'];
						move_uploaded_file($file_tmp1, $location.$file1);
					}else{
						$file1 = "";
					}
	                    $sql = "INSERT INTO `user`(`UserId`, `fname`, `lname`, `email`, `pno1`, `pno2`, `user_name`, `password`, `image_name`, `gender`, `city`, `login_time`,`lat`,`lng`) 
	                    VALUES ('','$fname','$lname','$email','$pno1','$pno2','$uname','$password','$file1','$gender','$city','$log_Time','$lat','$lng')";
	                    $fire=mysqli_query($conn,$sql);
	                    if($fire){
							?>
						     <script type="text/javascript">  regconformsaved(); </script>
						   
			            	<br>
			    	     	<br>
	   			            <div class="successcard">
					        <div class="vmanu" >
                            <p style="text-align:center; "><img  src="images/success.gif"></p><br>
                            <h1>Success</h1> 
                            <p>Your login is successful;<br/> Now you can post the ad!</p>
				            </div>
					        <p class="vbtn"><button class="unsbtn" onclick="regConform()">Next</button></p>
                            </div>
       	                 <?php
		              }	
					}
				 }		  
}   /* end to post for register ad post */ 

/*  post for forgot ad post search acount*/

  if(isset($_POST["foguname"])){
    $uname = $_POST["foguname"];
	$email = $_POST["fogemail"];
	
	if($uname != ""){
		$sql = "select * from `user` where `user_name` ='$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $user_name = $row["user_name"];		  
				  $email = $row["email"];
				  $image = $row["image_name"];
				     if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$user_name}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }	
				?>
				 <script type="text/javascript">
					document.getElementById("msgModal").style.display = "inline";
					document.getElementById("fogModal").style.display = "none";						 		 
                 </script>
				 <div class="alert alert-danger fogalert" id="fogalert2" style="text-align:left; padding:10px;"><strong>Alert-:</strong> <span id="fogErroMsg2"> This alert box could indicate .</span>
	              <span class="logClose" style="float:right; margin-top:-12px; margin-left:13px; cursor:pointer; font-size:14px; position:relative;" onclick="this.style.display='none'; document.getElementById('fogalert').style.display = 'none'">&times;</span>
	             </div> 
				 <br>
				 <h3 style="text-align:center; color:black; font-weight:bold; margin:10px 0 0; opacity:0.9;">Verifying the owner's account,</h3>
				<div class="postProfilecard" style="opacity:0.9;">
				 <br>
				 <div class="vmanu" >
                  <img style="display:inline; width:140px; height:140px; border-radius:140px; border:1px solid gray;" src="<?php echo $src; ?>" alt="John" style="width:100%">
                  <br><h1 style="font-weight:bold; color:#7777FF;"><?php echo  $user_name; ?></h1>
				  <p style="font-size:12px; color:black; opacity:0.7;">Durakathanapala user</p>
				  <p class="title"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $email; ?></p>
				  </div>
				  <p class="vbtn"><button style="background-color:#6666FF; font-size:16px; border-radius:2px;" onclick="sendfogcode()">Sent code.</button><button style="background-color:#9999FF; font-size:16px; border-radius:2px;" onclick="fogno()">Not you?</button></p>
               </div>
				<?php  
			   }
			  }else{
				  ?>
                    <script type="text/javascript">
					 document.getElementById('fogalert').style.display = "block";	
                     document.getElementById('fogErroMsg').innerHTML = 'Please check your username !';						 		 
                    </script>
                  <?php
			  }
    }else{
		$sql = "select * from `user` where `email` ='$email'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $user_name = $row["user_name"];		  
				  $email = $row["email"];
				  $image = $row["image_name"];
				     if($image == ""){
					  $sr ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$user_name}/{$image}";
				  if(file_exists($srcImage)){
                    $sr ="user/images/profilePic/{$user_name}/{$image}";                   
                   }else{
                     $sr ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }	
				?>
				<script type="text/javascript">
					document.getElementById("msgModal").style.display = "inline";
					document.getElementById("fogModal").style.display = "none";						 		 
                 </script>
				 
				 <br>
				 <div class="alert alert-danger fogalert" id="fogalert2" style="text-align:left; padding:10px;"><strong>Alert-:</strong> <span id="fogErroMsg2"></span>
	             <span class="logClose" style="float:right; margin-top:-12px; margin-left:13px; cursor:pointer; font-size:14px; position:relative;" onclick="this.style.display='none'; document.getElementById('fogalert').style.display = 'none'">&times;</span>
	             </div> 
				 <h3 style="text-align:center; color:black; font-weight:bold; margin:10px 0 0; opacity:0.9;">Verifying the owner's account,</h3>
				<div class="postProfilecard" style="opacity:0.9;">
				 <br>
				 <div class="vmanu" >
                  <img style="display:inline; width:130px; height:130px; border-radius:130px; border:1px solid gray;" src="<?php echo $sr; ?>" alt="John" style="width:100%">
                  <br><h1 style="font-weight:bold; color:#7777FF;"><?php echo  $user_name; ?></h1>
				  <p style="font-size:12px; color:black; opacity:0.7;">Durakathanapala user</p>
				  <p class="title"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $email; ?></p>
				  </div>
				  <p class="vbtn"><button style="background-color:#6666FF; font-size:16px; border-radius:2px;" onclick="sendfogcode()">Sent code.</button><button style="background-color:#9999FF; font-size:16px; border-radius:2px;" onclick="fogno()">Not you?</button></p>
               </div>
				<?php  
			   }
			  }else{
				 ?>
                    <script type="text/javascript">
					 document.getElementById('fogalert').style.display = "block";	
                     document.getElementById('fogErroMsg').innerHTML = 'Please check your email !';						 		 
                    </script>
                  <?php 
			  }
	} 
  }
/*end  post for forgot ad post search acount*/

/*  post for forgot ad post sent mail*/

  if(isset($_POST["fogmailuname"])){
    $uname = $_POST["fogmailuname"];
	$email = $_POST["fogmailemail"];
	
	if($uname != ""){
		$sql = "select * from `user` where `user_name` ='$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){		  
				  $to = $row["email"];
                  $token = bin2hex(random_bytes(3));
				  $sql = "UPDATE `user` SET `passResetCode`='$token' WHERE `user_name`='$uname'"; 
                   if ($conn->query($sql) === TRUE)  
                    { 
                     			     $name = "Durakathanapala.lk Reset Password";  // Name of your website or yours
          // mail of reciever
        $subject = "Tutorial or any subject";
        $body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#f9f9f9" id="bodyTable">
	<tbody>
		<tr>
			<td style="padding-right:10px;padding-left:10px;" align="center" valign="top" id="bodyCell">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperWebview" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
									<tbody>
										<tr>
											<td style="background-color:#00d2f4;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
										</tr>
										<tr>
											<td align="center" valign="middle" style="padding-bottom: 10px;" class="emailRegards">
												<!-- Image and Link // -->
												<a href="#" target="_blank" style="text-decoration:none; "><br>
													<font><font size=5><b>Reset  Password,</b></font><br>
												</a>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 20px;" align="center" valign="top" class="imgHero">
												<a href="#" style="text-decoration:none" target="_blank">
													<img alt="" border="0" src="https://durakathanapala.lk/images/metaTagImage.jpeg" style="width:100%;max-width:600px;height:auto;display:block;color: #f9f9f9;" width="600">
												</a>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
												<h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Hi '.$uname.'</h2>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="subTitle">
												<h4 class="text" style="color:#999;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:24px;text-transform:none;text-align:center;padding:0;margin:0">Verify Your Durakathanapala.lk Account</h4>
											</td>
										</tr>
										<tr>
											<td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
													<tbody>
														<tr>
															<td style="padding-bottom: 20px;" align="center" valign="top" class="description">
																<p class="text" style="color:#666;font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0">Reset your password with this code. Get the code and put the password reset field.</p>
															</td>
														</tr>
													</tbody>
												</table>
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableButton" style="">
													<tbody>
														<tr>
															<td style="padding-top:20px;padding-bottom:20px" align="center" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" align="center">
																	<tbody>
																		<tr>
																			<td style="background-color: rgb(0, 210, 244); padding: 12px 35px; border-radius: 50px;" align="center" class="ctaButton">
										<font><font size=2><b>Your password reset code is:</b></font>								
										<a  style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:17px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" target="_blank" class="text">'.$token.'</a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td style="font-size:1px;line-height:1px" height="20">&nbsp;</td>
										</tr>
										<tr>
											<td align="center" valign="middle" style="padding-bottom: 40px;" class="emailRegards">
												<!-- Image and Link // -->
												<a href="#" target="_blank" style="text-decoration:none;">
													<font><font size=5><b>Thank you!</b></font>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
									<tbody>
										<tr>
											<td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperFooter" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="footer">
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>';
        $from = "services@durakathanapala.lk";  // you mail
        $password = "[DlCD~Yh;CwF";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "mail.durakathanapala.lk"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 465;  // port
        $mail->SMTPSecure = "ssl";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
             ?>
					<script type="text/javascript">
						fogConform();		 
                    </script>
       	             <?php
        } else {
            ?>
					 <script type="text/javascript">
					 document.getElementById('fogalert2').style.display = "block";					 
                     </script>
					 Please check your connection !
       	             <?php
        }
                  }
			   }
			  }else{
				 ?>
					 <script type="text/javascript">
					 document.getElementById('fogalert2').style.display = "block";						 		 
                    </script>
					 Error !
       	             <?php
			  }
    }else{
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){		  
				  $to = $row["email"];
                  $token = bin2hex(random_bytes(3));
				  $sql = "UPDATE `user` SET `passResetCode`='$token' WHERE `email`='$email'"; 
                   if ($conn->query($sql) === TRUE)  
                    { 
                     			     $name = "Durakathanapala.lk Reset Password";  // Name of your website or yours
          // mail of reciever
        $subject = "Tutorial or any subject";
        $body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#f9f9f9" id="bodyTable">
	<tbody>
		<tr>
			<td style="padding-right:10px;padding-left:10px;" align="center" valign="top" id="bodyCell">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperWebview" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
									<tbody>
										<tr>
											<td style="background-color:#00d2f4;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
										</tr>
										<tr>
											<td align="center" valign="middle" style="padding-bottom: 10px;" class="emailRegards">
												<!-- Image and Link // -->
												<a href="#" target="_blank" style="text-decoration:none; "><br>
													<font><font size=5><b>Reset  Password,</b></font><br>
												</a>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 20px;" align="center" valign="top" class="imgHero">
												<a href="#" style="text-decoration:none" target="_blank">
													<img alt="" border="0" src="https://durakathanapala.lk/images/metaTagImage.jpeg" style="width:100%;max-width:600px;height:auto;display:block;color: #f9f9f9;" width="600">
												</a>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
												<h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Hi '.$uname.'</h2>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="subTitle">
												<h4 class="text" style="color:#999;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:24px;text-transform:none;text-align:center;padding:0;margin:0">Verify Your Durakathanapala.lk Account</h4>
											</td>
										</tr>
										<tr>
											<td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
													<tbody>
														<tr>
															<td style="padding-bottom: 20px;" align="center" valign="top" class="description">
																<p class="text" style="color:#666;font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0">Reset your password with this code. Get the code and put the password reset field.</p>
															</td>
														</tr>
													</tbody>
												</table>
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableButton" style="">
													<tbody>
														<tr>
															<td style="padding-top:20px;padding-bottom:20px" align="center" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" align="center">
																	<tbody>
																		<tr>
																			<td style="background-color: rgb(0, 210, 244); padding: 12px 35px; border-radius: 50px;" align="center" class="ctaButton">
										<font><font size=2><b>Your password reset code is:</b></font>								
										<a  style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:17px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" target="_blank" class="text">'.$token.'</a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td style="font-size:1px;line-height:1px" height="20">&nbsp;</td>
										</tr>
										<tr>
											<td align="center" valign="middle" style="padding-bottom: 40px;" class="emailRegards">
												<!-- Image and Link // -->
												<a href="#" target="_blank" style="text-decoration:none;">
													<font><font size=5><b>Thank you!</b></font>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
									<tbody>
										<tr>
											<td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperFooter" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="footer">
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>';
        $from = "services@durakathanapala.lk";  // you mail
        $password = "[DlCD~Yh;CwF";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "mail.durakathanapala.lk"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 465;  // port
        $mail->SMTPSecure = "ssl";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
             ?>
					<script type="text/javascript">
						fogConform();		 
                    </script>
       	             <?php
        } else {
            ?>
					 <script type="text/javascript">
					 document.getElementById('fogalert2').style.display = "block";					 
                     </script>
					 Please check your connection !
       	             <?php
        } 
                  }
			   }
			  }else{
					?>
					 <script type="text/javascript">
					 document.getElementById('fogalert2').style.display = "block";						 		 
                    </script>
					 Error !
       	             <?php
			  }
	} 
  }
  
  if(isset($_POST["getemail"])){
    $un = $_POST["fogmuname"];
	$em = $_POST["fogmemail"];
	
	if($un != ""){
		$sql = "select * from `user` where `user_name` ='$un' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){		  
				  $el = $row["email"];  
			   }
			   ?>
				<span >please check -: <span style="color:blue;"><?php echo $el; ?></span> inbox!</span>
				<?php
			  }
    }else{
		$sql = "select * from `user` where `email` ='$em'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){	  
				  $emal = $row["email"];
			   }
			    ?>
                <span  >please check -: <span style="color:blue;"><?php echo $emal; ?></span> inbox!</span>
				<?php  
			  }
	} 
  }
  
/*end  post for forgot ad post sent mail*/

         if(isset($_POST["fogCodeSent"])){
			 $uname = $_POST["codeSentUname"];
			 $email = $_POST["codeSentEmail"];
			 
			 if($uname != "")
			 {
	           $query="UPDATE `user` SET `passResetCode`='' WHERE `user_name`= '$uname' ";
	           $fire=mysqli_query($conn,$query);
			 }else{
			   $query="UPDATE `user` SET `passResetCode`='' WHERE `email`= '$email' ";
	           $fire=mysqli_query($conn,$query); 
			 }
         }
	
    if(isset($_POST["verifyCode"])){
		
		$code = $_POST["verifyCode"];
		$uname = $_POST["uname"];
		$email = $_POST["email"];
		
		if($uname !=""){
		$sql = "select * from `user` where `passResetCode` ='$code' and  `user_name` ='$uname'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
					   ?>
					<script type="text/javascript">
						fognewPass();		 
                    </script>
       	             <?php
			  }
			  }else{
				?>
					 <script type="text/javascript">
					 document.getElementById('fogalert3').style.display = "block";					 
                     </script>
					 Your Password Reset Code Verify not Success, Please check your Verify Code!
       	             <?php
			  }
		}else{
			$sql = "select * from `user` where `passResetCode` ='$code' and  `email` ='$email'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
			         ?>
					<script type="text/javascript">
						fognewPass();		 
                    </script>
       	             <?php
			  }
			  }else{
				   ?>
					 <script type="text/javascript">
					 document.getElementById('fogalert3').style.display = "block";					 
                     </script>
					 Your Password Reset Code Verify not Success, Please check your Verify Code!
       	             <?php
					 
			  }
		}
	}	
	
	if(isset($_POST["fogCreatePass"])){

		$pass1 = $_POST["fogCreatePass"];
		$pass2 = $_POST["fogCreateRePass"];
		$uname = $_POST["fogotenUname"];
		$email = $_POST["fogotenEmail"];
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $post_Time       = $date->format('Y-m-d H:i:s');
		
		if($email != ""){
			
	          $query = "UPDATE `user` SET `password`='$pass2',`login_time` ='$post_Time' WHERE `email`='$email'";
	          $fire=mysqli_query($conn,$query);
	             if($fire){
				   
				   ?>
					 <script type="text/javascript">
					 fognewlogin();					 
                     </script>
       	             <?php

				 }else{
					 ?>
					 <script type="text/javascript">
					 document.getElementById('fogalert4').style.display = "block";					 
                     </script>
					 Your Password Reset not Success !
       	             <?php
				 }
		}
		
		if($uname != ""){
		      $query="UPDATE `user` SET `password`='$pass2',`login_time` ='$post_Time'  WHERE `user_name`='$uname'";
	          $fire=mysqli_query($conn,$query);
	           if($fire){
				   
				   ?>
					 <script type="text/javascript">
					 fognewlogin();					 
                     </script>
       	             <?php

				 }else{
					 ?>
					 <script type="text/javascript">
					 document.getElementById('fogalert4').style.display = "block";					 
                     </script>
					 Your Password Reset not Success !
       	             <?php
				 }
		}
		
	}
	
	if(isset($_POST["fogpostGetContact"])){		
		
		$pass2 = $_POST["userpassword"];
		$uname = $_POST["username"];
		$email = $_POST["useremail"];
		
	    if($uname !=""){

		$sql = "select * from `user` where `user_name` ='$uname' and `password` ='$pass2' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   setcookie('lo','success', time()+60*60*7);
				   $fname = $row["fname"];
				  $lname = $row["lname"];
				  $fullname = $fname." ".$lname;
				  $gender = $row["gender"];
				  if( $gender == "male"){
					  $m = "Mr.";
				  }else if( $gender == "female"){
					  $m = "Mrs.";
				  }else{
					  $m = "";
				  }
				   $email = $row["email"];
				   $pno1 = $row["pno1"];
				   $pno2 = $row["pno2"];
                   $id = $row["UserId"];				   
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="normal">
	  <div class="w3-half"><label><B>Name</B> -  <?php echo $m; ?> <?php echo  $fullname; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
			 <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a  style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
			  }else{
			  	?>	 <br>
					  <br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Please Try Again!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="no()">Try Again</button></p>
                    </div>
       	       <?php
			  } 
		}else{


		$sql = "select * from `user` where `email` ='$email' and `password` ='$pass2' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   setcookie('lo','success', time()+60*60*7);
				   $fname = $row["fname"];
				  $lname = $row["lname"];
				  $fullname = $fname." ".$lname;
				  $gender = $row["gender"];
				  if( $gender == "male"){
					  $m = "Mr.";
				  }else if( $gender == "female"){
					  $m = "Mrs.";
				  }else{
					  $m = "";
				  }
				   $email = $row["email"];
				   $pno1 = $row["pno1"];
				   $pno2 = $row["pno2"];
                   $id = $row["UserId"];				   
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="normal">
	  <div class="w3-half"><label><B>Name</B> -  <?php echo $m; ?> <?php echo  $fullname; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
			 <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a  style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
			  }else{
			  	?>	 <br>
					  <br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Please Try Again!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="no()">Try Again</button></p>
                    </div>
       	       <?php
			  } 
		}
	}
	
	/*google login to create post*/
	if(isset($_POST['facebookLoginPost'])){

	if ($_POST['facebookLoginPost'] == "Facebook"){
		
    $authProvider = $_POST['facebookLoginPost'];
    $facebookTockenId = $_POST['facebookLoginPostid'];
    $name = $_POST['facebookLoginPostname'];
    $email = "";
    $profile = "";
		   
    $date     = new DateTime("now", new DateTimeZone('Asia/Colombo') );
    $now      = $date->format('Y-m-d H:i:s');
    

    // Check whether the user data already exist in the database
    $queryCheck = "SELECT * FROM `facebook-user` WHERE `authProvider` = '$authProvider' AND `facebookIdTocken` = '$facebookTockenId'";
    $res = mysqli_query($conn,$queryCheck);
    $count = mysqli_num_rows($res);
    if ($count>0){
        $queryPerform = "UPDATE `facebook-user` SET `authProvider` = '$authProvider', `facebookIdTocken` = '$facebookTockenId', `name` ='$name',
        `email` ='$email', `profile` ='$profile', `modified` ='$now' WHERE `authProvider` = '$authProvider' AND `facebookIdTocken` = '$facebookTockenId'";
    }else{
       $queryPerform = "INSERT INTO `facebook-user`(`id`, `authProvider`, `facebookIdTocken`, `name`, `email`, `profile`, `created`, `modified`) VALUES ('','$authProvider','$facebookTockenId','$name','$email','$profile','$now','$now');";
    }

   $finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);
    if($finalResultset){
    }
}
}
/*end google login to create post*/

	if(isset($_POST["facebookLoginid"])){		
		$id = $_POST["facebookLoginid"];
        $facebook ="Facebook"; 
		$city = $_POST["facebookLogincity"];
	    $pno = $_POST["facebookLoginpno"];
	 
	 if($city != "" && $pno != ""){	
		$sql4 = "select * from `cities`  where `id` = '$city'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
									$lat =  $row4["latitude"];
									$lng =  $row4["longitude"];
								   }}
			
            $queryPerform = "UPDATE `facebook-user` SET `lat` = '$lat' , `lng` = '$lng' , `pno` = '$pno'  WHERE  `facebookIdTocken` = '$id'";	
            $finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);			
	 
	$sql = "SELECT * FROM `facebook-user` WHERE `authProvider` = '$facebook' AND `facebookIdTocken` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $id = $row["facebookIdTocken"];
			    $name = $row['name'];
                $email = $row['email']; 
                $facebookPno = $row['pno']; 				
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="facebook">
	  <div class="w3-half"><label><B>Name</B> - Mr/Mrs <?php echo  $name; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label><span style="font-size:12px; color:red; opacity:1;" id="pnHint1"></span>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			  <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $facebookPno; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
              <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a  style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
 
		}else{
			  	?>	 <br>
					  <br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Please Try Again!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="no()">Try Again</button></p>
                    </div>
       	       <?php
			  } 
	  }
	}
	
	if(isset($_POST["checkLogin"])){
		
		$login = $_POST["checkLogin"];
		$uname = $_POST["username"];
		$email = $_POST["useremail"];
		$pass = $_POST["userpassword"];
		
		if($login == "google"){
					$sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$id = $row["googleIdTocken"];
			    $name = $row['name'];
                $email = $row['email'];  
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="google">
	  <div class="w3-half"><label><B>Name</B> - Mr/Mrs <?php echo  $name; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label> <span style="font-size:12px; color:red; opacity:1;" id="pnHint1"></span>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
              <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a  style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
 
		
		}
	}
		if($login == "facebook"){
					$sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$id = $row["facebookIdTocken"];
			    $name = $row['name'];
                $email = $row['email'];  
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="facebook">
	  <div class="w3-half"><label><B>Name</B> - Mr/Mrs <?php echo  $name; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label> <span style="font-size:12px; color:red; opacity:1;" id="pnHint1"></span>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
              <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a  style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
 
		
		}
	}if($login == "normal"){
	   if($uname !=""){
		$sql = "select * from `user` where `user_name` ='$uname' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   setcookie('lo','success', time()+60*60*7);
				   $fname = $row["fname"];
				  $lname = $row["lname"];
				  $fullname = $fname." ".$lname;
				  $gender = $row["gender"];
				  if( $gender == "male"){
					  $m = "Mr.";
				  }else if( $gender == "female"){
					  $m = "Mrs.";
				  }else{
					  $m = "";
				  }
				   $email = $row["email"];
				   $pno1 = $row["pno1"];
				   $pno2 = $row["pno2"];
                   $id = $row["UserId"];				   
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="normal">
	  <div class="w3-half"><label><B>Name</B> -  <?php echo $m; ?> <?php echo  $fullname; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label><span style="font-size:12px; color:red; opacity:1;" id="pnHint1"></span>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
			 <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a  style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
			  }
	}else{
		$sql = "select * from `user` where `email` ='$email' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   setcookie('lo','success', time()+60*60*7);
				   $fname = $row["fname"];
				  $lname = $row["lname"];
				  $fullname = $fname." ".$lname;
				  $gender = $row["gender"];
				  if( $gender == "male"){
					  $m = "Mr.";
				  }else if( $gender == "female"){
					  $m = "Mrs.";
				  }else{
					  $m = "";
				  }
				   $email = $row["email"];
				   $pno1 = $row["pno1"];
				   $pno2 = $row["pno2"];
                   $id = $row["UserId"];				   
				?>
					<div id="contactCard" >
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	    <input type="number" style="display:none;" name="seller_Id" value="<?php echo $id; ?>">
		<input type="text" style="display:none;" name="sellerAcc" value="normal">
	  <div class="w3-half"><label><B>Name</B> -  <?php echo $m; ?> <?php echo  $fullname; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
			 <li id="masageboxLink" onclick="addMOREPnum()" ><i class="fa fa-plus-circle" style="color:#328da8; margin:15px 0 5px;"></i> <a id="adpnmber" style="margin:0 5px; cursor: pointer; " data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers">Add phone number</a></li> 	
			 </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>	
				<?php  
			   }
			  }
	}
	}
	
}

if(isset($_POST["loginIcon"])){
	    $login = $_POST["login"];
		$uname = $_POST["uname"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
				if($login == "google"){
					$sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $im = $row["profile"];

				  if(@getimagesize($im)){
                      $sr = $im;               
                   }else{
                      $sr ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  				   
				?>
	             <p  class="logProfileIcon lgi"  id="kkk" style="opacity:0.9; width:100px; height:30px; border-radius:30px; z-index:3; "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $sr; ?>"><br><span  id="d3d" onclick="logProfileIcon()" style="margin:2px -20px; color:white; position:relative;font-weight:bold; font-size:12px;">My Account</span>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; margin:-26px 43px;"></div></p>
				<?php 
			   }
 
		
		}
	} if($login == "facebook"){
					$sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $im = $row["profile"];

				  if(@getimagesize($im)){
                      $sr = $im;               
                   }else{
                      $sr ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  				   
				?>
	             <p  class="logProfileIcon lgi"  id="kkk" style="opacity:0.9; width:100px; height:30px; border-radius:30px; z-index:3; "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $sr; ?>"><br><span  id="d3d" onclick="logProfileIcon()" style="margin:2px -20px; color:white; position:relative;font-weight:bold; font-size:12px;">My Account</span>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; margin:-26px 43px;"></div></p>
				<?php 
			   }
 
		
		}
	} if($login == "normal"){
	   if($uname !=""){
		$sql = "select * from `user` where `user_name` ='$uname' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   setcookie('lo','success', time()+60*60*7);
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				   
				  if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }			  
				?>
	             <p  class="logProfileIcon lgi"  id="kkk" style="opacity:0.9; width:100px; height:30px; border-radius:30px; z-index:3; "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $src; ?>"><br><span id="d3d" onclick="logProfileIcon()" style="margin:2px -20px; color:white; position:relative;font-weight:bold; font-size:12px;">My Account</span>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; margin:-26px 43px;"></div></p>
				<?php 
			   }
			  }
	}else{
		$sql = "select * from `user` where `email` ='$email' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				  if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }			   
				?>
	             <p  class="logProfileIcon lgi"  id="kkk" style="opacity:0.9; width:100px; height:30px; border-radius:30px; z-index:3; "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $src; ?>"><br><span  id="d3d" onclick="logProfileIcon()" style="margin:2px -20px; color:white; position:relative;font-weight:bold; font-size:12px;">My Account</span>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; margin:-26px 43px;"></div></p>
				<?php 
				  
			   }
			  }
	}
	}
	
}
if(isset($_POST["loginIconPhone"])){
	    $login = $_POST["login"];
		$uname = $_POST["uname"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		
				if($login == "google"){
					$sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$im = $row["profile"];
				 if(@getimagesize($im)){
                      $sr = $im;               
                   }else{
                      $sr ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }		   
				?>
				
				<a id="myprofile" class="logoutProfile"   style="opacity:0.9; width:30px; height:30px; border-radius:30px; z-index:3;  "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $sr; ?>"></a>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; z-index:5; margin:-10px 32px;"></div>
	
				<?php   
			   }
 
		
		}
	} if($login == "facebook"){
					$sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $im = $row["profile"];

				  if(@getimagesize($im)){
                      $sr = $im;               
                   }else{
                      $sr ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  				   
				?>
	             <p  class="logProfileIcon lgi"  id="kkk" style="opacity:0.9; width:100px; height:30px; border-radius:30px; z-index:3; "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $sr; ?>"><br><span  id="d3d" style="margin:2px -20px; color:white; position:relative;font-weight:bold; font-size:12px;">My Account</span>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; margin:-26px 43px;"></div></p>
				<?php 
			   }
 
		
		}
	} if($login == "normal"){
	   if($uname !=""){
		$sql = "select * from `user` where `user_name` ='$uname' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   setcookie('lo','success', time()+60*60*7);
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				  if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }				   
				?>
				
				<a id="myprofile" class="logoutProfile"   style="opacity:0.9; width:30px; height:30px; border-radius:30px; z-index:3;  "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $src; ?>"></a>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; z-index:5; margin:-10px 32px;"></div>
	
				<?php 
			   }
			  }
	}else{
		$sql = "select * from `user` where `email` ='$email' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				 if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }		   
				?>
               	<a id="myprofile" class="logoutProfile"   style="opacity:0.9; width:30px; height:30px; border-radius:30px; z-index:3;  "><img onclick="logProfileIcon()" style="width:30px; height:30px; border-radius:30px;" class="" id="logimgPic" src="<?php echo $src; ?>"></a>
                 <div style="width:8px; height:8px; border-radius:8px; background-color:#06f202;  position:relative; z-index:5; margin:-10px 32px;"></div>
			   <?php
				  
			   }
			  }
	}
	}
	
}

if(isset($_POST["notloginIcon"])){
	?><a href="user/login.php" class="loginIcon logoutProfileIcon lgi" ><i class="fa fa-user-circle" style="font-size:24px;margin: 0 5px;"></i><br>Login</a> <?php
}
if(isset($_POST["notloginIconPhone"])){
	?><a href="user/login.php"  style="margin:0 30px; "><i class="fa fa-user-circle" style="font-size:28px;"></i></a><?php
}

if(isset($_POST["loginpcard"])){
	    $login = $_POST["login"];
		$uname = $_POST["uname"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
				if($login == "google"){
					$sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["googleIdTocken"];
				   $image = $row["profile"];
				   $fullname = $row["name"];
				   $email = $row["email"];
				  ?>
				<p style="width:100%; padding:8px; background-color:#7777FF; color:white; margin:0" class="titleMain">google user<span style="float:right; cursor:pointer;" onclick="logProfileIcon()">&times;</span></p>
				<div class="procardMain2">
                  <img src="<?php echo $image; ?>"  >
                  <h1><?php echo $fullname; ?></h1>
                  <p class="title"><?php echo $email; ?></p>
                  <p class="title2"><button type="button" style="font-size:10px; color:blue; padding:0px;"><a href="user/profile/profile.php?user=google&id=<?php echo $id; ?>"><span style="font-size:14px; color:white;">Go to Profile</span></a></button></p>
                  <p style="margin:15px 5px; text-decoration:underline; font-size:14px; color:#4444FF; cursor:pointer;" onclick="mainLogOut()">Log Out</p>
				</div> 
                <hr> 
	            <?php 
			   }
 
		
		}
	}else 	if($login == "facebook"){
					$sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["facebookIdTocken"];
				   $image = "user/facebook/download.png";
				   $fullname = $row["name"];
				   $email = $row["email"];
				  ?>
				<p style="width:100%; padding:8px; background-color:#7777FF; color:white; margin:0" class="titleMain">facebook user<span style="float:right; cursor:pointer;" onclick="logProfileIcon()">&times;</span></p>
				<div class="procardMain2">
                  <img src="<?php echo $image; ?>"  >
                  <h1><?php echo $fullname; ?></h1>
                  <p class="title"><?php echo $email; ?></p>
                  <p class="title2"><button type="button" style="font-size:10px; color:blue; padding:0px;"><a href="user/profile/profile.php?user=facebook&id=<?php echo $id; ?>"><span style="font-size:14px; color:white;">Go to Profile</span></a></button></p>
                  <p style="margin:15px 5px; text-decoration:underline; font-size:14px; color:#4444FF; cursor:pointer;" onclick="mainLogOut()">Log Out</p>
				</div> 
                <hr> 
	            <?php 
			   }
 
		
		}
	}
	
	if($login == "normal"){
	   if($uname !=""){
		$sql = "select * from `user` where `user_name` ='$uname' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["UserId"];
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				   $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname." ".$lname;
				   $gender = $row["gender"];
				   if( $gender == "male"){
					  $m = "Mr.";
				   }else if( $gender == "female"){
					  $m = "Mrs.";
				   }else{
				 	  $m = "";
				   }
				    $email = $row["email"];
					
				  if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }	
				  			   
				?>
				<p style="width:100%; padding:8px; background-color:#5555FF; color:white; margin:0;" class="titleMain">Durakathanapala user<span style="float:right; cursor:pointer; font-size:12px;" onclick="logProfileIcon()">&times;</span></p>
				<div class="procardMain2">
                  <img src="<?php echo $src; ?>"  >
                  <h1><?php echo $m; ?> <?php echo $fullname; ?></h1>
                  <p class="title"><?php echo $email; ?></p>
                  <p class="title2"><button type="button" style="font-size:10px; color:blue; padding:0px;"><a href="user/profile/profile.php?user=normal&id=<?php echo $id; ?>"><span style="font-size:14px; color:white;">Go to Profile</span></a></button></p>
                  <p style="margin:15px 5px; text-decoration:underline; font-size:14px; color:#4444FF; cursor:pointer;" onclick="mainLogOut()">Log Out</p>
				</div> 
                <hr>				
	            <?php 
			   }
			  }
	}else{
		$sql = "select * from `user` where `email` ='$email' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["UserId"];
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				   $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname." ".$lname;
				   $gender = $row["gender"];
				   if( $gender == "male"){
					  $m = "Mr.";
				   }else if( $gender == "female"){
					  $m = "Mrs.";
				   }else{
				 	  $m = "";
				   }
				    $email = $row["email"];
					
				  if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }	
				  			   
				?>
				<p style="width:100%; padding:8px; background-color:#5555FF; color:white; margin:0;" class="titleMain">Durakathanapala user<span style="float:right; cursor:pointer; font-size:12px;" onclick="logProfileIcon()">&times;</span></p>
				<div class="procardMain2">
                  <img src="<?php echo $src; ?>"  >
                  <h1><?php echo $m; ?> <?php echo $fullname; ?></h1>
                  <p class="title"><?php echo $email; ?></p>
                  <p class="title2"><button type="button" style="font-size:10px; color:blue; padding:0px;"><a href="user/profile/profile.php?user=normal&id=<?php echo $id; ?>"><span style="font-size:14px; color:white;">Go to Profile</span></a></button></p>
                  <p style="margin:15px 5px; text-decoration:underline; font-size:14px; color:#4444FF; cursor:pointer;" onclick="mainLogOut()">Log Out</p>
				</div> 
                <hr>				
	            <?php 
			   }
			  }
				  
			   }
			  }
	}


/*post create*/
 if(isset($_POST["createWheelAd"])){
	                
	
       $model           = $_POST['model'];
	   $modify_Type     = $_POST['modify_Type'];
       $price           = $_POST['price'];
       $condition       = $_POST['condition'];
       $model_Year      = $_POST['model_Year'];
       $discription     = $_POST['discription'];
	   $city_Id         = $_POST['city_Id'];
       $seller_Id       = $_POST['seller_Id'];
	   $sellerAcc       = $_POST['sellerAcc'];
	   $addPnum1        = $_POST["addPNum1"];
	   $addPnum2        = $_POST["addPNum2"];
 
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $post_Time       = $date->format('Y-m-d H:i:s');
	   $post_Time2      = strtotime($post_Time);

       if (!file_exists("../adsPictures/{$seller_Id}")) {
	     mkdir("../adsPictures/{$seller_Id}", 0777, true);
		
		 if (!file_exists("../adsPictures/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/{$seller_Id}/{$post_Time2}", 0777, true);
         }
        }else{
		 if (!file_exists("../adsPictures/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/{$seller_Id}/{$post_Time2}", 0777, true);
         }
		}
        $sql4 = "select * from `cities`  where `id` = '$city_Id'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
                                    $did = 	$row4["district_id"];
									$lat =  $row4["latitude"];
									$lng =  $row4["longitude"];
								   }}
		 $sql5 = "select * from `brands`  where `ID` = '$model'  ";
	                             $res5 = mysqli_query($conn,$sql5);
                                 $count5 = mysqli_num_rows($res5);
		                          if($count5>0){
		                           while($row5=mysqli_fetch_assoc($res5)){
                                    $model_name = 	$row5["name"];
									$m = "Phone";
									$new_model_name = $m." ".$model_name ; 
								   }}
		 $sql6 = "select * from `devices`  where `ID` = '$modify_Type'  ";
	                             $res6 = mysqli_query($conn,$sql6);
                                 $count6 = mysqli_num_rows($res6);
		                          if($count6>0){
		                           while($row6=mysqli_fetch_assoc($res6)){
                                    $modify_Type_name = 	$row6["name"];
									$n = "Phone of";
									$new_modify_Type_name = $n." ".$modify_Type_name;
								   }}						   
								   
        // Velidate if files exist
        if(isset($_FILES['img1']['name'])){ 
		    
			// first insert data

			
                   /* $sql = " SELECT `id` FROM `wheelads` WHERE `seller_Id`= '$seller_Id' AND `post_Time` = '$post_Time' ";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
					while($row=mysqli_fetch_assoc($res)){	
					   $postId = $row["id"];
					}}	*/			
			
	 					$location="../adsPictures/{$seller_Id}/{$post_Time2}/";
						
	                    $file1= basename($_FILES["img1"]["name"]); 
	                    $file_tmp1=$_FILES['img1']['tmp_name'];
						$fileType1 = pathinfo($location.$file1,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/{$seller_Id}/{$post_Time2}/{$file1}";
	                    $file2=  basename($_FILES["img2"]["name"]); 
	                    $file_tmp2=$_FILES['img2']['tmp_name'];
						$fileType2 = pathinfo($location.$file2,PATHINFO_EXTENSION);
						
	                    $file3=  basename($_FILES["img3"]["name"]); 
	                    $file_tmp3=$_FILES['img3']['tmp_name'];
						$fileType3 = pathinfo($location.$file3,PATHINFO_EXTENSION);
						
	                    $file4=  basename($_FILES["img4"]["name"]); 
	                    $file_tmp4=$_FILES['img4']['tmp_name'];
						$fileType4 = pathinfo($location.$file4,PATHINFO_EXTENSION);
	                    
	                    $query="INSERT INTO `phoneads`(`id`, `name`, `price`, `brand`,`brand_name`, `condition`, `model_Year`,  `device`,`device_name`,`district_Id`, `city_Id`, `post_Time`, `discription`, `seller_Id`, `views`, `post_Engage`, `sellerAcc`,`Admin_Approval`,`lat`,`lng`,`imageLocation`) 
						VALUES ('','$model','$price','$model','$new_model_name','$condition','$model_Year','$modify_Type','$new_modify_Type_name','$did','$city_Id','$post_Time','$discription','$seller_Id','','','$sellerAcc','0','$lat','$lng','$imgLocation')";
	                    $fire=mysqli_query($conn,$query);
						
						
	                if($fire)
	             {
					 $sq = "INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$seller_Id','your phone ad is added successful.','1','$post_Time')";
					 $fire=mysqli_query($conn,$sq);
					 
					 $s = "INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$seller_Id','An hour after checking your ad it will be published on <b> durakathanapala.lk </b>...','1','$post_Time')";
					$fire=mysqli_query($conn,$s);
					 
				  $sql = "select * from `phoneads`  where `seller_Id` = '$seller_Id' AND `post_Time` ='$post_Time' ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					$postId = $row["id"]; 
					$sellerId = $row["seller_Id"]; 
					$sellerAcc = $row["sellerAcc"]; 
 				 }}
				 
				     if(!empty($_FILES['img1']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file1','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img2']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file2','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img3']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file3','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img4']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file4','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
		          if(move_uploaded_file($file_tmp1, $location.$file1)){
					  ?><script type="text/javascript">   
					  document.querySelector('#imgUp').innerHTML = 'First Image Uploading...';
					  </script><?php
					 resize($fileType1,$location.$file1,$location.$file1,1000);
			         resize($fileType1,$location.$file1,$location.$file1,800);
			         add_logo($fileType1,$location.$file1,"watermark.png",$location.$file1); 
					 ?><script type="text/javascript">    
					  document.querySelector('#imgUp').innerHTML = 'First Image Uploaded...';
					  </script><?php
				  }				
		          if(move_uploaded_file($file_tmp2, $location.$file2)){
					  ?><script type="text/javascript">   
					  document.querySelector('#imgUp').innerHTML = 'Second Image Uploading...';
					  </script><?php
					 resize($fileType2,$location.$file2,$location.$file2,1000);
			         resize($fileType2,$location.$file2,$location.$file2,800);
			         add_logo($fileType2,$location.$file2,"watermark.png",$location.$file2);  
					 ?><script type="text/javascript">   
					  document.querySelector('#imgUp').innerHTML = 'Second Image Uploaded...';
					  </script><?php
				  }
				  
		          if(move_uploaded_file($file_tmp3, $location.$file3)){
					  ?><script type="text/javascript">   
					  document.querySelector('#imgUp').innerHTML = 'Third Image Uploading...';
					  </script><?php
				   resize($fileType3,$location.$file3,$location.$file3,1000);
			       resize($fileType3,$location.$file3,$location.$file3,800);
			       add_logo($fileType3,$location.$file3,"watermark.png",$location.$file3); 
				    ?><script type="text/javascript">   
					  document.querySelector('#imgUp').innerHTML = 'Third Image Uploaded...';
					  </script><?php
				  }
				   
		          if(move_uploaded_file($file_tmp4, $location.$file4)){
					  ?><script type="text/javascript">   
					  document.querySelector('#imgUp').innerHTML = 'Fourth Image Uploading...';
					  </script><?php
				   resize($fileType4,$location.$file4,$location.$file4,1000);
			       resize($fileType4,$location.$file4,$location.$file4,800);
			       add_logo($fileType4,$location.$file4,"watermark.png",$location.$file4);  
				   ?><script type="text/javascript">   
					  document.querySelector('#imgUp').innerHTML = 'Fourth Image Uploaded...';
					  </script><?php
				  }
				   	
				   	  $name = "Durakathanapala.lk New Phone Ad";  // Name of your website or yours
          // mail of reciever
        $emailPic = "https://durakathanapala.lk/adsPictures/{$seller_Id}/{$post_Time2}/{$file1}";  
        $subject = "Tutorial or any subject";
        $body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#f9f9f9" id="bodyTable">
	<tbody>
		<tr>
			<td style="padding-right:10px;padding-left:10px;" align="center" valign="top" id="bodyCell">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperWebview" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
									<tbody>
										<tr>
											<td style="background-color:#00d2f4;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
										</tr>
										<tr>
											<td align="center" valign="middle" style="padding-bottom: 10px;" class="emailRegards">
												<!-- Image and Link // -->
												<a href="#" target="_blank" style="text-decoration:none; "><br>
													<font><font size=5><b>Comming New Phone Ad,</b></font><br>
												</a>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 20px;" align="center" valign="top" class="imgHero">
												<a href="#" style="text-decoration:none" target="_blank">
													<img alt="" border="0" src="'.$emailPic.'" style="width:100%;max-width:600px;height:auto;display:block;color: #f9f9f9;" width="600">
												</a>
											</td>
										</tr>
									
										<tr>
											<td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
													<tbody>
													
													</tbody>
												</table>
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableButton" style="">
													<tbody>
														<tr>
															<td style="padding-top:20px;padding-bottom:20px" align="center" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" align="center">
																	<tbody>
																		<tr>
																			<td style="background-color: rgb(0, 210, 244); padding: 12px 35px; border-radius: 50px;" align="center" class="ctaButton">
										<a  href="https://durakathanapala.lk/admin/phoneAdsTable.php" style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:17px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" target="_blank" class="text">Check Phone  Ad</a>
																			
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td style="font-size:1px;line-height:1px" height="20">&nbsp;</td>
										</tr>
										<tr>
											<td align="center" valign="middle" style="padding-bottom: 40px;" class="emailRegards">
												<!-- Image and Link // -->
												<a href="#" target="_blank" style="text-decoration:none;">
													<font><font size=5><b>Thank you!</b></font>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
									<tbody>
										<tr>
											<td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperFooter" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="footer">
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>';
        $from = "services@durakathanapala.lk";  // you mail
        $to = "durakathanapala@gmail.com";
        $password = "[DlCD~Yh;CwF";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "mail.durakathanapala.lk"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 465;  // port
        $mail->SMTPSecure = "ssl";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            
            if($sellerAcc == "normal"){
				   $sql = "select * from `user`  where `UserId` = '$sellerId' ";
	               $res = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($res);
		           if($count>0){
				   while($row=mysqli_fetch_assoc($res)){
					$verify = $row["verifyAcc"]; 
				   }}
				   if($verify == ""){
					?>
					<script type="text/javascript">
					window.location.href = 'user/profile/profile.php?user=normal&id=<?php echo $sellerId; ?>&ad=posted&verify=no';
					</script>
       	           <?php    
				   }else{
				   ?>
					<script type="text/javascript">
					window.location.href = 'user/profile/profile.php?user=normal&id=<?php echo $sellerId; ?>&ad=posted&verify=yes';
					</script>
       	           <?php  
				   }
				 }else if($sellerAcc == "google"){
					 
				   $sql = "select * from `google-user`  where `googleIdTocken` = '$sellerId' ";
	               $res = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($res);
		           if($count>0){
				   while($row=mysqli_fetch_assoc($res)){
					$verify = $row["verifyAcc"]; 
				   }}
				   if($verify == ""){
					?>
					<script type="text/javascript">
					window.location.href = 'user/profile/profile.php?user=google&id=<?php echo $sellerId; ?>&ad=posted&verify=no';
					</script>
       	           <?php    
				   }else{
					?>
					<script type="text/javascript">
					window.location.href = 'user/profile/profile.php?user=google&id=<?php echo $sellerId; ?>&ad=posted&verify=yes';
					</script>
       	           <?php  
				   }
				 }else if($sellerAcc == "facebook"){
					 
				   $sql = "select * from `facebook-user`  where `facebookIdTocken` = '$sellerId' ";
	               $res = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($res);
		           if($count>0){
				   while($row=mysqli_fetch_assoc($res)){
					$verify = $row["verifyAcc"]; 
				   }}
				   if($verify == ""){
					?>
					<script type="text/javascript">
					window.location.href = 'user/profile/profile.php?user=facebook&id=<?php echo $sellerId; ?>&ad=posted&verify=no';
					</script>
       	           <?php    
				   }else{
					?>
					<script type="text/javascript">
					window.location.href = 'user/profile/profile.php?user=facebook&id=<?php echo $sellerId; ?>&ad=posted&verify=yes';
					</script>
       	           <?php  
				   }
				 }
				 
        }
        
        
				 

	           }
	            else
	           {
		         ?>	
				    <script type="text/javascript">
				    document.getElementById("msgModal").style.display = "inline";
					document.getElementById("loader").style.display = "none";
				    </script>
				 <br>
					  <br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Please Try Again,<br> Check your connection and Try Again!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="postAdno()">Try Again</button></p>
                    </div>
       	       <?php
	           }
          
 }
}
function mailsend(){
      			   
}
function resize($x,$original,$destination,$max = 1000)
{
	//resize image
	switch($x){ 
                    case 'jpg': 
                        $source = imagecreatefromjpeg($original); 
                        break; 
                    case 'jpeg': 
                        $source = imagecreatefromjpeg($original); 
                        break; 
                    case 'png': 
                        $source = imagecreatefrompng($original); 
                        break; 
                    default: 
                        $source = imagecreatefromjpeg($original); 
                }
	$width = imagesx($source);
	$height = imagesy($source);

	if($width >= $height){

		$new_width = $max;
		$ratio = $height / $width;
		$new_height = $max * $ratio;
	}else{
		$new_height = $max;
		$ratio = $width / $height;
		$new_width = $max * $ratio;
	}

	$image = imagecreatetruecolor($new_width, $new_height);
	imagecopyresampled($image, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	switch($x){ 
                    case 'jpg': 
                        imagejpeg($image,$destination);
                        break; 
                    case 'jpeg': 
                        imagejpeg($image,$destination);
                        break; 
                    case 'png': 
                       imagepng($image,$destination);
                        break; 
                    default: 
                        imagejpeg($image,$destination);
                }
	imagedestroy($image);
}

function add_logo($y,$source_file,$logo_file,$output)
                
{
    	switch($y){ 
                    case 'jpg': 
                        $source = imagecreatefromjpeg($source_file); 
                        break; 
                    case 'jpeg': 
                        $source = imagecreatefromjpeg($source_file); 
                        break; 
                    case 'png': 
                        $source = imagecreatefrompng($source_file); 
                        break; 
                    default: 
                        $source = imagecreatefromjpeg($source_file); 
                }
	$source_width = imagesx($source);
	$source_height = imagesy($source);

	$logo = imagecreatefrompng($logo_file);
	$logo_width = imagesx($logo);
	$logo_height = imagesy($logo);

	$centerX = ($source_width - $logo_width) / 2;
	$centerY = ($source_height - $logo_height) / 2;
	
	        imagecolortransparent($logo, imagecolorallocatealpha($logo, 0, 0, 0, 127));
            imagealphablending($logo, false);
            imagesavealpha($logo, true);

	imagecopymerge($source, $logo, $centerX, $centerY, 0, 0, $logo_width, $logo_height, 60);
	//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
	
	imagepng($source,$output);
	imagedestroy($source);
}
/*end post create*/

  /*cancel post*/
  if(isset($_POST["cancelPost"])){
	    ?>	        
	   	           <div class="alertcard">
					<div class="vmanu" >                 
                     <h1 style="color:#5555FF;">Alert!</h1> 
                     <p>Do you want to cancel this?<br><br><button  class="cancelPostYesbtn" onclick="postcancelyes()">Yes</button> Or <button class="cancelPostNobtn"  onclick="postcancelno()">No</button></p>
					 </div>
                    </div>					
       	<?php
  }
  /*end cancel post*/
  
  /* search live result*/
 if(isset($_POST["searchLiveKeyWord"])){
	$name = $_POST["searchLiveKeyWord"];
	$location = $_POST["location"];
	$model = $_POST["model"];
	$mtype = $_POST["mtype"];
	
	if($name ==""){
		?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
	}else{
	
  if(is_numeric($location)){ 
	if($location !="" && $model != "" && $mtype != ""){
		
	$sql1 = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand`='$model' AND `device` = '$mtype' AND `city_Id` ='$location' AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql1);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else 	if($location !="" && $model == "" && $mtype != ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `device` = '$mtype' AND `city_Id` ='$location' AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location !="" && $model == "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `city_Id` ='$location' AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
        $res = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location !="" && $model != "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand`='$model'  AND `city_Id` ='$location' AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location =="" && $model != "" && $mtype != ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand`='$model' AND `device` = '$mtype' AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location =="" && $model != "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand`='$model'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location =="" && $model == "" && $mtype != ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `device` = '$mtype'  AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	 }	
	
	}else{
		if($location == "Srilanka"){
				if($location !="" && $model != "" && $mtype != ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand`='$model' AND `device` = '$mtype'  AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
        $res = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else 	if($location !="" && $model == "" && $mtype != ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `device` = '$mtype'  AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location !="" && $model == "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	   $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location !="" && $model != "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand`='$model'  AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}
		}else{
			$sql = "SELECT * FROM `districts` WHERE `name_en`='$location'";
	                    $res = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($res);
		                   if($count>0){
						   while($row=mysqli_fetch_assoc($res)){
							   $location = $row["id"];
						   }} 
	  if($location !="" && $model != "" && $mtype != ""){	
	   $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$location'  AND `brand`='$model' AND `device` = '$mtype'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else 	if($location !="" && $model == "" && $mtype != ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `device` = '$mtype' AND `district_Id` ='$location' AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location !="" && $model == "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `district_Id` ='$location' AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	   $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location !="" && $model != "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand`='$model'  AND `district_Id` ='$location' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   $title3 = !empty($name)?highlightWords($row['discription'], $name):$row['discription'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			   if(strpos($title3, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['discription']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title3; ?></li><?php
			   }
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	}else if($location =="" && $model == "" && $mtype == ""){
		
	$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT 0,16";
	    $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
 		if($count>0){
		   while($row=mysqli_fetch_assoc($res)){
			   $title = !empty($name)?highlightWords($row['device_name'], $name):$row['device_name'];
			   $title2 = !empty($name)?highlightWords($row['brand_name'], $name):$row['brand_name'];
			   
			   if(strpos($title, $name) !== false){
				 ?><li class="list-group-item" id='<?php echo $row['device_name']; ?>' onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title; ?></li><?php  
			   }
		       if(strpos($title2, $name) !== false){
				   ?><li class="list-group-item" id='<?php echo $row['brand_name']; ?>'  onclick=" document.getElementById('searchName').value= this.id;" style="opacity:0.9; letter-spacing: 1px; font-size:14px; font-weight:bold; margin:3px 0;"><?php echo $title2; ?></li><?php  
			   }
			  
		  

		  }		
		}else{
			 ?><li class="list-group-item" style="opacity:0.7;" >No search results found</li><?php
		}
	 }
		}
	}	
  }
 }
 
function highlightWords($text, $word){
    $text = preg_replace('#'. preg_quote($word) .'#i', '<span style="background-color: #F9F902;">\\0</span>', $text);
    return $text;
}

if(isset($_POST["nid"])){
	
	$id = $_POST["nid"];
	$sql = "UPDATE `notification` SET `active`='0' WHERE `id` = '$id'";
	$fire=mysqli_query($conn,$sql);
	if($fire){
		if(isset($_POST["login"])) {
		
		$login = $_POST["login"];
		$uname = $_POST["loginUserName"];
		$email = $_POST["loginUserEmail"];
		if($login == "normal"){
		  if($uname != ""){
			$uname = $_POST["loginUserName"];
		  }else if($email !=""){
		    $email = $_POST["loginUserEmail"];
		  }				  
		
		if($uname != ""){
			$sql = "select * from `user` where `user_name` ='$uname'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];	
                  $image = $row["image_name"];
				  $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname;
				   $gender = $row["gender"];
				   if( $gender == "male"){
					  $m = "Mr.";
				   }else if( $gender == "female"){
					  $m = "Mrs.";
				   }else{
				 	  $m = "";
				   }
				   
				 if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }				  
			   }
			  }
		}else if($email != ""){
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];	
                  $image = $row["image_name"];
				  $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname;
				   $gender = $row["gender"];
				   if( $gender == "male"){
					  $m = "Mr.";
				   }else if( $gender == "female"){
					  $m = "Mrs.";
				   }else{
				 	  $m = "";
				   }
				   
				 if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }					  
			   }
			  }
		}
		}else if($login == "google"){
			$uname = $_POST["loginUserName"];
			 $sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$userId = $row["googleIdTocken"];  
				$fullname = $row["name"]; 
				$im = $row["profile"];
				$m = "";
				 if(@getimagesize($im)){
                      $src = $im;               
                   }else{
                      $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
			  } 
			  }
		}else if($login == "facebook"){
			$uname = $_POST["loginUserName"];
			 $sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$userId = $row["facebookIdTocken"];  
				$fullname = $row["name"]; 
				$im = $row["profile"];
				$m = "";
				 if(@getimagesize($im)){
                      $src = $im;               
                   }else{
                      $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
			  } 
			  }
		}
		}
		$sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' ORDER BY `date` DESC";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $nid = $row["id"];
				  $massage = $row["massage"];
				  $active = $row["active"];
				  $date = strtotime($row["date"]);
				  $time_ago = $date;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "one minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "an hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   }
				  if($active == "1"){
				?>
				 <div class="notifi-item notifi-itemActive" id="notifi-item">
				  <div style="width:100%;  display:flex;" class="clickNotification" onclick="clickNotification(this.id)" id="<?php echo $nid; ?>">
				     <div style="width:22%; ">
				        <img src="<?php echo $src; ?>" style="opacity:0.1;" alt="img">
				     </div>
					 <div style="width:53%; ">
				        <div class="text"  style="margin:5px 10px 0 0;">
				          <span class="nameNoti" style="opacity:0.1;"><a style="color:#4444FF;" href="user/profile/profile.php?user=normal&id=<?php echo $userId; ?>"><?php echo $m; ?> <?php echo $fullname; ?></a></span><br>
				          <span class="massageNoti" style="opacity:0.1;"><?php echo $massage; ?></span>
			            </div> 
				     </div>
					 <div style="width:25%; ">
				        <div style="font-size:14px; float:right; font-weight:bold; opacity:0.8; margin:40px 2px 1px;"><?php echo $agoTime; ?></div>
				     </div>
				 </div>
			    </div>
				<?php 
				  }else{
				?>
				<div class="notifi-item " id="notifi-item">
				 <div style="width:100%;  display:flex;">
				     <div style="width:22%; ">
				        <img src="<?php echo $src; ?>" alt="img">
				     </div>
					 <div style="width:53%; ">
				        <div class="text" style="margin:5px 10px 0 0;">
				          <span class="nameNoti"><a style="color:#4444FF;" href="user/profile/profile.php?user=normal&id=<?php echo $userId; ?>"><?php echo $m; ?> <?php echo $fullname; ?></a></span><br>
				          <span class="massageNoti"><?php echo $massage; ?></span>
			            </div> 
				     </div>
					 <div style="width:25%; ">
				        <div style="font-size:14px; float:right; font-weight:bold; opacity:0.8; margin:40px 2px 1px;"><?php echo $agoTime; ?></div>
				     </div>
				 </div>
			    </div>
				<?php  
				  }
			    }
			  }
	}
}
if(isset($_POST["checkVerifyNotification"])){

	if(isset($_POST["login"])) {
		$login = $_POST["login"];
		$uname = $_POST["loginUserName"];
		$email = $_POST["loginUserEmail"];
		if($login == "normal"){
		  if($uname != ""){
			$uname = $_POST["loginUserName"];
		  }else if($email !=""){
		    $email = $_POST["loginUserEmail"];
		  }			  
		
		if($uname != ""){
			$sql = "select * from `user` where `user_name` ='$uname'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				 $verify = $row["verifyAcc"]; 
                 $userId = $row["UserId"];					 
			   }
			  }
		}else if($email != ""){
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				 $verify = $row["verifyAcc"]; 
                 $userId = $row["UserId"];					 
			   }
			  }
		}
		}else if($login == "google"){
			$uname = $_POST["loginUserName"];
			 $sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$verify = $row["verifyAcc"];
                $userId = $row["googleIdTocken"];					
			  } 
			  }
		}else if($login == "facebook"){
			$uname = $_POST["loginUserName"];
			 $sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$verify = $row["verifyAcc"];
                $userId = $row["facebookIdTocken"];					
			  } 
			  }
		}
 	if($verify == ""){
			
			$sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' AND `massage` = '<b>please verify your account,</b> Then you can active your ads..' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					 $nid = $row["id"];
				 }  
				 $date = new DateTime("now", new DateTimeZone('Asia/Colombo') );
                 $post_Time  = $date->format('Y-m-d H:i:s');
				 $s = "UPDATE `notification` SET `active`='1',`date`='$post_Time' WHERE `id`='$nid'";
				 $fire=mysqli_query($conn,$s);  
			  }else{
				   $date = new DateTime("now", new DateTimeZone('Asia/Colombo') );
                   $post_Time  = $date->format('Y-m-d H:i:s');
				 $s = "INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$userId','<b>please verify your account,</b> Then you can active your ads..','1','$post_Time')";
				 $fire=mysqli_query($conn,$s); 
			  }
		}
		     $sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' AND `active` = '1' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
			 echo $count;
	}
}

if(isset($_POST["checkNotifi"])){
	if(isset($_POST["login"])) {
		$login = $_POST["login"];

		$uname = $_POST["loginUserName"];
		$email = $_POST["loginUserEmail"];
		if($login == "normal"){
		  if($uname != ""){
			$uname = $_POST["loginUserName"];
		  }else if($email !=""){
		    $email = $_POST["loginUserEmail"];
		  }	
		if($uname != ""){
			$sql = "select * from `user` where `user_name` ='$uname'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				 $verify = $row["verifyAcc"]; 
                 $userId = $row["UserId"];					 
			   }
			  }
		}else if($email != ""){
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				 $verify = $row["verifyAcc"]; 
                 $userId = $row["UserId"];					 
			   }
			  }
		}
		}else if($login == "google"){
			$uname = $_POST["loginUserName"];
			 $sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$verify = $row["verifyAcc"];
                $userId = $row["googleIdTocken"];					
			  } 
			  }
		}else if($login == "facebook"){
			$uname = $_POST["loginUserName"];
			 $sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$verify = $row["verifyAcc"];
                $userId = $row["facebookIdTocken"];					
			  } 
			  }
		}
		     $sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' AND `active` = '1' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
			 echo $count;
	}
}

if(isset($_POST["reportPostId"])){
	$id = $_POST["reportPostId"];
	$adName = $_POST["reportPostadName"];
	$email = $_POST["reportPostemail"];
	$msg = $_POST["reportPostmsg"];
	$reason =$_POST["reportPostreason"];
	
	 $date = new DateTime("now", new DateTimeZone('Asia/Colombo') );
     $time  = $date->format('Y-m-d H:i:s');
				 $s = "INSERT INTO `reportads`(`id`, `PostId`,`postName`, `senderEmail`, `reason`, `message`,`date`,`adminCheck`) VALUES ('','$id','$adName','$email','$reason','$msg','$time','')";
				 $fire=mysqli_query($conn,$s); 
}
?>
