<?php
require_once '../php/database/database.php';

   if(isset($_GET["action"])){
 	  $id = $_GET["id"];
			
	  	  if($_GET["action"] == "deleteUser"){
		    
		  if($_GET["acc"] == "site"){
			  $sql = "select * from `user`  where `UserId` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 $uname = $row["user_name"];
			}
			}
		   $sql ="DELETE FROM `user` WHERE `UserId`='$id'";
			$res=mysqli_query($conn,$sql);
            if($res){      
			
			  if (file_exists("../../user/images/profilePic/{$uname}/")) {
	               $dir = "../../user/images/profilePic/{$uname}/";
                   foreach(glob($dir.'*.*') as $v){
                    unlink($v);
		            rmdir("../../user/images/profilePic/{$uname}/{$image}");	
                      ?><script type="text/javascript">window.location.href = '../siteverifyUsersTable.php'; </script><?php					    
              }
		     
			
			}else{
				 ?><script type="text/javascript">window.location.href = '../siteverifyUsersTable.php'; </script><?php		
			}
			}
	  }
	 
	  if($_GET["acc"] == "google"){

		    $sql ="DELETE FROM `google-user` WHERE `id`='$id'";
			$res=mysqli_query($conn,$sql);
            if($res){      
			   ?><script type="text/javascript">window.location.href = '../googleverifyUsersTable.php'; </script><?php	
			}
	  }
	   if($_GET["acc"] == "facebook"){

		    $sql ="DELETE FROM `facebook-user` WHERE `id`='$id'";
			$res=mysqli_query($conn,$sql);
            if($res){      
			 ?><script type="text/javascript">window.location.href = '../facebookverifyUsersTable.php'; </script><?php	
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
				
				$sql2 = "INSERT INTO `rejectads`(`id`, `userId`, `postId`, `msg`, `time`) VALUES ('','$sellerId','$id','$rejectMsg','$Time')";
		        $fire2=mysqli_query($conn,$sql2);
				?><script type="text/javascript">window.location.href = '../phoneAdsTable.php'; </script><?php
			}else{
				?><script type="text/javascript">window.location.href = 'viewPhoneAd.php'; </script><?php
			}
		
	  }
	 
    }
   }
?>
