<?php
require_once 'database/database.php';


function shopsearchBox(){
	global $conn;
	?>  
		<div class="container containerSbox" >
		<div class="search_box w3-card">
			<p id="searchBoxP">Find the best phone shop for you </p><br>
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
				    if(isset($_GET["openDays"])){
						$b = $_GET["openDays"];
						if( $b != ""){
                             if($b == "1"){
								$getopenDay ="On weekdays (mon to fri)";
							    $optionVal = "On weekdays (monday to friday)";
							 }else if($b == "2"){
								 $getopenDay ="On weekends (sat and sun)";
							     $optionVal = "On weekends (saturday and sunday)";
							 }else if($b == "3"){
								 $getopenDay ="Every day";
							     $optionVal = "Every day";
							 }else{
								 $getopenDay ="Shop Open Days";
							     $optionVal = "Select Shop Open Days";
							 }
						     }else{
							 $getopenDay ="Shop Open Days";
							 $optionVal = "Select Shop Open Days";
							 }
                  }else{
					  $getopenDay ="Shop Open Days";
					  $optionVal = "Select Shop Open Days";
					  $b = "";
				  }
				  ?><input type="text" id="dropdown-menu1-openDaysselect" value="<?php echo $b; ?>" style="display:none;"/><?php

				 ?>
			
                      <button class="btn btn-default openShopBtn" type="button"  id="dropdownMenu1" onMouseOver="show_Model()"  onMouseOut="hide_Model()" style=" background-color:white; width:100%; padding:4px 5px; border:none; color:black; margin:1px 0; z-index:1;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <?php
					    if(isset($_GET["openTime"])){
							if($_GET["openDays"] == ""){
					           ?> <span  style="margin: 0 5px; float:left;"><i class="fa fa-align-justify" style="font-size:14px; color:#3333FF;"></i> <span class="clickopenDayValue" style="margin:0 5px; color:black;"><?php echo $getopenDay; ?></span></span><?php
							}else{
								 ?> <span  style="margin: 0 5px; float:left;"><i class="fa fa-align-justify" style="font-size:14px; color:#3333FF;"></i> <span class="clickopenDayValue" style="margin:0 5px;  color:#3333FF;"><?php echo $getopenDay; ?></span></span><?php
							}
						}else{
							?> <span  style="margin: 0 5px; float:left;"><i class="fa fa-align-justify" style="font-size:14px; color:#3333FF;"></i> <span class="clickopenDayValue" style="margin:0 5px; color:black;"><?php echo $getopenDay; ?></span></span><?php
						}
							?>
						<span style=" margin: 0 12px; float:right;"><i class='	fa fa-angle-down' style='font-size:16px; color:#3333FF;'></i></span>
                     </button>
                      <div  id="openShopSelect" class="brandsSelect openShopSelect"> 
                    <select class="openShopSelectOption" stylr="z-index:1;">
					  <option value="" ><?php echo $optionVal; ?></option>	
                      <option ><span style='cursor:pointer;'  >none</span></option>
                      <option  value="1"> <span style='cursor:pointer; color:red;' >On weekdays (monday to friday)</span></option>
                      <option  value="2"> <span style='cursor:pointer; color:red;' ></span>On weekends (saturday and sunday)</option>
                      <option  value="3"> <span style='cursor:pointer; color:red;' ></span>Every day</option>						  
					</select>
                    </div>
                    </div> 
				</div>
				
				
								
			    <div class="col-sm-4" >
		 <div class="dropdown" >
		  <?php
				    if(isset($_GET["openTime"])){
						$bb = $_GET["openTime"];
						if( $bb != ""){
                               if($bb == "1"){
								$getopenTime ="24 hours";
							    $getOptionDeviceVal = "24 hours";
							 }else if($bb == "2"){
								 $getopenTime ="12 hours";
							     $getOptionDeviceVal = "12 hours";
							 }else if($bb == "3"){
								 $getopenTime ="Other";
							     $getOptionDeviceVal = "Other";
							 }else{
							   $getopenTime ="Shop Open Time";
							   $getOptionDeviceVal = "Select Shop Open Time";
							 }
							
						     }else{
							 $getopenTime ="Shop Open Time";
							 $getOptionDeviceVal = "Select Shop Open Time";
							
							 }
					}else{
						     $getopenTime ="Shop Open Time";
							 $getOptionDeviceVal = "Select Shop Open Time";
						 $bb ="";
						 
					}
					?><input type="text" id="dropdown-menu2-shopselect" value="<?php echo $bb; ?>" style="display:none;"/><?php
				 ?>
		            
                     <button class="btn btn-default openTimeBtn" type="button" id="dropdownMenu1" onMouseOver="show_devices()"  onMouseOut="hide_devices()" style=" background-color:white; width:100%; padding:4px 5px;  border:none; color:black; margin:1px 0; z-index:1;" >
                       <?php
					    if(isset($_GET["openTime"])){
							if($_GET["openTime"] == ""){
								?><span  style="margin: 0 5px; float:left;"> <i class='fa fa-clone' style='font-size:13px; color:#3333FF;'></i><span class="clickdeviceValue" style="margin:0 5px; color:black;"> <?php echo $getopenTime; ?></span></span><?php
							}else{
								?><span  style="margin: 0 5px; float:left;"> <i class='fa fa-clone' style='font-size:13px; color:#3333FF;'></i><span class="clickdeviceValue" style="margin:0 5px; color:#3333FF;"> <?php echo $getopenTime; ?></span></span><?php
							}
						}else{
							?><span  style="margin: 0 5px; float:left;"> <i class='fa fa-clone' style='font-size:13px; color:#3333FF;'></i><span class="clickdeviceValue" style="margin:0 5px;"> <?php echo $getopenTime; ?></span></span><?php
						}
					   ?>
					   <span style=" margin: 0 12px; float:right;"><i class='	fa fa-angle-down' style='font-size:16px; color:#3333FF;'></i></span>
                     </button>
					<div  id="openTimeSelect" class="devicesSelect"> 
                    <select >
					 <option value=""><a class="t" id=""> <?php echo $getOptionDeviceVal; ?></a></option>
					  <option  value="1"> <span style='cursor:pointer; color:red;' >24 hours</span></option>
                      <option  value="2"> <span style='cursor:pointer; color:red;' ></span>12 hours</option>
                      <option  value="3"> <span style='cursor:pointer; color:red;' ></span>Other</option>
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
				<input type="text" class="input" value="<?php echo $bc; ?>" id="searchName" placeholder="search..." ontouchstart="searchLiveKeyWordClick()" onclick="searchLiveKeyWordClick()" onkeyup="searchLiveKeyWordClick()" style="font-size:14px; font-weight:500; color:#20211a; padding:20px 25PX;">
				<div class="btn btn_common shopsearchBtn"  id="searchBtn" style="">
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
function shopcategoryList(){
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
	  <p><img class="w3-card-4" src="images/phoneI.ico" style="border:1px solid #8888FF; border-radius:60px;" width="60px" height="60px"></p>  
	  <label style="opacity:0.9;"><b>Phone</b></label>
	</a>
	</div>
	<div class="w3-quarter select2">
	 <a href="shopAdIndex.php">
		<p><img class="w3-card-4" src="images/phonesp.png" style="border:1px solid #8888FF; border-radius:60px;" width="60px" height="60px"></p>  
		<label style="opacity:0.9;"><b>Phone Shops</b></label>
	 </a>	
	</div>
	<div class="w3-quarter select2">
	 <a >
		<p><img class="w3-card-4" src="images/phone-parts.png" style="border:1px solid #8888FF; border-radius:60px;" width="60px" height="60px"></p>  
		<label style="opacity:0.9;"><b>Phone Parts</b></label>
	 </a>	
	</div>
	<div class="w3-quarter select2">
	 <a >
		<p><img class="w3-card-4" src="images/phone-searvice.jpg" style="border:1px solid #8888FF; border-radius:60px;" width="60px" height="60px"></p>  
		<label style="opacity:0.9;"><b>Services Shops</b></label>
	 </a>
	</div>
</div>

	<?php
}

function searchShopAds(){
	global $conn;
	?>
		<div class=" layout_padding promoted_sectipon" style="background-color:white; margin:0;">
		<div class="container">
				<?php 
				 if(isset($_GET["search"])){

                      $name = $_GET["search"];
                      $location = $_GET["city"];
                      $openTime = $_GET["openTime"];
                      $openDays = $_GET["openDays"];
                  
				     if($openDays == "1"){
								$getopenDay ="On weekdays (mon to fri)";
							    $optionVal =  "AND `shopOpen` ='On weekdays (mon to fri)' ";
							 }else if($openDays == "2"){
								 $getopenDay ="On weekends (sat and sun)";
							     $optionVal =  "AND `shopOpen` ='On weekends (sat and sun)' ";
							 }else if($openDays == "3"){
								 $getopenDay ="Every day";
							     $optionVal =  "AND `shopOpen` ='Every day' ";
				             }else{
								 $getopenDay ="";
							     $optionVal = "";
							 } 
					 
					 if($openTime== "1"){
								$getopenTime ="24 hours";
							    $getOptionDeviceVal = "AND `openTime` ='24 hours'";
							 }else if($openTime == "2"){
								 $getopenTime ="12 hours";
							     $getOptionDeviceVal = "AND `openTime` ='12 hours'";
							 }else if($openTime == "3"){
								 $getopenTime ="Other";
							     $getOptionDeviceVal = "AND `openTime` !='24 hours' AND `openTime` !='12 hours'";
                             }else{
								 $getopenTime ="";
							     $getOptionDeviceVal = "";
							 }
							 
					 
				  	  if($location != ""){
						  if (is_numeric($location)){
					        if($openDays =="" && $openTime == "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' AND `city_Id` ='$location'";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' AND `city_Id` ='$location' ";
							  
					        }else if($openDays !="" && $openTime == "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' AND `city_Id` ='$location'  {$optionVal}";
					          $query2 = "SELECT * FROM `phoneshopads`  WHERE `AdminApproval` ='1' AND `city_Id` ='$location'  {$optionVal}";
					        
							}else if($openDays =="" && $openTime != "" && $location !=""){
							  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' {$getOptionDeviceVal} AND `city_Id` ='$location'";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' {$getOptionDeviceVal} AND `city_Id` ='$location'";
					        
							}else if($openDays !="" && $openTime != "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1'  AND `city_Id` ='$location' {$optionVal} {$getOptionDeviceVal}";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  AND `city_Id` ='$location' {$optionVal} {$getOptionDeviceVal}";
					        }  					  
					     }else{
							 if($location =="Srilanka"){
								 if($openDays =="" && $openTime == "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' ";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' ";
							  
					        }else if($openDays !="" && $openTime == "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' {$optionVal}";
					          $query2 = "SELECT * FROM `phoneshopads`  WHERE `AdminApproval` ='1' {$optionVal}";
					        
							}else if($openDays =="" && $openTime != "" && $location !=""){
							  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' {$getOptionDeviceVal} ";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' {$getOptionDeviceVal} ";
					        
							}else if($openDays !="" && $openTime != "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1'   {$optionVal} {$getOptionDeviceVal}";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  {$optionVal} {$getOptionDeviceVal}";
					        }  
							 }else{
								 $sql5 = "select * from `districts`  where `name_en` = '$location'  ";
	                               $res5 = mysqli_query($conn,$sql5);
                                   $count5 = mysqli_num_rows($res5);
		                            if($count5>0){
		                            while($row5=mysqli_fetch_assoc($res5)){
								     $disId = $row5["id"];
								    }}
									
								 if($openDays =="" && $openTime == "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' AND `district_Id` ='$location'";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' AND `district_Id` ='$location' ";
							  
					        }else if($openDays !="" && $openTime == "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' AND `district_Id` ='$location'  {$optionVal}";
					          $query2 = "SELECT * FROM `phoneshopads`  WHERE `AdminApproval` ='1' AND `district_Id` ='$location'  {$optionVal}";
					        
							}else if($openDays =="" && $openTime != "" && $location !=""){
							  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' {$getOptionDeviceVal} AND `district_Id` ='$location'";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' {$getOptionDeviceVal} AND `district_Id` ='$location'";
					        
							}else if($openDays !="" && $openTime != "" && $location !=""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1'  AND `district_Id` ='$location' {$optionVal} {$getOptionDeviceVal}";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  AND `district_Id` ='$location' {$optionVal} {$getOptionDeviceVal}";
					        } 	
							 }
						 }
					  }else{
						  	 if($openDays =="" && $openTime == "" && $location ==""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' ";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' ";
							  
					        }else if($openDays !="" && $openTime == "" && $location ==""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1'   {$optionVal}";
					          $query2 = "SELECT * FROM `phoneshopads`  WHERE `AdminApproval` ='1'   {$optionVal}";
					        
							}else if($openDays =="" && $openTime != "" && $location ==""){
							  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1' {$getOptionDeviceVal} ";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' {$getOptionDeviceVal} ";
					        
							}else if($openDays !="" && $openTime != "" && $location ==""){
					     	  $query1 = "SELECT COUNT(id) AS total_rows FROM `phoneshopads`  WHERE `AdminApproval` ='1'   {$optionVal} {$getOptionDeviceVal}";
					          $query2 = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  {$optionVal} {$getOptionDeviceVal}";
					        }  
					  }

		
		
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
					  if($openTime == ""){
						  $mt = "Shop Open Time";
						  $Search = "";
						  $SearchMtype = "";
						  ?> <script type="text/javascript">
						   document.getElementById("dropdown-menu2-select").value = '<?php echo ""; ?>';
						   document.querySelector('.clickMtypeValue').style.color ="black";
					      </script>
						  <?php
						}else{    
						     if($openTime== "1"){
								$getopenTime ="24 hours";
							    $getOptionDeviceVal = "24 hours";
							 }else if($openTime == "2"){
								 $getopenTime ="12 hours";
							     $getOptionDeviceVal = "12 hours";
							 }else if($openTime == "3"){
								 $getopenTime ="Other";
							     
							 }
						     
		                            $mt = $getopenTime;	
                                    $SearchMtype = $mt;									
								  ?>
					  <script type="text/javascript">
					      document.getElementById("dropdown-menu2-select").value = '<?php echo $mtype; ?>';
						  document.querySelector('.clickMtypeValue').style.color ="#2222FF";
					  </script>
					  <?php
						}
					  if($openDays == ""){
						  $md = "Shop Open Days";
						  $SearchModel = "";
						  ?>
					      <script type="text/javascript">
						    document.getElementById("dropdown-menu1-select").value ='<?php echo ""; ?>';
						    document.querySelector('.clickModelValue').style.color ="black";
					      </script>
					     <?php
						}else{
						     if($openDays == "1"){
								$getopenDay ="On weekdays (mon to fri)";
							    $optionVal = "On weekdays (monday to friday)";
							 }else if($openDays == "2"){
								 $getopenDay ="On weekends (sat and sun)";
							     $optionVal = "On weekends (saturday and sunday)";
							 }else if($openDays == "3"){
								 $getopenDay ="Every day";
							     $optionVal = "Every day";
							 }
		                            $md = $getopenDay;
                                    $SearchModel = "<span  style='margin: 0 20px;  float:right;'><i class='fa fa-align-justify' style='font-size:13px; color:#3333FF;'></i> <span class='clickModelValue' style='margin:0 5px; font-size:13px;'> {$md} , {$SearchMtype}</span></span>";									
								 
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
						  
				    $query = $query1;
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
						  
				 $sql = "{$query2} AND (`about` LIKE '%$name%' OR `shopName` LIKE '%$name%' OR `address` LIKE '%$name%') ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
							
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
      $agoTime =  "one minute ago";  
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
									 <h3 class="populer_text-local-1" style=" font-size:15px; opacity:0.8;"><b>Showing Phone Shop Ads</b> <span style="font-size:17px; margin:0 3px;"><?php echo $count; ?></span><b> Results,</b> <span style="opacity:0.8; "><?php echo $searchName; ?></span></h3>
									 </div>
									 <div style="width:100%;">
									   <div style="float:right; opacity:0.9; font-weight:610; font-size:13px;">
									      <span><?php echo $SearchLocation; ?></span>
									   </div>
									 </div>
									 </div>
									  <div class="row adrow w3-card">
									 <br><br>
				                     <div class="w3-card-4" style="width:80%; border-radius:5px; background-color:white; padding:40px; margin:20px auto; text-align:center; opacity:0.8;">
									    <i class='fas fa-exclamation-circle' style='font-size:16px; margin:0 5px;'></i>
									    <span style="color:red;">No matching Phone shops were found. Please Try other Search Options !</span>
									 </div>
									 </div>
									 </div>
									 <?php 
                                      									 
								  }
								?>
											</div>
		</div>		
	</div>
	</div>
								<?php
					  
       }		
}		

 function shopviewItem(){
	 global $conn;
	 
	 if(isset($_GET["page"])){   
      if($_GET["page"]=="user-shopads-view-Item"){
		   echo '<style> #allManu{display:none;} body{background-color:#ddd;}</style>';
	      $id = $_GET["adId"];
	         $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			$shopName = $row["shopName"];
									$ownerName = $row["ownerName"];
									$openDay = $row["shopOpen"];
									$openTim = $row["openTime"];
									$cityId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $updatepublishTime = strtotime($row["AdminApproval_Time"]);
								    $sellerId =	$row["seller_Id"];
			}}
?>
   <div id="id01" class="modal" >
  <div class="modal-content animate" >
      <div class="imgcontainer">
	  <div class="scroller">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img id="img01"  style="display:inline; " class="sample-image">
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
			 $sql = "select * from `phoneshopadimage`  where `Post_Id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity" style=" max-width:100%; max-height:100%; width:auto; height:auto;" onclick="onClick(this)" alt = "shop"></div><?php		 
		 }}
		 
			?>
