<?php
require_once '../../../function/database/database.php';
if(isset($_POST["managetag"])){
echo"Manage Profile";	
}

if(isset($_POST["manageProfile"])){
	$id = $_POST["id"];
		$sql = "select * from `user` where `UserId` ='$id'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				   $id = $row["UserId"];
				   $pno = $row["pno1"];
				   $uname = $row["user_name"];
				   $image = $row["image_name"];
				   $fname = $row["fname"];
				   $lname = $row["lname"];
				   $fullname = $fname." ".$lname;
				   $gender = $row["gender"];
				   $cityId = $row["city"];
				   if( $gender == "male"){
					  $m = "Mr.";
				   }else if( $gender == "female"){
					  $m = "Mrs.";
				   }else{
				 	  $m = "";
				   }
				    $email = $row["email"];
				  if($image == ""){
					  $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
				  }else{
				  $srcImage ="../images/profilePic/{$uname}/{$image}";
				  if(file_exists($srcImage)){
                    $src ="../images/profilePic/<?php echo $uname; ?>/<?php echo $image; ?>";    
				
                   }else{
                     $src ="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg";
                   }
				  }
			  
			  }
			  $sql4 = "select * from `cities`  where `id` = '$cityId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
                                    $cname = 	$row4["name_en"];
								   }}
				?>
				<script type="text/javascript">
				  document.getElementById('fname').value= '<?php echo $fname; ?>';
				  document.getElementById('lname').value= '<?php echo $lname; ?>';
				  document.getElementById('email').value= '<?php echo $email; ?>';
				  document.getElementById('pno').value= '<?php echo $pno; ?>';
				</script>
				<?php				   
			  }
  ?>
          <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="../images/profilePic/<?php echo $uname; ?>/<?php echo $image; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:120px;">
              <h5 class="my-3"><input type="text" name="id" value="<?php echo $id; ?>" style="display:none;"></h5>
              <p class="text-muted mb-1" style="font-size:12px; opacity:0.9;">weladapala user</p>
              <p class="text-muted mb-4"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
				    <div class="w3-half f"><input style="padding:5px; color:blue;" id="fname" name="fname" placeholder="first-name.." type="text"/ ></div>
					<div class="w3-half f"><input style="padding:5px; color:blue;" id="lname" placeholder="last-name.." name="lname" type="text"/ ></div>
				  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><input id="email" name="email" placeholder="email.." type="text"/ ></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><input id="pno" name="pno" placeholder="phone-number.." type="text"/ ></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">City</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
				    <select id="mainRegCity" id="city" placeholder="Select Your City..." name="city" >
							<option value="" placeholder="Select Your City..." ><?php echo $cname; ?></option>
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
                </div>
              </div>
			  <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><select name="gender" id="gender" >
				    <option value=""><?php echo $gender;?></option>
				    <option value="male" >male</option>
					<option value="female">Female</option>
				  </select></p>
                </div>
              </div>
			  <div class="d-flex justify-content-center mb-2" style="padding:14px 0;">
                <button type="button" class="btn btn-primary" onclick="manageProfilesave()">Save Change</button>
              </div>
            </div>
          </div>
        </div>
  <?php
}

if(isset($_POST["fname"])){
				   $fname = $_POST["fname"];
				   $lname  = $_POST["lname"];
				   $email  = $_POST["email"];
				   $pno    = $_POST["pno"];
				   $city  = $_POST["city"];
				   $gender    = $_POST["gender"];
				   $id =  $_POST["id"];
				  
				  if($city !="" && $gender !=""){
					  
					$sql = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`pno1`='$pno',`city`='$city' , `gender` = '$gender' WHERE `UserId`='$id'";
	                 $fire=mysqli_query($conn,$sql);  
				  }else  if($city =="" && $gender !=""){
					 
					$sql = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`pno1`='$pno', `gender` = '$gender' WHERE `UserId`='$id'";
	                 $fire=mysqli_query($conn,$sql);  
				  }else  if($city !="" && $gender ==""){
					
					$sql = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`pno1`='$pno',`city`='$city'  WHERE `UserId`='$id'";
	                 $fire=mysqli_query($conn,$sql);  
				  }else{
					$sql = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`pno1`='$pno'  WHERE `UserId`='$id'";
	                 $fire=mysqli_query($conn,$sql);  
				  }
				     
	                   							
}

