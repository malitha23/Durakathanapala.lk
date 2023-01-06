<?php
   use PHPMailer\PHPMailer\PHPMailer;
 require_once '../function/database/database.php';
 
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
              ?><span onclick="changePostLocationshop()"   id="t" style='font-size:15px; margin:0 10px; color:#6666FF; cursor:pointer;'><i class="fa fa-map-marker" style='font-size:18px; margin:0 5px;'></i><input style="display:none;" type="number" name="city_Id" value="<?php echo $Cid ?>"><span style="color:black;"><?php echo $DName; ?>/ <?php echo $CName ; ?> <span style="font-size:12px; color:blue;">change</span> </span></span>
			  <span   onclick="changePostcategoryshop()" style='font-size:15px; margin:0 10px;color:#6666FF; cursor:pointer;'><i class='fa fa-tag' style='font-size:18px; margin:0 5px; '></i> <span style="color:black;">Phone Shop <span style="font-size:12px; color:blue;">change</span> </span> </span><?php
			  }
			}
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
					
	<div class=" w3-panel" ><span><b>Publisher Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
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
             </ul>
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
             <ul id="list"></ul>
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
             <ul id="list"> </ul>
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
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li> </ul>
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
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li> </ul>
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
    if(isset($_POST["numberClick"])){
		$adId = $_POST["ADID"];
	         $sql = "select * from `phoneshopads`  where `id` = '$adId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
			    $pEnage = $row["post_Engage"];
			    $updatepEnage = $pEnage + 1 ;
			 
			     $sql = "UPDATE `phoneshopads` SET `post_Engage`=' $updatepEnage' WHERE `id` = '$adId' ";
			     $fire=mysqli_query($conn,$sql);
			   }}
	}	