</div>

<div class="carousel2 carousel-nav loadAds skeleton"
  data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false ,"prevNextButtons": false,"selectedAttraction": 1, "friction": 1}'>
   <?php 
	     $sql = "select * from `phoneshopadimage`  where `Post_Id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity" style=" max-width:100%; max-height:100%; width:auto; height:auto;"  alt = "shop"></div><?php		 
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
	     $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$shopName = $row["shopName"];
			    $ownerName = $row["ownerName"];
			    $openDay = $row["shopOpen"];
				$closeDay = $row["shopClose"];
			    $openTim = $row["openTime"];
				$address = $row["address"];
				$city_Id = $row["city_Id"];
				$postView =  $row["views"];
				$discription = $row["about"];
				$publishTime =  strtotime($row["post_Time"]);
				$updatepublishTime = strtotime($row["AdminApproval_Time"]);
			    $seller_Id =	$row["seller_Id"];
				$sellerAcc       = $row['sellerAcc'];
                $postTime	     = $row['post_Time'];
				
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
								  }}
				 $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno1 = $row["shopPno1"];
                                    $pno2 = $row["shopPno2"];	
                                       if($pno2 == "0"){
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
				                  $pno2 = $row["pno1"];		   
								  }} 
									   }else{
										   $pno2 = $row["shopPno2"];
									   }									 
				                    }}

			}else if($sellerAcc == "google"){
					 $sql3 = "select * from `google-user` where `googleIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				  				   
								  }} 
                   $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno1 = $row["shopPno1"];
                                    $pno2 = $row["shopPno2"];	
                                       if($pno2 == "0"){
										 $sql3 = "select * from `google-user` where `googleIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno2 = $row["pno"];				   
								  }}   
									   }else{
										 $pno2 = $row["shopPno2"];  
									   }
								   }}
	
			}else if($sellerAcc == "facebook"){
					 $sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				   
								  }} 
				$sql = "select * from `phoneshopads`  where `id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno1 = $row["shopPno1"];
                                    $pno2 = $row["shopPno2"];	
                                       if($pno2 == "0"){
										 $sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno2 = $row["pno"];				   
								  }}   
									   }else{
										 $pno2 = $row["shopPno2"];  
									   }
								   }} 
			}			
            								  
		 }}
		                           if($openDay == "On weekdays (monday to friday)"){
										$oDays = "Mon - Fri";
									}else if($openDay == "On weekends (saturday and sunday)"){
										$oDays = "Sat & Sun";
									}else{
										$oDays = "Every day";
									}
	?>	 
        <div class = "product-content loadAds skeleton">
		<div class="loadAds loadTohide">
          <h2 class = "product-title"> <?php echo $shopName; ?></h2>
		  <p id="p" >Posted on  <?php echo $postTime; ?>, <?php echo $districName; ?>, <?php echo $cityName; ?></p>
		  <h2 class = "product-price"><?php echo"Open In- "; ?> <span style="font-size:14px;"><?php echo $oDays; ?></span></h2>
          <div class = "product-detail">
		    <ul>
			 <div class="">
              <div class="w3-half ">
               <li ><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Owner: <span> <?php echo $ownerName; ?></span></li>
               </div>
              <div class="w3-half">
                 <li><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Open Time: <span> <?php echo $openTim; ?></span></li>
              </div>
            </div>
			 <div class="w3-row">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Close In: <span> <?php echo $closeDay; ?></span></li>
              </div>
			 <div class="">
              <div class="w3-half " style="width:100%;">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Address: <span> <?php echo $address; ?></span></li>
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
	        <p id="ph2">About: </p>
            <textarea id="p2" style="border:1px solid #ddd; padding:5px;"   rows="7" disabled="disabled"> <?php echo $discription; ?>.</textarea>
		  </div>
          <div class="w3-row w3-border" style="padding:0px;">
		     <div class="w3-row w3-border w3-padding">
		      <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;">For sale by: <span  style="margin:0 7px; background-color:#ddd; padding:3px;"><?php echo $m; ?> <?php echo $fullname; ?></span></label>
			 </div>
			 <div class="w3-row w3-border w3-padding">
			  <label style="font-size:14px; color:black; font-weight:bold; opacity:0.8;"><i class="fa fa-phone-square" style="font-size:24px; margin:5px 0; color:green;"></i> Call seller: <span class="" style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno1; ?></span>
			  <?php
			    if($pno2 == "0"){
					
				}else{
					?><span class="" style="margin:0 7px; background-color:#ddd; padding:3px 5px;"><?php echo $pno2; ?></span><?php
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
     if($_GET["page"]=="populer-shopads-view-Item" || $_GET["page"]=="normal-shopads-view-Item"){
    echo '<style> #allManu{display:none;} body{background-color:#ddd;}</style>';
	      $id = $_GET["adId"];
	         $sql = "select * from `phoneshopads`  where `id` = '$id' ";
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
		
		$sql = "UPDATE `phoneshopads` SET `views`=' $updateViews' WHERE `id` = '$id'";
	    $fire=mysqli_query($conn,$sql);
    }
			}
   ?>
   <div id="id01" class="modal" >
  <div class="modal-content animate" >
      <div class="imgcontainer">
	  <div class="scroller">
      <span onclick="document.getElementById('id01').style.display='none'" style="color:red;" class="close" title="Close Modal">&times;</span>
      <img id="img01"  style="display:inline; " class="sample-image">
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
			 $sql = "select * from `phoneshopadimage`  where `Post_Id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity" style=" max-width:100%; max-height:100%; width:auto; height:auto;" onclick="onClick(this)" alt = "shoe image"></div><?php		 
		 }}
		 
			?>
