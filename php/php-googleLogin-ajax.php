<?php
   require_once '../function/database/database.php';
 if(isset($_POST["createWheelAd"])){
	
       $model           = $_POST['model'];
	   $modify_Type     = $_POST['modify_Type'];
       $price           = $_POST['price'];
       $condition       = $_POST['condition'];
       $model_Year      = $_POST['model_Year'];
       $discription     = $_POST['discription'];
	   $city_Id         = $_POST['city_Id'];
       $seller_Id       = "temp";
	   $sellerAcc       = "google";
	   $addPnum1        = $_POST["addPNum1"];
	   $addPnum2        = $_POST["addPNum2"];
 
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $post_Time       = $date->format('Y-m-d H:i:s');
	   $post_Time2      = strtotime($post_Time);

       if (!file_exists("../adsPictures/{$seller_Id}")) {
	     mkdir("../adsPictures/{$seller_Id}", 0777, true);
		
		 if (!file_exists("../adsPictures/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/{$seller_Id}/{$post_Time2}", 0777, true);
         }
        }else{
		 if (!file_exists("../adsPictures/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/{$seller_Id}/{$post_Time2}", 0777, true);
         }
		}
        $sql4 = "select * from `cities`  where `id` = '$city_Id'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
                                    $did = 	$row4["district_id"];
									$lat =  $row4["latitude"];
									$lng =  $row4["longitude"];
								   }}
		 $sql5 = "select * from `brands`  where `ID` = '$model'  ";
	                             $res5 = mysqli_query($conn,$sql5);
                                 $count5 = mysqli_num_rows($res5);
		                          if($count5>0){
		                           while($row5=mysqli_fetch_assoc($res5)){
                                    $model_name = 	$row5["name"];
									$m = "Phone";
									$new_model_name = $m." ".$model_name ; 
								   }}
		 $sql6 = "select * from `devices`  where `ID` = '$modify_Type'  ";
	                             $res6 = mysqli_query($conn,$sql6);
                                 $count6 = mysqli_num_rows($res6);
		                          if($count6>0){
		                           while($row6=mysqli_fetch_assoc($res6)){
                                    $modify_Type_name = 	$row6["name"];
									$n = "Phone of";
									$new_modify_Type_name = $n." ".$modify_Type_name;
								   }}						   
								   
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
			
	 					$location="../adsPictures/{$seller_Id}/{$post_Time2}/";
						
	                    $file1= basename($_FILES["img1"]["name"]); 
	                    $file_tmp1=$_FILES['img1']['tmp_name'];
						$fileType1 = pathinfo($location.$file1,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/{$seller_Id}/{$post_Time2}/{$file1}";
	                    $file2=  basename($_FILES["img2"]["name"]); 
	                    $file_tmp2=$_FILES['img2']['tmp_name'];
						$fileType2 = pathinfo($location.$file2,PATHINFO_EXTENSION);
						
	                    $file3=  basename($_FILES["img3"]["name"]); 
	                    $file_tmp3=$_FILES['img3']['tmp_name'];
						$fileType3 = pathinfo($location.$file3,PATHINFO_EXTENSION);
						
	                    $file4=  basename($_FILES["img4"]["name"]); 
	                    $file_tmp4=$_FILES['img4']['tmp_name'];
						$fileType4 = pathinfo($location.$file4,PATHINFO_EXTENSION);
	                    
	                    $query="INSERT INTO `phoneads`(`id`, `name`, `price`, `brand`,`brand_name`, `condition`, `model_Year`,  `device`,`device_name`,`district_Id`, `city_Id`, `post_Time`, `discription`, `seller_Id`, `views`, `post_Engage`, `sellerAcc`,`Admin_Approval`,`lat`,`lng`,`imageLocation`) VALUES ('','$model','$price','$model','$new_model_name','$condition','$model_Year','$modify_Type','$new_modify_Type_name','$did','$city_Id','$post_Time','$discription','$seller_Id','','','$sellerAcc','0','$lat','$lng','$imgLocation')";
	                    $fire=mysqli_query($conn,$query);
	                if($fire)
	             {
					 
				  $sql = "select * from `phoneads`  where `seller_Id` = '$seller_Id' AND `post_Time` ='$post_Time' ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					$postId = $row["id"]; 
					$sellerId = $row["seller_Id"]; 
					$sellerAcc = $row["sellerAcc"]; 
 				 }}
				     if(!empty($_FILES['img1']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file1','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img2']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file2','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img3']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file3','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img4']['name'])){
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file4','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
		          if(move_uploaded_file($file_tmp1, $location.$file1)){
					 resize($fileType1,$location.$file1,$location.$file1,1000);
			         resize($fileType1,$location.$file1,$location.$file1,800);
			         add_logo($fileType1,$location.$file1,"watermark.png",$location.$file1); 
				  }				
		          if(move_uploaded_file($file_tmp2, $location.$file2)){
					 resize($fileType2,$location.$file2,$location.$file2,1000);
			         resize($fileType2,$location.$file2,$location.$file2,800);
			         add_logo($fileType2,$location.$file2,"watermark.png",$location.$file2);  
				  }
				  
		          if(move_uploaded_file($file_tmp3, $location.$file3)){
				   resize($fileType3,$location.$file3,$location.$file3,1000);
			       resize($fileType3,$location.$file3,$location.$file3,800);
			       add_logo($fileType3,$location.$file3,"watermark.png",$location.$file3); 
				  }
				   
		          if(move_uploaded_file($file_tmp4, $location.$file4)){
				   resize($fileType4,$location.$file4,$location.$file4,1000);
			       resize($fileType4,$location.$file4,$location.$file4,800);
			       add_logo($fileType4,$location.$file4,"watermark.png",$location.$file4);  
				  }
                  ?><script type="text/javascript">
				    	window.location.href = 'user/google_login/googleLoginIndex.php?phoneadid=<?php echo $postId; ?>';
				    </script><?php
	           }
	            else
	           {
		         ?>	
				    <script type="text/javascript">
				    document.getElementById("msgModal").style.display = "inline";
				    </script>
				 <br>
					  <br>
	   				<div class="unsuccesscard">
					<div class="vmanu" >
                     <p style="text-align:center; "><img  src="images/wrong.gif"></p><br>
                     <h1>Error!</h1> 
                     <p>Please Try Again,<br> Check your connection and Try Again!</p>
					 </div>
					 <p class="vbtn"><button class="unsbtn" onclick="postAdno()">Try Again</button></p>
                    </div>
       	       <?php
	           }
          
 }
}
function resize($x,$original,$destination,$max = 1000)
{
	//resize image
	switch($x){ 
                    case 'jpg': 
                        $source = imagecreatefromjpeg($original); 
                        break; 
                    case 'jpeg': 
                        $source = imagecreatefromjpeg($original); 
                        break; 
                    case 'png': 
                        $source = imagecreatefrompng($original); 
                        break; 
                    default: 
                        $source = imagecreatefromjpeg($original); 
                }
	$width = imagesx($source);
	$height = imagesy($source);

	if($width >= $height){

		$new_width = $max;
		$ratio = $height / $width;
		$new_height = $max * $ratio;
	}else{
		$new_height = $max;
		$ratio = $width / $height;
		$new_width = $max * $ratio;
	}

	$image = imagecreatetruecolor($new_width, $new_height);
	imagecopyresampled($image, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	switch($x){ 
                    case 'jpg': 
                        imagejpeg($image,$destination);
                        break; 
                    case 'jpeg': 
                        imagejpeg($image,$destination);
                        break; 
                    case 'png': 
                       imagepng($image,$destination);
                        break; 
                    default: 
                        imagejpeg($image,$destination);
                }
	imagedestroy($image);
}

function add_logo($y,$source_file,$logo_file,$output)
                
{
    	switch($y){ 
                    case 'jpg': 
                        $source = imagecreatefromjpeg($source_file); 
                        break; 
                    case 'jpeg': 
                        $source = imagecreatefromjpeg($source_file); 
                        break; 
                    case 'png': 
                        $source = imagecreatefrompng($source_file); 
                        break; 
                    default: 
                        $source = imagecreatefromjpeg($source_file); 
                }
	$source_width = imagesx($source);
	$source_height = imagesy($source);

	$logo = imagecreatefrompng($logo_file);
	$logo_width = imagesx($logo);
	$logo_height = imagesy($logo);

	$centerX = ($source_width - $logo_width) / 2;
	$centerY = ($source_height - $logo_height) / 2;
	
	        imagecolortransparent($logo, imagecolorallocatealpha($logo, 0, 0, 0, 127));
            imagealphablending($logo, false);
            imagesavealpha($logo, true);

	imagecopymerge($source, $logo, $centerX, $centerY, 0, 0, $logo_width, $logo_height, 60);
	//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
	
	imagepng($source,$output);
	imagedestroy($source);
}
/*end post create*/


?>