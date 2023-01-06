<?php
require_once '../function/database/database.php';

if(isset($_POST["createWheelAd"])){
	
       $model           = $_POST['model'];
	   $modify_Type     = $_POST['modify_Type'];
       $price           = $_POST['price'];
       $condition       = $_POST['condition'];
       $model_Year      = $_POST['model_Year'];
       $mileage         = $_POST['mileage'];
       $discription     = $_POST['discription'];
	   $city_Id         = $_POST['city_Id'];
       $seller_Id       = $_POST['seller_Id'];
	   $addPnum1        = $_POST["addPNum1"];
	   $addPnum2        = $_POST["addPNum2"];
 
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $post_Time       = $date->format('Y-m-d H:i:s');
	   $post_Time2 = date("d-m-Y")."-".time();

       if (!file_exists("../adsPictures/{$seller_Id}")) {
	     mkdir("../adsPictures/{$seller_Id}", 0777, true);
        }

        // Velidate if files exist
        if(isset($_FILES['img1']['name'])){ 
		    
			// first insert data

			
                   /* $sql = " SELECT `id` FROM `wheelads` WHERE `seller_Id`= '$seller_Id' AND `post_Time` = '$post_Time' ";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
					while($row=mysqli_fetch_assoc($res)){	
					   $postId = $row["id"];
					}}	*/
	 					$location="../adsPictures/{$seller_Id}/";
	                    $file1= "wheelAd_{$post_Time2}_".rand(0000,9999).'.'."jpg";
	                    $file_tmp1=$_FILES['img1']['tmp_name'];
	                    $file2= "wheelAd_{$post_Time2}_".rand(0000,9999).'.'."jpg";
	                    $file_tmp2=$_FILES['img2']['tmp_name'];
	                    $file3= "wheelAd_{$post_Time2}_".rand(0000,9999).'.'."jpg";
	                    $file_tmp3=$_FILES['img3']['tmp_name'];
	                    $file4= "wheelAd_{$post_Time2}_".rand(0000,9999).'.'."jpg";
	                    $file_tmp4=$_FILES['img4']['tmp_name'];
	                    
	                    $query="INSERT INTO `wheelads`(`id`, `name`, `price`, `model`, `condition`, `model_Year`, `mileage`, `modify_Type`, `city_Id`, `post_Time`, `discription`, `seller_Id`, `views`, `post_Engage`, `images`,`Admin_Approval`) VALUES ('','$model','$price','$model','$condition','$model_Year','$mileage','$modify_Type','$city_Id','$post_Time','$discription','$seller_Id','','','','no')";
	                    $fire=mysqli_query($conn,$query);
	                if($fire)
	             {
				  $sql = "select * from `wheelads`  where `seller_Id` = '$seller_Id' AND `post_Time` ='$post_Time' ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					$postId = $row["id"]; 
				 }}
				     if(!empty($_FILES['img1']['name'])){
						$sql = "INSERT INTO `wheeladimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file1','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img2']['name'])){
						$sql = "INSERT INTO `wheeladimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file2','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img3']['name'])){
						$sql = "INSERT INTO `wheeladimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file3','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img4']['name'])){
						$sql = "INSERT INTO `wheeladimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file4','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
		          move_uploaded_file($file_tmp1, $location.$file1);
				  resize($location.$file1,$location.$file1,1000);
			      resize($location.$file1,$location.$file1,300);
			      add_logo($location.$file1,"h.jpg",$location.$file1);
		          move_uploaded_file($file_tmp2, $location.$file2);
		          move_uploaded_file($file_tmp3, $location.$file3);
		          move_uploaded_file($file_tmp4, $location.$file4);
		         echo "success";
	           }
	            else
	           {
		         echo "failed";
	           }
          
 }
}

?>