if(isset($_POST["manageAd"])){
	 $id = $_POST["manageAd"];
	         $sql = "select * from `phoneads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 
			 $id = $row["id"];
	         $modelId = $row["name"];
			 $year = $row["model_Year"];
			 $mt = $row["device"];
			 $price = $row["price"];
			 $cityId = $row["city_Id"];
			 $whhelAdPno = $row["addMorePnum"];
			 $publishTime =  strtotime($row["post_Time"]);
			 $sellerId =	$row["seller_Id"];
			 $di    = $row['discription'];
			 $sellerAcc       = $row['sellerAcc'];	
             $Conditio = $row["condition"];			 
			}
			}
			$sql = "select * from `devices` where `ID`='$mt' ";
	        $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
		     if($count>0){
		     while($row=mysqli_fetch_assoc($res)){
				 $mt_name = $row["name"];
			 }}
			 $sql = "select * from `cities` where `id` = '$cityId' ";
	        $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
		     if($count>0){
		       while($row=mysqli_fetch_assoc($res)){
		        $cityName = $row["name_en"];
			    $disId = $row["district_id"];
			 }}
			 $sql = "select * from `brands` where `id` = '$modelId' ";
	          $res = mysqli_query($conn,$sql);
              $count = mysqli_num_rows($res);
		       if($count>0){
		        while($row=mysqli_fetch_assoc($res)){
		           $mName = $row["name"];
			   }}
			 $sql = "select * from `districts` where `id`='$disId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		     if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
		       $districName = $row["name_en"];	   
			 }}	
	?>
		<script type="text/javascript">
	 	browse = document.querySelector('#browse1'), // text option fto run input
input = document.querySelector('.file1'); // file input
browse.addEventListener('click', () => input.click());

        var loadFile = function(event) {
        var reader = new FileReader();
	    var filePath = input.value;
		var t ="1";
		localStorage.setItem("image1Upload", t);	
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
		document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
		
        var output = document.getElementById('output1');
		output.style.display="inline";
		if( output &&  output.style) {
          }
        output.src = reader.result;
		$(".pip").removeClass("redborder");
		
         };
		}
         reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse1').style.display = 'none';
		 document.querySelector('#remove').style.display = 'inline';
		  $(document).ready(function() {
             $("#span2").removeClass("disable-div");
          });
        };

     $(document).ready(function() {
         $('#remove').click(function() {
		  document.getElementById('output1').style.display = 'none';	 
		  document.getElementById('browse1').style.display = 'inline';
		  document.querySelector('#remove').style.display = 'none';
		          });
        });
			

browse2 = document.querySelector('#browse2'), // text option fto run input
input2 = document.querySelector('.file2'); // file input
browse2.addEventListener('click', () => input2.click());

        var loadFile2 = function() {
        var reader = new FileReader();
		
		var filePath = input2.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
        document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
        var output2 = document.getElementById('output2');
		output2.style.display="inline";
		if( output2 &&  output2.style) {
          }
        output2.src = reader.result;
		$(".pip").removeClass("redborder");
         };
		}
        reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse2').style.display = 'none';
		 document.querySelector('#remove2').style.display = 'inline';
		  $(document).ready(function() {
             $("#span3").removeClass("disable-div");
          });
        };
     $(document).ready(function() {
         $('#remove2').click(function() {
		  document.getElementById('output2').style.display = 'none';	 
		  document.getElementById('browse2').style.display = 'inline';
		  document.querySelector('#remove2').style.display = 'none';
		  });
        });	


browse3 = document.querySelector('#browse3'), // text option fto run input
input3 = document.querySelector('.file3'); // file input
browse3.addEventListener('click', () => input3.click());

        var loadFile3 = function() {
        var reader = new FileReader();
		
		 var filePath = input3.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
        document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
        var output3 = document.getElementById('output3');
		output3.style.display="inline";
		if( output3 &&  output3.style) {
          }
        output3.src = reader.result;
		$(".pip").removeClass("redborder");
         };
		}
        reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse3').style.display = 'none';
		 document.querySelector('#remove3').style.display = 'inline';
		 $(document).ready(function() {
             $("#span4").removeClass("disable-div");
          });
        };
     $(document).ready(function() {
         $('#remove3').click(function() {
		  document.getElementById('output3').style.display = 'none';	 
		  document.getElementById('browse3').style.display = 'inline';
		  document.querySelector('#remove3').style.display = 'none';
		   });
        });	

