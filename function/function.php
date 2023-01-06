<?php
require_once 'database/database.php';


function loader(){
/*	?><div class="spinner-wrapper">
  <div class="centercenter">
    <div class="spinner-grow2 logocolor" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
</div>	
<?php */
?>
 <div id="loader" class="loader"><div id="loader-main"><p style="text-align:center;"><img style="display:inline; width:80px; opacity:1;" src="images/wait.gif"></p></div></div>
 
<div style="display:none; opacity:1;" id="loader2" class="loader"><div id="loader-main"><p style="text-align:center;"><img style="display:inline; width:80px; opacity:1;" src="images/wait.gif"><br>
 <div id="uploadBox" style="background-color:white; width:60%; margin:auto; text-align:center; opacity:1; z-index:100; ">
 <div class="progress" style="margin:10px 0 15px;">
    <div class="progress-bar" id="progress-bar" ></div>
</div>
 <p id="imgUp" style="display:inline; text-align:center;"></p>
</div>
</p>
 </div>
 </div>
 <?php
}
 function location(){
	 global $conn;
    ?>
 <div id="location" class="location" >
  <!-- Modal content -->
  <div class="location-content">
    <span class="locationclose"  onclick="closelocation()">&times;</span>
    <h2 style="float:left;" id="locationTitle"> Select Location ..</h2>
	<span class="backLocation" id="backLocation" style=""><i class='fa fa-arrow-circle-left' style='font-size:18px'></i></span>
	<span class="backLocation2" id="2backLocation" style=""><i class='fa fa-arrow-circle-left' style='font-size:18px'></i></span>
	<div class="w3-row ">
  <div class="w3-half table1" id="table1"> 
    <input type="text" id="myInput" onkeyup="mytable()" placeholder="Search for District name.." title="Type in a name">
	 <label id="mylabel" ><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i> District</label>
    <div  class="tbscroll">
	<table id="myTable">
  <tr>
    <td style="width:50%"></td>
  </tr>
         <?php 
		 $sql = "select * from `districts`  ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $districName = $row["name_en"];
			 $districId = $row["id"];
			?>
			  <tr>
                <td class="getDistric" id="<?php echo $districId; ?>"><span style="margin:0 5px;"><?php echo $districName; ?></span><i class='fa fa-angle-right' style="float:right; margin:0 10px; font-size:18px; font-weight:bold;"></i></td>
              </tr>
			<?php
			}
		 }
		 ?>
</table>
</div>
  </div>
    <div class="w3-half table2" id="table2">
    <input type="text" id="myInput2" onkeyup="mytable2()" placeholder="Search for City name.." title="Type in a name">
	<label id="mylabel2" ><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i> City Of <span id="district"></span></label>
    <div  class="tbscroll">
     <table id="myTable2">
  <tr>
    <td style="width:50%"></td>
  </tr>
  <?php 	 
		 $sql = "select * from `cities`  where `district_id` = '1' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $cityName = $row["name_en"];
			 $cityId = $row["id"];
			?>
			  <tr>
                <td class="getCity" id="<?php echo $cityId; ?>" value="fg"><span style="margin:0 5px;"><?php echo $cityName; ?></span><i class='fa fa-angle-right' style="float:right; margin:0 5px;  font-size:20px; color:#808080;"></i></td>
              </tr>
			<?php
			}
		 }
   ?>
</table>
    
</div>
  </div>
  
</div>
  </div>
</div>
	<?php
}

function location2(){
	global $conn;
    ?>
 <div id="location2" class="location" >
  <!-- Modal content -->
  <div class="location-content">
       <a href="https://durakathanapala.lk/" style="color:blue;">Menu</a>
    <h2 style="float:left;" id="slocationTitle"> Select Location ..</h2>
	<span class="backLocation" id="sbackLocation" style=""><i class='fa fa-arrow-circle-left' style='font-size:18px'></i></span>
    <span class="locationclose"  onclick="closelocation2()">&times;</span>
	<div class="w3-row ">
  <div class="w3-half table1" id="stable1"> 
    <input type="text" id="smyInput" onkeyup="smytable()" placeholder="Search for District name.." title="Type in a name">
	 <label id="mylabel" ><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i> District</label>
    <div  class="tbscroll">
      <table id="smyTable">
  <tr>
    <td style="width:50%"></td>
  </tr>
  <tr>
    <td class="getDistricsearch" id="0" onclick="document.getElementById('searchCity').value = 'Srilanka';" style="font-size:16px; font-weight:bold;"> All Of Srilanka</td>
	<input type="text" id="searchCity" style="display:none;">
  </tr>
    <?php 
		 $sql = "select * from `districts`  ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $sdistricName = $row["name_en"];
			 $sdistricId = $row["id"];
			?>
			  <tr>
			    <td class="getDistricsearch" id="<?php echo $sdistricId; ?>"><span style="margin:0 5px;"><?php echo $sdistricName; ?></span><i class='fa fa-angle-right' style="float:right;  margin:0 10px; font-size:18px; font-weight:bold; "></i></td>
              </tr>
			<?php
			}
		 }
    ?>
</table>
</div>
  </div>
    <div class="w3-half table2" id="stable2">
    <input type="text" id="smyInput2" onkeyup="smytable2()" placeholder="Search for City name.." title="Type in a name">
	<label id="mylabel2"  ><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i> City Of <span id="sdistrict">Ampara</span></label>
    <div class="tbscroll" >
     <table id="smyTable2">
  <tr>
    <td class="g" style="width:50%"></td>
  </tr>
  <tr>
    <td class="getDistricsearch" id="Ampara" style="font-size:16px; font-weight:bold;"> In all the cities of Ampara districts</td>
  </tr>
    <?php 	
		 $sql = "select * from `cities` where `district_id` = '1' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
		     $scityName = $row["name_en"];
			 $scityId = $row["id"];
			?>
			  <tr>
			      <td class="getCitysearch" id="<?php echo $scityId; ?>"> <span style="margin:0 5px;"><?php echo $scityName; ?></span> <i class='fa fa-angle-right' style="float:right; margin:0 5px;  font-size:20px; color:#808080;"></i></td>
              </tr>
			<?php
			}
		 }
   ?>
</table>
</div>
  </div>
  
</div>
  </div>
</div>
	<?php
}
function searchBox(){
	global $conn;
	?>  
		<div class="container containerSbox" >
		<div class="search_box w3-card">
			<p id="searchBoxP">Find the best phone for you </p><br>
			<div class="row " >
				<div class="col-sm-4" >
				  <div class="dropdown">
					 <button class="btn btn-default " type="button" id="dropdownMenu1" onclick="mylocation()" style=" background-color:#ffffff; width:100%; padding:4px 5px; border:none; color:black; margin:1px 0; z-index:1;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span  id="locationBtn" style="margin: 0 5px; float:left;"><i class="fa fa-map-marker" style='font-size:15px; color:#3333FF;'></i>  <span class="selectLoc" style="margin:0 5px;"> Location</span></span>
                        <span style=" margin: 0 12px; float:right;"><i class='	fa fa-angle-down' style='font-size:16px;color:#3333FF;'></i></span>
                     </button>
					 </div>
				</div>
				
				
				
			    <div class="col-sm-4" >
				 <div class="dropdown" >
				 <?php
				    if(isset($_GET["model"])){
						$b = $_GET["model"];
						if( $b != ""){
                        $sql = "select * from `brands`  where `id`= '$b' ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $getModel = $row["name"];
									$optionVal = $row["name"];
									}}
							  ?><script> document.querySelector('.clickModelValue').style.color = '#3333FF'; </script><?php
						     }else{
							 $getModel ="Brand";
							 $optionVal = "Select Brand";
							 ?><script> document.querySelector('.clickModelValue').style.color = 'black'; </script><?php
							 }
                  }else{
					  $getModel ="Brand";
					  $optionVal = "Select Brand";
					  $b = "";
					  ?><script> document.querySelector('.clickModelValue').style.color = 'black'; </script><?php
				  }
				  ?><input type="text" id="dropdown-menu1-select" value="<?php echo $b; ?>" style="display:none;"/><?php
				 ?>
			
                      <button class="btn btn-default brandsBtn" type="button"  id="dropdownMenu1" onMouseOver="show_Model()"  onMouseOut="hide_Model()" style=" background-color:white; width:100%; padding:4px 5px; border:none; color:black; margin:1px 0; z-index:1;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span  style="margin: 0 5px; float:left;"><i class="fa fa-align-justify" style="font-size:14px; color:#3333FF;"></i> <span class="clickModelValue" style="margin:0 5px;"><?php echo $getModel; ?></span></span>
                        <span style=" margin: 0 12px; float:right;"><i class='	fa fa-angle-down' style='font-size:16px; color:#3333FF;'></i></span>
                     </button>
                      <div  id="brandsSelect" class="brandsSelect"> 
                    <select id="hj" stylr="z-index:1;">
					 <option value="" ><?php echo $optionVal; ?></option>
					
					  <?php 
								 $sql = "select * from `brands`  ORDER BY `id` DESC";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mtName = $row["name"];
			                        $mtId = $row["id"];
								    ?>
									<option value="<?php echo $mtId; ?>" style="padding:20px; width:100%; height:100%;  background-color:#ddd;" ><?php echo $mtName; ?></option>
									<?php
								  }}
								?>
					</select>
                    </div>
                    </div> 
				</div>
				
				
								
			    <div class="col-sm-4" >
		 <div class="dropdown" >
		  <?php
				    if(isset($_GET["mType"])){
						$bb = $_GET["mType"];
						if( $bb != ""){
                        $sql = "select * from `devices`  where `id`= '$bb' ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $getdevices  = $row["name"];
									$getOptionDeviceVal = $row["name"];
									}}
							
						     }else{
							 $getdevices ="Devices";
							 $getOptionDeviceVal = "Select Device";
							
							 }
					}else{
						 $getdevices ="Devices";
						 $getOptionDeviceVal ="Select Device";
						 $bb ="";
						 
					}
					?><input type="text" id="dropdown-menu2-select" value="<?php echo $bb; ?>" style="display:none;"/><?php
				 ?>
		            
                     <button class="btn btn-default devicesBtn" type="button" id="dropdownMenu1" onMouseOver="show_devices()"  onMouseOut="hide_devices()" style=" background-color:white; width:100%; padding:4px 5px;  border:none; color:black; margin:1px 0; z-index:1;" >
                       <?php
					    if(isset($_GET["mType"])){
							if($_GET["mType"] == ""){
								?><span  style="margin: 0 5px; float:left;"> <i class='fa fa-clone' style='font-size:13px; color:#3333FF;'></i><span class="clickdeviceValue" style="margin:0 5px; color:black;"> <?php echo $getdevices; ?></span></span><?php
							}else{
								?><span  style="margin: 0 5px; float:left;"> <i class='fa fa-clone' style='font-size:13px; color:#3333FF;'></i><span class="clickdeviceValue" style="margin:0 5px; color:#3333FF;"> <?php echo $getdevices; ?></span></span><?php
							}
						}else{
							?><span  style="margin: 0 5px; float:left;"> <i class='fa fa-clone' style='font-size:13px; color:#3333FF;'></i><span class="clickdeviceValue" style="margin:0 5px;"> <?php echo $getdevices; ?></span></span><?php
						}
					   ?>
					   <span style=" margin: 0 12px; float:right;"><i class='	fa fa-angle-down' style='font-size:16px; color:#3333FF;'></i></span>
                     </button>
					<div  id="devicesSelect" class="devicesSelect"> 
                    <select >
					 <option value=""><a class="t" id=""> <?php echo $getOptionDeviceVal; ?></a></option>
					  <?php 
					         if(isset($_GET["model"])){
						          $h1h = $_GET["model"];
								  if( $h1h == ""){
								 $sql = "select * from `devices`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mtName = $row["name"];
			                        $mtId = $row["id"];
								    ?>
									<option value="<?php echo $mtId; ?>" style="padding:20px; width:100%; z-index:2; height:100%;  background-color:#ddd;" ><?php echo $mtName; ?></option>
									<?php
								  }}
								}else{
								 $sql = "select * from `devices` where `brand_id` = '$h1h' ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mtName = $row["name"];
			                        $mtId = $row["id"];
								    ?>
									<option value="<?php echo $mtId; ?>" style="padding:20px; width:100%; z-index:2; height:100%;  background-color:#ddd;" ><?php echo $mtName; ?></option>
									<?php
								  }}
								}
							 }
								?>
					
					</select>
                    </div>
                   </div>
				</div>
			   <div class="search_wrap search_wrap_1">
			<div class=" search_box2">
			  <?php
                if(isset($_GET["search"])){
						$bc = $_GET["search"];
						if( $bc != ""){
                        
						}else{
							 $bc ="";
					    }
					}else{
						 
						 $bc ="";
					}			  
			  ?>
				<input type="text" class="input" value="<?php echo $bc; ?>" id="searchName" placeholder="search..." onclick="searchLiveKeyWordClick()" onkeyup="searchLiveKeyWordClick()" style="font-size:14px; font-weight:500; color:#20211a; padding:20px 25PX;">
				<div class="btn btn_common"  id="searchBtn" style="">
					<a><i class="fa fa-search" style=" font-size:17px; "></i></a>
				</div>
				<div class="w3-card-4 wwww searchLiveKeymanu" >
				 <ul class="list-group" id="livesearchlist">
                 </ul>
				</div>
			</div>
		</div>
			</div>
