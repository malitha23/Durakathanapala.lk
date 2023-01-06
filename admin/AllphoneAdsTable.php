<?php
require_once 'php/database/database.php';
include 'php/function.php';
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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         <?php sidebar(); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php topbar(); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Phone Ads</h1>
                    <p class="mb-4">This is the place where ads are monitored to give admin approval</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Phone Ads</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
											<th>Publisher</th>
											<th>PublisherId</th>
                                            <th>Picture</th>
                                            <th>Publish date</th>
                                            <th>Check</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
									<?php
									
									 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
												 while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$deviceId = $row["device"];
									$publishTime = $row["post_Time"];
									$seller =   $row["sellerAcc"];
									$sellerId =   $row["seller_Id"];
                                    $ptime = strtotime($publishTime);
									 }
											 
									 if($seller == "normal"){

				$sql3 = "select * from `user` where `UserId` ='$sellerId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                                   $verify = $row["verifyAcc"];  						  
										   
								  }} 
			}else if($seller == "google"){
				$sql3 = "select * from `google-user` where `googleIdTocken` ='$sellerId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $verify = $row["verifyAcc"];   
								  }} 
			}else if($seller == "facebook"){
				$sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$sellerId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
				                   $verify = $row["verifyAcc"];      
								  }} 
			}}	
			                     
											 
												
											 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
												 while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$deviceId = $row["device"];
									$publishTime = $row["post_Time"];
									$seller =   $row["sellerAcc"];
									$sellerId =   $row["seller_Id"];
                                    $ptime = strtotime($publishTime);
									$f = $row["imageLocation"];
									
									
								 $sql3 = "select * from `brands` where `id` ='$modelId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}  
								   $sql6 = "select * from `devices` where `id` = '$deviceId'	 ";
	                             $res6 = mysqli_query($conn,$sql6);
                                 $count6 = mysqli_num_rows($res6);
		                          if($count6>0){
		                           while($row6=mysqli_fetch_assoc($res6)){
		                            $deviceName = $row6["name"];	   
								  }} 
								  
								 if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0,15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 
                                        ?><tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $mName; ?> /<?php echo  $newdeviceName; ?></td>
											<td><?php echo $seller; ?></td>
											<td><?php echo $sellerId; ?></td>                    
                                   <td><p style="text-align:center;"><img src ="css/<?php echo $f; ?>" style="max-width:80px; max-height:80px; width:auto; height:auto; "/></p></td>
                                    <td><?php echo $publishTime; ?></td><?php
			  if($verify == "1"){
				  ?> <td><p style="text-align:center;"><button class="btn" style="background-color:#1cc88a; ; "><a style="color:white" href="phoneAds/viewallPhoneAd.php?adId=<?php echo $id; ?>">Check Ad</a></button></p></td></tr><?php
			  }else{
				  ?> <td><p style="text-align:center;"><button class="btn" style="background-color:yellow;  " ><a style="color:white" >Wait</a></button></p></td></tr><?php
			  }
								 }
									  }
									?>		 
                                    </tbody>
                                </table>
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
                        <span>Copyright &copy; Your Website 2020</span>
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

</body>

</html>