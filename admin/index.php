<?php
session_start();

if(isset($_GET["success"])){
   $_SESSION["adminLogin"] = "YES";
	 ?><audio id="alert" src="mp3/success.mp3"></audio><?php
}

require_once 'php/database/database.php';
include 'php/function.php';

if(!isset($_SESSION['adminLogin'])){
     header("Location:login.php"); 
}else{
	if($_SESSION['adminLogin'] == "no"){
     header("Location:login.php");
	} 
}

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
      <style type="text/css">


    #chart-container {
      width: 100%;
      height: auto;
    }
    .card {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
    }

    .card-body {
      -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1.25rem;
    }
  </style>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
										<?php
											 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='0'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
											 ?><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               <a href="phoneAdsTable.php"> Phone Ads (new)</a> <span style="background-color:red; border-radius:8px; color:white; padding:5px; font-size:14px;"><?php echo $count; ?></span></div><?php
											 }else{
											 ?><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Phone Ads (new) 0</div><?php
											 }
											 
											 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
											 ?><div class="h6 mb-0 font-weight-bold text-gray-800"><span ><a href="AllphoneAdsTable.php" style="opacity:0.8; color:black;">All Ads</a></span> <span style="font-size:13px; opacity:0.9;"><?php echo $count; ?></span></div><?php
											 }else{
											 ?><div class="h6 mb-0 font-weight-bold text-gray-800">All Ads 0</div><?php
											 }
											?>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-mobile fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <?php
											 $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='0'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
											 ?><div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <a href="phoneshopAdsTable.php"> Phone Shop Ads </a>(new) <span style="background-color:red; border-radius:8px; color:white; padding:5px; font-size:14px;"><?php echo $count; ?></span></div><?php
											 }else{
											 ?><div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Phone Shop Ads (new) 0</div><?php
											 }
											
											 $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
											 ?><div class="h6  mb-0 font-weight-bold text-gray-800"><span style="opacity:0.8;"><a href="AllphoneshopAdsTable.php" style="opacity:0.8; color:black;">All Ads</a></span> <span style="font-size:13px; opacity:0.9;"><?php echo $count; ?></span></div><?php
											 }else{
											 ?><div class="h6  mb-0 font-weight-bold text-gray-800">All Ads 0</div><?php
											 }
											?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-home fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						 <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
										<div class="h6  font-weight-bold text-gray-800" >Users</div>
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" >
										     <?php
											   $sql = "SELECT * FROM `user` WHERE `verifyAcc` != '1'";
	                                           $res = mysqli_query($conn,$sql);
                                               $count = mysqli_num_rows($res);
											   if($count>0){
                               			         ?><a href="siteUsersTable.php" style="margin:0 5px;"> site</a><span style="background-color:red; border-radius:100px;  color:white; padding:2px 6px; font-size:12px;"><?php echo $count; ?></span><?php
											   }else{
											        $sql = "SELECT * FROM `user` WHERE `verifyAcc` = '1'";
	                                                $res = mysqli_query($conn,$sql);
                                                    $count = mysqli_num_rows($res);
											         if($count>0){
												      ?><a href="siteUsersTable.php" style="margin:0 5px;"> site</a><span style="color:black; opacity:0.8; font-size:11px;"><?php echo $count; ?></span><?php
											         }else{
													  ?><a style="margin:0 5px;"> site</a><span style="color:black; opacity:0.8; font-size:11px;">0</span><?php 
													 }
											   }
											   
											   $sql = "SELECT * FROM `google-user` WHERE `verifyAcc` != '1'";
	                                           $res = mysqli_query($conn,$sql);
                                               $count = mysqli_num_rows($res);
											   if($count>0){
                               			         ?><a href="googleUsersTable.php" style="margin:0 5px;"> google</a><span style="background-color:red; border-radius:100px;  color:white; padding:2px 6px; font-size:12px;"><?php echo $count; ?></span><?php
											   }else{
											        $sql = "SELECT * FROM `google-user` WHERE `verifyAcc` = '1'";
	                                                $res = mysqli_query($conn,$sql);
                                                    $count = mysqli_num_rows($res);
											         if($count>0){
												      ?><a href="googleUsersTable.php" style="margin:0 5px;"> google</a><span style="color:black; opacity:0.8; font-size:11px;"><?php echo $count; ?></span><?php
											         }else{
													  ?><a style="margin:0 5px;"> google</a><span style="color:black; opacity:0.8; font-size:11px;">0</span><?php 
													 }
											   }
											   
											     $sql = "SELECT * FROM `facebook-user` WHERE `verifyAcc` != '1'";
	                                           $res = mysqli_query($conn,$sql);
                                               $count = mysqli_num_rows($res);
											   if($count>0){
                               			         ?><a href="fbUsersTable.php" style="margin:0 5px;"> fb</a><span style="background-color:red; border-radius:8px; color:white; padding:3px; font-size:11px;"><?php echo $count; ?></span><?php
											   }else{
											        $sql = "SELECT * FROM `facebook-user` WHERE `verifyAcc` = '1'";
	                                                $res = mysqli_query($conn,$sql);
                                                    $count = mysqli_num_rows($res);
											         if($count>0){
												      ?><a href="fbUsersTable.php" style="margin:0 5px;"> fb</a><span style="color:black; opacity:0.8; font-size:11px;"><?php echo $count; ?></span><?php
											         }else{
													  ?><a style="margin:0 5px;"> fb</a><span style="color:black; opacity:0.8; font-size:11px;">0</span><?php 
													 }
											   }
											 ?>
									     </div>
											 
										<?php
											 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='0'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     
											 
											 
											 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
											 ?><?php
											 }else{
											 ?><div class="h6 mb-0 font-weight-bold text-gray-800">All Ads 0</div><?php
											 }
											?>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-mobile fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     					 <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <?php
											 $sql = "SELECT * FROM `reportads` WHERE `adminCheck` ='0'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
											 ?><div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <a href="reportAdsTable.php"> Report Ads </a>(new) <span style="background-color:red; border-radius:100px;  color:white; padding:2px 6px; font-size:12px;"><?php echo $count; ?></span></div><?php
											 }else{
											 ?><div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Report Ads (new) 0</div><?php
											 }
											
											 $sql = "SELECT * FROM `reportads` WHERE `adminCheck` ='1'";
	                                         $res = mysqli_query($conn,$sql);
                                             $count = mysqli_num_rows($res);
		                                     if($count>0){
											 ?><div class="h6  mb-0 font-weight-bold text-gray-800"><span style="opacity:0.8;"><a href="AllreportAdsTable.php" style="opacity:0.8; color:black;">All Report Ads</a></span> <span style="font-size:13px; opacity:0.9;"><?php echo $count; ?></span></div><?php
											 }else{
											 ?><div class="h6  mb-0 font-weight-bold text-gray-800">All Report Ads 0</div><?php
											 }
											?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-home fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">visiters Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="visitorsChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
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
                        <span>Copyright &copy; Your Website 2021</span>
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        url: "php/canvasData.php",
        method: "GET",
        success: function(data){
          console.log(data);
          var name = [];
          var marks = [];

          for (var i in data){
            name.push(data[i].month);

            marks.push(data[i].visitors);
          }
          var chartdata = {
            labels: name,
            datasets: [{
              label: 'Visitors',
              backgroundColor : [ '#00c0ef'],
              hoverBackgroundColor: 'rgba(230, 236, 235, 0.75)',
              hoverBorderColor: 'rgba(230, 236, 235, 0.75)',
              data: marks

            }]
          };
          var graphTarget = $("#visitorsChart");
          var barGraph = new Chart(graphTarget, {
            type: 'line',
            data: chartdata,
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        },
        error: function(data) {
          console.log(data);
        }

      });
    });
  </script>
      <script type="text/javascript">
  const audio = document.querySelector("#alert");
  audio.volume = 0.8;
  audio.play();
	</script>
</body>

</html>