<?php
  $title ="Profile Durakathanapala.lk -Phones, Phone Shops, Phone Parts and Services Shops, Buy & Sell Phones in Sri Lanka";
 require_once '../../function/database/database.php';
 if(isset($_GET["user"])){
	if($_GET["user"] =="normal"){
		$id = $_GET["id"];
		$userProfile = "Durakathanapala";	 
		$sql = "select * from `user` where `UserId` ='$id'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["UserId"];
				   $pno = $row["pno1"];
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				   $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname." ".$lname;
				   $gender = $row["gender"];
				   $cityId = $row["city"];
				   $checkVerify = $row["verifyAcc"];
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
				  $srcImage ="../images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="../images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }
			  
			  }
			  $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
                                    $cname = 	$row4["name_en"];
								   }}
			  }
		
	}else if($_GET["user"] =="google"){
		        ?>
				<script type="text/javascript">
				  document.getElementById("mBtn").style.opacity = "0";
				</script>
				<?php
		$id = $_GET["id"];
		$userProfile = "Google";	 
		$sql = "select * from `google-user` where `googleIdTocken` ='$id'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["googleIdTocken"];
				   $src = $row["profile"];
				   $fullname = $row["name"];
				   $email = $row["email"];
				   $uname = $row["email"];
				   $m = "";
				   $gender = "";
				   $pno = "";
				   $cname ="";
				   $checkVerify = $row["verifyAcc"];
			  
			  }
			  
			  }
		
	}else if($_GET["user"] =="facebook"){
		        ?>
				<script type="text/javascript">
				  document.getElementById("mBtn").style.opacity = "0";
				</script>
				<?php
		$id = $_GET["id"];
		$userProfile = "Facebook";	 
		$sql = "select * from `facebook-user` where `facebookIdTocken` ='$id'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["facebookIdTocken"];
				   $src = "../facebook/download.png";
				   $fullname = $row["name"];
				   $email = $row["email"];
				   $uname = $row["email"];
				   $m = "";
				   $gender = "";
				   $pno = "";
				   $cname ="";
				   $checkVerify = $row["verifyAcc"];
			  
			  }
			  
			  }
		
	}
 }
 
   include '../../function/function.php';
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php echo $title; ?></title>
  <!-- MDB icon -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-profiles.min.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/new2.css">
   	 <link rel="icon" href="../../images/webLogo.png">  	  
  <script type="text/javascript">
      $(document).ready(function() {
       $('.adView').click(function() {
	     	var id = this.id;
			window.location.href = '../../index.php?page=user-ads-view-Item&adId='+id;
	   });
 });
	
  </script>
  <script type="text/javascript" src="js/new2.js"></script>
  <style type="text/css">
    .mb-0 input, select{padding:5px; color:blue;}
	#postForm input, select{ color:blue;}
	.postpad{padding:20px;}
	.editads{width:80%; margin:0 auto; background-color:white; padding:10px 30px;}
	#postFormshop input, select{ color:blue;}
	.editshopads{width:80%; margin:0 auto; background-color:white; padding:10px 30px;}
	


@media only screen and (max-width: 1100px) and (min-width: 610px){
	#postForm input, select{ color:blue;}
	.postpad{padding:5px;}
	.editads{width:100%; margin:0 auto; background-color:white; padding:5px 30px;}
	#postFormshop input, select{ color:blue;}
	.editshopads{width:100%; margin:0 auto; background-color:white; padding:5px 30px;}
	.w3-third, .w3-half{width:100%;}
}

@media only screen and (max-width: 600px) and (min-width: 300px){
    #postForm input, select{ color:blue;}
	.postpad{padding:5px; margin:10px auto;}
	.editads{width:100%; margin:0 auto; background-color:white;}
	#contactCard{width:100%; padding:5px;font-size:12px;}
	#postFormshop input, select{ color:blue;}
	.postpad{padding:5px; margin:10px auto;}
	.editshopads{width:100%; margin:0 auto; background-color:white;}
	#shopcontactCard{width:100%; padding:5px;font-size:12px;}
}
  </style>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 5; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  height:auto;
  border: 1px solid #888;
  width: 90%;
}
.modal-content2 {
  margin: auto;
  padding: 20px;
  width: 100%;
  height:100%;
}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.dAd, .shopdAd{display:none;}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>
 <div id="loader" class="loader"><div id="loader-main"><p style="text-align:center;"><img style="display:inline; width:80px; opacity:1;" src="../../images/wait.gif"></p></div></div>
