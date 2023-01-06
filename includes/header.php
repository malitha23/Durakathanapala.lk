    <div class="header_section w3-card-1" id="deskHeader" style="position:fixed; z-index:5;  transition: 0.8s; margin:0;">
   
 
	<div style="width:100%; height:80px; display:flex; position:relative;">
        
	 <div style="width:20%; height:100px; ">
	    <div class="col-sm-12 col-lg-3" style="margin:0px 40px;">
					<p class="navbar-togglr" ><a href="index.php"><img style="width:150px;" src="images/logo-2.png"></a></p>
				</div>
	 </div>
	 <div style="width:50%; height:100px; ">
	    <div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light" >
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav" >
							<br>
                           <a  class="nav-item nav-link" style="color:white;" href="index.php"><b>Home</b></a>
                           <a class="nav-item nav-link" style="color:white;" href="allAds.php"><b>All-ads</b></a>
                           <a  class="nav-item nav-link" style="color:white;" href="about.php"><b>About</b></a>
                           <!-- <a class="nav-item nav-link" href="clients.html">Clients</a> -->
                           <a  class="nav-item nav-link"  style="color:white;" href=""><b>Contact</b></a>
						   <p class="postbtn nav-link" ><button type="button" onclick="postManu()" class="btn btn-warning">Free Post Ads</button></p>
                        </div>
					</div>
                    </nav>
				</div>
	 </div>
	 <div style="width:30%; height:100px;">
	    <div style="width:100%; height:100px; display:flex; ">
		  <div style="width:55%;  height:100px; ">
		
		  </div>
		  <div style="width:45%;  height:100px; margin:-15px 0; ">
		       <div class="iconRow" >
			     <div class="iconcolumn" style="margin:0px 0;">
		              <div id="lic" class="lic" >
						<div id="lic2"  class="lic2" ></div>
					  </div>
				 </div>	 
				  <div class="iconcolumn" style="margin:5px 20px;" >
		             <i class="fa fa-bell" style='font-size:24px; color:white; cursor:pointer;' onclick="toggleNotifi()"></i>
					 <?php
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
			   }
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
               date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
			  }
		}else if($email != ""){
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];					  
			   }
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
                           date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserEmail"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
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
			  } 
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
               date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
			  }
		}else if($login == "facebook"){
			$uname = $_COOKIE["durakathanapalaloginUserName"];
			 $sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$userId = $row["facebookIdTocken"];  
			  } 
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
               date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
			  }
		}
		     $sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' AND `active` = '1' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
	         if($count>0){
				 ?> <span class="span"><?php echo $count; ?></span><?php
			 }
			 
			 $sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
	         if($count>0){
	             while($row=mysqli_fetch_assoc($res)){
				  $Date = $row["date"];	
				  $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
                  $post_Time       = $date->format('Y-m-d H:i:s');
	              $today      = strtotime($post_Time);
	              $notiDate   = strtotime($Date);
	              $difference = $today - $notiDate;
                  $days = floor($difference / 86400);
                  if($days > 7){
                      $sql = "DELETE FROM `notification` WHERE `UserId` = '$userId' ";
				      $res=mysqli_query($conn,$sql);
                  }
			   }
	         }
	}
					 ?>
				 </div>	
				</div>	  
		  </div>
		</div>	
	 </div>
	</div>
	<!-- <div class="header_section w3-card-1"  style="position:relative; z-index:4;"> 
		<div class="container " id="manu1" >
			<div class="row" >
					   <div style="display:flex; position:absolute; left:72%; top:45px;">
					    <p class="postbtn" style="position:relative; top:-15px;"><button type="button" onclick="postManu()" class="btn btn-warning">Free Post Ads</button></p>
						<div id="lic" class="lic" onclick="logProfileIcon()">
						<div id="lic2"  class="lic2" ></div>
						</div>
						</div>
				<div class="col-sm-12 col-lg-3">
					<p class="navbar-togglr" ><a href="index.html"><img style="width:150px;" src="images/logowhite.png"></a></p>
				</div>
				<div class="col-sm-6" >
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" id="manubtn" style="width:50px;"type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
							<br>
                           <a class="nav-item nav-link" href="index.html">Home</a>
                           <a class="nav-item nav-link" href="browse ads.html">All-ads</a>
                           <a class="nav-item nav-link" href="about.html">About</a>
                           <a class="nav-item nav-link" href="contact.html">Contact</a>
                        </div>
					</div>
                    </nav>
				</div>
				
			</div>
		</div>
	</div> -->
         <div onclick="document.getElementById('msgModal').style.display = 'inline'; document.getElementById('trancelate').style.display = 'inline'; " style="position:absolute; cursor:pointer; left:24%; top:3px; padding:0 3px 3px; border-radius:8px; border:1px solid white;"><img style="width:15px; " src="images/3898150.png" /><span style="color:white; font-size:13px; margin:0px 3px;">Language</span> </div>
	</div>
