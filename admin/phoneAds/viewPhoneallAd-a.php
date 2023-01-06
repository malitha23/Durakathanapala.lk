<?php
require_once '../php/database/database.php';

   if(isset($_GET["action"])){
 	  $id = $_GET["id"];
	   $sql = "select * from `phoneads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 $modelId = $row["name"];
			 $sellerId =	$row["seller_Id"];
			}
			   $sql3 = "select * from `brands` where `id` ='$modelId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
				}} 
			}
		
	  if($_GET["action"] == "approval"){
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `phoneads` SET `Admin_Approval`='1',`Admin_Approval_Time`='$Time' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
			$msg = "After checking your {$mName} ad is now posted on Durakhanapala.lk";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
				 ?><script type="text/javascript">window.location.href = '../AllphoneAdsTable.php';</script> <?php
			}else{
				 ?><script type="text/javascript">window.location.href = 'viewPhoneAd.php';</script> <?php
			}
		
	  }
	 
	   if($_GET["action"] == "UpdateApproval"){
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `phoneads` SET `Admin_Approval`='1',`Admin_Approval_Time`='$Time',`update_Admin_Approval` ='0' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
			$msg = "After checking your {$mName} ad is now posted on Durakhanapala.lk";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
				 ?><script type="text/javascript">window.location.href = '../AllphoneAdsTable.php';</script> <?php
			}else{
				 ?><script type="text/javascript">window.location.href = 'viewPhoneAd.php';</script> <?php
			}
		
	  }
	  
	  if($_GET["action"] == "return"){
	    $rejectMsg = $_GET["rejectMsg"];
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `phoneads` SET `Admin_Approval`='-1',`Admin_Approval_Time`='0' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
				$msg = "Your  {$mName} ad has been rejected by admin because there is an error";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
				
				$sql2 = "INSERT INTO `rejectads`(`id`, `userId`,`post`, `postId`, `msg`, `time`) VALUES ('','$sellerId','phone','$id','$rejectMsg','$Time')";
		        $fire2=mysqli_query($conn,$sql2);
				 ?><script type="text/javascript">window.location.href = '../AllphoneAdsTable.php';</script> <?php
			}else{
				 ?><script type="text/javascript">window.location.href = 'viewPhoneAd.php';</script> <?php
			}
		
	  }
	  
	  if($_GET["action"] == "delete"){
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $Time       = $date->format('Y-m-d H:i:s');
		 $sql ="DELETE FROM `phoneadimages` WHERE `post_Id`='$id'";
			$res=mysqli_query($conn,$sql);
            if($res){ 
			      $sql = "select * from `phoneads`  where `id` ='$id' ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
				    $sellerId = $row["seller_Id"];
					$postTime = strtotime($row["post_Time"]);
				 }
			  if (file_exists("../../adsPictures/{$sellerId}/{$postTime}")) {
	               $dir = "../../adsPictures/{$sellerId}/{$postTime}/";
                   foreach(glob($dir.'*.*') as $v){
                    unlink($v);
		           rmdir("../../adsPictures/{$sellerId}/{$postTime}");
				   $sql = "DELETE FROM `phoneads` WHERE `id` = '$id'";
		            $fire=mysqli_query($conn,$sql);
	                if($fire){
			     	$msg = "Your <b> {$mName}</b> ad details do not comply with our rules, so it has been deleted";
				    $sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		            $fire=mysqli_query($conn,$sql);
				      ?><script type="text/javascript">window.location.href = '../AllphoneAdsTable.php';</script> <?php
			        }else{
				      ?><script type="text/javascript">window.location.href = 'viewPhoneAd.php';</script> <?php
			        }
                   }
              }
		     }
			
			}
			
		 
		
	  }
    }

?>