</div>

	<?php
}
function categoryList(){
	?>
	 <div class="container select_box" >
  
	<div class="w3-quarter select" >
	  <h2></h2>  
	</div>
	<div class="w3-quarter select" >
	  <h2></h2>
	</div>
	<div class="w3-quarter select" >
	  <h2></h2>
	</div>
	<div class="w3-quarter select" >
	  <h2></h2>
	</div>
</div>
<div class="container select_box" id="select_box" >

	<div class="w3-quarter select2 ">
	<a href="index.php?category=phones">
	  <p><img class="w3-card-4" src="images/phoneI.ico" style="  border-radius:60px;" width="60px" height="60px"></p>  
	  <label style="opacity:0.9;"><b>Phone</b></label>
	</a>
	</div>
	<div class="w3-quarter select2">
	 <a href="shopAdIndex.php">
		<p><img class="w3-card-4" src="images/phonesp.png" style=" border-radius:60px;" width="60px" height="60px"></p>  
		<label style="opacity:0.9;"><b>Shops</b></label>
	 </a>	
	</div>
	<div class="w3-quarter select2">
	 <a >
		<p><img class="w3-card-4" src="images/phone-parts.png" style="border:1px solid #8888FF; border-radius:60px;" width="60px" height="60px"></p>  
		<label style="opacity:0.9;"><b>Parts</b></label>
	 </a>	
	</div>
	<div class="w3-quarter select2">
	 <a >
		<p><img class="w3-card-4" src="images/phone-searvice.jpg" style="border:1px solid #8888FF; border-radius:60px;" width="60px" height="60px"></p>  
		<label style="opacity:0.9;"><b>Services</b></label>
	 </a>
	</div>
</div>

	<?php
}
function populerItem(){
	global $conn;
	$name = "Bajaj Re Threewheel";
	?> 

		<div class=" layout_padding promoted_sectipon promoted_sectipon1 promoted_sectiponto" style="background-color:white;" onMouseOver="show_sidebar()"onMouseOut="hide_sidebar()">
		<div class="container adContainer">
			<div class="images_main" id="populerAds">
			<h1 class="populer_text" ><span style="color:#6666FF;">Populer</span> Adds</h1>
<div class="w3-row k1">
<?php
		 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' ORDER BY (`views`  AND  `post_Engage`) DESC LIMIT 0,8";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
?>									  
  <div class=" w3-half k" >
      <h4 class="populer_text-local">Populer Adds For <span style="color:#4444FF;">Mobile Phones</span></h4>
	  <div class="populer-ads-main loadAds skeleton w3-card" >
	  <div class="loadAds loadTohide">
        <div style="width:100%; margin:auto;" class="carousel carousel-main" data-flickity='{"selectedAttraction": 1, "friction": 1}'> <!--='{ "wrapAround": true }' -->
		<?php
		 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' ORDER BY (`views`  AND  `post_Engage`) DESC LIMIT 0,8";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$deviceId = $row["device"];
									$price = $row["price"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
									$updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "...";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }} 
									

									
									  $time_ago = $updatepublishTime;  
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								?>
							 <div class="carousel-cell populer-ads populer-phoneads w3-card-2" id="<?php echo $id; ?>">
	                            <div class=" populer-ads2 " style=" width:250px; height:270px; padding:10px 7px;">
								<div style="width:100%; height:170px;">

                                 <h5 class="loadAds loadTohide"><?php echo $newdeviceName; ?> </h5>
                                  <div class="img loadAds skeleton " style="width:100%; height:120px;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
                                </div>
								<div class="adsmanu" style="margin:12px 3px 0; height:auto;"> 
			                     <label style="opacity:0.7;"><?php echo $cityName; ?></label>, <label style="opacity:0.7;"><?php echo"Phone"; ?></label>
								 			                     <label class="price" style="margin:0;">Rs <?php echo $price; ?></label>
									 <p class="agoTime" style="text-align:right;"><span class="adsView" style="font-size:12px"><i class="fa fa-eye" style="font-size:12px"></i> <?php echo $views ; ?></span><?php echo $agoTime; ?></p>							 
		                        </div>
                                </div>
	                          </div>
								<?php  
								 }
								  }
		?>

    </div>
	</div>
	</div>
  </div>
<?php }
	?>
  <?php
		 $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' ORDER BY (`views`  AND  `post_Engage`) DESC LIMIT 0,8";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
?>									  
 <div class=" w3-half k" >
      <h4 class="populer_text-local">Populer Adds For <span style="color:#4444FF;">Phone Shops</span></h4>
	  <div class="populer-ads-main loadAds skeleton w3-card" >
	  <div class="loadAds loadTohide">
        <div style="width:100%; margin:auto;" class="carousel carousel-main" data-flickity='{"selectedAttraction": 1, "friction": 1}'> <!--='{ "wrapAround": true }' -->
		<?php
		 $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' ORDER BY (`views`  AND  `post_Engage`) DESC LIMIT 0,8";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$shopNam = $row["shopName"];
									$ownerName = $row["ownerName"];
									$openDay = $row["shopOpen"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
									$updatepublishTime = strtotime($row["AdminApproval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneshopadimage` WHERE `Post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	
								  
								 if (strlen($shopNam) > 5){ 
                                    $new_text = substr($shopNam, 0, 15);
                                    $new_text = trim($new_text);
                                    $shopName =  $new_text . "...";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }} 
									

									
									  $time_ago = $updatepublishTime;  
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   }                               if($openDay == "On weekdays (monday to friday)"){
										$oDays = "Mon - Fri";
									}else if($openDay == "On weekends (saturday and sunday)"){
										$oDays = "Sat & Sun";
									}else{
										$oDays = "Every day";
									}
								?>
							 <div class="carousel-cell populer-ads populer-shopads w3-card-2" id="<?php echo $id; ?>">
	                            <div class=" populer-ads2 " style="width:250px; height:270px; padding:10px 7px;" >
								 <div style="width:100%; height:170px;">
 
                                  <h5 class="loadAds loadTohide"><?php echo $shopName; ?> </h5>
                                  <div class="img loadAds skeleton " style="width:100%; height:120px;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>"  alt="phone shop">
								 </div>
                                </div>
                                <div class="adsmanu" style="margin:12px 3px 0; height:auto;"> 
			                     <label style="opacity:0.7;"><?php echo $cityName; ?></label>, <label style="opacity:0.7;"><?php echo"Phone Shop"; ?></label>
								 			                     <label class="price" style="margin:0 2px;"><?php echo"Open In- "; ?> <span style="font-size:12px;"><?php echo $oDays; ?></span></label>
		                        </div>
			                     <p class="agoTime" style="text-align:right;"><span class="adsView" style="font-size:12px"><i class="fa fa-eye" style="font-size:12px"></i> <?php echo $views ; ?></span><?php echo $agoTime; ?></p>
                                </div>
	                          </div>
								<?php  
								 }
								  }
		?>

    </div>
	</div>
	</div>
  </div>
 <?php }
								  ?>
