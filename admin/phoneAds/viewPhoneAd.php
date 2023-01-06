<?php
require_once '../php/database/database.php';
include '../php/function.php';
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Durakathanapala.lk - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
     <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fad {
  animation-name: fad;
  animation-duration: 1.5s;
}

@keyframes fad {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
    
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Durakathanapala Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- 


     

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <a href="../phoneAdsTable.php"><button class="rounded-circle border-0" id="sidebarToggle"></button></a>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Check Ads Place</h1>
       

	<?php						
    if(isset($_GET["adId"])){   
     $id = $_GET["adId"];
	?> 
	 <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container" style="padding:20px;">
       
		<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h5>Why Reject?</h5><br>
		<textarea id="rejectValue" name="rejectValue" rows="4" style="width:100%;"></textarea><br><br>
        <p><button class="w3-button w3-green" onclick="rejectAd()">Reject</button></p>
    
	  </div>
    </div>
	<script>
	  function rejectAd(){
		  var rMsg = document.getElementById("rejectValue").value;
		  if(rMsg != ""){
			  var id = "<?php echo $id; ?> "; 
			   window.location.href = 'viewPhoneAd-a.php?action=return&id='+ id+"&rejectMsg="+rMsg;
		  }
	  }
	</script>
  </div><?php
	      
               $sql = "select * from `phoneads`  where `id` = '$id' ";
	           $res = mysqli_query($conn,$sql);
               $count = mysqli_num_rows($res);
		       if($count>0){
		        while($row=mysqli_fetch_assoc($res)){
                   $publishTime =  strtotime($row["post_Time"]);
			       $updateAdminApproval = $row["update_Admin_Approval"];  
				}
				if($updateAdminApproval == "1"){
				    ?> <div class="card shadow mb-4">
                        <div class="card-header py-3">
                         <h3> Updated Ad </h3>   
                        </div>
                        <div class="card-body">
                       <div class="table-responsive">
					  <?php
				    }else{
					  ?> <div class="card shadow mb-4">
                        <div class="card-header py-3">
                         <h3> Original Ad</h3>   
                        </div>
                        <div class="card-body">
                       <div class="table-responsive">
					  <?php	
					} 
               }				
					  
	         $sql = "select * from `phoneads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 $views = $row["views"];
			 $id = $row["id"];
	         $modelId = $row["name"];
			 $condition = $row["condition"];
			 $year = $row["model_Year"];
			 $price = $row["price"];
			 $cityId = $row["city_Id"];
			 $publishTime =  strtotime($row["post_Time"]);
			
			 $sellerId =	$row["seller_Id"];

			}}
?>
   <div id="id01" class="modal" >
  <div class="modal-content animate" >
      <div class="imgcontainer">
	  <div class="scroller">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img id="img01"   style="display:inline; max-width:100%; max-height:100%; width:410px; height:auto;" class="sample-image">
	  </div>
    </div>
  </div>
</div><div>
<label></label>
</div>
  <div class="w3-row viewAD" style="margin-top:20px;">
        <div class="cont1 w3-half ">
                          <!-- card left -->
        <div class = "product-imgs ">
		 <div class="product-imgs-local ">
          
<div class="slideshow-container" style="width:400px; border:1px solid #ddd;">
<?php 
			 $id = $_GET["adId"];
			 $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$images = $row["image_name"];
				?>
<div class="mySlides fad">
  <div class="numbertext" style="color:black;">1 / <?php echo $count; ?></div>
  <p style="text-align:center;"><img src="../../adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $images; ?>" style="max-width:390px; max-height:400px; width:auto; height:auto; "></p>
  <div class="text"></div>
</div>
<?php
			}}
?>

<a class="prev" onclick="plusSlides(-1)" style="color:black;">❮</a>
<a class="next" onclick="plusSlides(1)" style="color:black;">❯</a>

</div>
<br>

<div style="text-align:center">
<?php
 if($count == "1"){
	 ?><span class="dot" onclick="currentSlide(1)"></span> <?php
 }else if($count == "2"){
	 ?><span class="dot" onclick="currentSlide(1)"></span> <?php
	 ?><span class="dot" onclick="currentSlide(2)"></span> <?php
 }else  if($count == "3"){
	 ?><span class="dot" onclick="currentSlide(1)"></span> <?php
	 ?><span class="dot" onclick="currentSlide(2)"></span> <?php
	 ?>  <span class="dot" onclick="currentSlide(3)"></span> <?php
 }else{
	  ?><span class="dot" onclick="currentSlide(1)"></span> <?php
	  ?><span class="dot" onclick="currentSlide(2)"></span> <?php
	  ?>  <span class="dot" onclick="currentSlide(3)"></span> <?php
	  ?>  <span class="dot" onclick="currentSlide(4)"></span> <?php
 }
?>