if(isset($_POST["shopName"])){
	 
       $shopName           = $_POST['shopName'];
	   $ownerName     = $_POST['ownerName'];
       $openDays           = $_POST["openDay"];
       $closeDays       = $_POST["closeDay"];
       $shopContact1      = $_POST['shopContact1'];
       $shopContact2     = $_POST["shopContact2"];
	   $openTime         = $_POST["openTime"];
	   $addressShop       = $_POST['addressShop'];
	   $aboutShop       = $_POST['aboutShop'];
	   $city_Id         = $_POST['city_Id'];
       $seller_Id       = $_POST['seller_Id'];
	   $sellerAcc       = $_POST['sellerAcc'];
	   
        if($openTime == "other"){
			$openTime = $_POST["otheropenTime"];
		}else{
			$openTime         = $_POST['openTime'];
		}
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $post_Time       = $date->format('Y-m-d H:i:s');
	   $post_Time2      = strtotime($post_Time);

       if (!file_exists("../adsPictures/shopAds/{$seller_Id}")) {
	     mkdir("../adsPictures/shopAds/{$seller_Id}", 0777, true);
		
		 if (!file_exists("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}", 0777, true);
         }
        }else{
		 if (!file_exists("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}", 0777, true);
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

						   
								   
        // Velidate if files exist
        if(isset($_FILES['img10']['name'])){ 
		    
			// first insert data

			
                   /* $sql = " SELECT `id` FROM `wheelads` WHERE `seller_Id`= '$seller_Id' AND `post_Time` = '$post_Time' ";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
					while($row=mysqli_fetch_assoc($res)){	
					   $postId = $row["id"];
					}}	*/			
			
	 					$location="../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/";
						
	                    $file1= basename($_FILES["img10"]["name"]); 
	                    $file_tmp1=$_FILES['img10']['tmp_name'];
						$fileType1 = pathinfo($location.$file1,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/{$file1}";
	                    $file2=  basename($_FILES["img11"]["name"]); 
	                    $file_tmp2=$_FILES['img11']['tmp_name'];
						$fileType2 = pathinfo($location.$file2,PATHINFO_EXTENSION);
						
	                    $file3=  basename($_FILES["img12"]["name"]); 
	                    $file_tmp3=$_FILES['img12']['tmp_name'];
						$fileType3 = pathinfo($location.$file3,PATHINFO_EXTENSION);
						
	                    $file4=  basename($_FILES["img13"]["name"]); 
	                    $file_tmp4=$_FILES['img13']['tmp_name'];
						$fileType4 = pathinfo($location.$file4,PATHINFO_EXTENSION);
	                    
	                    $query="INSERT INTO `phoneshopads`(`id`, `shopName`, `ownerName`, `shopOpen`, `shopClose`, `shopPno1`, `shopPno2`, `openTime`, `address`, `about`, `district_Id`, `city_Id`, `post_Time`, `update_Time`, `seller_Id`, `views`, `post_Engage`, `sellerAcc`, `AdminApproval`, `AdminApproval_Time`, `update_Admin_Approval`, `lat`, `lng`, `imageLocation`)
						VALUES ('','$shopName','$ownerName','$openDays','$closeDays','$shopContact1','$shopContact2','$openTime','$addressShop','$aboutShop','$did','$city_Id','$post_Time','$post_Time','$seller_Id','','','$sellerAcc','0','','','$lat','$lng','$imgLocation')";
	                    $fire=mysqli_query($conn,$query);
	                if($fire)
	             {
					 $sq = "INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$seller_Id','your phone shop ad is added successful.','1','$post_Time')";
					 $fire=mysqli_query($conn,$sq);
					 
					 $s = "INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$seller_Id','An hour after checking your ad it will be published on <b> durakathanapala.lk </b>...','1','$post_Time')";
					$fire=mysqli_query($conn,$s);
					 
				  $sql = "select * from `phoneshopads`  where `seller_Id` = '$seller_Id' AND `post_Time` ='$post_Time' ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					$postId = $row["id"]; 
					$sellerId = $row["seller_Id"]; 
					$sellerAcc = $row["sellerAcc"]; 
 				 }}
				     if(!empty($_FILES['img10']['name'])){
						$sql = "INSERT INTO `phoneshopadimage`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file1','','','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img11']['name'])){
						$sql = "INSERT INTO `phoneshopadimages`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file2','','','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img12']['name'])){
						$sql = "INSERT INTO `phoneshopadimages`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file3','','','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img13']['name'])){
						$sql = "INSERT INTO `phoneshopadimages`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file4','','','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
		          if(move_uploaded_file($file_tmp1, $location.$file1)){
					 resize($fileType1,$location.$file1,$location.$file1,1000);
			         resize($fileType1,$location.$file1,$location.$file1,800);
			         add_logo($fileType1,$location.$file1,"watermark.png",$location.$file1); 
				  }				
		          if(move_uploaded_file($file_tmp2, $location.$file2)){
					 resize($fileType2,$location.$file2,$location.$file2,1000);
			         resize($fileType2,$location.$file2,$location.$file2,800);
			         add_logo($fileType2,$location.$file2,"watermark.png",$location.$file2);  
				  }
				  
		          if(move_uploaded_file($file_tmp3, $location.$file3)){
				   resize($fileType3,$location.$file3,$location.$file3,1000);
			       resize($fileType3,$location.$file3,$location.$file3,800);
			       add_logo($fileType3,$location.$file3,"watermark.png",$location.$file3); 
				  }
				   
		          if(move_uploaded_file($file_tmp4, $location.$file4)){
				   resize($fileType4,$location.$file4,$location.$file4,1000);
			       resize($fileType4,$location.$file4,$location.$file4,800);
			       add_logo($fileType4,$location.$file4,"watermark.png",$location.$file4);  
				  }
				  
				  				   	  $name = "Durakathanapala.lk New Shop Ad";  // Name of your website or yours
          // mail of reciever
        $emailPic = "https://durakathanapala.lk/adsPictures/shopAds/{$seller_Id}/{$post_Time2}/{$file1}";  
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
													<font><font size=5><b>Comming New Shop Ad,</b></font><br>
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
										<a  href="https://durakathanapala.lk/admin/phoneshopAdsTable.php" style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:17px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" target="_blank" class="text">Check Shop Ad</a>
																			
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
?>