</div>

			
</div>
</div>
</div>
	<?php
}
?>
<?php
function allAds(){
	global $conn;
	?>
		<div class=" layout_padding promoted_sectipon"  style="background-color:white;">
		<div class="container adContainer">
			<div class="images_main" id="allAds">
				
				<div class="row adrow" >
				<h4 class="populer_text-local-1">Latest Phone Ads,</h4>
				<br><br>
			
				<?php 
				$query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$condition = $row["condition"];
									$publishTime =  strtotime($row["post_Time"]);
									$updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							        
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

								 $sql3 = "select * from `brands` where `id` ='$modelId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}  
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								 $sql6 = "select * from `devices` where `id` = '$deviceId'	 ";
	                             $res6 = mysqli_query($conn,$sql6);
                                 $count6 = mysqli_num_rows($res6);
		                          if($count6>0){
		                           while($row6=mysqli_fetch_assoc($res6)){
		                            $deviceName = $row6["name"];	   
								  }} 
								  
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;  
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
                                    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
									?>
									
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>           
									<?php
								  }
						if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="index.php?q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="index.php?q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="index.php?q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="index.php?q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="index.php?q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
						}
						  						
						}
				?>
			</div>
		</div>		
	</div>
	</div>
	<?php
	
}
?>
<?php
function shopallAds(){
	global $conn;
	?>
	
		<div class=" layout_padding promoted_sectipon"  style="background-color:white;">
		<div class="container adContainer">
			<div class="images_main" id="allAds">
				
				<div class="row adrow">
				<h4 class="populer_text-local-1">Durakathanapala.lk All Shop Ads,</h4>
				<br><br>
			
				<?php 
				$query = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				                $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           	 while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$shopName = $row["shopName"];
									$ownerName = $row["ownerName"];
									$openDay = $row["shopOpen"];
									$openTim = $row["openTime"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["AdminApproval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneshopadimage` WHERE `Post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	
								  
								 /*if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 10);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }*/
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									
									if($openDay == "On weekdays (monday to friday)"){
										$oDays = "Mon - Fri";
									}else if($openDay == "On weekends (saturday and sunday)"){
										$oDays = "Sat & Sun";
									}else{
										$oDays = "Every day";
									}
									
									?>
					<div class="col-sm-6 col-md-6  normal-shopads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone Shop">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							   <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  background-color:yellow; padding: 3px 15px; margin-top:5px; display: inline-block;"><?php echo "shop"; ?></span>
    		                     <div class="name loadAds skeleton"> 
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $shopName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin-left:8px; font-size:16px;">( Owner - <?php echo $ownerName; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Phone Shop"; ?></label></span>
								 </div>
								     
                                     <p class="price loadAds skeleton" style="font-size:16px;"><span class="loadAds loadTohide" ><?php echo"Open In- "; ?> <span style="font-size:14px;"><?php echo $oDays; ?></span></span></p>
							        <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>
					
					<div class="col-sm-6 col-md-6  normal-shopads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							    <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  background-color:yellow; padding: 3px 15px; margin-top:5px; display: inline-block;"><?php echo "shop"; ?></span>
    		                     <div class="name loadAds skeleton"> 
								    <?php if (strlen($shopName ) > 5){ 
                                    $new_text = substr($shopName , 0, 15);
                                    $new_text = trim($new_text);
                                    $newshopName  =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newshopName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo "Phone Shop"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:14px; color:#8888FF; font-weight:bold; opacity:0.7;" ><?php echo"Open In- "; ?> <span style="font-size:14px;"><?php echo $oDays; ?></span> </span>
							      <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
								</div>			 
                                </div>
                            </div>							
						 </div>
					</div>
									<?php
								  }
									  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="searchShopAd.php?city=<?php echo $location; ?>&openDays=<?php echo $openDays; ?>&openTime=<?php echo $openTime; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="searchShopAd.php?city=<?php echo $location; ?>&openDays=<?php echo $openDays; ?>&mType=<?php echo $openTime; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="searchShopAd.php?city=<?php echo $location; ?>&openDays=<?php echo $openDays; ?>&openTime=<?php echo $openTime; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="searchShopAd.php?city=<?php echo $location; ?>&openDays=<?php echo $openDays; ?>&openTime=<?php echo $openTime; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="searchShopAd.php?city=<?php echo $location; ?>&openDays=<?php echo $openDays; ?>&openTime=<?php echo $openTime; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="searchShopAd.php?city=<?php echo $location; ?>&openDays=<?php echo $openDays; ?>&openTime=<?php echo $openTime; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
						  						
						}
								  }
				?>
			</div>
		</div>		
	</div>
	</div>
	<?php
	
}
function Ads(){
	global $conn;
	?>
		<div class=" layout_padding promoted_sectipon"  style="background-color:white;">
		<div class="container adContainer">
			<div class="images_main" id="allAds">
				
				<div class="row adrow">
				<h4 class="populer_text-local-1">Durakathanapala.lk All Phone Ads,</h4>
				<br><br>
			
				<?php 
				$query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
								 $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$condition = $row["condition"];
									$publishTime =  strtotime($row["post_Time"]);
									$updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

								 $sql3 = "select * from `brands` where `id` ='$modelId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}  
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								 $sql6 = "select * from `devices` where `id` = '$deviceId'	 ";
	                             $res6 = mysqli_query($conn,$sql6);
                                 $count6 = mysqli_num_rows($res6);
		                          if($count6>0){
		                           while($row6=mysqli_fetch_assoc($res6)){
		                            $deviceName = $row6["name"];	   
								  }} 
								  
								 if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;  
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   }                                if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
									?>
									
				<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
						if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="index.php?q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="index.php?q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="index.php?q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="index.php?q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="index.php?q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
						}
						  						
						}
				                 
					
				?>
			</div>
		</div>		
	</div>
	</div>
	<?php
	
}
?>
<?php
function searchAds(){
	global $conn;
	?>
		<div class=" layout_padding promoted_sectipon" style="background-color:white; margin:0;">
		<div class="container adContainer">
				<?php 
				 if(isset($_GET["search"])){

                      $name = $_GET["search"];
                      $location = $_GET["city"];
                      $mtype = $_GET["mType"];
                      $model = $_GET["model"];

      /*  var model =  document.getElementById("dropdown-menu1-select").value;
        var mtype =  document.getElementById("dropdown-menu2-select").value	;	
        var searchName = document.getElementById("searchName").value;
*/


		
					if($location != ""){
					  if (is_numeric($location)){
						         $sql4 = "select * from `cities`  where `id` = '$location'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $ciName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
									if (strlen($ciName) > 5){ 
                                     $new_text = substr( $ciName, 0, 10);
                                     $new_text = trim($new_text);
                                     $newcName =  $new_text . "...";
									}
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
									 
								    }}
									$lo = $disName."/ ".$newcName;
									$newLo = $lo;
									?>
					  <script type="text/javascript">
					     document.getElementById("searchCity").value = '<?php echo $location ?>';
					     document.querySelector('.selectLoc').innerHTML = '<?php echo $lo; ?>';
						 document.querySelector('.selectLoc').style.color ="#2222FF";
					  </script>
					  <?php
					  }else{
						  $loc = "All Of ";
						  $lo = $loc.$location;
						?>
					  <script type="text/javascript">
					     document.getElementById("searchCity").value = '<?php echo $location ?>';
					     document.querySelector('.selectLoc').innerHTML = '<?php echo $lo; ?>';
						 document.querySelector('.selectLoc').style.color ="#2222FF";
					  </script>
					  <?php  
					  }
				 }else{
					 $lo = "Location";
					 ?>
					  <script type="text/javascript">
					      document.getElementById("searchCity").value = '<?php echo "" ?>';
					     document.querySelector('.selectLoc').innerHTML = '<?php echo $lo; ?>';
						 document.querySelector('.selectLoc').style.color ="black";
					  </script>
					  <?php
				 }
					  if($mtype == ""){
						  $mt = "Modify Type";
						  $SearchMtype = "";
						  ?> <script type="text/javascript">
						   document.getElementById("dropdown-menu2-select").value = '<?php echo ""; ?>';
						   document.querySelector('.clickMtypeValue').style.color ="black";
					      </script>
						  <?php
						}else{
						     $sql = "select * from `devices` where `id` ='$mtype'	 ";
	                             $res3 = mysqli_query($conn,$sql);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mt = $row3["name"];	
                                    $SearchMtype = $mt;									
								  }}
								  ?>
					  <script type="text/javascript">
					      document.getElementById("dropdown-menu2-select").value = '<?php echo $mtype; ?>';
						  document.querySelector('.clickMtypeValue').style.color ="#2222FF";
					  </script>
					  <?php
						}
					  if($model == ""){
						  $md = "Model";
						  $SearchModel = "";
						  ?>
					      <script type="text/javascript">
						    document.getElementById("dropdown-menu1-select").value ='<?php echo ""; ?>';
						    document.querySelector('.clickModelValue').style.color ="black";
					      </script>
					     <?php
						}else{
						         $sql3 = "select * from `brands` where `id` ='$model'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $md = $row3["name"];
                                    $SearchModel = "<span  style='margin: 0 20px;  float:right;'><i class='fa fa-align-justify' style='font-size:13px; color:#3333FF;'></i> <span class='clickModelValue' style='margin:0 5px; font-size:13px;'> {$md} , {$SearchMtype}</span></span>";									
								  }} 
								  ?>
					  <script type="text/javascript">
					      document.getElementById("dropdown-menu1-select").value ='<?php echo $model; ?>';
						  document.querySelector('.clickModelValue').style.color ="#2222FF";
					  </script>
					  <?php
						}
					  ?>
					  <script type="text/javascript">
					     document.querySelector('.clickModelValue').innerHTML = '<?php echo $md; ?>';
						 document.querySelector('#searchName').value = '<?php echo $name; ?>';
						 document.querySelector('.clickMtypeValue').innerHTML = '<?php echo $mt; ?>';
					  </script>
					  <?php
				  if($location == ""){
					  if($model =="" && $mtype == "" && $location ==""){
						  
				    $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
						  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1- <?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   }                                if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
								  }
									  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }
				  }	  
                  if (is_numeric($location)) {
                    if($model !="" && $mtype != "" && $location !=""){
						
					$query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1' AND `city_Id` ='$location'  AND `brand` ='$model' AND `device` = '$mtype'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `city_Id` ='$location'  AND `brand` ='$model' AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
 		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 <?php   
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   }                                if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php  
	         }else if($model =="" && $mtype != "" && $location !=""){
				 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' AND `city_Id` ='$location' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `city_Id` ='$location'  AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                         if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   }                                if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								 if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php  
				 }else if($model =="" && $mtype == "" && $location !=""){
					 
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' AND `city_Id` ='$location' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `city_Id` ='$location'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
                                   if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model =="" && $mtype == "" && $location ==""){
					 
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%' ) ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
							        if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
								  }
								if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model !="" && $mtype == "" && $location !=""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1' AND `city_Id` ='$location'  AND `brand` = '$model'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `city_Id` ='$location'  AND `brand` = '$model' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
								  }
							 if( $total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
							 }
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model !="" && $mtype == "" && $location ==""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand` ='$model' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand` ='$model'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                         if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                            <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if( $total_rows > 2){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model =="" && $mtype == "" && $location !=""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1'   AND  `city_Id` ='$location'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND  `city_Id` ='$location'AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }
			      }else{
					  if($location =="Srilanka"){
						if($model !="" && $mtype != "" && $location !=""){
							$query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `brand` ='$model' AND `device` = '$mtype' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `brand` ='$model' AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
								 if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
								  }
								 if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
	         }else if($model =="" && $mtype != "" && $location !=""){
				 
				 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1'   AND `device` = '$mtype'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model =="" && $mtype == "" && $location !=""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									 if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                            <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model =="" && $mtype == "" && $location ==""){
					 
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                         if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									 if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                            <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>   
									<?php
								  }
								 if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model !="" && $mtype == "" && $location !=""){
					 
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1'  AND `brand` = '$model'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND `brand` = '$model' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								   while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									 if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model !="" && $mtype == "" && $location ==""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1' AND `brand` ='$model'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SEECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `brand` ='$model'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
							 <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>   
									<?php
								  }
								if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php  
				 }else if($model =="" && $mtype == "" && $location !=""){
					 
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND  (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                         if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
			            }  
			      }else{
					   if($location == "" ){
						   	if($model !="" && $mtype == "" && $location ==""){
								
								$query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1'   AND `brand` ='$model'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND `brand` ='$model'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = "All Of ".$newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
	                          }elseif($model !="" && $mtype != "" && $location ==""){
								  
					$query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1'   AND `brand` ='$model' AND `device`='$mtype'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND `brand` ='$model' AND `device`='$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = "All Of ".$newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                            <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
	                          }
					   }else{
						$sql = "SELECT * FROM `districts` WHERE `name_en`='$location'";
	                    $res = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($res);
		                   if($count>0){
						   while($row=mysqli_fetch_assoc($res)){
							   $location = $row["id"];
							   $newLo =  $row["name_en"];
						   }}  
						if($model !="" && $mtype != "" && $location !=""){
							$query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1' AND `district_Id` ='$location'  AND `brand` ='$model' AND `device` = '$mtype'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$location'  AND `brand` ='$model' AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = "All Of ".$newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									 if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
	         }else if($model =="" && $mtype != "" && $location !=""){
				 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1' AND `district_Id` ='$location'  AND `device` = '$mtype'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$location'  AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                         if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								 if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php  
				 }else if($model =="" && $mtype == "" && $location !=""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1' AND `district_Id` ='$location' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$location'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									 if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                            <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php  
				 }else if($model =="" && $mtype != "" && $location ==""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1' AND `device` = '$mtype'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									 if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
										<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
								<?php
								  }
								 if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model !="" && $mtype != "" && $location ==""){
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1'   AND `brand` = '$model' AND `device` = '$mtype'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND `brand` = '$model' AND `device` = '$mtype' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							 
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>  
									<?php
								  }
								 if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php  
				 }else if($model =="" && $mtype == "" && $location ==""){
					 
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`   WHERE `Admin_Approval` ='1' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'  AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>   
									<?php
								  }
								if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }else if($model !="" && $mtype == "" && $location !=""){
					 
					 $query = "SELECT COUNT(id) AS total_rows FROM `phoneads`  WHERE `Admin_Approval` ='1'   AND `brand` = '$model' AND `district_Id` ='$location'";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				                $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1'   AND `brand` = '$model' AND `district_Id` ='$location' AND (`discription` LIKE '%$name%' OR `device_name` LIKE '%$name%' OR `brand_name` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                         if($count>0){
									  
									if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = ' " '.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
												?>
									<div class="images_main" id="searchmanuAds">
									 <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:16px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:18px; margin:0 3px;">1-<?php echo $count; ?></span><b> as Search Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:1; color:#565e5e; font-weight:610; font-size:13px;">
									    <span><?php echo $SearchLocation; ?></span>
									      <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									 <div class="row adrow w3-card">
									 <br><br>
									 	 <?php   
								    while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$condition = $row["condition"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>   
									<?php
								  }
								  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}
								  
								  }else{
									  
									  if($name == ""){
									 $searchName ="";
									}else{
									 $searchName = '"'.$name.'"';
									}  
									if($location == ""){
										$SearchLocation = "";
									}else{
										if(is_numeric($location)){
											$Locaton = $newLo;
										}else{
											
											$Locaton = "All Of ".$location;
										}
									$SearchLocation = "<span  id='locationBtn' style='margin: 0 5px; float:right;'><i class='fa fa-map-marker' style='font-size:13px; color:#3333FF;'></i>  <span class='selectLoc' style='margin:0 5px;font-size:13px;'> {$Locaton} </span></span>";
									}
									
									  ?>	 
									<div class="images_main" id="searchmanuAds">
				                     <div class="row w3-card-2 w3-border" style="background-color:white; padding:15px 5px;">
									 <div style="width:100%;">
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
										  <span><?php echo $SearchModel; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phones were found. Please Try other Search Options !</span>
									 </div>
									 <?php 
                                      									 
								  }
								?>
								<?php 
				 }  
		       }
		    }
				  }
			  
			}
				?>
			</div>
		</div>	
	</div>
	</div>
	<?php
	
}
?>
<?php
function addpost(){
	global $conn;
	?>
	 <div id="mypost" class="postmanu" >
   <div class="post-content" >
   <div style="opacity:1;">
    <p class="logClose" style="text-align:right; cursor:pointer;" onclick="closepost()">&times;</p>
    <h1>Create new post ad, </h1>
    <h6>Please fill in this form to create a post.</h6>
    <div style="text-align:right;" id="tags">
	<span id="t" style='font-size:16px; margin:0px; color:blue;'><i class='fa fa-map-marker-alt' style='font-size:16px; margin:0 2px;'></i> beliatta </span>
	<span  style='font-size:16px; margin:0 10px; color:blue;'><i class='fa fa-tag' style='font-size:16px; margin:0px; '></i> beliatta </span>
	</div> 
	<hr style="margin:0;">
  
<div id="step1" >
  <div style="text-align:center; width:100%;"><br>
     <p style="font-size:20px; letter-spacing: 1px; opacity:0.9;">Welcome! you can post an ad.</p>
     <p style="  letter-spacing: 2px; opacity:0.7;">Durakathanapala.lk</p>
	 <p style=" color:#7777FF; opacity:0.9;">Choose any option </p>
  </div>
  <div class="w3-row w3-border " style="margin:20px; text-align:center;">
   <div class="w3-quarter " style="padding:20px;">
     <div class="card " >
      <div class="card-header" style="font-weight:bold;">&#128176; A Phone Ad</div>
      <div class="card-body"><span class="cardlabel" id="1" >create for new ad, <i class='fa fa-angle-double-right' style='font-size:12px;'></i></span></div> 
     </div> 
   </div>
   <div class="w3-quarter " style="padding:20px;">
     <div class="card">
      <div class="card-header" style="font-weight:bold;">&#9889; A Shop Ad</div>
      <div class="card-body"><span class="cardlabel" id="2">create Shop Ad, <i class='fa fa-angle-double-right' style='font-size:12px'></i></span></div> 
     </div> 
    </div>
    <div class="w3-quarter" style="padding:20px;">
     <div class="card">
      <div class="card-header" style="font-weight:bold;">&#128295; Phone Parts Ad</div>
      <div class="card-body"><span class="cardlabel" id="3">create Phone Parts Ad, <i class='fa fa-angle-double-right' style='font-size:12px'></i></span></div> 
     </div> 
    </div>
    <div class="w3-quarter" style="padding:20px;">
     <div class="card">
      <div class="card-header" style="font-weight:bold;"> &#128736; Phone Service Shop Ad</div>
      <div class="card-body"><span class="cardlabel" id="4">create Service Shop Ad, <i class='fa fa-angle-double-right' style='font-size:12px'></i></span></div> 
     </div> 
    </div>
   </div> 
</div>
<div id="step2" >
<?php  location();     ?>
</div>

</div>
</div>
</div>
 <div id="laststep">	
 <div id="mypost2" class="postmanu" >
 <div >
   <div class="post-content2" style="overflow-x: hidden;">
    <div id="post">
    <p class="logClose" style="text-align:right; cursor:pointer;" onclick="closepost2()">&times;</p>
    <h1>Create new post ad, </h1>
    <h6>Please fill in this form to create a post.</h6>
	<form  method="POST" enctype="multipart/form-data" id="postForm">
    <div   id="tag"><br>
	  <span id="t" style="font-size:15px; margin:0 10px; color:#6666FF; cursor:pointer;"><i <i class="fa fa-map-marker" style='font-size:18px; margin:0 5px;'></i><span onclick="changePostLocation()" style="color:black;"> Hambanthota/ Beliatta </span></span>
	  <span  style="font-size:15px; margin:0 10px;color:#6666FF; cursor:pointer;"><i class='fa fa-tag' style='font-size:18px; margin:0 5px; '></i> <span style="color:black;">Phone</span> </span>
	</div>
	<hr style="margin:0;"> <br> <br> 
<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Brand:</b></label>
    <select style="cursor:pointer;" id="brand"  name="model">
           <option ><span style='cursor:pointer;' ></span></option>
                              <?php 
								 $sql = "select * from `brands`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mName = $row["name"];
			                        $mId = $row["id"];
								    ?><option  value="<?php echo $mId; ?>"> <span style='cursor:pointer; color:red;' ><?php echo $mName; ?></span></option><?php
								  }}
								?>
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="modelHint"></span>
	</div>
	<div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Device:</b></label>
    <select style="cursor:pointer;" id="modifyType" name="modify_Type">
      <option ><span style='cursor:pointer;' ></span></option>
                               <?php 
								 $sql = "select * from `devices`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mtName = $row["name"];
			                        $mtId = $row["id"];
								    ?><option  value="<?php echo $mtId; ?>"> <span style='cursor:pointer;' ><?php echo $mtName; ?></span></option><?php
								  }}
								?>
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="mtypeHint"></span>
	</div>
</div>
<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Model Year:</b></label>
     <input type="number" class="form-control" id="modelYear"  name="model_Year" placeholder=" Enter model year ex-:(2022)">
	 <span style="font-size:12px; color:red; opacity:1;" id="myearHint"></span>
	</div>
	<div class="w3-half postpad" >	
	  <label for="price"><b>Price (Rs):</b></label>
      <input type="number" class="form-control" id="price"  name="price" placeholder="Choose a good price you have to pay">
	  <span style="font-size:12px; color:red; opacity:1;" id="priceHint"></span> 
</div>	
</div>		
<div class=" w3-row w3-margin postpad" style=" width:100%;" >
 <div> <label for="sel1" class="form-label"><b>Condition:</b></label></div>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="Used" checked>
      <label class="form-check-label" for="radio1">Used</label>
    </div> 
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="Reconditioned" checked>
      <label class="form-check-label" for="radio1">Reconditioned</label>
    </div>
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="New" checked>
      <label class="form-check-label" for="radio1">New</label>
    </div>
    </div>
    </div>
</div>
	<div class="w3-margin postpad">
	<label for="email"><b>Description:</b></label>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="5" id="discription" name="discription" placeholder="  Enter Description = More info to motivate buyers"></textarea>
	  <span style="font-size:12px; color:red; opacity:1;" id="disHint"></span>
    </div>
	</div>

<div class="w3-margin postpad" >
	<div class=" w3-panel w3-border-bottom"></div>
	   <label for="email"><b>Add upto 4 photos <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title=" Add 5 Images ( less than 5mb ) "></i></b></label>
	 <span style="font-size:12px; color:red; opacity:1;" id="imageHint"></span>
	   	<div class="icard">
        <span class="pip">
		      <input type="file" class="file1" onchange="loadFile(event)" id="img1" name="img1" >
              <img class="imageThumb" id="output1" src=""  title="" />
			  <span id="browse1" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove">&times;</span>
        </span>	
        <span class="pip" id="span2">
		      <input type="file" class="file2" onchange="loadFile2()" id="img2" name="img2" >
              <img class="imageThumb" id="output2" src=""  title="" />
			  <span id="browse2" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove2">&times;</span>
        </span>
        <span class="pip" id="span3">
		      <input type="file" class="file3" onchange="loadFile3()" id="img3" name="img3" >
              <img class="imageThumb" id="output3" src=""  title="" />
			  <span id="browse3" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove3">&times;</span>
        </span>
        <span class="pip" id="span4">
		      <input type="file" class="file4" onchange="loadFile4()" id="img4" name="img4" >
              <img class="imageThumb" id="output4" src=""  title="" />
			  <span id="browse4" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove4">&times;</span>
        </span>	
        </div>
	<div id="contactCard" class="contactCard" style="display:none;">	
	<div class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	  <div class="w3-half"><label><B>Name</B> -  </label></div>
	  <div class="w3-half "><label><B>Email</B> - </label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> 0712403436<span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> 0745896312<span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
		    </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>
    <div id="contactCard2" style="display:none;">
	<span style="font-size:12px; color:red; opacity:1;" id="pnHint"></span>
	 <div class=" w3-panel" ><span><b>Add More Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>	
		 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
         <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
              <li style="width:90%; padding:10px 0; display:none;" id="exnum1" ><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <span id="ex1" >0710000000</span><input id="exin1" name="addPNum1" type="nubmer" value=""><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li><br>
			  <li style="width:90%; padding:10px 0; display:none;" id="exnum2" ><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <span id="ex2" >0720000000</span><input id="exin2" name="addPNum2" type="nubmer" value=""><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
             </ul>
			 </div>
            </div>
            <div class=" w3-half" >
    		    <div id="masagebox" class="masagebox">
			    <div class="numInputBox">
                  <input type="number" id="addPnum" class="addNumField" id="fname" name="createWheelAd" placeholder=" Add Phone Number... ">
                  <a class="btn success" onclick="addnumlist()">Add Number</a>
                </div>
	            </div>
            </div>
	    </div>
	   </div>
      </div>
	 </div>
</div>	
<div class="w3-margin postpad" >		
    <div class="w3-half categorybtn">
	 <div  id="checkDetials" ><button type="button" name="createWheelAd" class="signupbtn checkbtn"><b>add post</b></button></div>
	 <div  id="postnow" ><button type="button"  class="signupbtn postaddbtn" ><b>add post now</b></button></div>
     <div  class=" "> <button type="button" class="cancelbtn"><b>Cancel</b></button></div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

 <div id="laststep2">	
 <div id="mypost2" class="postmanu" style="display:inline;">
 <div >
   <div class="post-content2" style="overflow-x: hidden;">
    <div id="post">
    <p class="logClose" style="text-align:right; cursor:pointer;" onclick="closepost2()">&times;</p>
    <h1>Create new post ad, </h1>
    <h6>Please fill in this form to create a post.</h6>
	<form  method="POST" enctype="multipart/form-data" id="postFormshop">
    <div   id="tagshop"><br>
	  <span id="t" style="font-size:15px; margin:0 10px; color:#6666FF; cursor:pointer;"><i  class="fa fa-map-marker" style='font-size:18px; margin:0 5px;'></i><span onclick="changePostLocation()" style="color:black;"> Hambanthota/ Beliatta </span></span>
	  <span  style="font-size:15px; margin:0 10px;color:#6666FF; cursor:pointer;"><i class='fa fa-tag' style='font-size:18px; margin:0 5px; '></i> <span style="color:black;">Phone</span> </span>
	</div>
	<hr style="margin:0;"> <br> <br> 
	<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Shop Name:</b></label>
     <input type="text" class="form-control" id="shopName"  name="shopName" placeholder=" Enter shop name ex-:(ABC shop)">
	 <span style="font-size:12px; color:red; opacity:1;" id="shopNameHint"></span>
	</div>
	<div class="w3-half postpad" >	
	  <label for="price"><b>Shop Owner Name:</b></label>
      <input type="text" class="form-control" id="ownerName"  name="ownerName" placeholder="Enter the shop owner name ex-:(lahiru) ">
	  <span style="font-size:12px; color:red; opacity:1;" id="ownerNameHint"></span> 
</div>	
</div>
<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Shop Open In:</b></label>
    <select style="cursor:pointer;" id="openDays"  name="openDay">
      <option ><span style='cursor:pointer;'  >none</span></option>
      <option  value="On weekdays (monday to friday)"> <span style='cursor:pointer; color:red;' >On weekdays (monday to friday)</span></option>
      <option  value="On weekends (saturday and sunday)"> <span style='cursor:pointer; color:red;' ></span>On weekends (saturday and sunday)</option>
      <option  value="Every day"> <span style='cursor:pointer; color:red;' ></span>Every day</option>		  
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="openDaysHint"></span>
	</div>
	
	<div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Shop Close In:</b></label>
     <select style="cursor:pointer;" id="closeDays"  name="closeDay">
       <option ><span style='cursor:pointer;'  >none</span></option>
      <option  value="Poya days only"> <span style='cursor:pointer; color:red;' >Poya days only</span></option>
      <option  value="On public holidays and Poya days"> <span style='cursor:pointer; color:red;' ></span>On public holidays and Poya days</option>
      <option  value="On public holidays only"> <span style='cursor:pointer; color:red;' ></span>On public holidays only</option>		  
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="closeDaysHint"></span>
	</div>
</div>
	<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Shop Contact No:</b></label>
     <input type="number" class="form-control" id="shopContact1"  name="shopContact1" placeholder=" Enter shop contact number ex-:(07########)">
	 <span style="font-size:12px; color:red; opacity:1;" id="shopContact1Hint"></span>
	</div>
	<div class="w3-half postpad" >	
	  <label for="price"><b>Shop Contact No-2:</b></label>
      <input type="number" class="form-control" id="shopContact2"  name="shopContact2" placeholder="Enter shop contact number 2 ex-:(07########) ">
	  <span style="font-size:12px; color:red; opacity:1;" id="shopContact2Hint"></span> 
</div>	
</div>		
<div class=" w3-row w3-margin postpad" style=" width:100%;" >
 <div> <label for="sel1" class="form-label"><b>Open Time:</b></label></div>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third " >
     <div class="form-check" >
      <input type="radio" class="form-check-input openTime" id="openTime" name="openTime" value="24 hours" checked>
      <label class="form-check-label" for="radio1">24 hours</label>
    </div> 
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input openTime" id="openTime"   name="openTime" value="12 hours" checked>
      <label class="form-check-label" for="radio1">12 hours</label>
    </div>
    </div>
    <div class="w3-third ">
     <div class="form-check"  style="display:flex;">
      <input type="radio" class="form-check-input openTime" id="openTime"  name="openTime" value="Other" >
      <label class="form-check-label" for="radio1">Other</label>
	    <div style="width:180px; margin:-8px 30px;" >
		   <input type="text" style="height:8px; font-size:14px;" id="otherOpenTime" name="otheropenTime" value="08am to 04pm" />
		</div>
    </div>
    </div>
    </div>
</div>
  <div class="w3-margin postpad">
	<label for="email"><b>Shop Address:</b></label>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="3" id="addressShop" name="addressShop" placeholder="  Enter Shop Address..."></textarea>
	  <span style="font-size:12px; color:red; opacity:1;" id="addressShopHint"></span>
    </div>
	</div>
	
	<div class="w3-margin postpad">
	<label for="email"><b>About Shop:</b></label>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="5" id="aboutShop" name="aboutShop" placeholder="  Enter About for Shop = More info to motivate users"></textarea>
	  <span style="font-size:12px; color:red; opacity:1;" id="aboutShopHint"></span>
    </div>
	</div>

<div class="w3-margin postpad" >
	<div class=" w3-panel w3-border-bottom"></div>
	   <label for="email"><b>Add upto shop photos <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title=" Add 5 Images ( less than 5mb ) "></i></b></label>
	 <span style="font-size:12px; color:red; opacity:1;" id="imageHintshop"></span>
	   	<div class="icard">
        <span class="pip">
		      <input type="file" class="file10" onchange="loadFile10()" id="img10" name="img10" >
              <img class="imageThumb" id="output10" src=""  title="" />
			  <span id="browse10" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove10">&times;</span>
        </span>	
        <span class="pip" id="span2">
		      <input type="file" class="file11" onchange="loadFile11()" id="img11" name="img11" >
              <img class="imageThumb" id="output11" src=""  title="" />
			  <span id="browse11" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove11">&times;</span>
        </span>
        <span class="pip" id="span3">
		      <input type="file" class="file12" onchange="loadFile12()" id="img12" name="img12" >
              <img class="imageThumb" id="output12" src=""  title="" />
			  <span id="browse12" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove12">&times;</span>
        </span>
        <span class="pip" id="span4">
		      <input type="file" class="file13" onchange="loadFile13()" id="img13" name="img13" >
              <img class="imageThumb" id="output13" src=""  title="" />
			  <span id="browse13" style=" position:absolute; margin-top:30px; margin-left:-23px; font-size:14px; color:blue;">browse</span>
			  <span class="remove" id="remove13">&times;</span>
        </span>	
        </div>
	<div id="shopcontactCard" >	
	<div class=" w3-panel" ><span><b>Publisher Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	  <div class="w3-half"><label><B>Name</B> -  </label></div>
	  <div class="w3-half "><label><B>Email</B> - </label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> 0712403436<span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> 0745896312<span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
            </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>
</div>	
<div class="w3-margin postpad" >		
    <div class="w3-half categorybtn">
	 <div  id="checkDetials" class="checkDetials"><button type="button" name="createlAdshop" class="signupbtn checkbtn"><b>add post</b></button></div>
	 <div  id="postnow" class="postnow"><button type="button"  class="signupbtn postaddbtn" ><b>add post now</b></button></div>
     <div  class=" "> <button type="button" class="cancelbtn"><b>Cancel</b></button></div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
	<?php
}
?>
<?php
function login(){
	 ?><div id="myModal" class="logmanu" >
  <!-- Modal content -->
  <div class="log-content">
	<p class="logClose lclose" style="text-align:right; cursor:pointer; opacity:0.7;" onclick="closeLogMain()">&times;</p>
  <form action="action.php" style="opacity:0.9;">
    <div class="roww">
	    
	   <h2 style="text-align:center">Login with Social Media or Manually</h2><br><br>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>
      <div class="col" >
        <button type="button" onclick="postCreateGoogleLogin()" class="loginBtn loginBtn--google"> Login with Google</button><br>
		 <button type="button" class="loginBtn loginBtn--facebook" style="margin-top:15px;"><a href="javascript:void(0)" onclick="fbLogin()" >Login with Facebook</a></button>
      </div>
      <div class="col" >
        <div class="hide-md-lg"><br>
          <p><b>Or </b>sign in manually:</p>
        </div>
        
        <input style="width:100%;" type="text" name="username" id="username" placeholder="Username" required>
		<div class="passinput" style="width:100%;">
          <input type="password" style="width:100%;" name="password" id="logPassword" placeholder="Password" required />
		  <label class="passView" ><i class="fa fa-eye" id="togglePasswordlog" style="font-size:16px"></i></label>
	    </div> 
		<div id="message">
            <p id="letter" class="invalid">a <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital</b> letter</p>
            <p id="number" class="invalid">1 <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
		<?php
	    if(isset($_GET["forgot"])){
     	    ?><input type="button" class="userLogin" value="Login" style="width:100%; margin:10px 0; color:white; background:#6666FF; "><?php
		}else{
	        ?><input type="button" onclick="postLogin()" value="Login" style="width:100%; margin:10px 0; color:white; background:#6666FF; "><?php		
		}
		?>
        
      </div>
      
    </div>
  </form>

<div class="bottom-container" style="padding:0; margin:10px 10px 0px;">
  <div class="row">
    <div class="col logbt" style="background-color:#6666FF; opacity:1;" >
	<?php
	 if(isset($_GET["forgot"])){
		 ?><a href="user/register.php" style="background-color:#6666FF; color:white;"  class="logbt2" >Sign Up</a><?php
	 }else{
		 ?><a  style="background-color:#6666FF; color:white;" onclick="postRegister()" class="logbt2" >Sign Up</a><?php
	 }
	?>
    </div>
    <div class="col logbt" style="background-color:gray;">
      <a  style="color:white; background-color:gray;" onclick="postforgot()" class="logbt2">Forgot password?</a>
    </div>
  </div>
</div>
  </div>
</div><?php
}
?>

<?php

 function forgotform(){
	 global $conn;
?>	 <div id="fogModal" class="fogmanu" >
 <div class="fog-content" id="">  
 <?php
    if(isset($_GET["forgot"])){
		?><p class="logClose" style="text-align:right; cursor:pointer; margin:5px;" ><a style="color:blue;" href="user/login.php">&times;</a></p><?php
	}else{
		?><p class="logClose" style="text-align:right; cursor:pointer; margin:5px;" onclick="closefogform()">&times;</p><?php
	}
 ?> 
  <div class="panel-body" style="opacity:0.9;">      <span class="keyIcon"><i class="fa fa-key"></i></span>
			    	          <div class="form-top" style="text-align:center;">
	                        		<div class="form-top-left">
	                        			<h3 style="text-align:center; color:#6666FF;">Forgot Password</h3>
	                            		<p>Enter email and Enter the Send Email Button:</p>
	                        		</div>
	                            </div>
                <div class="text-center">
                  <h3 style="text-align:center; color:#6666FF;"><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center" style="text-align:center; color:#6666FF;">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
				  <div class="alert alert-danger" id="fogalert" style="text-align:left; padding:10px;"><strong>Alert-:</strong> <span id="fogErroMsg"></span>
				  <span class="logClose" style="float:right; margin-top:-12px; margin-left:13px; cursor:pointer; font-size:14px; position:relative;" onclick="this.style.display='none'; document.getElementById('fogalert').style.display = 'none'">&times;</span>
				  </div> 
                   <form id="forgot-form"  method="POST">  
                      <div class="form-group" >
					  <div class="input-group" >
						  <input id="foguname" name="foguname" placeholder=" Username..." class="form-control" style="padding:5px;" type="text">                        
                        </div>
						<p style="text-align:center; font-weight:bold; font-size:20px; margin:5px 0;">Or</p>
                        <div class="input-group" >
                          <input id="fogemail" name="fogemail" placeholder=" Email address..." class="form-control"  type="email">
                        </div><span style="font-size:12px; text-align:left; color:red; opacity:1;" id="fogenterhint"></span>
                      </div>
                      <div class="form-group">
                        <button name="recover-submit" style="background-color:#6666FF;" class="btn btn-lg btn-primary btn-block fogPost"  type="button">Reset Password</button>
                      </div>
				<?php	
				     if(isset($_GET["forgot"])){
						  ?>
						 <a  href="user/register.php" style="text-align:center; color:#6666FF; cursor:pointer;">Create new Account</a><br>
					     <a  href="user/login.php" style="text-align:center; color:#6666FF; cursor:pointer;"><span style="color:black; font-weight:bold;">Or</span> Login</a><br>
						 <?php
					 }else{
						 ?>
						 <a  onclick="backfogform()" style="text-align:center; color:#6666FF; cursor:pointer;">Create new Account</a><br>
					     <a  onclick="backfogform()" style="text-align:center; color:#6666FF; cursor:pointer;"><span style="color:black; font-weight:bold;">Or</span> Login</a><br>
						 <?php
					 }
				?>  
                    </form>
    
                  </div>
                </div>
              </div>
 </div>
 </div><?php 
 }

 function registerForm(){
	 global $conn;
	?>  <div id="regModal" class="regmanu" >
 <div class="reg-content" id=""> 
 <p class="logClose rclose" style="text-align:right; cursor:pointer; opacity:0.7;" onclick="closeregform()" >&times;</p>
  	<div class="limite" style="opacity:0.8">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
 <form id="regForm" action="" method="POST" enctype="multipart/form-data">
 <div class="regform">
  <h1><b>Register Form</b></h1>
  <br>
  <!-- One "tab" for each step in the form: -->
   <div class="tab" >
    <h2 style="color:#6666FF; font-weight:bold; text-align:center;">Wlecome </h2>
	<h4 style="color:#6666FF; font-weight:bold; text-align:center;">to</h4>
	<h2 style="color:#6666FF; font-weight:bold; text-align:center;"> Durakathanapala.lk</h2>
  </div>
  <div class="tab">
    <b>First-name:</b><br>
    <input placeholder="First name..." id="fname" oninput="this.className = ''" name="prfname"><br><br>
	<b>Last-name:</b><br>
    <input placeholder="Last name..." id="lname" oninput="this.className = ''" name="prlname"><br>
  </div>
  <div class="tab">
    <b>Email:</b><br>
    <input placeholder="E-mail..." id="email" onkeyup="enterEmail()" oninput="this.className = ''" name="premail"><br>
	<span style="font-size:12px; color:red; opacity:1;" id="emailhint"></span><br>
	<b>Phone-number:</b><br>
    <input placeholder="Phone number 1..." class="redborder" id="pno1" onkeyup="enterNum1()" oninput="this.className = ''" name="prpno1"><br>
	<span style="font-size:12px; color:red; opacity:1;" id="pno1hint"></span>
  </div>
  <div class="tab">
    <b>Gender:</b><br>
    <select id="gender" placeholder="Select your gender..." name="prgender" >
								<option value="male">male</option>
								<option value="female">female</option>					
							  </select><br>
	<b>City:</b><br>
	<select id="city" placeholder="Select your district..." name="prcity" >
								<option value="">Select a city...</option>
								<?php 
								 $sql = "select * from `cities`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $cName = $row["name_en"];
			                        $cId = $row["id"];
								    ?><option value="<?php echo $cId; ?>"> <?php echo $cName; ?></option><?php
								  }}
								?>				
							  </select>				  
  </div>
  <div class="tab">
          <b>profile-Image:</b>
          <p style="text-align:center;"> 
		  <span class="pi" id="pi">
		      <input type="file" class="file6" id="image" onchange="loadFile6()" name="profile" onclick="this.className = ''">
              <img  class="imageThumbp" id="poutput" src=""  title="" />
			  <span id="browse6" style=" position:absolute; margin-top:60px; margin-left:-23px; font-size:14px; color:blue;"><i class="fa fa-upload" style="font-size:18px; "></i> <span style="margin:0 10px 0 0;">browse</span></span>
			  <span class="premove" id="remove6">&times;</span>
			  <span id="changePic" style="position:absolute; margin-left:-20px; top:-70px;  font-size:14px; color:white; cursor:pointer; display:none;">change</span>
           </span>
		   </p>
<br>		   
    <b>Username:</b><br>
    <input placeholder="Username..." id="uname" oninput="this.className = ''" name="pruname" style="pointer-events: none; opacity: 1;"><br><br>
	<b>Password:</b><br>
    <div style="display:flex;"><input placeholder="Password..."  id="pass"  oninput="this.className = ''"  onkeyup="enterPas()" name="" type="password">
	<a  class="eye" id="eye"><i class="fa fa-eye" id="togglePass"></i></a></div>
	<span style="font-size:12px; color:red; opacity:1;" id="pas1hint"></span><br>
   <div style="display:flex;"><input placeholder="Re-Password..." id="repass"  oninput="this.className = ''" onkeyup="enterRePas()" name="pword" type="password">
   <a  class="eye" id="eye"><i class="fa fa-eye" id="togglerePass"></i></a></div>
   <span style="font-size:12px; color:red; opacity:1;" id="pas2hint"></span><br><br>
    <div style="display:flex;" >
	 <p  ><input type="checkbox" id="privacy" name="privacy" value="ok" required></p>
	 <p><span style="margin-left:1px;"> I have read and agree to the website Durakathanapala.lk</span> <a href="https://www.durakathanapala.lk/privacy.php" target="_blank" style="color:blue;">privacy policy</a>.</p>
	</div>
	<span style="font-size:12px; color:red; opacity:1;" id="privacyhint"></span>
  </div>
  
  <div style="overflow:auto;">
    <div id="regbt" style="float:right; display:flex;">
      <button type="button"  id="prevBtn" class="prebtn" onclick="nextPrev(-1)"><b>Previous</b></button>
      <button type="button" id="nextBtn" class="nextbtn"  onclick="nextPrev(1)"><b>Next</b></button>
      <button type="button"  onclick="addpostRegister()"  class="addpostRegister disable-div" ><b>Register</b></button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>
			</div>
		</div>
	</div>
</div>
</div><?php
 }
  function fognewPassModal(){
	  global $conn;
	  ?>
	   <div id="fognewPassModal" class="fognewPassmanu">
  <div class="fognewPass-content"  style="opacity:1;">
  				  <div class="alert alert-danger" id="fogalert4" style="text-align:left; padding:10px;"><strong>Alert-:</strong> <span id="fogErroMsg4"> .</span>
				  <span class="logClose" style="float:right; margin-top:-12px; margin-left:13px; cursor:pointer; font-size:14px; position:relative;" onclick="this.style.display='none'; document.getElementById('fogalert').style.display = 'none'">&times;</span>
				  </div> 
    <div class="container " id="" style="z-index:30;">
  <!-- Instructions -->
  <div class="row">
    <div class="alert alert-success col-md-12" role="alert" id="notes">
	<img style="display:inline;  width:100px; float:right;" src="images/unlock.gif" alt="John" style="width:100%">
      <h4>NOTES:</h4>
      <ul>
        <li>  Add a password with very valid validation below !</i>
      </ul>
    </div>
  </div>
  <!-- Verification Entry Jumbotron -->
  <div class="row">
    <div class="col-md-12" >
      <div class=" text-center" style="margin:0; height:100%; background-color:#ddd; padding:10px;">
        <h2>Create New Password,</h2><br>
        <form method="post" action="" role="form" id="fogCreateNewPassword">
          <div class="col-md-9 col-sm-12" style="margin:0 auto;">
            <div class="form-group form-group-lg"><input style="display:none;"type="text" name="fogotenUname" id="fogotenUname" value=""><input style="display:none;" type="text" name="fogotenEmail" id="fogotenEmail" value="">
              	<span style="float:left; opacity:0.9;"><b>New Password:</b></span><br>
                <div style="display:flex; margin:10px 0 0;"><input style="padding:10px; margin:0;"placeholder="Password..."  id="password"  class="resetFogPass" oninput="this.className = ''"  onkeyup="enterPass()" name="fogCreatePass" type="password">
	            <a  class="eye" id="eye"><i class="fa fa-eye" id="togglePassword"></i></a></div>
	            <span style="font-size:12px; color:red; opacity:1;" id="pass1hint"></span><br>
                <div style="display:flex;"><input style="padding:10px; margin:0;" placeholder="Re-Password..." id="repassword"  class="resetFogRePass" oninput="this.className = ''" onkeyup="enterRePass()" name="fogCreateRePass" type="password">
                <a  class="eye" id="eye"><i class="fa fa-eye" id="togglerePassword"></i></a></div>
                <span style="font-size:12px; color:red; opacity:1;" id="pass2hint"></span><br>
              <button style="background-color:#6666FF;" class="btn btn-primary btn-lg col-md-2 col-sm-2" type="button" onclick="fogCreateNewPassword()" >Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
	  <?php
  }
  
  function fogveryModal(){
	  global $conn;
	  ?>
	   <div id="fogveryModal" class="fogverymanu" >
  <div class="fogvery-content"  style="opacity:1;">
      <div class="alert alert-danger " id="fogalert3" style="text-align:left; padding:10px;"><strong>Alert-:</strong> <span id="fogErroMsg2"> This alert box could indicate .</span>
	   <span class="logClose" style="float:right; margin-top:-12px; margin-left:13px; cursor:pointer; font-size:14px; position:relative;" onclick="this.style.display='none'; document.getElementById('fogalert').style.display = 'none'">&times;</span>
	  </div> 
    <div class="container " id="" style="z-index:30;">
  <!-- Instructions -->
  <div class="row">
    <div class="alert alert-success col-md-12" role="alert" id="notes">
	<img style="display:inline;  width:100px; float:right;" src="images/mail.gif" alt="John" style="width:100%">
      <h4>NOTES</h4>
      <ul>
        <li>Your mail has now received a verification code. Enter that code below !.</li>
        <li>If somehow, you did not recieve the verification email then <a style="color:blue;" onclick="sendfogcode()" >resend the verification email</a></li>
      </ul>
    </div>
  </div>
  <!-- Verification Entry Jumbotron -->
  <div class="row" >
    <div class="col-md-12" >
      <div class=" text-center" style="margin:auto; width:100% height:100%; background-color:#ddd; padding:10px;">
        <h2>Enter the verification code</h2>
        <form method="post" action="confirm" role="form">
          <div class="col-md-9 col-sm-12" style="margin:auto;">
            <div class="form-group form-group-lg">
              <input type="text" class="form-control verifyCodeinput"  id="verifyCode" required><br>
			  <div style="position:relative; top:-20px;"><div id="emailgetfog" style="opacity:0.8; font-size:12px;"></div><span style="text-align:center; color:red; opacity:0.8; font-size:12px;">Time: <span id="timer">2145</span></span></div>	  
              <button style="background-color:#6666FF; position:relative; top:-10px; font-weight:bold;" class="btn btn-primary verifyCodebtn" type="button" onclick="verifyCod()" >Verify</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
	  <?php
  }
?>

<?php
 function viewItem(){
	 global $conn;
	 
	 if(isset($_GET["page"])){   
      if($_GET["page"]=="user-ads-view-Item"){
		   echo '<style> #allManu{display:none;} body{background-color:#ddd;}</style>';
	      $id = $_GET["adId"];
	         $sql = "select * from `phoneads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 $views = $row["views"];
			 $id = $row["id"];
	         $modelId = $row["name"];
			 $condition = $row["condition"];
			 $year = $row["model_Year"];
			 $price = $row["price"];
			 $cityId = $row["city_Id"];
			 $publishTime =  strtotime($row["post_Time"]);
			 $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
			 $sellerId =	$row["seller_Id"];

			}}