browse4 = document.querySelector('#browse4'), // text option fto run input
input4 = document.querySelector('.file4'); // file input
browse4.addEventListener('click', () => input4.click());

        var loadFile4 = function() {
        var reader = new FileReader();
		
		 var filePath = input4.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
        document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
        var output4 = document.getElementById('output4');
		output4.style.display="inline";
		if( output4 &&  output4.style) {
          }
        output4.src = reader.result;
		$(".pip").removeClass("redborder");
         };
		}
        reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse4').style.display = 'none';
		 document.querySelector('#remove4').style.display = 'inline';
        };
     $(document).ready(function() {
         $('#remove4').click(function() {
		  document.getElementById('output4').style.display = 'none';	 
		  document.getElementById('browse4').style.display = 'inline';
		  document.querySelector('#remove4').style.display = 'none';
		          });
        });	
    $('.select').change(function(){
      alert(this.value);
      });

	</script>
	
	<div class="editads" style="">
		<form  method="POST" enctype="multipart/form-data" id="postForm">
		<input style="display:none;" type="text" name="editAdId" value="<?php echo $id; ?>" />
    <div   id="tag" style="width:90%;"><br>
	<p style="float:right; display:flex;">
	  <span id="t" style="font-size:15px; margin:0 10px; color:#6666FF; cursor:pointer;"><i <i class="fa fa-map-marker" style='font-size:18px; margin:0 5px;'></i><span onclick="changePostLocation()" style="color:black;"> <?php echo $districName; ?>/ <?php echo $cityName;?> </span></span>
	  <span  style="font-size:15px; margin:0 10px;color:#6666FF; cursor:pointer;"><i class='fa fa-tag' style='font-size:18px; margin:0 5px; '></i> <span style="color:black;">Phone</span> </span>
	</p>
	</div> <br> <hr><br>
<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Model:</b></label>
    <select class="select" id="model" name="model">
      <option value="" ><?php echo $mName; ?></option>
                              <?php 
								 $sql = "select * from `brands`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mName = $row["name"];
			                        $mId = $row["id"];
								    ?><option value="<?php echo $mId; ?>"> <?php echo $mName; ?></option><?php
								  }}
								?>
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="modelHint"></span>
	</div>
	<div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Device:</b></label>
    <select class=" " id="modifyType" name="modify_Type">
      <option value="" ><?php echo $mt_name; ?></option>
                               <?php 
								 $sql = "select * from `devices`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mtName = $row["name"];
			                        $mtId = $row["id"];
								    ?><option value="<?php echo $mtId; ?>"> <?php echo $mtName; ?></option><?php
								  }}
								?>
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="mtypeHint"></span>
	</div>
</div>
<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>District:</b></label>
    <select class=" " id="district" name="district">
      <option value="" ><?php echo $districName; ?></option>
                              <?php 
								 $sql = "select * from `districts`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mName = $row["name_en"];
			                        $mId = $row["id"];
								    ?><option value="<?php echo $mId; ?>"> <?php echo $mName; ?></option><?php
								  }}
								?>
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="modelHint"></span>
	</div>
	<div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>City:</b></label>
    <select class=" " id="city" name="city">
	<option value="" ><?php echo$cityName; ?></option>
                               <?php 
								 $sql = "select * from `cities`  ";
	                             $res = mysqli_query($conn,$sql);
                                 $count = mysqli_num_rows($res);
		                          if($count>0){
		                           while($row=mysqli_fetch_assoc($res)){
		                            $mtName = $row["name_en"];
			                        $mtId = $row["id"];
								    ?><option value="<?php echo $mtId; ?>"> <?php echo $mtName; ?></option><?php
								  }}
								?>
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="mtypeHint"></span>
	</div>
</div>
<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Model Year:</b></label>
     <input type="number" class="form-control" id="modelYear" value="<?php echo $year; ?>" name="model_Year" placeholder=" Enter model year ex-:(2022)">
	 <span style="font-size:12px; color:red; opacity:1;" id="myearHint"></span>
	</div>
	<div class="w3-half postpad" >	
	<label for="email"><b>Price (Rs):</b></label>
      <input type="number" class="form-control" id="price"  name="price" value="<?php echo $price; ?>" placeholder="Choose a good price you have to pay">
	  <span style="font-size:12px; color:red; opacity:1;" id="priceHint"></span>
</div>
</div>		
<div class=" w3-row w3-margin postpad" style=" width:100%;" >
 <div> <label for="sel1" class="form-label"><b>Condition:</b></label></div>
 <?php
	 if($Conditio == "Used"){
		?>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="Used" checked>
      <label class="form-check-label" for="radio1">Used</label>
    </div> 
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="Reconditioned" >
      <label class="form-check-label" for="radio1">Reconditioned</label>
    </div>
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="New" >
      <label class="form-check-label" for="radio1">New</label>
    </div>
    </div>
    </div>
		<?php 
	 }else if($Conditio == "Reconditioned"){
		?>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="Used" >
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
      <input type="radio" class="form-check-input" id="condition" name="condition" value="New" >
      <label class="form-check-label" for="radio1">New</label>
    </div>
    </div>
    </div>
		<?php 
	 }else if($Conditio == "New"){
		?>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="Used" >
      <label class="form-check-label" for="radio1">Used</label>
    </div> 
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input" id="condition" name="condition" value="Reconditioned" >
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
		<?php 
	 }
	 ?>
