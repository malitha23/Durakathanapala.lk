<?php

require_once '../php/database/database.php';

   if(isset($_GET["action"])){
 	  $id = $_GET["userId"];
			
	  if($_GET["action"] == "siteVerify"){
		  
		     $sql = "select * from `user`  where `UserId` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		       while($row=mysqli_fetch_assoc($res)){
			    $name = $row["fname"];
			   }
			  }		
	     $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
         $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `user` SET `verifyAcc`='1' WHERE `UserId` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
			$msg = "Welcome {$name}, We have received your sms. Your account is now verified.";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$id','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
				 ?><script type="text/javascript">window.location.href = '../siteUsersTable.php?success'; </script><?php
			}else{
				?><script type="text/javascript">window.location.href = '../siteUsersTable.php?error'; </script><?php
			}
		
	  }
	  
	  if($_GET["action"] == "googleVerify"){
		  
		     $sql = "select * from `google-user`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		       while($row=mysqli_fetch_assoc($res)){
			    $name = $row["name"];
			   }
			  }		
	     $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
         $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `google-user` SET `verifyAcc`='1' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
			$msg = "Welcome {$name}, We have received your sms. Your account is now verified.";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$id','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
				
				 ?><script type="text/javascript">window.location.href = '../googleUsersTable.php?success'; </script><?php
			     }else{
				?><script type="text/javascript">window.location.href = '../googleUsersTable.php?error'; </script><?php
			     }
		
	  }
	  
	  if($_GET["action"] == "facebookVerify"){
		  
		     $sql = "select * from `facebook-user`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		       while($row=mysqli_fetch_assoc($res)){
			    $name = $row["name"];
			   }
			  }		
	     $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
         $Time       = $date->format('Y-m-d H:i:s'); 
		 $sql = "UPDATE `facebook-user` SET `verifyAcc`='1' WHERE `id` = '$id'";
		 $fire=mysqli_query($conn,$sql);
	        if($fire){
			$msg = "Welcome {$name}, We have received your sms. Your account is now verified.";
				$sql = " INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$id','$msg','1','$Time')";
		        $fire=mysqli_query($conn,$sql);
			     ?><script type="text/javascript">window.location.href = '../fbUsersTable.php?success'; </script><?php
			     }else{
				 ?><script type="text/javascript">window.location.href = '../fbUsersTable.php?error'; </script><?php
			     }
		
	  }
   } 
?>