?>
   <div id="id01" class="modal" >
  <div class="modal-content animate" >
      <div class="imgcontainer">
	  <div class="scroller">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img id="img01"   style="display:inline; max-width:100%; max-height:100%; width:410px; height:auto;" class="sample-image">
	  </div>
    </div>
  </div>
</div><div>
<label></label>
</div>
  
   <?php 
			$id = $_GET["adId"];
			 $sql = "select * from `rejectads`  where `post` = 'phone' and `postId` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			  $msg = $row["msg"];
			  ?>
			  <div class="alert alert-danger" style="margin:10px;">
               <strong>Error! -:</strong> <?php echo $msg; ?>
              </div>
			  <?php
			}}
	?>
        <div class="w3-row viewAD" >
        <div class=" w3-half " style=" max-height:600px; height:100%;">
                          <!-- card left -->
        <div class = "product-imgs ">
		 <div class="product-imgs-local ">
            <div class="carousel carousel-main loadAds skeleton" data-flickity='{"selectedAttraction": 1, "friction": 1}'>
			<?php 
			$id = $_GET["adId"];
			 $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity" style="max-width:250px; max-height:290px; width:auto; height:auto;" onclick="onClick(this)" alt = "shoe image"></div><?php		 
		 }}
		 
			?>
</div>