</div>
	<div class="w3-margin postpad">
	<label for="email"><b>Description:</b></label>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="7" id="discription" name="discription" style="color:blue;" placeholder="  Enter Description = More info to motivate buyers"><?php echo $di; ?></textarea>
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
	<div id="contactCard" style="height:auto; border:1px solid #7777FF;">	
	<?php
	  if($sellerAcc == "normal"){

				$sql3 = "select * from `user` where `UserId` ='$sellerId'	 ";
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
										   
								  }} 
			}else if($sellerAcc == "google"){
				$sql3 = "select * from `google-user` where `id` ='$sellerId'	 ";
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
				  }}				   
								  }} 
			}else if($sellerAcc == "facebook"){
				$sql3 = "select * from `facebook-user` where `id` ='$sellerId'	 ";
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
				  }}				   
								  }} 
			}
	?>
	<div  class=" w3-panel" ><span><b>Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>

	<div class="contact w3-margin" >    
     <div class="w3-row">  	
	  <div class="w3-half"><label><B>Name</B> - <?php echo $m; ?> <?php echo  $fullname; ?></label></div>
	  <div class="w3-half "><label><B>Email</B> - <?php echo  $email; ?></label></div>
	  </div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			 <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
             <?php
			  if($whhelAdPno != "0"){
				?> <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $whhelAdPno; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li><?php  
			  }
			  ?>
			 </ul>
			 </div>
            </div>
			<div class="w3-half">
			<?php
			  if($whhelAdPno =="0"){
				  ?>
			<div class="">
			 <input type="number" placeholder="071-XXXXXXX" name="moreNum"/> <b>Add Number</b>
			</div><?php
              }?>
			</div>
	    </div>
	   </div>
      </div>
	</div>
</div>	
 <div class="d-flex justify-content-center mb-2" style="padding:14px 0;">
                <button type="button" class="btn btn-primary" onclick="manageAdsave()">Save Change</button>
				<button type="button" class="btn btn-outline-primary ms-1" onclick="window.location.reload();">Cancel</button>
              </div>
</form>
	</div>

	<?php
}

if(isset($_POST["manageshopAd"])){

	 $id = $_POST["manageshopAd"];
	         $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		    if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
			 
			 $id = $row["id"];
	         $shopName = $row["shopName"];
			    $ownerName = $row["ownerName"];
			    $openDay = $row["shopOpen"];
				$closeDay = $row["shopClose"];
			    $openTim = $row["openTime"];
				$address = $row["address"];
				$pno1 = $row["shopPno1"];
				$pno2 = $row["shopPno2"];
				$address = $row["address"];
				$about = $row["about"];
				$cityId = $row["city_Id"];
				$postView =  $row["views"];
				$discription = $row["about"];
				$publishTime =  strtotime($row["post_Time"]);
				$updatepublishTime = strtotime($row["AdminApproval_Time"]);
			    $sellerId =	$row["seller_Id"];
				$sellerAcc       = $row['sellerAcc'];
                $postTime	     = $row['post_Time'];		 
			}
			}

			 $sql = "select * from `cities` where `id` = '$cityId' ";
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
	?>
		<script type="text/javascript">
browse10 = document.querySelector('#browse10'), // text option fto run input
input10 = document.querySelector('.file10'); // file input
browse10.addEventListener('click', () => input10.click());

        var loadFile10 = function() {
        var reader = new FileReader();
	    var filePath = input10.value;
		var t ="1";
		localStorage.setItem("image1Upload", t);	
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
		document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
		
        var output10 = document.getElementById('output10');
		output10.style.display="inline";
		if( output10 &&  output10.style) {
          }
        output10.src = reader.result;
		$(".pip").removeClass("redborder");
		
         };
		}
         reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse10').style.display = 'none';
		 document.querySelector('#remove10').style.display = 'inline';
		  $(document).ready(function() {
             $("#span2").removeClass("disable-div");
          });
        };

     $(document).ready(function() {
         $('#remove10').click(function() {
		  document.getElementById('output10').style.display = 'none';	 
		  document.getElementById('browse10').style.display = 'inline';
		  document.querySelector('#remove10').style.display = 'none';
		          });
        });
			

browse11 = document.querySelector('#browse11'), // text option fto run input
input11 = document.querySelector('.file11'); // file input
browse11.addEventListener('click', () => input11.click());

        var loadFile11 = function() {
        var reader = new FileReader();
		
		var filePath = input11.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
        document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
        var output11 = document.getElementById('output11');
		output11.style.display="inline";
		if( output11 &&  output11.style) {
          }
        output11.src = reader.result;
		$(".pip").removeClass("redborder");
         };
		}
        reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse11').style.display = 'none';
		 document.querySelector('#remove11').style.display = 'inline';
		  $(document).ready(function() {
             $("#span3").removeClass("disable-div");
          });
        };
     $(document).ready(function() {
         $('#remove11').click(function() {
		  document.getElementById('output11').style.display = 'none';	 
		  document.getElementById('browse11').style.display = 'inline';
		  document.querySelector('#remove11').style.display = 'none';
		  });
        });	