</div>
  
 
  
        </div>
		</div>
		<br><br>
		 
		  <div class="w3-row " style="width:60%; margin:auto;">
            <div class="w3-third ">
              <?php
		   if($updateAdminApproval == "1"){
			  ?> <p style="text-align:center;"><a href="viewPhoneAd-a.php?action=UpdateApproval&id=<?php echo $id; ?>" ><button class="w3-button w3-green">Approval</button></a></p><?php
			}else{
			  ?> <p style="text-align:center;"><a href="viewPhoneAd-a.php?action=approval&id=<?php echo $id; ?>" ><button class="w3-button w3-green">Approval</button></a></p><?php
			} 
			?>
            </div>
            <div class="w3-third ">
              <p style="text-align:center;"><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-yellow">Return</button></p>
            </div>
            <div class="w3-third ">
              <p style="text-align:center;"><a href="viewPhoneAd-a.php?action=delete&id=<?php echo $id; ?>" ><button class="w3-button w3-red">Delete</button></a></p>
            </div>
            </div>

        </div>
        <div class="cont2 w3-half">
		  <!-- card right -->
	<?php 
	     $sql = "select * from `phoneads`  where `id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$model           = $row['brand'];
	            $mType     = $row['device'];
                $price           = $row['price'];
                $condition       = $row['condition'];
                $model_Year      = $row['model_Year'];
                $discription     = $row['discription'];
	            $city_Id         = $row['city_Id'];
                $seller_Id       = $row['seller_Id'];
				$sellerAcc       = $row['sellerAcc'];
                $postTime	     = $row['post_Time'];
				$postView	     = $row['views'];
				
			      if( $postView < 1000){
					  
					$views = $postView;
					
			      }else if( $postView >= 1000){
					  
					$views = ($postView/ 1000)."K";
					
				  }else if( $postView >= 1000000){
					  
					$views = ($postView/ 1000000)."M";
				  }
				
		    $sql = "select * from `cities` where `id` = '$city_Id' ";
	        $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
		     if($count>0){
		       while($row=mysqli_fetch_assoc($res)){
		        $cityName = $row["name_en"];
			    $disId = $row["district_id"];
			 }}
			 $sql = "select * from `districts` where `id`='$disId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		     if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
		       $districName = $row["name_en"];	   
			 }}	
			 $sql3 = "select * from `brands` where `id` ='$model' ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}  
			
								  
			$sql3 = "select * from `devices` where `id` ='$mType'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mType = $row3["name"];										
								  }} 
			 

							 	
			if($sellerAcc == "normal"){

				$sql3 = "select * from `user` where `UserId` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
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
							
                                   $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno2 = $row["pno1"];									   
				                      }}								  
										   
								  }} 
			}else if($sellerAcc == "google"){
				$sql3 = "select * from `google-user` where `googleIdTocken` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   
				$sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	             $res = mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($res);
		          if($count>0){
		           while($row=mysqli_fetch_assoc($res)){				   
				                   $pno1 = $row["pno1"];	
                                   $pno2 = $row["pno2"];								   
				  }}				   
								  }} 
			}else if($sellerAcc == "facebook"){
				$sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno1 = $row["pno"];
								   
				$sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	             $res = mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($res);
		          if($count>0){
		           while($row=mysqli_fetch_assoc($res)){				   		                	
                                   $pno2 = $row["pno1"];								   
				  }}				   
								  }} 
			}					
            								  
		 }} 
	?>	 
        <div class = "product-content loadAds skeleton">
		<div class="loadAds loadTohide">
          <h2 style ="color:black; font-weight:bold; opacity:0.7;"> <?php echo $mName; ?></h2>
		  <p id="p" >Posted on  <?php echo $postTime; ?>, <?php echo $districName; ?>, <?php echo $cityName; ?></p>
		  <h2 class = "product-price"> Rs <?php echo $price; ?></h2>
          <div class = "product-detail">
		    <ul>
			 <div class="">
              <div class="w3-half ">
               <li ><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Brand: <span> <?php echo $mName; ?></span></li>
               </div>
              <div class="w3-half">
                 <li><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Condition: <span> <?php echo $condition; ?></span></li>
              </div>
            </div>
			 <div class="">
              <div class="w3-half ">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Brand year: <span> <?php echo $model_Year; ?></span></li>
               </div>
              <div class="w3-half">
                
              </div>
            </div>
			 <div class="">
              <div class="w3-half " style="width:100%;">
			  <?php
                $sql3 = "select * from `devices` where `brand_id` ='$model' AND `name` = '$mType' ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           ?> <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Device: <span> <?php echo $mType; ?></span></li><?php
								  }else{
								   ?> <li style="font-size:16px;color:red;" ><i class="fa fa-check-square" style="font-size:16px;color:red;"></i> Device: <span style="color:red;"> <?php echo $mType; ?></span></li><?php  
								  }			  
			  ?>
               
               </div>
              <div class="w3-half" style="width:10%;">
                
              </div>
            </div>
				 <div class="">
              <div class="w3-half ">
			    <label> </label>
               </div>
              <div class="w3-half">
			    <label> </label>
              </div>
            </div>
            </ul>
          </div>
           <div  style="margin:150px 0 0 0;">
	        <p id="ph2">Description: </p>
            <textarea id="p2" style="border:1px solid #ddd; padding:5px; width:100%;"   rows="7" disabled="disabled"> <?php echo $discription; ?>.</textarea>
		  </div><br>
          <div class="w3-row w3-border" style="padding:0px;">
		     <div class="w3-row w3-border w3-padding">
		      <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;">For sale by: <span  style="margin:0 7px; background-color:#ddd; padding:3px;"><?php echo $m; ?> <?php echo $fullname; ?></span></label>
			 </div>
			 <div class="w3-row w3-border w3-padding">
			  <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;"><i class="fa fa-phone-square" style="font-size:24px; margin:5px 0; color:green;"></i> Call seller: <span class="snumEn" style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno1; ?></span>
			  <?php
			    if($pno2 == "0"){
					
				}else{
					?><span  style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno2; ?></span><?php
				}
			  ?>
			  </label>
			 </div>
		  </div>

        </div>
        </div>
		</div>
        </div><?php
 }
?>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Durakathanapala.lk 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>

</html>