<div id="myModal2" class="modal">
<div class="modal-content2">
<div style="background-color:white; width:320px;  height:150px; margin:10% auto; border-radius:4px; z-index:4; padding-top:40px;">
<h6 style="text-align:center;"><b>Do you really want to delete Ad ?</b></h6>
<div class="d-flex  " style="padding:14px 0;">
               <div style="margin:0 auto; opacity:0.8;"> 
			       <button style="padding:6px 10px; margin:0 10px; background-color:#f51111; font-size:12px;" type="button" class="btn btn-primary dAd" id="" onclick="deleteAd()">Delete Ad</button>
				  <button style="padding:6px 10px; margin:0 10px; background-color:#f51111; font-size:12px;" type="button" class="btn btn-primary shopdAd" id="" onclick="deleteshopAd()">Delete Ad</button>
				  <button style="padding:5px 10px; margin:0 10px; font-size:12px; color:#f51111; background-color:white; border:1px solid #f51111;" type="button" class="btn btn-primary " onclick="window.location.reload();">Cancel</button>
              </div>
			  </div>
</div>
</div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content"><br>
    <span class="close">&times;</span>
    <div style="width:100%; width:100%; background-color:#ddd; border:1px solid #5555FF; padding:70px 0;">
	<p style="margin:auto; width:90%; font-size:18px; padding:8px 0; text-align:center;">
	 <i class="fa fa-check-square" style="color:#11f511; font-size:17px"></i> 
	 <span style="margin:0 5px;"> Awaiting your ads.<br><b>SMS (normal Or whatsapp)</b> your name to <b>0712220569</b> to confirm your number..</span>
	</p><br><nr>
	<p style="margin:auto; width:90%; font-size:18px; padding:8px 0; text-align:center;">
	 <span style="margin:0 5px; letter-spacing:1px;">ඔබේ දැන්වීම් අප සතුව ලැබී ඇත.
ඔබගේ ගිණුම තහවුරු කිරීමට ඔබගේ නම <b>0712220569</b> ට <b>SMS (normal Or whatsapp)</b> කරන්න. ඉන්පසු ඔබගේ සියලු දැන්වීම්  <b>Durakathanapala.lk</b> තුල පලකර හැක. .</span>
	</p>
	</div>
  </div>