<div class="carousel2 carousel-nav loadAds skeleton"
  data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false ,"prevNextButtons": false,"selectedAttraction": 1, "friction": 1}'>
   <?php 
	     $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity"  style="max-width:90px; max-height:100px; width:auto; height:auto;"  alt = "shoe image"></div><?php		 
		 }}
		 
	?>

</div>

         <div class="loadAds skeleton">
		  <div class = "social-links loadAds loadTohide">
            <p> Share :</p>
            <a href = "#">
              <i class = "fa fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-pinterest"></i>
            </a>
          </div>
		  </div>
        </div>
		</div>
		
        </div>
        <div class="cont2 w3-half">
		  <!-- card right -->
	<?php 
	     $sql = "select * from `phoneads`  where `id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$model           = $row['brand'];
	            $mType     = $row['device'];
                $price           = $row['price'];
                $condition       = $row['condition'];
                $model_Year      = $row['model_Year'];
                $discription     = $row['discription'];
	            $city_Id         = $row['city_Id'];
                $seller_Id       = $row['seller_Id'];
				$sellerAcc       = $row['sellerAcc'];
                $postTime	     = $row['post_Time'];
				$postView	     = $row['views'];
				
			      if( $postView < 1000){
					  
					$views = $postView;
					
			      }else if( $postView >= 1000){
					  
					$views = ($postView/ 1000)."K";
					
				  }else if( $postView >= 1000000){
					  
					$views = ($postView/ 1000000)."M";
				  }
				
		    $sql = "select * from `cities` where `id` = '$city_Id' ";
	        $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
		     if($count>0){
		       while($row=mysqli_fetch_assoc($res)){
		        $cityName = $row["name_en"];
			    $disId = $row["district_id"];
			 }}
			 $sql = "select * from `districts` where `id`='$disId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		     if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
		       $districName = $row["name_en"];	   
			 }}	
			 $sql3 = "select * from `brands` where `id` ='$model'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}  
			$sql3 = "select * from `devices` where `id` ='$mType'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mType = $row3["name"];	   
								  }} 
			if($sellerAcc == "normal"){

				$sql3 = "select * from `user` where `UserId` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                                   $fname = $row["fname"];
				                   $lname = $row["lname"];
				                   $fullname = $fname." ".$lname;
				                   $gender = $row["gender"];
				                    if( $gender == "male"){
					                  $m = "Mr.";
				                    }else if( $gender == "female"){
					                  $m = "Mrs.";
				                    }else{
					                   $m = "";
				                    }
				                  $email = $row["email"];
				                  $pno1 = $row["pno1"];	
							
                                   $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno2 = $row["pno1"];									   
				                      }}								  
										   
								  }} 
			}else if($sellerAcc == "google"){
				$sql3 = "select * from `google-user` where `id` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   
				$sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	             $res = mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($res);
		          if($count>0){
		           while($row=mysqli_fetch_assoc($res)){				   
				                   $pno1 = $row["pno1"];	
                                   $pno2 = $row["pno2"];								   
				  }}				   
								  }} 
			}else if($sellerAcc == "facebook"){
				$sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno1 = $row["pno"];
								   
				$sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	             $res = mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($res);
		          if($count>0){
		           while($row=mysqli_fetch_assoc($res)){				   		                	
                                   $pno2 = $row["pno1"];								   
				  }}				   
								  }} 
			}					
            								  
		 }}
	?>	 
        <div class = "product-content loadAds skeleton">
		<div class="loadAds loadTohide">
          <h2 class = "product-title"> <?php echo $mName; ?></h2>
		  <p id="p" >Posted on  <?php echo $postTime; ?>, <?php echo $districName; ?>, <?php echo $cityName; ?></p>
		  <h2 class = "product-price"> Rs <?php echo $price; ?></h2>
          <div class = "product-detail">
		    <ul>
			 <div class="">
              <div class="w3-half ">
               <li ><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Brand: <span> <?php echo $mName; ?></span></li>
               </div>
              <div class="w3-half">
                 <li><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Condition: <span> <?php echo $condition; ?></span></li>
              </div>
            </div>
			 <div class="">
              <div class="w3-half ">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Brand year: <span> <?php echo $model_Year; ?></span></li>
               </div>
              <div class="w3-half">
                
              </div>
            </div>
			 <div class="">
              <div class="w3-half " style="width:100%;">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Device: <span> <?php echo $mType; ?></span></li>
               </div>
              <div class="w3-half" style="width:10%;">
                
              </div>
            </div>
				 <div class="">
              <div class="w3-half ">
			    <label> </label>
               </div>
              <div class="w3-half">
			    <label> </label>
              </div>
            </div>
            </ul>
          </div>
           <div  style="margin:150px 0 0 0;">
	        <p id="ph2">Description: </p>
            <textarea id="p2" style="border:1px solid #ddd; padding:5px;"   rows="7" disabled="disabled"> <?php echo $discription; ?>.</textarea>
		  </div>
          <div class="w3-row w3-border" style="padding:0px;">
		     <div class="w3-row w3-border w3-padding">
		      <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;">For sale by: <span  style="margin:0 7px; background-color:#ddd; padding:3px;"><?php echo $m; ?> <?php echo $fullname; ?></span></label>
			 </div>
			 <div class="w3-row w3-border w3-padding">
			  <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;"><i class="fa fa-phone-square" style="font-size:24px; margin:5px 0; color:green;"></i> Call seller: <span class="snum glow" style="margin:0 7px; background: cornflowerblue;  padding:3px 7px; cursor:pointer;">07X-XXX-XXX</span><span class="snumEn" style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno1; ?></span>
			  <?php
			    if($pno2 == "0"){
					
				}else{
					?><span class="snumEn2" style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno2; ?></span><?php
				}
			  ?>
			  </label>
			 </div>
		  </div>
          <div class = "purchase-info">
		    <div class="w3-row">
             <div class=" w3-third ">
               <button type = "button" style="background-color:yellow;  color:black; font-size:16px; opacity:0.8; font-weight:bold; border:1px solid #ddd;" onclick="postManu()" class = "bt">
               <i class="fa fa-plus-square"></i> Post free ad 
               </button> 
             </div>
             <div class=" w3-third">
                 <button type = "button" style="background-color:white; color:black; opacity:0.9; border:1px solid #ddd;" class = "bt"> <i class="fa fa-ban"></i> Report this ad</button>
             </div>
			 <div class=" w3-third">
			    
			    <label style="float:right; margin:5px; opacity:0.8;"><i class="fa fa-eye" style="font-size:18px"></i> <?php echo $views; ?> views</label>
			 </div>
            </div>
		  </div>
        </div>
        </div>
		</div>
        </div><?php
 }}

  if(isset($_GET["page"])){   
     if($_GET["page"]=="populer-ads-view-Item" || $_GET["page"]=="normal-ads-view-Item"){
    echo '<style> #allManu{display:none;} body{background-color:#ddd;}</style>';
	      $id = $_GET["adId"];
	         $sql = "select * from `phoneads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 $views = $row["views"];
			 $id = $row["id"];
	         $modelId = $row["name"];
			 $condition = $row["condition"];
			 $year = $row["model_Year"];
			 $price = $row["price"];
			 $cityId = $row["city_Id"];
			 $publishTime =  strtotime($row["post_Time"]);
			 $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
			 $sellerId =	$row["seller_Id"];
	
	    $date     = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $now      = $date->format('Y-m-d H:i:s');
		}
		 	if (isset($_SERVER['HTTP_CLIENT_IP'])){
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		}else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else if(isset($_SERVER['HTTP_X_FORWARDED'])){
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		}else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])){
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
		}else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		}else if(isset($_SERVER['HTTP_FORWARDED'])){
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
		}else if(isset($_SERVER['REMOTE_ADDR'])){
        $ipaddress = $_SERVER['REMOTE_ADDR'];
		}else{
        $ipaddress = '';
		}
		
    // Check ip the viewscount data already exist in the database
    $queryCheck = "SELECT * FROM `viewscount` WHERE `ip` = '$ipaddress' AND `postId` = '$id' ";
    $res = mysqli_query($conn,$queryCheck);
    $count = mysqli_num_rows($res);
    if ($count>0){
        $queryPerform = "UPDATE `viewscount` SET `ip` = '$ipaddress', `date` = '$now' WHERE `postId` = '$id' AND `ip` = '$ipaddress' ";
		$finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);
    }else{
        $queryPerform = "INSERT INTO `viewscount`(`id`,`postId`, `ip`, `date`) VALUES ('','$id','$ipaddress','$now')";
		$finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);
		$updateViews = $views + 1 ;
		
		$sql = "UPDATE `phoneads` SET `views`='$updateViews' WHERE `id` = '$id'";
	    $fire=mysqli_query($conn,$sql);
    }
			}
   ?>
   <div id="id01" class="modal" >
  <div class="modal-content animate" >
      <div class="imgcontainer">
	  <div class="scroller">
      <span onclick="document.getElementById('id01').style.display='none'" style="color:red;" class="close" title="Close Modal">&times;</span>
      <img id="img01"  style="display:inline; max-width:100%; max-height:100%; width:410px; height:auto;" class="sample-image">
	  </div>
    </div>
  </div>