browse12 = document.querySelector('#browse12'), // text option fto run input
input12 = document.querySelector('.file12'); // file input
browse12.addEventListener('click', () => input12.click());

        var loadFile12 = function() {
        var reader = new FileReader();
		
		 var filePath = input12.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
        document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
        var output12 = document.getElementById('output12');
		output12.style.display="inline";
		if( output12 &&  output12.style) {
          }
        output12.src = reader.result;
		$(".pip").removeClass("redborder");
         };
		}
        reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse12').style.display = 'none';
		 document.querySelector('#remove12').style.display = 'inline';
		 $(document).ready(function() {
             $("#span4").removeClass("disable-div");
          });
        };
     $(document).ready(function() {
         $('#remove12').click(function() {
		  document.getElementById('output12').style.display = 'none';	 
		  document.getElementById('browse12').style.display = 'inline';
		  document.querySelector('#remove12').style.display = 'none';
		   });
        });	

browse13 = document.querySelector('#browse13'), // text option fto run input
input13 = document.querySelector('.file13'); // file input
browse13.addEventListener('click', () => input13.click());

        var loadFile13 = function() {
        var reader = new FileReader();
		
		 var filePath = input13.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
        document.getElementById("imageHint").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
        return;
        }else{
        reader.onload = function(){
        var output13 = document.getElementById('output13');
		output13.style.display="inline";
		if( output13 &&  output13.style) {
          }
        output13.src = reader.result;
		$(".pip").removeClass("redborder");
         };
		}
        reader.readAsDataURL(event.target.files[0]);
		 document.getElementById('browse13').style.display = 'none';
		 document.querySelector('#remove13').style.display = 'inline';
        };
     $(document).ready(function() {
         $('#remove13').click(function() {
		  document.getElementById('output13').style.display = 'none';	 
		  document.getElementById('browse13').style.display = 'inline';
		  document.querySelector('#remove13').style.display = 'none';
		          });
        });	
    $('.select').change(function(){
      alert(this.value);
      });

	</script>
<div class="editshopads" style="">	
<form  method="POST" enctype="multipart/form-data" id="postFormSh">
<input style="display:none;" type="text" name="editshopAdId" value="<?php echo $id; ?>" />
    <div   id="tagshop"><br>
	  <span id="t" style="font-size:15px; margin:0 10px; color:#6666FF; cursor:pointer;"><i  class="fa fa-map-marker" style='font-size:18px; margin:0 5px;'></i><span onclick="changePostLocation()" style="color:black;"> <?php echo  $districName;?>/ <?php echo $cityName; ?> </span></span>
	  <span  style="font-size:15px; margin:0 10px;color:#6666FF; cursor:pointer;"><i class='fa fa-tag' style='font-size:18px; margin:0 5px; '></i> <span style="color:black;">Phone Shop</span> </span>
	</div>
	<hr style="margin:0;"> <br> <br> 
	<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Shop Name:</b></label>
     <input type="text" class="form-control" id="shopName" value="<?php echo $shopName; ?>" name="shopName" placeholder=" Enter shop name ex-:(ABC shop)">
	 <span style="font-size:12px; color:red; opacity:1;" id="shopNameHint"></span>
	</div>
	<div class="w3-half postpad" >	
	  <label for="price"><b>Shop Owner Name:</b></label>
      <input type="text" class="form-control" id="ownerName"  name="ownerName" value="<?php echo $ownerName; ?>" placeholder="Enter the shop owner name ex-:(lahiru) ">
	  <span style="font-size:12px; color:red; opacity:1;" id="ownerNameHint"></span> 
</div>	
</div>
<div class="w3-margin w3-row" >
    <div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Shop Open In:</b></label>
    <select style="cursor:pointer;" id="openDays"  name="openDay">
      <option ><span style='cursor:pointer;'  ><?php echo $openDay; ?></span></option>
      <option  value="On weekdays (monday to friday)"> <span style='cursor:pointer; color:red;' >On weekdays (monday to friday)</span></option>
      <option  value="On weekends (saturday and sunday)"> <span style='cursor:pointer; color:red;' ></span>On weekends (saturday and sunday)</option>
      <option  value="Every day"> <span style='cursor:pointer; color:red;' ></span>Every day</option>		  
    </select>
	<span style="font-size:12px; color:red; opacity:1;" id="openDaysHint"></span>
	</div>
	
	<div class="w3-half postpad" >
	<label for="sel1" class="form-lbl"><b>Shop Close In:</b></label>
     <select style="cursor:pointer;" id="closeDays"  name="closeDay">
       <option ><span style='cursor:pointer;'  ><?php echo $closeDay; ?></span></option>
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
     <input type="number" class="form-control" id="shopContact1" value="<?php echo $pno1; ?>" name="shopContact1" placeholder=" Enter shop contact number ex-:(07########)">
	 <span style="font-size:12px; color:red; opacity:1;" id="shopContact1Hint"></span>
	</div>
	<div class="w3-half postpad" >	
	  <label for="price"><b>Shop Contact No-2:</b></label>
      <input type="number" class="form-control" id="shopContact2" value="<?php echo $pno2; ?>" name="shopContact2" placeholder="Enter shop contact number 2 ex-:(07########) ">
	  <span style="font-size:12px; color:red; opacity:1;" id="shopContact2Hint"></span> 