</div> 

  <!-- Start your project here-->
  <section style="background-color: #eee;">
    <div class="container py-5" id="main1">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="../../">Home</a></li>
              <li class="breadcrumb-item" aria-current="page">User Profile</li>
			  <li class="breadcrumb-item active" aria-current="page" id="managetag"></li>
            </ol>
			 <?php 
						  if($checkVerify == "1"){
						  }else{
							?><button class="myBtn btn btn-primary " style="background-color:#f51111; float:right; opacity:0.9; position:relative; margin:-29px 5px;" >Verify Account</button><?php
						  }
		?>         </nav>
		  <?php 
						  if($checkVerify == "1"){
						  }else{
							 ?><div class="alert alert-danger"><strong>Alert ! -:</strong> <span style="margin:0 10px;">Please Verify your Account, Then you can Active your Ads..</span></div><?php
						  }
		?>
		<?php
		   if(isset($_GET["ad"])){
			   if($_GET["ad"] == "posted" && $_GET["verify"] == "no"){
				  ?>
				  <div id="alertPost" style="width:100%; height:auto; "><span  style="float:right; margin:0 10px; font-size:18px; cursor:pointer;" onclick="document.getElementById('alertPost').style.display = 'none';">&times;</span>
				        <div style="width:100%; width:100%; background-color:#ddd; border:1px solid #5555FF; padding:40px 0;">
	<p style="margin:auto; width:90%; font-size:18px; padding:8px 0; text-align:center;">
	 <i class="fa fa-check-square" style="color:#11f511; font-size:17px"></i> 
	 <span style="margin:0 5px;"> Posting your ad is a success.<br><b>SMS (normal Or whatsapp)</b> your name to <b>0712220569</b> to confirm your number .</span>
	</p><br><nr>
	
	</div>
				  </div><br>
				  <?php
			   }else if($_GET["ad"] == "posted" && $_GET["verify"] == "yes"){
			     ?>
				  <div id="alertPost" style="width:100%; height:auto; "><span  style="float:right; margin:0 10px; font-size:18px; cursor:pointer;" onclick="document.getElementById('alertPost').style.display = 'none';">&times;</span>
				        <div style="width:100%; width:100%; background-color:#ddd; border:1px solid #5555FF; padding:40px 0;">
	<p style="margin:auto; width:90%; font-size:18px; padding:8px 0; text-align:center;">
	 <i class="fa fa-check-square" style="color:#11f511; font-size:17px"></i> 
	 <span style="margin:0 5px;"> Posting your phone ad is a success. An hour after checking your ad it will be published on <b> durakathanapala.lk </b>...</span>
	</p><br><nr>
	<p style="margin:auto; width:90%; font-size:18px; padding:8px 0; text-align:center;">
	 <span style="margin:0 5px; letter-spacing:1px;">ඔබගේ  දැන්වීම පලකිරීම සාර්ථකයි.  ඔබගේ දැන්වීම පරීක්ෂාකිරීමෙන් පසු  පැයක් ඇතුළත එය  <b>durakathanapala.lk</b> හි පළ කෙරේ...</span>
	</p>
	</div>
				  </div><br>
				  <?php
			   }
		   }
		?>
        </div>
      </div>
    <form id="manageProfileForm" action="" method="POST" enctype="multipart/form-data">
      <div class="row" id="manageP">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="<?php echo $src; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:120px;">
              <h5 class="my-3"><b><?php echo $m; ?> <?php echo $fullname; ?></b></h5>
              <p class="text-muted mb-1" style="font-size:12px; opacity:0.9;"><?php echo $userProfile; ?> user</p>
              <p class="text-muted mb-4"><?php echo $uname; ?></p>
              <div class="d-flex justify-content-center mb-2" style="padding:14px 0;">
			 <?php if($_GET["user"] == "normal" ){
				 ?><button type="button"  class="btn btn-primary " onclick="manageProfile()">Manage Profile</button><?php
			 }?>
				<button type="button" onclick="mainLogOut()" class="btn btn-outline-primary ms-1">Log Out</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $m; ?> <?php echo $fullname; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $email; ?></p>
                </div>
              </div>
			  <?php if($_GET["user"] != "google"){ ?>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Contact No</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $pno; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">City</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $cname; ?></p>
                </div>
              </div>
			  <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $gender; ?></p>
                </div>
              </div><?php
			  }?>
            </div>
          </div>
        </div>
      </div>
	  </form>
	  
 <div class="row">
            <div class="w3-third" >
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
				  <p class="mb-4"><span class="text-primary font-italic me-1">Pendding</span> Ads</p>  
                  <div class="" style="width:100%; max-height:300px; overflow-y:auto; ">
				   <?php 
				    			$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='0' AND `seller_Id` = '$id'";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
 		                          if($count>0){  
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $sellerId =	$row["seller_Id"]; 
                                    $sellerAcc =	$row["sellerAcc"]; 									
                                     
									$sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								    $image = $row2["image_name"];
								  }}	
								
								 $sql3 = "select * from `brands` where `id` ='$modelId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}
									  $time_ago = $publishTime;  
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
      $agoTime =  "hour ago";  
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
       $agoTime =  "week ago";  
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
       $agoTime =  "month ago";  
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
       $agoTime =  "year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
					  
					  ?>
				<div class="w3-card-4 loadAds skeleton " style="width:100%; height:95px; border:1px solid #fcf405; opacity:0.9; background-color:white; margin:5px auto; padding:5px; border-radius:2px; display:flex;">
					<div style="width:40%; height:100%;"><p style="margin:4px;"><img src="../../adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" style="width:90%; height:90%; border-radius:3px;"/></p></div>
					<div style="width:70%;">
					  <div style="width:100%; display:flex;">
					    <div style="margin:0 1px; display:flex; float:left; width:95%;"><span style="opacity:0.9; font-size:14px;"><b><?php echo $mName;?></b></span><span style="margin:0px 4px;opacity:0.7; font-size:14px;"><?php echo $year;?></span>
						  <div style=" margin:3px 2px; background-color:#fcf405; width:13px; height:13px; border-radius:13px; border:2px solid white;"></div>
						</div>
						<span class="adDelete" id="<?php echo $id; ?>" style="color:red; border:none; border-radius:5px;  opacity:0.8; cursor:pointer;  font-size:12px;"><b>Delete</b></span>
					  </div>
					  <div style="width:100%; margin:15px 0 0; display:flex;">
                        <div style="">
						<?php 
						  if($checkVerify == "1"){
							?><span class=" btn-primary" style="color:#b5af02;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Please wait !</span> <?php  
						  }else{
							?><span class="myBtn btn-primary" style="color:#f71105;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px; text-shadow: 5px 5px 10px red;">Click Verify !</span> <?php  
						  }
						  ?>
                        <button class="adEdit" onclick="adEdit(this.id)" id="<?php echo $id; ?>" style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Edit</button>
                       <button class="adView"  id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">View</button>
					   </div>
					  </div>   
                       <span style=" float:right; margin:8px 2px; font-size:13px; opacity:0.8;"class="agoTime "><span class=""><?php echo $agoTime; ?></span></span>						
					 </div>
					</div>
					  <?php
								   }
					}else{
						?>
						<div style="width:100%; height:50px; border:1px solid #ddd; opacity:0.9; background-color:white; padding:5px; border-radius:2px;"><div style="margin:7px 40%;">Empty</div></div>
						<?php
					}
				   ?>	
                  </div> 
                </div>
              </div>
            </div>
			 <div class="w3-third">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Active</span> Ads</p>
                   <div class="" style="width:100%; max-height:300px; overflow-y:auto;">
				    				   <?php
							    $id = $_GET["id"];
				    			$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `seller_Id` = '$id'";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
 		                          if($count>0){  
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $sellerId =	$row["seller_Id"];
                                    $sellerAcc =	$row["sellerAcc"]; 									
									
								$sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	
                                 
								 $sql3 = "select * from `brands` where `id` ='$modelId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }} 
									  $time_ago = $publishTime;  
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
      $agoTime =  "hour ago";  
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
       $agoTime =  "week ago";  
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
       $agoTime =  "month ago";  
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
				
					  ?>
                    <div class="w3-card " style="width:100%; height:95px;border:1px solid #11f511; opacity:0.9; margin:5px auto; background-color:white; padding:5px; border-radius:2px; display:flex;">
					<div style="width:40%; height:100%;"><p style="margin:4px;"><img src="../../adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" style="width:90%; height:90%; border-radius:3px;"/></p></div>
					<div style="width:70%;">
					  <div style="width:100%; display:flex;">
					    <div style="margin:0 1px; display:flex; float:left; width:95%;"><span style="opacity:0.9; font-size:14px;"><b><?php echo $mName;?></b></span><span style="margin:0px 4px;opacity:0.7; font-size:14px;"><?php echo $year;?></span>
						  <div style=" margin:3px 2px; background-color:#11f511; width:13px; height:13px; border-radius:13px; border:2px solid white;"></div>
						</div>
						<span class="adDelete" id="<?php echo $id; ?>" style="color:red; border:none; border-radius:5px;  opacity:0.8; cursor:pointer;  font-size:12px;"><b>Delete</b></span>
					  </div>
					  <div style="width:100%; margin:15px 0 0; display:flex;">
                        <div style="">
						 <span class=" btn-primary" style="color:green;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Activated </span>
					     <button class="adEdit" onclick="adEdit(this.id)" id="<?php echo $id; ?>" style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Edit</button>
						 <button class="adView" id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">View</button>
                        </div>
					  </div>   
                       <span style=" float:right; margin:8px 2px; font-size:13px; opacity:0.8;"class="agoTime"><span class=""><?php echo $agoTime; ?></span></span>						
					 </div>
					</div>
					<?php
								   }
					}else{
						?>
						<div style="width:100%; height:50px; border:1px solid #ddd; opacity:0.9; background-color:white; padding:5px; border-radius:2px;"><div style="margin:7px 40%;">Empty</div></div>
						<?php
					}
                  ?>								  
                  </div> 
                </div>
              </div>
            </div>
            <div class="w3-third">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Reject</span> Ads</p>
                   <div class="" style="width:100%; max-height:300px; overflow-y:auto; ">
				   	   <?php 
					      $id = $_GET["id"];
				    			$sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='-1' AND `seller_Id` = '$id'";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
 		                          if($count>0){  
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $sellerId =	$row["seller_Id"]; 
                                    $sellerAcc =	$row["sellerAcc"]; 
									
									$sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	
                                 
								  
								 $sql3 = "select * from `brands` where `id` ='$modelId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}
									  $time_ago = $publishTime;  
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
      $agoTime =  "hour ago";  
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
       $agoTime =  "week ago";  
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
       $agoTime =  "month ago";  
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
					  
					  ?>
                    <div class="w3-card " style="width:100%; height:95px;border:1px solid #f51111; opacity:0.9; margin:5px auto; background-color:white; padding:5px; border-radius:2px; display:flex;">
					<div style="width:40%; height:100%;"><p style="margin:4px;"><img src="../../adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" style="width:90%; height:90%; border-radius:3px;"/></p></div>
					<div style="width:70%;">
					  <div style="width:100%; display:flex;">
					    <div style="margin:0 1px; display:flex; float:left; width:95%;"><span style="opacity:0.9; font-size:14px;"><b><?php echo $mName;?></b></span><span style="margin:0px 4px;opacity:0.7; font-size:14px;"><?php echo $year;?></span>
						  <div style=" margin:3px 2px; background-color:#f51111; width:13px; height:13px; border-radius:13px; border:2px solid white;"></div>
						</div>
						<span class="adDelete" id="<?php echo $id; ?>" style="color:red; border:none; border-radius:5px;  opacity:0.8; cursor:pointer;  font-size:12px;"><b>Delete</b></span>
					  </div>
					  <div style="width:100%; margin:15px 0 0; display:flex;">
                        <div style="">
						<?php 
						  if($checkVerify == "1"){
							?><span class=" btn-primary" style="color:#f71105;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Check Info !</span> <?php  
						  }else{
							?><span class="myBtn btn-primary" style="color:#f71105;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px; text-shadow: 5px 5px 10px red;">Click Verify !</span> <?php  
						  }
						  ?>
					     <button class="adEdit" onclick="adEdit(this.id)" id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Edit</button>
                         <button class="adView" id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">View</button>
					   </div>
					  </div>   
                       <span style=" float:right; margin:8px 2px; font-size:13px; opacity:0.8;"class="agoTime "><span class=""><?php echo $agoTime; ?></span></span>						
					 </div>
					</div>
						<?php
								   }
					}else{
						?>
						<div style="width:100%; height:50px; border:1px solid #ddd; opacity:0.9; background-color:white; padding:5px; border-radius:2px;"><div style="margin:7px 40%;">Empty</div></div>
						<?php
					}
                  ?>
                  </div> 
                </div>
              </div>
            </div>
          </div>
		  <br><br>
		   <div class="row">
            <div class="w3-third" >
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
				  <p class="mb-4"><span class="text-primary font-italic me-1">Pendding</span>Shop Ads</p>  
                  <div class="" style="width:100%; max-height:300px; overflow-y:auto; ">
				   <?php 
				    			$sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='0' AND `seller_Id` = '$id'";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
 		                          if($count>0){  
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$shopName = $row["shopName"];
									$publishTime =  strtotime($row["post_Time"]);
								    $sellerId =	$row["seller_Id"]; 
                                    $sellerAcc =	$row["sellerAcc"]; 									
                                     
									$sql2 = "SELECT * FROM `phoneshopadimage` WHERE `Post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								    $image = $row2["image_name"];
								  }}	
								
								 
									  $time_ago = $publishTime;  
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
      $agoTime =  "hour ago";  
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
       $agoTime =  "week ago";  
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
       $agoTime =  "month ago";  
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
       $agoTime =  "year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
					  
					  ?>
				<div class="w3-card-4 loadAds skeleton " style="width:100%; height:95px; border:1px solid #fcf405; opacity:0.9; background-color:white; margin:5px auto; padding:5px; border-radius:2px; display:flex;">
					<div style="width:40%; height:100%;"><p style="margin:4px;"><img src="../../adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" style="width:90%; height:90%; border-radius:3px;"/></p></div>
					<div style="width:70%;">
					  <div style="width:100%; display:flex;">
					    <div style="margin:0 1px; display:flex; float:left; width:95%;"><span style="opacity:0.9; font-size:14px;"><b><?php echo $shopName;?></b></span><span style="margin:0px 4px;opacity:0.7; font-size:14px;"><?php echo "";?></span>
						  <div style=" margin:3px 2px; background-color:#fcf405; width:13px; height:13px; border-radius:13px; border:2px solid white;"></div>
						</div>
						<span class="shopadDelete" id="<?php echo $id; ?>" style="color:red; border:none; border-radius:5px;  opacity:0.8; cursor:pointer;  font-size:12px;"><b>Delete</b></span>
					  </div>
					  <div style="width:100%; margin:15px 0 0; display:flex;">
                        <div style="">
						<?php 
						  if($checkVerify == "1"){
							?><span class=" btn-primary" style="color:#b5af02;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Please wait !</span> <?php  
						  }else{
							?><span class="myBtn btn-primary" style="color:#f71105;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px; text-shadow: 5px 5px 10px red;">Click Verify !</span> <?php  
						  }
						  ?>
                        <button class="shopadEdit"  onclick="shopadEdit(this.id)" id="<?php echo $id; ?>" style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Edit</button>
                       <button class="shopadView" id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">View</button>
					   </div>
					  </div>   
                       <span style=" float:right; margin:8px 2px; font-size:13px; opacity:0.8;"class="agoTime "><span class=""><?php echo $agoTime; ?></span></span>						
					 </div>
					</div>
					  <?php
								   }
					}else{
						?>
						<div style="width:100%; height:50px; border:1px solid #ddd; opacity:0.9; background-color:white; padding:5px; border-radius:2px;"><div style="margin:7px 40%;">Empty</div></div>
						<?php
					}
				   ?>	
                  </div> 
                </div>
              </div>
            </div>
			 <div class="w3-third">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Active</span>Shop Ads</p>
                   <div class="" style="width:100%; max-height:300px; overflow-y:auto;">
				    				   <?php
							    $id = $_GET["id"];
				    			$sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' AND `seller_Id` = '$id'";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
 		                          if($count>0){  
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$shopName = $row["shopName"];
									$publishTime =  strtotime($row["post_Time"]);
								    $sellerId =	$row["seller_Id"]; 
                                    $sellerAcc =	$row["sellerAcc"]; 									
                                     
									$sql2 = "SELECT * FROM `phoneshopadimage` WHERE `Post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								    $image = $row2["image_name"];
								  }}	
								
								 
									  $time_ago = $publishTime;  
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
      $agoTime =  "hour ago";  
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
       $agoTime =  "week ago";  
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
       $agoTime =  "month ago";  
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
       $agoTime =  "year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
				
					  ?>
                    <div class="w3-card " style="width:100%; height:95px;border:1px solid #11f511; opacity:0.9; margin:5px auto; background-color:white; padding:5px; border-radius:2px; display:flex;">
					<div style="width:40%; height:100%;"><p style="margin:4px;"><img src="../../adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" style="width:90%; height:90%; border-radius:3px;"/></p></div>
					<div style="width:70%;">
					  <div style="width:100%; display:flex;">
					    <div style="margin:0 1px; display:flex; float:left; width:95%;"><span style="opacity:0.9; font-size:14px;"><b><?php echo $shopName;?></b></span><span style="margin:0px 4px;opacity:0.7; font-size:14px;"><?php echo "";?></span>
						  <div style=" margin:3px 2px; background-color:#11f511; width:13px; height:13px; border-radius:13px; border:2px solid white;"></div>
						</div>
						<span class="shopadDelete" id="<?php echo $id; ?>" style="color:red; border:none; border-radius:5px;  opacity:0.8; cursor:pointer;  font-size:12px;"><b>Delete</b></span>
					  </div>
					  <div style="width:100%; margin:15px 0 0; display:flex;">
                        <div style="">
						 <span class=" btn-primary" style="color:green;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Activated </span>
					     <button class="shopadEdit" onclick="shopadEdit(this.id)" id="<?php echo $id; ?>" style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Edit</button>
						 <button class="shopadView" id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">View</button>
                        </div>
					  </div>   
                       <span style=" float:right; margin:8px 2px; font-size:13px; opacity:0.8;"class="agoTime"><span class=""><?php echo $agoTime; ?></span></span>						
					 </div>
					</div>
					<?php
								   }
					}else{
						?>
						<div style="width:100%; height:50px; border:1px solid #ddd; opacity:0.9; background-color:white; padding:5px; border-radius:2px;"><div style="margin:7px 40%;">Empty</div></div>
						<?php
					}
                  ?>								  
                  </div> 
                </div>
              </div>
            </div>
            <div class="w3-third">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Reject</span>Shop Ads</p>
                   <div class="" style="width:100%; max-height:300px; overflow-y:auto; ">
				   	   <?php 
					      $id = $_GET["id"];
				    			$sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='-1' AND `seller_Id` = '$id'";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
 		                          if($count>0){  
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$shopName = $row["shopName"];
									$publishTime =  strtotime($row["post_Time"]);
								    $sellerId =	$row["seller_Id"]; 
                                    $sellerAcc =	$row["sellerAcc"]; 									
                                     
									$sql2 = "SELECT * FROM `phoneshopadimage` WHERE `Post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								    $image = $row2["image_name"];
								  }}	
								
								 
									  $time_ago = $publishTime;  
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
      $agoTime =  "hour ago";  
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
       $agoTime =  "week ago";  
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
       $agoTime =  "month ago";  
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
       $agoTime =  "year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
				
					  ?>
                    <div class="w3-card " style="width:100%; height:95px;border:1px solid #11f511; opacity:0.9; margin:5px auto; background-color:white; padding:5px; border-radius:2px; display:flex;">
					<div style="width:40%; height:100%;"><p style="margin:4px;"><img src="../../adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" style="width:90%; height:90%; border-radius:3px;"/></p></div>
					<div style="width:70%;">
					  <div style="width:100%; display:flex;">
					    <div style="margin:0 1px; display:flex; float:left; width:95%;"><span style="opacity:0.9; font-size:14px;"><b><?php echo $shopName;?></b></span><span style="margin:0px 4px;opacity:0.7; font-size:14px;"><?php echo "";?></span>
						  <div style=" margin:3px 2px; background-color:#11f511; width:13px; height:13px; border-radius:13px; border:2px solid white;"></div>
						</div>
						<span class="shopadDelete" id="<?php echo $id; ?>" style="color:red; border:none; border-radius:5px;  opacity:0.8; cursor:pointer;  font-size:12px;"><b>Delete</b></span>
					  </div>
					  <div style="width:100%; margin:15px 0 0; display:flex;">
                        <div style="">
						<?php 
						  if($checkVerify == "1"){
							?><span class=" btn-primary" style="color:#f71105;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Check Info !</span> <?php  
						  }else{
							?><span class="myBtn btn-primary" style="color:#f71105;  z-index:5; border:none; border-radius:5px; background-color:white; opacity:1; cursor:pointer; font-weight:bold; font-size:12px; text-shadow: 5px 5px 10px red;">Click Verify !</span> <?php  
						  }
						  ?>
					     <button class="shopadEdit" onclick="shopadEdit(this.id)" id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">Edit</button>
                         <button class="shopadView" id="<?php echo $id; ?>"  style="color:#7777FF;  z-index:5; margin:0 2px; border:1px solid #ddd; border-radius:5px; background-color:none; opacity:1; cursor:pointer; font-weight:bold; font-size:12px;">View</button>
					   </div>
					  </div>   
                       <span style=" float:right; margin:8px 2px; font-size:13px; opacity:0.8;"class="agoTime "><span class=""><?php echo $agoTime; ?></span></span>						
					 </div>
					</div>
						<?php
								   }
					}else{
						?>
						<div style="width:100%; height:50px; border:1px solid #ddd; opacity:0.9; background-color:white; padding:5px; border-radius:2px;"><div style="margin:7px 40%;">Empty</div></div>
						<?php
					}
                  ?>
                  </div> 
                </div>
              </div>
            </div>
          </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
      <script type="text/javascript" src="js/mdb.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
	
  <!-- Custom scripts -->
  <script>

      function mainLogOut(){
			window.location.href = '../logout.php';
		}
    function manageProfile(){	 	    
           var yes="yes";
		   
             $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               manageProfile: yes,
			   id:<?php echo $_GET["id"]; ?>
               },
            cache: false,
            success: function(result){
             		$("#manageP").html(result);							
             }
           });
		   
		   $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               managetag: yes,
			   id:<?php echo $_GET["id"]; ?>
               },
            cache: false,
            success: function(result){
                    $("#managetag").html(result);						
             }
           });
		   }
		   
		function manageProfilesave(){
			  var form = $('#manageProfileForm')[0];
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
	           window.location.reload();
           }
         });
		} 

 function adEdit(x){
	 document.querySelector('#loader').style.display = 'inline'; 
	     	var id = x;
	 	    	$.ajax({
              url: 'php/php-ajax.php',
              type: 'POST',
              data: {
               manageAd: id
               },
              cache: false,
              success: function (result) {
	            $("#main1").html(result);
				document.querySelector('#loader').style.display = 'none';
              }
              });
	   }

      function shopadEdit(x) {
		  document.querySelector('#loader').style.display = 'inline';
	     	var id = x;
	 	    	$.ajax({
              url: 'php/php-ajax.php',
              type: 'POST',
              data: {
               manageshopAd: id
               },
              cache: false,
              success: function (result) {
	            $("#main1").html(result);
				document.querySelector('#loader').style.display = 'none';
              }
              });
	   }
	
 $(document).ready(function() {
       $('.shopadView').click(function() {
	     	var id = this.id;
			window.location.href = '../../shopAdIndex.php?page=user-shopads-view-Item&adId='+id;
	   });
 });
  $(document).ready(function() {
       $('.adView').click(function() {
	     	var id = this.id;
			window.location.href = '../../index.php?page=user-ads-view-Item&adId='+id;
	   });
 });
 
   function manageAdsave(){
			  var form = $('#postForm')[0];
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
	           window.location.reload();
           }
         });
	}
	   function manageshopAdsave(){
			  var form = $('#postFormSh')[0];
             // FormData object 
             var data = new FormData(form);
			 
	    	$.ajax({
              url: 'php/php-shopajax.php',
		      contentType: false,
              processData: false,
              type: 'POST',
              data: data,
              cache: false,
              success: function (result) {
	           window.location.reload();
           }
         });
	}
	function deleteAd(){
		var id = document.querySelector(".dAd").id;
			 
	 	    	$.ajax({
              url: 'php/php-ajax.php',
              type: 'POST',
              data: {
               deleteAd: id
               },
              cache: false,
              success: function (result) {
	            window.location.reload();
              }
              });
    }	
	function deleteshopAd(){
		var id = document.querySelector(".shopdAd").id;
			 alert(id);
	 	    	$.ajax({
              url: 'php/php-ajax.php',
              type: 'POST',
              data: {
               deleteshopAd: id
               },
              cache: false,
              success: function (result) {
	            window.location.reload();
              }
              });
    }	
		

 $(document).ready(function() {
       $('.adDelete').click(function() {
	     	var modal2 = document.getElementById("myModal2");
			document.querySelector(".dAd").style.display ='inline';
             document.querySelector(".dAd").id = this.id;
             modal2.style.display = "block";
	   });
 });
 
  $(document).ready(function() {
       $('.shopadDelete').click(function() {
	     	var modal2 = document.getElementById("myModal2");
			document.querySelector(".shopdAd").style.display ='inline';
             document.querySelector(".shopdAd").id = this.id;
             modal2.style.display = "block";
	   });
 });
  </script>
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector(".myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>
</body>

</html>