</div><div>
<label></label>
</div>
       <div class="w3-row viewAD" >
        <div class=" w3-half " style=" max-height:600px; height:100%;">
                          <!-- card left -->
        <div class = "product-imgs ">
		 <div class="product-imgs-local ">
            <div class="carousel carousel-main loadAds skeleton" data-flickity='{"selectedAttraction": 1, "friction": 1}'>
			<?php 
			$id = $_GET["adId"];
			 $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity" style="max-width:250px; max-height:290px; width:auto; height:auto;" onclick="onClick(this)" alt = "shoe image"></div><?php		 
		 }}
		 
			?>
</div>

<div class="carousel2 carousel-nav loadAds skeleton"
  data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false ,"prevNextButtons": false,"selectedAttraction": 1, "friction": 1}'>
   <?php 
	     $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity" style="max-width:100px; max-height:100px; width:auto; height:auto;"  alt = "shoe image"></div><?php		 
		 }}
		 
	?>

</div>

         <div class="loadAds skeleton">
		  <div class = "social-links loadAds loadTohide">
            <p> Share :</p>
            <a href = "#">
              <i class = "fa fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-pinterest"></i>
            </a>
          </div>
		  </div>
        </div>
		</div>
        </div>
        <div class="cont2 w3-half" style="padding:20px 0;">
		  <!-- card right -->
	<?php 
	     $sql = "select * from `phoneads`  where `id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$model           = $row['brand'];
	            $mType     = $row['device'];
                $price           = $row['price'];
                $condition       = $row['condition'];
                $model_Year      = $row['model_Year'];
                $discription     = $row['discription'];
	            $city_Id         = $row['city_Id'];
                $seller_Id       = $row['seller_Id'];
				$sellerAcc       = $row['sellerAcc'];
                $postTime	     = $row['post_Time'];
				$postView	     = $row['views'];
				
			      if( $postView < 1000){
					  
					$views = $postView;
					
			      }else if( $postView >= 1000){
					  
					$views = ($postView/ 1000)."K";
					
				  }else if( $postView >= 1000000){
					  
					$views = ($postView/ 1000000)."M";
				  }
				
		    $sql = "select * from `cities` where `id` = '$city_Id' ";
	        $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
		     if($count>0){
		       while($row=mysqli_fetch_assoc($res)){
		        $cityName = $row["name_en"];
			    $disId = $row["district_id"];
			 }}
			 $sql = "select * from `districts` where `id`='$disId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		     if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
		       $districName = $row["name_en"];	   
			 }}	
			 $sql3 = "select * from `brands` where `id` ='$model'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mName = $row3["name"];	   
								  }}  
			$sql3 = "select * from `devices` where `id` ='$mType'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row3=mysqli_fetch_assoc($res3)){
		                            $mType = $row3["name"];	   
								  }} 
			if($sellerAcc == "normal"){

				$sql3 = "select * from `user` where `UserId` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                                   $fname = $row["fname"];
				                   $lname = $row["lname"];
				                   $fullname = $fname." ".$lname;
				                   $gender = $row["gender"];
				                    if( $gender == "male"){
					                  $m = "Mr.";
				                    }else if( $gender == "female"){
					                  $m = "Mrs.";
				                    }else{
					                   $m = "";
				                    }
				                  $email = $row["email"];
				                  $pno1 = $row["pno1"];	
							
                                   $sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno2 = $row["pno1"];									   
				                      }}								  
										   
								  }} 
			}else if($sellerAcc == "google"){

				$sql3 = "select * from `google-user` where `googleIdTocken` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno1 = $row["pno"];
								   
				$sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	             $res = mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($res);
		          if($count>0){
		           while($row=mysqli_fetch_assoc($res)){				   		                	
                                   $pno2 = $row["pno1"];								   
				  }}				   
								  }} 
			}else if($sellerAcc == "facebook"){
				$sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$seller_Id'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno1 = $row["pno"];
								   
				$sql = "select * from `phoneadimages`  where `post_Id` = '$id' ";
	             $res = mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($res);
		          if($count>0){
		           while($row=mysqli_fetch_assoc($res)){				   		                	
                                   $pno2 = $row["pno1"];								   
				  }}				   
								  }} 
			}			
            								  
		 }}
	?>	 
        <div class = "product-content loadAds skeleton">
		<div class="loadAds loadTohide">
          <h2 class = "product-title"> <?php echo $mName; ?></h2>
		  <p id="p" >Posted on  <?php echo $postTime; ?>, <?php echo $districName; ?>, <?php echo $cityName; ?></p>
		  <h2 class = "product-price"> Rs <?php echo $price; ?></h2>
          <div class = "product-detail">
		    <ul>
			 <div class="">
              <div class="w3-half ">
               <li ><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Brand: <span> <?php echo $mName; ?></span></li>
               </div>
              <div class="w3-half">
                 <li><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Condition: <span> <?php echo $condition; ?></span></li>
              </div>
            </div>
			 <div class="">
              <div class="w3-half ">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Brand year: <span> <?php echo $model_Year; ?></span></li>
               </div>
              <div class="w3-half">
                
              </div>
            </div>
			 <div class="">
              <div class="w3-half " style="width:100%;">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Device: <span> <?php echo $mType; ?></span></li>
               </div>
              <div class="w3-half" style="width:10%;">
                
              </div>
            </div>
				 <div class="">
              <div class="w3-half ">
			    <label> </label>
               </div>
              <div class="w3-half">
			    <label> </label>
              </div>
            </div>
            </ul>
          </div>
           <div  style="margin:150px 0 0 0;">
	        <p id="ph2">Description: </p>
            <textarea id="p2" style="border:1px solid #ddd; padding:5px;"   rows="7" disabled="disabled"> <?php echo $discription; ?>.</textarea>
		  </div>
          <div class="w3-row w3-border" style="padding:0px;">
		     <div class="w3-row w3-border w3-padding">
		      <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;">For sale by: <span  style="margin:0 7px; background-color:#ddd; padding:3px;"><?php echo $m; ?> <?php echo $fullname; ?></span></label>
			 </div>
			 <div class="w3-row w3-border w3-padding">
			  <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;"><i class="fa fa-phone-square" style="font-size:24px; margin:5px 0; color:green;"></i> Call seller: <span class="snum glow" style="margin:0 7px; background: cornflowerblue;  padding:3px 7px; cursor:pointer;">07X-XXX-XXX</span><span class="snumEn" style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno1; ?></span>
			  <?php
			    if($pno2 == "0"){
					
				}else{
					?><span class="snumEn2" style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno2; ?></span><?php
				}
			  ?>
			  </label>
			 </div>
		  </div>
          <div class = "purchase-info">
		    <div class="w3-row">
             <div class=" w3-third ">
               <button type = "button" style="background-color:yellow;  color:black; font-size:16px; opacity:0.8; font-weight:bold; border:1px solid #ddd;" onclick="postManu()" class = "bt">
               <i class="fa fa-plus-square"></i> Post free ad 
               </button> 
             </div>
             <div class=" w3-third">
                 <button type = "button" onclick="reportAd(<?php echo $id; ?>,'phoneAd')" style="background-color:white; color:black; opacity:0.9; border:1px solid #ddd;" class = "bt"> <i class="fa fa-ban"></i> Report this ad</button>
             </div>
			 <div class=" w3-third">
			    
			    <label style="float:right; margin:5px; opacity:0.8;"><i class="fa fa-eye" style="font-size:18px"></i> <?php echo $views; ?> views</label>
			 </div>
            </div>
		  </div>
        </div>
        </div>
		</div>
        </div>
		<div class="w3-row similarAD">
      <div class=" layout_padding promoted_sectipon" style="background-color:white; padding:20px 10px;">
	     <?php
          if(isset($_COOKIE["durakathanapalalogin"])) {
           ?>
            <h1 class="similar_text">Similar ads for Mobile Phone</h1>
            <button><a href="function/google-map/map.php?adId=<?php echo $id; ?>"> Similar ads for Mobile Phone in Google Map </a></button>
             <hr><br>
           <?php
          }else{
           ?>
             <h1 class="similar_text">Similar ads for Mobile Phone</h1>
             <button><a onclick="alert('Must be logged in to access this feature');"> Similar ads for Mobile Phone in Google Map </a></button>
             <hr><br>
           <?php
          }  
      ?>
		<div class="container adContainer" >
				<div class="row adrow" >
				<?php 
				$query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$disId' AND `id` != '$id' AND `Admin_Approval` ='1' AND `brand` ='$model' AND `device` = '$mType' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
				  
				    $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$disId' AND `id` != '$id'  AND `brand` ='$model' AND `device` = '$mType' ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
		                            while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>   
									<?php
		}
	}else{
		$query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$disId' AND `id` != '$id'  AND `brand` ='$model' AND `device` != '$mType' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
					    $sql = "SELECT * FROM `phoneads` WHERE `Admin_Approval` ='1' AND `district_Id` ='$disId' AND `id` != '$id'  AND `brand` ='$model' AND `device` != '$mType' ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                            <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>   
									<?php
		}
	}else{
		$query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE  `district_Id` ='$disId' AND `id` != '$id' AND `Admin_Approval` ='1'  ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
	  			    $sql = "SELECT * FROM `phoneads` WHERE  `district_Id` ='$disId' AND `id` != '$id' AND `Admin_Approval` ='1'  ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
		                            while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "1 hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
								    if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
										?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>    
									<?php
		}
	}else{
		               $query = "SELECT COUNT(id) AS total_rows FROM `phoneads` WHERE   `id` != '$id'  AND `Admin_Approval` ='1' ";
		            $result_set = mysqli_query($conn,$query);
				    $result = mysqli_fetch_assoc($result_set);
				    $total_rows = $result['total_rows'];

				    $rows_per_page = 12;

				   /*last page */
					$last_page_no = ceil($total_rows / $rows_per_page);
					
					
				   
				  /* set number of pages*/
				   if (isset($_GET['q'])){
					   $page_no = $_GET['q'];
					   
				   }else{
					   $page_no=1;
				   }
				   /* first page*/
				   $first_page = 1;
				   
				   if($page_no == "1" )
				   { 
					   $oneactive = "active";
					   $twoactive = "";
				   }else if($page_no == "2" ){
					   $oneactive = "";
					   $twoactive = "active";
				   }else{
					   $oneactive = "";
					   $twoactive = "";
				   }
				   
				   /*last page*/
				   $last_page = $last_page_no;
				   /*next page */
				  if($page_no >= $last_page_no){
			       $next_page = $last_page_no;
				   
				  }else{
					 $next_page = $page_no+1; 
		
				  }
				  /*back  page */
				  if($page_no <= 1){
			        $back_page = 1;
					
				  }else{
				   $back_page = $page_no-1;
				    
				  }
				  
				  $start = ($page_no -1) * $rows_per_page;
					    $sql = "SELECT * FROM `phoneads` WHERE   `id` != '$id'  AND `Admin_Approval` ='1'  ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
		                            while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$condition = $row["condition"];
									$year = $row["model_Year"];
									$price = $row["price"];
									$deviceId = $row["device"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["Admin_Approval_Time"]);
								    $sellerId =	$row["seller_Id"];
							
                                 $sql2 = "SELECT * FROM `phoneadimages` WHERE `post_Id` ='$id' ";
	                             $res2 = mysqli_query($conn,$sql2);
                                 $count2 = mysqli_num_rows($res2);
		                          if($count2>0){
		                           while($row2=mysqli_fetch_assoc($res2)){	
								     $image = $row2["image_name"];
								  }}	

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
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 }
								 $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
		                            $cityName = $row4["name_en"];
                                    $did = 	$row4["district_id"];
								   }}
								   
								   $sql5 = "select * from `districts`  where `id` = '$did'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disName = $row5["name_en"];
								    }}  
									
									  $time_ago = $updatepublishTime;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "an hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   } 
									 if($condition == "Used"){
									 	$conditionColor = "background: #EFF62D;";
									}else if($condition == "New"){
										$conditionColor = "background: #2DF354;";
									}else{
										$conditionColor = "background: #F0B643;";
									}
									?>
					<div class="col-sm-6 col-md-6  normal-ads ad-desk-view" id="<?php echo $id; ?>" style="margin:5px 0;">
						   <div class="adcard w3-border">
                            <div class="w3-row" style=" background-color:white;">
						
                             <div class=" w3-third w3-border-right" style=" background-color:white; height:155px; padding:15px;">
    						     <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
				             </div>
                             <div class="w3-twothird" style="background-color:white; padding-top:5px; padding-left:5px;">
							     <span class="conditionLabel " style="position:relative;float:right;  opacity:0.7; color:#1C1C1C; font-size:13px; font-weight:bold; <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 20);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9;"> <span class="loadAds skeleton"><h3><span class="spanname loadAds loadTohide" style="font-size:17px;"><?php echo $newdeviceName ; ?></span><span class="loadAds skeleton"><label class="loadAds loadTohide" style="opacity:0.6; margin:0 10px; font-size:16px;">( <?php echo $year; ?> )</label></span></h3></span></div>
						          <div class="adsName"> <span class="loadAds skeleton"><h3><span class="spanyear loadAds loadTohide"></span></h3></span></div>
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						    
								     <p class="price loadAds skeleton" style="font-size:20px; margin-top:10px;"><span class="loadAds loadTohide" ><?php echo"Rs"; ?> <?php echo $price; ?></span></p>
								
								     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide"><i class="fa fa-eye" style="font-size:16px"></i> <?php echo $views; ?></span><span class="loadAds loadTohide"><?php echo $agoTime; ?></span></p>
								 
								
                              
							    
                                </div>
                            </div>							
						 </div>
					</div>
					
					    <div class="col-sm-6 col-md-6  normal-ads ad-phone-view"  id="<?php echo $id; ?>">
						   <div class="adcard w3-border">
                            <div class=" " style="width:100%; display:flex;  background-color:white;"> 

                             <div class=" w3-border-right" style="width:38%; height:135px; background-color:white; padding:10px;">
    			                <div class="img loadAds skeleton " style="width:100%; height:100%;  display: block;  position: relative;" >
								 <img class=" loadAds loadTohide" style="position: relative; top:50%; transform: translateY(-50%);  max-width:100%; max-height:100%; width: auto; height:auto;" src="adsPictures/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" alt="phone">
								 </div>
		                     </div>
                             <div class=" " style="height:100%; width:62%; background-color:white; padding:5px 0;">
							 <span class="conditionLabel " style="position:relative;float:right; opacity:0.7; color:#1C1C1C; font-size:12px; font-weight:bold;  <?php echo $conditionColor; ?> padding: 3px 10px; margin-top: 5px; display: inline-block;"><?php echo $condition; ?></span>
    		                     <div class="name loadAds skeleton"> 
								<?php if (strlen($deviceName) > 5){ 
                                    $new_text = substr($deviceName, 0, 15);
                                    $new_text = trim($new_text);
                                    $newdeviceName =  $new_text . "..";
                                 } ?>
						          <div class="adsName" style="opacity:0.9; "> <span class="loadAds skeleton"><h4><span class="spanname loadAds loadTohide" style="font-size:14px;"><?php echo $newdeviceName ; ?></span></h4></span></div>
						         
						         </div>
							     <div class="adsmanu "> 
								  <span class="loadAds skeleton" style="opacity:0.8; font-size:12px;" ><label class="loadAds loadTohide"><?php echo $disName; ?>,</label> <label class="loadAds loadTohide"><?php echo"Mobile Phone"; ?></label></span>
							     </div>
						        <div class="adsmanu"> 
              		
								 <span class="loadAds skeleton"><span class="loadAds loadTohide " style="font-size:16px; color:#6666FF; font-weight:bold; opacity:0.9;" ><?php echo"Rs"; ?> <?php echo $price; ?></span> </span>
							    </div>
							     <p style="float:right;"class="agoTime loadAds skeleton"><span class="adsView loadAds loadTohide" style="font-size:12px"><i class="fa fa-eye" ></i> <?php echo $views; ?></span><span class="loadAds loadTohide" style="font-size:12px"><?php echo $agoTime; ?></span></p>
                                </div>
                            </div>							
						 </div>
					</div>   
									<?php
		}
	}
	  }
	 }
	}
				?>
			</div>
		</div>	<?php
					  if($total_rows > 12){
								  ?>
			<div id="" class="" style="width:100%; ">
			 <ul class="pagination" >
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $back_page; ?>#searchmanuAds">Previous</a></li>
				<li class="page-item " ><a class="page-link <?php echo $oneactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=1#searchmanuAds">1</a></li>
				<?php
				if($total_rows > "1"){
					?><li class="page-item "  ><a class="page-link <?php echo $twoactive; ?>" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=2#searchmanuAds">2</a></li><?php
				}
				
				if($page_no >= "3"){
					?><li class="page-item "><a class="page-link active" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $page_no; ?>#searchmanuAds"><?php echo $page_no; ?></a></li><?php
				}else{
					if($total_rows > "1"){
					?><li class="page-item "><a class="page-link " href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=3#searchmanuAds">3</a></li><?php
					}
				}
				?>
				<li class="page-item"><a class="page-link" href="search.php?city=<?php echo $location; ?>&model=<?php echo $model; ?>&mType=<?php echo $mtype; ?>&search=<?php echo $name; ?>&q=<?php echo $next_page; ?>#searchmanuAds">Next</a></li>
			  </ul>
			</div>
								  <?php
					}	
					?>
	</div>
	</div><br>
	<?php
	
     }
	 }
	 
	 
 }
 
 