</div>	
</div>		
<div class=" w3-row w3-margin postpad" style=" width:100%;" >
 <div> <label for="sel1" class="form-label"><b>Open Time:</b></label></div>
  <?php
	 if($openTim == "24 hours"){
		?>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third " >
     <div class="form-check" >
      <input type="radio" class="form-check-input openTime" id="openTime" name="openTime" value="24 hours" checked>
      <label class="form-check-label" for="radio1">24 hours</label>
    </div> 
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input openTime" id="openTime"   name="openTime" value="12 hours" >
      <label class="form-check-label" for="radio1">12 hours</label>
    </div>
    </div>
    <div class="w3-third ">
     <div class="form-check"  style="">
      <input type="radio" class="form-check-input openTime" id="openTime"  name="openTime" value="Other" >
      <label class="form-check-label" for="radio1">Other</label>
	    <div style="width:180px; margin:0px 30px;" >
		   <input type="text" style="height:20px; font-size:14px;" id="otherOpenTime" name="otheropenTime"  />
		</div>
    </div>
    </div>
    </div>
	<?php
	 }else  if($openTim == "12 hours"){
		?>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third " >
     <div class="form-check" >
      <input type="radio" class="form-check-input openTime" id="openTime" name="openTime" value="24 hours" >
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
     <div class="form-check"  style="">
      <input type="radio" class="form-check-input openTime" id="openTime"  name="openTime" value="Other" >
      <label class="form-check-label" for="radio1">Other</label>
	    <div style="width:180px; margin:0px 30px;" >
		   <input type="text" style="height:20px; font-size:14px;" id="otherOpenTime" name="otheropenTime"  />
		</div>
    </div>
    </div>
    </div>
	<?php
	 }else  if($openTim == "Other" || $openTim != "Other"){
		?>
   <div class="w3-row"  style="padding:10px 3px; width:100%;" >
    <div class="w3-third " >
     <div class="form-check" >
      <input type="radio" class="form-check-input openTime" id="openTime" name="openTime" value="24 hours" >
      <label class="form-check-label" for="radio1">24 hours</label>
    </div> 
    </div>
    <div class="w3-third ">
     <div class="form-check">
      <input type="radio" class="form-check-input openTime" id="openTime"   name="openTime" value="12 hours" >
      <label class="form-check-label" for="radio1">12 hours</label>
    </div>
    </div>
    <div class="w3-third ">
     <div class="form-check"  style="">
      <input type="radio" class="form-check-input openTime" id="openTime"  name="openTime" value="Other" checked>
      <label class="form-check-label" for="radio1">Other</label>
	    <div style="width:180px; margin:0px 30px;" >
		   <input type="text" style="height:20px; font-size:14px;" id="otherOpenTime" name="otheropenTime" value="<?php echo $openTim; ?>" />
		</div>
    </div>
    </div>
    </div>
	<?php
	 }
	 ?>
