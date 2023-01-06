<?php
  require_once '../function/database/database.php';
  
 if(isset($_POST["shopName"])){
	
       $shopName           = $_POST['shopName'];
	   $ownerName     = $_POST['ownerName'];
       $openDays           = $_POST["openDay"];
       $closeDays       = $_POST["closeDay"];
       $shopContact1      = $_POST['shopContact1'];
       $shopContact2     = $_POST["shopContact2"];
	   $openTime         = $_POST["openTime"];
	   $addressShop       = $_POST['addressShop'];
	   $aboutShop       = $_POST['aboutShop'];
	   $city_Id         = $_POST['city_Id'];
       $seller_Id       = "temp";
	   $sellerAcc       = "google";
	   
        if($openTime == "other"){
			$openTime = $_POST["otheropenTime"];
		}else{
			$openTime         = $_POST['openTime'];
		}
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $post_Time       = $date->format('Y-m-d H:i:s');
	   $post_Time2      = strtotime($post_Time);

       if (!file_exists("../adsPictures/shopAds/{$seller_Id}")) {
	     mkdir("../adsPictures/shopAds/{$seller_Id}", 0777, true);
		
		 if (!file_exists("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}", 0777, true);
         }
        }else{
		 if (!file_exists("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}")) {
	      mkdir("../adsPictures/shopAds/{$seller_Id}/{$post_Time2}", 0777, true);
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

						   
								   
        // Velidate if files exist
        if(isset($_FILES['img10']['name'])){ 
		    
			// first insert data

			
                   /* $sql = " SELECT `id` FROM `wheelads` WHERE `seller_Id`= '$seller_Id' AND `post_Time` = '$post_Time' ";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
					while($row=mysqli_fetch_assoc($res)){	
					   $postId = $row["id"];
					}}	*/			
			
	 					$location="../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/";
						
	                    $file1= basename($_FILES["img10"]["name"]); 
	                    $file_tmp1=$_FILES['img10']['tmp_name'];
						$fileType1 = pathinfo($location.$file1,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/{$file1}";
	                    $file2=  basename($_FILES["img11"]["name"]); 
	                    $file_tmp2=$_FILES['img11']['tmp_name'];
						$fileType2 = pathinfo($location.$file2,PATHINFO_EXTENSION);
						
	                    $file3=  basename($_FILES["img12"]["name"]); 
	                    $file_tmp3=$_FILES['img12']['tmp_name'];
						$fileType3 = pathinfo($location.$file3,PATHINFO_EXTENSION);
						
	                    $file4=  basename($_FILES["img13"]["name"]); 
	                    $file_tmp4=$_FILES['img13']['tmp_name'];
						$fileType4 = pathinfo($location.$file4,PATHINFO_EXTENSION);
	                    
	                    $query="INSERT INTO `phoneshopads`(`id`, `shopName`, `ownerName`, `shopOpen`, `shopClose`, `shopPno1`, `shopPno2`, `openTime`, `address`, `about`, `district_Id`, `city_Id`, `post_Time`, `update_Time`, `seller_Id`, `views`, `post_Engage`, `sellerAcc`, `AdminApproval`, `AdminApproval_Time`, `update_Admin_Approval`, `lat`, `lng`, `imageLocation`)
						VALUES ('','$shopName','$ownerName','$openDays','$closeDays','$shopContact1','$shopContact2','$openTime','$addressShop','$aboutShop','$did','$city_Id','$post_Time','$post_Time','$seller_Id','','','$sellerAcc','0','','','$lat','$lng','$imgLocation')";
	                    $fire=mysqli_query($conn,$query);
	                if($fire)
	             {
					 $sq = "INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$seller_Id','your phone shop ad is added successful.','1','$post_Time')";
					 $fire=mysqli_query($conn,$sq);
					 
					 $s = "INSERT INTO `notification`(`id`, `UserId`, `massage`, `active`, `date`) VALUES ('','$seller_Id','An hour after checking your ad it will be published on <b> durakathanapala.lk </b>...','1','$post_Time')";
					$fire=mysqli_query($conn,$s);
					 
				  $sql = "select * from `phoneshopads`  where `seller_Id` = '$seller_Id' AND `post_Time` ='$post_Time' ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					$postId = $row["id"]; 
					$sellerId = $row["seller_Id"]; 
					$sellerAcc = $row["sellerAcc"]; 
 				 }}
				     if(!empty($_FILES['img10']['name'])){
						$sql = "INSERT INTO `phoneshopadimage`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file1','','','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img11']['name'])){
						$sql = "INSERT INTO `phoneshopadimages`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file2','','','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img12']['name'])){
						$sql = "INSERT INTO `phoneshopadimages`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file3','','','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					} 
					 if(!empty($_FILES['img13']['name'])){
						$sql = "INSERT INTO `phoneshopadimages`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$postId','$file4','','','$post_Time')";
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
				    	window.location.href = 'user/google_login/googleLoginIndex.php?shopadid=<?php echo $postId; ?>';
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
?>