function notificationBox(){
	global $conn;
	?><script type="text/javascript">
					 $("#notifi-item").addClass("notifi-itemActive");
				  </script><?php
	global $conn;
	if(isset($_COOKIE["durakathanapalalogin"])) {
		$login = $_COOKIE["durakathanapalalogin"];
		
		if($login == "normal"){
		    $uname = $_COOKIE["durakathanapalaloginUserName"];
		    $email = $_COOKIE["durakathanapalaloginUserEmail"];
		  if($uname != ""){
			$uname = $_COOKIE["durakathanapalaloginUserName"];
		  }else if($email != ""){
		    $email = $_COOKIE["durakathanapalaloginUserEmail"];
		  }			  
		
		if($uname != ""){
			$sql = "select * from `user` where `user_name` ='$uname'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];	
                  $image = $row["image_name"];
				  $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname;
				   $gender = $row["gender"];
				   if( $gender == "male"){
					  $m = "Mr.";
				   }else if( $gender == "female"){
					  $m = "Mrs.";
				   }else{
				 	  $m = "";
				   }
				   
				 if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }				  
			   }
			  }
		}else if($email != ""){
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];	
                  $image = $row["image_name"];
				  $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname;
				   $gender = $row["gender"];
				   if( $gender == "male"){
					  $m = "Mr.";
				   }else if( $gender == "female"){
					  $m = "Mrs.";
				   }else{
				 	  $m = "";
				   }
				   
				 if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="user/images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="user/images/profilePic/{$uname}/{$image}";                   
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }					  
			   }
			  }
		}
		}else if($login == "google"){
			$uname = $_COOKIE["durakathanapalaloginUserName"];
			 $sql = "SELECT * FROM `google-user` WHERE `googleIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$userId = $row["googleIdTocken"];  
				$fullname = $row["name"]; 
				$im = $row["profile"];
				$m = "";
				 if(@getimagesize($im)){
                      $src = $im;               
                   }else{
                      $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
			  } 
			  }
		}else if($login == "facebook"){
			$uname = $_COOKIE["durakathanapalaloginUserName"];
			 $sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$userId = $row["facebookIdTocken"];  
				$fullname = $row["name"]; 
				$im = $row["profile"];
				$m = "";
				 if(@getimagesize($im)){
                      $src = $im;               
                   }else{
                      $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
			  } 
			  }
		}
		
		?>
	 <div class="notificationmanu" id="notificationmodel"> 
 <div class="notification-content">
  <div style="display:flex;">
   <div style="width:80%;">
    <?php
		     $sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' AND `active` = '1' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
			  
	?>  
	
    <h2 class="notifiH2">Notifications <span style="color:red; margin:0 5px;"><?php echo $count; ?></span></h2>
   </div> 
   <div style="width:20%;">
	<span style="float:right; margin:5px 10px; font-size:18px; cursor:pointer; opacity:0.8;" onclick="toggleNotifi()" >&times;</span>
   </div>
  </div>  
	<div class="notifi-box" id="box">
    	 <?php
		     $sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' ORDER BY `date` DESC";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $nid = $row["id"];
				  $massage = $row["massage"];
				  $active = $row["active"];
				  $date = strtotime($row["date"]);
				  $time_ago = $date;    
      $date  = new DateTime("now", new DateTimeZone('Asia/Colombo') );
      $nowdate       = $date->format('Y-m-d H:i:s');							  
      $current_time =    strtotime($nowdate);
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

      if($seconds <= 60)  
      {  
     $agoTime =  "Just Now";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
      $agoTime =  "1 minute ago";  
     }  
     else  
           {  
      $agoTime =  "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
      $agoTime =  "an hour ago";  
     }  
           else  
           {  
      $agoTime =  "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
      $agoTime = "yesterday";  
     }  
           else  
           {  
      $agoTime =  "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       $agoTime =  "a week ago";  
     }  
           else  
           {  
      $agoTime =  "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       $agoTime =  "a month ago";  
     }  
           else  
           {  
      $agoTime = "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       $agoTime =  "one year ago";  
     }  
           else  
           {  
       $agoTime =  "$years years ago";  
     }  
   }
				  if($active == "1"){
				?>
				 <div class="notifi-item notifi-itemActive" id="notifi-item">
				  <div style="width:100%;  display:flex;" class="clickNotification" onclick="clickNotification(this.id)" id="<?php echo $nid; ?>">
				     <div style="width:22%; ">
				        <img src="<?php echo $src; ?>" style="opacity:0.1;" alt="img">
				     </div>
					 <div style="width:53%; ">
				        <div class="text"  style="margin:5px 10px 0 0;">
				          <span class="nameNoti" style="opacity:0.1;"><a style="color:#4444FF;" href="user/profile/profile.php?user=normal&id=<?php echo $userId; ?>"><?php echo $m; ?> <?php echo $fullname; ?></a></span><br>
				          <span class="massageNoti" style="opacity:0.1;"><?php echo $massage; ?></span>
			            </div> 
				     </div>
					 <div style="width:25%; ">
				        <div style="font-size:14px; float:right; font-weight:bold; opacity:0.8; margin:40px 2px 1px;"><?php echo $agoTime; ?></div>
				     </div>
				 </div>
			    </div>
				<?php 
				  }else{
				?>
				<div class="notifi-item " id="notifi-item">
				 <div style="width:100%;  display:flex;">
				     <div style="width:22%; ">
				        <img src="<?php echo $src; ?>" alt="img">
				     </div>
					 <div style="width:53%; ">
				        <div class="text" style="margin:5px 10px 0 0;">
				          <span class="nameNoti"><a style="color:#4444FF;" href="user/profile/profile.php?user=normal&id=<?php echo $userId; ?>"><?php echo $m; ?> <?php echo $fullname; ?></a></span><br>
				          <span class="massageNoti"><?php echo $massage; ?></span>
			            </div> 
				     </div>
					 <div style="width:25%; ">
				        <div style="font-size:14px; float:right; font-weight:bold; opacity:0.8; margin:40px 2px 1px;"><?php echo $agoTime; ?></div>
				     </div>
				 </div>
			    </div>
				<?php  
				  }
			    }
			  }
		 ?>
		</div>
 </div>
 </div>
	<?php
	}else{
	}
} 