</div>
  <div class="w3-margin postpad">
	<label for="email"><b>Shop Address:</b></label>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="3" id="addressShop" name="addressShop" value="<?php echo $address; ?>" placeholder="  Enter Shop Address..."></textarea>
	  <span style="font-size:12px; color:red; opacity:1;" id="addressShopHint"></span>
    </div>
	</div>
	
	<div class="w3-margin postpad">
	<label for="email"><b>About Shop:</b></label>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="5" id="aboutShop" name="aboutShop" value="<?php echo $about; ?>" placeholder="  Enter About for Shop = More info to motivate users"></textarea>
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
		<?php
	  if($sellerAcc == "normal"){

				$sql3 = "select * from `user` where `UserId` ='$sellerId'	 ";
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
										   
								  }} 
			}else if($sellerAcc == "google"){
				$sql3 = "select * from `google-user` where `id` ='$sellerId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno1 = $row["pno"];				   
								  }} 
			}else if($sellerAcc == "facebook"){
				$sql3 = "select * from `facebook-user` where `id` ='$sellerId'	 ";
	                             $res3 = mysqli_query($conn,$sql3);
                                 $count3 = mysqli_num_rows($res3);
		                          if($count3>0){
		                           while($row=mysqli_fetch_assoc($res3)){
                               
				                   $fullname = $row["name"];
					               $m = "";  
				                   $email = $row["email"];
								   $pno1 = $row["pno"];				   
								  }} 
			}
	?>
	<div id="shopcontactCard" >	
	<div class=" w3-panel" ><span><b>Publisher Contact details <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="Check Your Contact Detials"></i></b></span></div>
	 <div class="contact">  
	  	  <div class="w3-half"><label><B>Name</B> - <?php echo $m; ?> <?php echo  $fullname; ?></label></div>
	      <div class="w3-half "><label><B>Email</B> - <?php echo  $email; ?></label></div>
     </div>
	 <div class=" contact  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" >	
	    <label style="margin:10px 20px 0px;" ><B>Phone number</B> <i class='fa fa-question-circle' data-bs-toggle="tooltip" data-bs-placement="right" title="Add 2 Phone Numbers"></i></label>
	   <div class="w3-panel  w3-border-top  w3-border-left  w3-border-right  w3-border-bottom" style="background-color:LightGray; width:100%;">	
		    <div class="w3-row w3-border">
            <div class=" w3-half " style="padding:0px;">
			<div>
             <ul id="list">
			  <li style="width:90%; padding:10px 0;" class="w3-border-bottom w3-border-blue"><i class="fa fa-check-circle"  style="margin:0 5px;color:#2ade69;"></i> <?php echo $pno1; ?><span  class="closeiconNum" style="font-size:14px;color:red;  float:right; margin:0 2px;" ><i class="fa fa-times" ></i></span></li>
            </ul>
			 </div>
            </div>
	    </div>
	   </div>
      </div>
	</div>
</div>	
 <div class="d-flex justify-content-center mb-2" style="padding:14px 0;">
                <button type="button" class="btn btn-primary" onclick="manageshopAdsave()">Save Change</button>
				<button type="button" class="btn btn-outline-primary ms-1" onclick="window.location.reload();">Cancel</button>
              </div>
