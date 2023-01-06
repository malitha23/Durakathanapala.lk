<?php
require_once '../php/database/database.php';

   if(isset($_GET["action"])){
 	  $id = $_GET["id"];
	   $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 $mName = $row["shopName"];
			 $sellerId =	$row["seller_Id"];
			}
			   
			}
			
	  if($_GET["action"] == "approval"){
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `phoneshopads` SET `AdminApproval`='1',`AdminApproval_Time`='$Time' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
				$msg = "After checking your <a href='shopAdIndex.php?page=normal-shopads-view-Item&adId=<?php echo $id; ?>' style='color:blue;'><?php echo $mName; ?></a> ad is now posted on Durakhanapala.lk";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
				?><script type="text/javascript">window.location.href = '../phoneshopAdsTable.php';</script> <?php
			}else{
			    ?><script type="text/javascript">window.location.href = 'viewPhoneshopAd.php';</script> <?php
			}
		
	  }
	 
	   if($_GET["action"] == "UpdateApproval"){
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `phoneads` SET `AdminApproval`='1',`AdminApproval_Time`='$Time',`update_Admin_Approval` ='0' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
				$msg = "After checking your <a href='shopAdIndex.php?page=normal-shopads-view-Item&adId=<?php echo $id; ?>' style='color:blue;'><?php echo $mName; ?></a> ad is now posted on Durakhanapala.lk";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
					?><script type="text/javascript">window.location.href = '../phoneshopAdsTable.php';</script> <?php
			}else{
			    ?><script type="text/javascript">window.location.href = 'viewPhoneshopAd.php';</script> <?php
			}
		
	  }
	  
	  if($_GET["action"] == "return"){
	    $rejectMsg = $_GET["rejectMsg"];
	    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `phoneshopads` SET `AdminApproval`='-1',`AdminApproval_Time`='0' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
				$msg = "Your {$mName}</a> ad has been rejected by admin because there is an error";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
				
				$sql2 = "INSERT INTO `rejectads`(`id`, `userId`,`post`, `postId`, `msg`, `time`) VALUES ('','$sellerId','shop','$id','$rejectMsg','$Time')";
		        $fire2=mysqli_query($conn,$sql2);
				?><script type="text/javascript">window.location.href = '../phoneshopAdsTable.php';</script> <?php
			}else{
			    ?><script type="text/javascript">window.location.href = 'viewPhoneshopAd.php';</script> <?php
			}
		
	  }
	  
	  if($_GET["action"] == "delete"){
	     
		    $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
            $Time       = $date->format('Y-m-d H:i:s'); 
		    $sql ="DELETE FROM `phoneshopadimage` WHERE `Post_Id`='$id'";
			$res=mysqli_query($conn,$sql);
            if($res){ 
			      $sql = "select * from `phoneshopads`  where `id` ='$id' ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
				    $sellerId = $row["seller_Id"];
					$postTime = strtotime($row["post_Time"]);
				 }
			  if (file_exists("../../adsPictures/shopAds/{$sellerId}/{$postTime}")) {
	               $dir = "../../adsPictures/shopAds/{$sellerId}/{$postTime}/";
                   foreach(glob($dir.'*.*') as $v){
                    unlink($v);
		           rmdir("../../adsPictures/shopAds/{$sellerId}/{$postTime}");
				    $sql = "DELETE FROM `phoneshopads` WHERE `id` = '$id'";
		            $fire=mysqli_query($conn,$sql);
	               if($fire){
				    $msg = "Your <span style='color:red;'><?php echo $mName; ?> </span>ad details do not comply with our rules, so it has been deleted";
				    $sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$sellerId','$msg','1','$Time')";
		            $fire=mysqli_query($conn,$sql);
				   	?><script type="text/javascript">window.location.href = '../phoneshopAdsTable.php';</script> <?php
			         }else{
			         ?><script type="text/javascript">window.location.href = 'viewPhoneshopAd.php';</script> <?php
			            }
                   }
              }
		     }
			
			}
		
	  }
    }

?>