function msgModal(){
	global $conn;
	?>
	<div id="msgModal" class="msgmanu" >
  <div class="msg-content" id="p" style="opacity:1;">
  
  <div id="trancelate" style="padding:50px; max-width:600px; overflow-x:auto; margin:auto; display:none;">
    <p class="logClose lclose" style="text-align:right; cursor:pointer; opacity:0.7;" onclick=" document.getElementById('msgModal').style.display = 'none';">&times;</p>
   <div id="google_translate_element" style="display:none; width:50px;  margin:0 auto;"></div>
   <button onclick=" document.getElementById('msgModal').style.display = 'none';" >Ok</button>
  </div>
 <form class="w3-container" id="facebookgetcityform" style="display:none;">
<h2 class="w3-text-blue" style="text-align:center;"><b>Facebook Contact Form</b></h2>
<p>      
<label class="w3-text-blue"><b>Select city</b></label><br>
<select id="facebookcity" placeholder="Select your city..." name="city"  >
								<option value="">Select a city...</option>
								<?php 
								 $sql = "select * from `cities`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $cName = $row["name_en"];
			                        $cId = $row["id"];
								    ?><option value="<?php echo $cId; ?>"> <?php echo $cName; ?></option><?php
								  }}
								?>				
							  </select>
</p>
<p>      
<label class="w3-text-blue"><b>Phone number:</b></label>
<input class="w3-input w3-border" style="background-color:white;" id="facebookpno" name="pno" type="number"></p>
<p>      
<button type="button" class="btn btn-primary" onclick="facebookgetcity()" >Conform</button></p>
</form>

<div class="reportForm" id="reportForm">
<div class="alert alert-success llll" id="successMsgReport">
    <strong>Success!</strong> Your submission is successful.
</div>
<p class="logClose lclose" style="text-align:right; cursor:pointer; opacity:0.7;" onclick="reportFormClose()">&times;</p>
<div class="container " style="padding:20px;" >
 <span style="font-size:17px; opacity:0.9;"><b>Is there something wrong with this ad?</b></span>
 <p style="opacity:0.7; margin:15px 5px 0;">We constantly strive to ensure that our ads meet the highest standards and are grateful for any kind of feedback we receive from our users.</p>
  <form action="/action_page.php">
  <br>
  <div class="w3-row">
       <div class="w3-half" style="padding:9px;">
            <label for="fname" style="opacity:0.8;"><b>Your Email</b></label>
            <input type="email" id="reportEmail"  placeholder="Your email.." style="background-color:white; padding:6px; border:1px solid #ddd;">
       </div>
       <div class="w3-half" style="padding:13px 10px;">
                 <label for="country" style="opacity:0.8;"><b>Reason</b></label>
                <select id="reportCategory" name="country">
                 <option value="Item sold">Item sold</option>
                 <option value="Spam">Spam</option>
                 <option value="Duplicate">Duplicate</option>
				 <option value="Scam">Scam</option>
                </select>
       </div>
  </div>
  <div class="w3-margin">
    <label for="country" style="opacity:0.8;"><b>Message</b></label>
    <textarea id="reportMsg" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <button type="button" onclick="reportSave()" style="background-color:#6666FF;">Submit</button>
  </div>	
  </form>
</div>
  </div>
  </div>
 </div>
	<?php
}
?>


 