</form>
</div>

	<?php
}
	   
	   
if(isset($_POST["editAdId"])){
	   $AdId = $_POST["editAdId"];
	   $model           = $_POST['model'];
	   $modify_Type     = $_POST['modify_Type'];
       $price           = $_POST['price'];
       $district        = $_POST['district'];
       $condition       = $_POST['condition'];
       $model_Year      = $_POST['model_Year'];
       $discription     = $_POST['discription'];
	   $city_Id         = $_POST['city'];
	   $addPnum1        = $_POST["moreNum"];
 
	   $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
       $post_Time       = $date->format('Y-m-d H:i:s');
	   $post_Time2      = strtotime($post_Time);
					   
	   $sql = "SELECT * FROM `phoneads` WHERE `id` ='$AdId'";
	                $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
		            if($count>0){
		            while($row=mysqli_fetch_assoc($res)){
									$id = $row["id"];
									$modelId = $row["name"];
									$mtyp = $row["device"];
									$year = $row["model_Year"];
									$Conditio = $row["condition"];
									$cId = $row["city_Id"];
									$views =  $row["views"];
									$publishTime =  strtotime($row["post_Time"]);
								    $sellerId =	$row["seller_Id"];
									$ptime =	$row["post_Time"];
									$whhelAdPno = $row["addMorePnum"];
									$imgLocation = 	$row['imageLocation'];	
					}}
			$post_Time3      = strtotime($ptime);		
			if($model == ""){
				$model = $modelId;
			}else{
				$model  = $_POST['model'];
			}		
		    
			if($modify_Type == ""){
				$modify_Type = $mtyp;
			}else{
				$modify_Type  = $_POST['modify_Type'];
			}
			
			if($city_Id == ""){
				$city_Id = $cId;
			}else{
			    $city_Id  = $_POST['city'];
			}
			
			if($addPnum1 == ""){
				$addPnum1 = $whhelAdPno;
			}else{
			    $addPnum1 = $_POST["moreNum"];
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
		 $sql5 = "select * from `brands`  where `id` = '$model'  ";
	                             $res5 = mysqli_query($conn,$sql5);
                                 $count5 = mysqli_num_rows($res5);
		                          if($count5>0){
		                           while($row5=mysqli_fetch_assoc($res5)){
                                    $model_name = 	$row5["name"];
									$m = "Phone";
									$new_model_name = $m." ".$model_name ; 
								   }}
		 $sql6 = "select * from `devices`  where `id` = '$modify_Type'  ";
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
			
			
	 					$location="../../../adsPictures/{$sellerId}/{$post_Time3}/";
						
						 if(!empty($_FILES['img1']['name'])){
	                    $file1= basename($_FILES["img1"]["name"]); 
	                    $file_tmp1=$_FILES['img1']['tmp_name'];
						$fileType1 = pathinfo($location.$file1,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/{$seller_Id}/{$post_Time2}/{$file1}";
						 }
						 if(!empty($_FILES['img2']['name'])){
	                    $file2=  basename($_FILES["img2"]["name"]); 
	                    $file_tmp2=$_FILES['img2']['tmp_name'];
						$fileType2 = pathinfo($location.$file2,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/{$seller_Id}/{$post_Time2}/{$file2}";
						 }
						 if(!empty($_FILES['img3']['name'])){
	                    $file3=  basename($_FILES["img3"]["name"]); 
	                    $file_tmp3=$_FILES['img3']['tmp_name'];
						$fileType3 = pathinfo($location.$file3,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/{$seller_Id}/{$post_Time2}/{$file3}";
						 }
						 if(!empty($_FILES['img4']['name'])){
	                    $file4=  basename($_FILES["img4"]["name"]); 
	                    $file_tmp4=$_FILES['img4']['tmp_name'];
						$fileType4 = pathinfo($location.$file4,PATHINFO_EXTENSION);
						$imgLocation = "../../adsPictures/{$seller_Id}/{$post_Time2}/{$file4}";
						 }
	                    $query="UPDATE `phoneads` SET `name`='$model',`price`='$price',`brand`='$model',`brand_name`='$new_model_name',
						`condition`='$condition',`model_Year`='$model_Year',`device`='$modify_Type',`device_name`='$new_modify_Type_name',
						`district_Id`='$did ',`city_Id`='$city_Id',`addMorePnum`='$addPnum1',`discription`='$discription',`update_Time`='$post_Time',`Admin_Approval`='0', `update_Admin_Approval` ='1', `lat` ='$lat', `lng`='$lng', `imageLocation` = '$imgLocation' WHERE `id`='$AdId'";
	                    $fire=mysqli_query($conn,$query);
	                if($fire)
	             {
					 			
                                 $sql4 = "select * from `rejectads` WHERE `postId`='$AdId' AND `post`='phone' ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
					                $sq ="DELETE FROM `rejectads` WHERE `postId`='$AdId' AND `post`='phone' ";
					                $res=mysqli_query($conn,$sq);
								  }
				      if(!empty($_FILES['img1']['name'])){
					  $sql ="DELETE FROM `phoneadimages` WHERE `post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file1','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					 }
					} 
					 if(!empty($_FILES['img2']['name'])){
						$sql ="DELETE FROM `phoneadimages` WHERE `post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file2','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					 }
					} 
					 if(!empty($_FILES['img3']['name'])){
						$sql ="DELETE FROM `phoneadimages` WHERE `post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file3','$addPnum1','$addPnum2','$post_Time')";
				        $res=mysqli_query($conn,$sql);	
					 }	
					} 
					 if(!empty($_FILES['img4']['name'])){
						$sql ="DELETE FROM `phoneadimages` WHERE `post_Id`='$AdId' ORDER BY id ASC LIMIT 1";
					  $res=mysqli_query($conn,$sql);
                     if($res){					  
						$sql = "INSERT INTO `phoneadimages`(`id`, `post_Id`, `image_name`,`pno1`,`pno2`,`time`) VALUES ('','$AdId','$file4','$addPnum1','$addPnum2','$post_Time')";
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

  if(isset($_POST["deleteAd"])){

 $id = $_POST["deleteAd"];
	 	
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
			  if (file_exists("../../../adsPictures/{$sellerId}/{$postTime}")) {
	               $dir = "../../../adsPictures/{$sellerId}/{$postTime}/";
                   foreach(glob($dir.'*.*') as $v){
                    unlink($v);
		           rmdir("../../../adsPictures/{$sellerId}/{$postTime}");
				   $sql ="DELETE FROM `phoneads` WHERE `id`='$id'";
	               $res=mysqli_query($conn,$sql);
                   }
              }
		     }
			
			}

  } 
    if(isset($_POST["deleteshopAd"])){

 $id = $_POST["deleteshopAd"];
	 	
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
			  if (file_exists("../../../adsPictures/shopAds/{$sellerId}/{$postTime}")) {
	               $dir = "../../../adsPictures/shopAds/{$sellerId}/{$postTime}/";
                   foreach(glob($dir.'*.*') as $v){
                    unlink($v);
		           rmdir("../../../adsPictures/shopAds/{$sellerId}/{$postTime}");
				   $sql ="DELETE FROM `phoneshopads` WHERE `id`='$id'";
	               $res=mysqli_query($conn,$sql);
                   }
              }
		     }
			
			}

  } 
?>