<div class="header_section" id="phoneHeader" style="">
    <?php
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
			   }
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
               date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
			  }
		}else if($email != ""){
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];					  
			   }
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
                           date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserEmail"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
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
			  } 
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
               date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
			  }
		}else if($login == "facebook"){
			$uname = $_COOKIE["durakathanapalaloginUserName"];
			 $sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$userId = $row["facebookIdTocken"];  
			  } 
			  }else{
			      	     ?>
			 <script type="text/javascript">
		       var date = new Date();
               date.setTime(date.getTime()-(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
                 var n = "";
		 var p = "";
		 var e = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
                 
                 window.location.href = 'https://durakathanapala.lk/user/register.php?acc=error';
		 </script>
			 <?php
			  }
		}
		$sql = "SELECT * FROM `notification` WHERE `UserId` = '$userId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
	         if($count>0){
	             while($row=mysqli_fetch_assoc($res)){
				  $Date = $row["date"];	
				  $date            = new DateTime("now", new DateTimeZone('Asia/Colombo') );
                  $post_Time       = $date->format('Y-m-d H:i:s');
	              $today      = strtotime($post_Time);
	              $notiDate   = strtotime($Date);
	              $difference = $today - $notiDate;
                  $days = floor($difference / 86400);
                  if($days > 7){
                      $sql = "DELETE FROM `notification` WHERE `UserId` = '$userId' ";
				      $res=mysqli_query($conn,$sql);
                  }
			   }
	         }
     }
    ?>
        <div onclick="document.getElementById('msgModal').style.display = 'inline'; document.getElementById('trancelate').style.display = 'inline';" style="position:absolute; cursor:pointer; right:5px; top:3px; padding:0 3px 3px; border-radius:8px; border:1px solid white;"><img style="width:15px; " src="images/3898150.png" /><span style="color:white; font-size:13px; margin:0px 3px;">Language</span> </div>
			<div class="row" >
				<div class=" col-sm-6-p" style="width:100%; padding:5px;">                                 
                <nav class="navbar navbar-expand-lg  navbar-light" style="background-color:#838bff; margin:auto; padding-right: 1rem;
                   padding-left: 1rem;">
                   <div style="width:100%;  margin:0; display:flex;">
                    <div style="width:55%;">
				     <a class="" href="index.php"><img style="width:130px; margin:0 2px;" src="images/logo-2.png"></a>
				    </div>
                    <div style="width:45%; ">					
				   <div style=" width:100%; display:flex; margin:15px 25px;" >
				      <div style="width:50%; ">
				       <a id="my" style="float:right; font-size:13px; font-weight:bold; "onclick="postManu()" class="btn btn-warning">Free Post Ads</a>
					  </div>
					  <div style="width:50%; ">
					  <span id="licPhone" style="float:right;" >  				  
					  </span>
					  </div>
                     </div>
					 </div>
                   </div>
                
				   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" style="background-color:#838bff; border:1px solid #ddd; width:100%; margin:20px auto 0;">
                    <span class="navbar-toggler-icon"></span>
                   </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                   <ul class="navbar-nav"  style="background-color:#838bff; margin:0 5px;">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="allAds.php">All Ads</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>  
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                  <ul class="dropdown-menu">
                   <li><a class="dropdown-item" href="#"></a></li>

                  </ul>
                 </li>
                 </ul>
             </div>

</nav>
</div>
</div>
</div>	