</div>

<div class="carousel2 carousel-nav loadAds skeleton"
  data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false ,"prevNextButtons": false,"selectedAttraction": 1, "friction": 1}'>
   <?php 
	     $sql = "select * from `phoneshopadimage`  where `Post_Id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$image = $row["image_name"];
            ?>  <div class="carousel-cell loadAds loadTohide"><img src = "adsPictures/shopAds/<?php echo $sellerId; ?>/<?php echo $publishTime; ?>/<?php echo $image; ?>" class="w3-hover-opacity" style=" max-width:100%; max-height:100%; width:auto; height:auto;"  alt = "shoe image"></div><?php		 
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
	     $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$shopName = $row["shopName"];
			    $ownerName = $row["ownerName"];
			    $openDay = $row["shopOpen"];
				$closeDay = $row["shopClose"];
			    $openTim = $row["openTime"];
				$address = $row["address"];
				$city_Id = $row["city_Id"];
				$postView =  $row["views"];
				$discription = $row["about"];
				$publishTime =  strtotime($row["post_Time"]);
				$updatepublishTime = strtotime($row["AdminApproval_Time"]);
			    $seller_Id =	$row["seller_Id"];
				$sellerAcc       = $row['sellerAcc'];
                $postTime	     = $row['post_Time'];
				
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
								  }}
				 $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno1 = $row["shopPno1"];
                                    $pno2 = $row["shopPno2"];	
                                       if($pno2 == "0"){
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
				                  $pno2 = $row["pno1"];		   
								  }} 
									   }else{
										   $pno2 = $row["shopPno2"];
									   }									 
				                    }}

			}else if($sellerAcc == "google"){
					 $sql3 = "select * from `google-user` where `googleIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				  				   
								  }} 
                   $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno1 = $row["shopPno1"];
                                    $pno2 = $row["shopPno2"];	
                                       if($pno2 == "0"){
										 $sql3 = "select * from `google-user` where `googleIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno2 = $row["pno"];				   
								  }}   
									   }else{
										 $pno2 = $row["shopPno2"];  
									   }
								   }}
	
			}else if($sellerAcc == "facebook"){
					 $sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				   
								  }} 
				$sql = "select * from `phoneshopads`  where `id` = '$id' ";
	                               $res = mysqli_query($conn,$sql);
                                   $count = mysqli_num_rows($res);
		                           if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){				   
				                    $pno1 = $row["shopPno1"];
                                    $pno2 = $row["shopPno2"];	
                                       if($pno2 == "0"){
										 $sql3 = "select * from `facebook-user` where `facebookIdTocken` ='$seller_Id'	 ";
	                                     $res3 = mysqli_query($conn,$sql3);
                                         $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno2 = $row["pno"];				   
								  }}   
									   }else{
										 $pno2 = $row["shopPno2"];  
									   }
								   }} 
			}			
            								  
		 }}
		                           if($openDay == "On weekdays (monday to friday)"){
										$oDays = "Mon - Fri";
									}else if($openDay == "On weekends (saturday and sunday)"){
										$oDays = "Sat & Sun";
									}else{
										$oDays = "Every day";
									}
	?>	 
        <div class = "product-content loadAds skeleton">
		<div class="loadAds loadTohide">
          <h2 class = "product-title"> <?php echo $shopName; ?></h2>
		  <p id="p" >Posted on  <?php echo $postTime; ?>, <?php echo $districName; ?>, <?php echo $cityName; ?></p>
		  <h2 class = "product-price"><?php echo"Open In- "; ?> <span style="font-size:14px;"><?php echo $oDays; ?></span></h2>
          <div class = "product-detail">
		    <ul>
			 <div class="">
              <div class="w3-half ">
               <li ><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Owner: <span> <?php echo $ownerName; ?></span></li>
               </div>
              <div class="w3-half">
                 <li><i class="fa fa-check-square" style="font-size:14px;color:#1cfc50;"></i> Open Time: <span> <?php echo $openTim; ?></span></li>
              </div>
            </div>
			 <div class="">
              <div class="w3-half ">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Close In: <span> <?php echo $closeDay; ?></span></li>
               </div>
              <div class="w3-half">
                
              </div>
            </div>
			 <div class="">
              <div class="w3-half " style="width:100%;">
                <li><i class="fa fa-check-square" style="font-size:16px;color:#1cfc50;"></i> Address: <span> <?php echo $address; ?></span></li>
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
	        <p id="ph2">About: </p>
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
                 <button type = "button" onclick="reportAd(<?php echo $id; ?>,'shopAd')" style="background-color:white; color:black; opacity:0.9; border:1px solid #ddd;" class = "bt"> <i class="fa fa-ban"></i> Report this ad</button>
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
            <h1 class="similar_text">Similar ads for Mobile Phone Shops</h1>
            <button><a href="function/shop-google-map/map.php?adId=<?php echo $id; ?>"> Similar ads for Mobile Phone in Google Map </a></button>
             <hr><br>
           <?php
          }else{
           ?>
             <h1 class="similar_text">Similar ads for Mobile Phone Shops</h1>
             <button><a onclick="alert('Must be logged in to access this feature');"> Similar ads for Mobile Phone in Google Map </a></button>
             <hr><br>
           <?php
          }  
      ?>
		<div class="container" >
				<div class="row adrow" >
				<?php 
				$query = "SELECT COUNT(id) AS total_rows FROM `phoneshopads` WHERE `AdminApproval` ='1' AND `district_Id` ='$disId' AND `id` != '$id'  AND `shopOpen` ='$openDay' AND `openTime` = '$openTim' ";
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
				    $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' AND `district_Id` ='$disId' AND `id` != '$id'  AND `shopOpen` ='$openDay' AND `openTime` = '$openTim'  ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
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
      $agoTime =  "one minute ago";  
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
	}else{
		$query = "SELECT COUNT(id) AS total_rows FROM `phoneshopads` WHERE `AdminApproval` ='1' AND `district_Id` ='$disId' AND `id` != '$id'  AND `shopOpen` ='$openDay' AND `openTime` != '$openTim' ";
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
					    $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1' AND `district_Id` ='$disId' AND `id` != '$id'  AND `shopOpen` ='$openDay' AND `openTime` != '$openTim' ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
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
      $agoTime =  "one minute ago";  
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
	}else{
		$query = "SELECT COUNT(id) AS total_rows FROM `phoneshopads` WHERE  `district_Id` ='$disId' AND `id` != '$id' AND `AdminApproval` ='1'  ";
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
	  			    $sql = "SELECT * FROM `phoneshopads` WHERE  `district_Id` ='$disId' AND `id` != '$id' AND `AdminApproval` ='1'  ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
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
      $agoTime =  "one minute ago";  
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
	}else{
		               $query = "SELECT COUNT(id) AS total_rows FROM `phoneshopads` WHERE   `id` != '$id'  AND `AdminApproval` ='1' ";
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
					    $sql = "SELECT * FROM `phoneshopads` WHERE   `id` != '$id'  AND `AdminApproval` ='1'  ORDER BY `id` DESC LIMIT {$start},{$rows_per_page}";
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
      $agoTime =  "one minute ago";  
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
	}
	  
	}}
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
?>