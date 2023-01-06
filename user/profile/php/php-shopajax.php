<?php
require_once '../../../function/database/database.php';

if(isset($_POST['shopName'])){

						
	   $AdId = $_POST["editshopAdId"];
	   $shopName         = $_POST['shopName'];
	   $ownerName        = $_POST['ownerName'];
       $openDays         = $_POST["openDay"];
       $closeDays       = $_POST["closeDay"];
       $shopContact1      = $_POST['shopContact1'];
       $shopContact2     = $_POST["shopContact2"];
	   $openTime         = $_POST["openTime"];
	   $addressShop       = $_POST['addressShop'];
	   $aboutShop       = $_POST['aboutShop'];

 
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $post_Time       = $date->format('Y-m-d H:i:s');
	   $post_Time2      = strtotime($post_Time);
					   
	   $sql = "SELECT * FROM `phoneshopads` WHERE `id` ='$AdId'";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
		            while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
			    $openD = $row["shopOpen"];
				$closeD = $row["shopClose"];
			    $openTim = $row["openTime"];
				$address = $row["address"];
				$pno1 = $row["shopPno1"];
				$pno2 = $row["shopPno2"];
				$address = $row["address"];
				$about = $row["about"];
				$cid = $row["city_Id"];
				$postView =  $row["views"];
				$publishTime =  strtotime($row["post_Time"]);
				$updatepublishTime = strtotime($row["AdminApproval_Time"]);
			    $sellerId =	$row["seller_Id"];
				$sellerAcc       = $row['sellerAcc'];
                $ptime	     = $row['post_Time'];
				$imgLocation = 	$row['imageLocation'];				
					}}
			$post_Time3      = strtotime($ptime);		
			if($openDays == ""){
				$openDays = $openD;
			}else{
				$openDays  = $_POST["openDay"];
			}		
		    
			if($closeDays == ""){
				$closeDays = $closeD;
			}else{
				$closeDays  = $_POST["closeDay"];
			}
			
			if($openTime == "Other"){
				$openTime = $_POST["otheropenTime"];
			}
			
			if($addressShop == ""){
				$addressShop = $address;
			}else{
				$addressShop = $_POST['addressShop'];
			}
			
			if($aboutShop == ""){
				$aboutShop = $about;
			}else{
				$aboutShop = $_POST['aboutShop'];
			}
			
         $sql4 = "select * from `cities`  where `id` = '$cid'  ";
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
			
			
	 					$location="../../../adsPictures/shopAds/{$sellerId}/{$post_Time3}/";
						if(!empty($_FILES['img10']['name'])){
	                    $file1= basename($_FILES["img10"]["name"]); 
	                    $file_tmp1=$_FILES['img10']['tmp_name'];
						$fileType1 = pathinfo($location.$file1,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/{$file1}";
						}
						if(!empty($_FILES['img11']['name'])){
	                    $file2=  basename($_FILES["img11"]["name"]); 
	                    $file_tmp2=$_FILES['img11']['tmp_name'];
						$fileType2 = pathinfo($location.$file2,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/{$file2}";
						}
						if(!empty($_FILES['img12']['name'])){
	                    $file3=  basename($_FILES["img12"]["name"]); 
	                    $file_tmp3=$_FILES['img12']['tmp_name'];
						$fileType3 = pathinfo($location.$file3,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/{$file3}";
						}
						if(!empty($_FILES['img13']['name'])){
	                    $file4=  basename($_FILES["img13"]["name"]); 
	                    $file_tmp4=$_FILES['img13']['tmp_name'];
						$fileType4 = pathinfo($location.$file4,PATHINFO_EXTENSION);
	                    $imgLocation = "../../adsPictures/shopAds/{$seller_Id}/{$post_Time2}/{$file4}";
						}
						
	                    $query="UPDATE `phoneshopads` SET `shopName`='$shopName',`ownerName`='$ownerName',`shopOpen`='$openDays',`shopClose`='$closeDays',`shopPno1`='$shopContact1',
						`shopPno2`='$shopContact2',`openTime`='$openTime',`address`='$addressShop',`about`='$aboutShop',`district_Id`='$did',`city_Id`='$cid',
						`update_Time`='$post_Time',`AdminApproval`='0',`update_Admin_Approval`='1',`lat`= '$lat',`lng`='$lng',`imageLocation`='$imgLocation'  WHERE `id`='$AdId'";
	                    $fire=mysqli_query($conn,$query);
	                if($fire)
	                {
						  $sql4 = "select * from `rejectads` WHERE `postId`='$AdId' AND `post`='shop' ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
					                $sq ="DELETE FROM `rejectads` WHERE `postId`='$AdId' AND `post`='shop' ";
					                $res=mysqli_query($conn,$sq);
								  }
				  
				      if(!empty($_FILES['img10']['name'])){
					  $sql ="DELETE FROM `phoneshopadimage` WHERE `Post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneshopadimage`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file1','','','$ptime')";
				        $res=mysqli_query($conn,$sql);	
					 }
					} 
					 if(!empty($_FILES['img11']['name'])){
						$sql ="DELETE FROM `phoneshopadimage` WHERE `Post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneshopadimage`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file2','','','$ptime')";
				        $res=mysqli_query($conn,$sql);	
					 }
					} 
					 if(!empty($_FILES['img12']['name'])){
						$sql ="DELETE FROM `phoneshopadimage` WHERE `Post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneshopadimage`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file3','','','$ptime')";
				        $res=mysqli_query($conn,$sql);	
					 }	
					} 
					 if(!empty($_FILES['img13']['name'])){
						$sql ="DELETE FROM `phoneshopadimage` WHERE `Post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneshopadimage`(`id`, `Post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file4','','','$ptime')";
				        $res=mysqli_query($conn,$sql);	
					 }	
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