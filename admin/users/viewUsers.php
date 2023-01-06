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
                <a href="../"><button class="rounded-circle border-0" id="sidebarToggle"></button></a>
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

                    <!-- Page Heading --><br>
                    <h1 class="h3 mb-2 text-gray-800">User Detials Display Place</h1><br><br>
       

	<?php						
    if(isset($_GET["acc"])){   
     $id = $_GET["userId"];
	 $acc = $_GET["acc"];
	 
	?> 
	 <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container" style="padding:20px;">
       
		<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h5>Why is error?</h5><br>
		<textarea id="rejectValue" name="rejectValue" rows="4" style="width:100%;"></textarea><br><br>
        <p><button class="w3-button w3-green" onclick="send()">Send</button></p>
    
	  </div>
    </div>
	<script>
	  function send(){
		  var rMsg = document.getElementById("rejectValue").value;
		  if(rMsg != ""){
			  var id = "<?php echo $id; ?> "; 
			  var acc = "<?php echo $acc; ?> "; 
			   window.location.href = 'users/viewUser-a.php?action=sendError&id='+ id+"&sendMsg="+rMsg+"acc="+acc;
		  }
	  }
	</script>
  </div><?php
        if($_GET["acc"] =="site"){
		$id = $_GET["userId"];
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
				  $srcImage ="../../user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="../../user/images/profilePic/{$uname}/{$image}";                   
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
		
	}else if($_GET["acc"] =="google"){
		        ?>
				<script type="text/javascript">
				  document.getElementById("mBtn").style.opacity = "0";
				</script>
				<?php
		$id = $_GET["userId"];
		$userProfile = "Google";	 
		$sql = "select * from `google-user` where `id` ='$id'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["id"];
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
		
	}else if($_GET["acc"] =="facebook"){
		        ?>
				<script type="text/javascript">
				  document.getElementById("mBtn").style.opacity = "0";
				</script>
				<?php
		$id = $_GET["userId"];
		$userProfile = "Facebook";	 
		$sql = "select * from `facebook-user` where `id` ='$id'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["id"];
				   $src = "../../user/facebook/download.png";
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
  ?>
      <form id="manageProfileForm" action="" method="POST" enctype="multipart/form-data">
      <div class="row" id="manageP">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="<?php echo $src; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:120px;">
              <h5 class="my-3"><b><?php echo $m; ?> <?php echo $fullname; ?></b></h5>
              <p class="text-muted mb-1" style="font-size:12px; opacity:0.9;"><?php echo $userProfile; ?> user</p>
              <p class="text-muted mb-4"><?php echo $uname; ?></p>
              <div class="d-flex justify-content-center mb-2" style="padding:10px;">
			    <button type="button"  class="btn btn-primary " onclick="document.getElementById('id01').style.display='block'" >Send Error</button>
				<a href="viewUser-a.php?action=deleteUser&acc=<?php echo $acc; ?>&id=<?php echo $id; ?>"><button type="button"  class="btn btn-outline-primary ms-1" style="margin:0 5px;">Delete</button></a>
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
			  <?php if($_GET["acc"] != "google"){ ?>
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
  <?php
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