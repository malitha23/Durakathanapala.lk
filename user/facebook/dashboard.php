
<?php
require_once '../../function/database/database.php';

if(isset($_SESSION["postId"])){
	 $postId = $_SESSION["postId"];
 }else{
	
 }
 

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Facebook Account</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../lib/w3.css">
  <style>
  .custom-combobox {
    position: relative;
    display: inline-block;

  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
  }
  .custom-combobox-input {
    margin: 0;
    padding: 5px 10px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: this._source.bind( this )
          })
          .tooltip({
            classes: {
              "ui-tooltip": "ui-state-highlight"
            }
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .on( "mousedown", function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .on( "click", function() {
            input.trigger( "focus" );
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
 
    $( "#combobox" ).combobox();
    $( "#toggle" ).on( "click", function() {
      $( "#combobox" ).toggle();
    });
  } );
  </script>
  
 </head>
 <body>
  <div class="container">
     <div class="card"><br>
      <div class="card-header">
       <b> You have Successfully Logged In With Facebook</b>
      </div><br>
	  <div class="w3-row">
	   <div class="w3-half w3-card" style="padding:20px 50; height:300px;">
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $_SESSION['user_first_name']; ?></b></h5>
        <p class="card-text"><b>Email:- <?php echo $_SESSION['user_email_address']; ?> </b></p>
	
        <img class="user-image" src="<?php echo $_SESSION["user_image"]; ?>" alt="Card image cap">
       
      </div>
	  </div>
	  <div class="w3-half w3-card" style="height:300px;">	
	  
<form class="w3-container" method="POST">

<h2 class="w3-text-blue" style="text-align:center;"><b>Contact Form</b></h2>

<p>      
<label class="w3-text-blue"><b>Select city</b></label><br>
<select id="combobox" placeholder="Select your city..." name="city"  >
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
<input class="w3-input w3-border" id="pno" name="pno" type="number"></p>

<p>      
<input type="submit" class="btn btn-primary" name="<?php echo $submit; ?>" value="Conform"/></p>

</form>
	  </div>
	  </div>
    </div>
  </div>
  <?php
    if(isset($_POST["submit"])){
		$city = $_POST["city"];
		$pno = $_POST["pno"];
	if($city != "" && $pno != ""){	
		$sql4 = "select * from `cities`  where `id` = '$city'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
									$lat =  $row4["latitude"];
									$lng =  $row4["longitude"];
								   }}
		$sql4 = "select * from `phoneads`  where `id` = '$postId'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
									$Time =  $row4["post_Time"];
								   }
								   $posttime = strtotime($Time);
								   }
		$sql = "select * from `phoneadimages`  where `post_Id` = '$postId'  ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					 $locationImg = $row["image_name"];
				 }}else{ $locationImg = "";}	
				 
        $s = "../../adsPictures/{$googleTockenId}/{$posttime}/$locationImg";	
		
		$queryPerform = "UPDATE `google-user` SET `lat` = '$lat' , `lng` = '$lng' , `pno` = '$pno'  WHERE `authProvider` = '$authProvider' AND `googleIdTocken` = '$googleTockenId'";	
        $finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);
		
		$updateAd = "UPDATE `phoneads` SET `seller_Id`= '$googleTockenId',`imageLocation` = '$s'  WHERE `id` = '$postId' ";	
        $finalResultset = $conn->query($updateAd) or die("Error in query".$conn->error);
		
		  $sr ="../../adsPictures/{$googleTockenId}/";
     	     if(file_exists($sr)){
			if (!file_exists("../../adsPictures/{$googleTockenId}/{$posttime}")) { 
				 mkdir("../../adsPictures/{$googleTockenId}/{$posttime}", 0777, true);
			}
				 $sql = "select * from `phoneadimages`  where `post_Id` = '$postId'  ";
	              $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
		         if($count>0){
				 while($row=mysqli_fetch_assoc($res)){
					 $img = $row["image_name"];
					 $sr ="../../adsPictures/temp/{$posttime}/{$img}";
     	           if(file_exists($sr)){
 					  copy("../../adsPictures/temp/{$posttime}/{$img}","../../adsPictures/{$googleTockenId}/{$posttime}/{$img}");   
				   }
				 }}
				 
				if (file_exists("../../adsPictures/temp/{$posttime}")) {
	               $dir = "../../adsPictures/temp/{$posttime}/";
                   foreach(glob($dir.'*.*') as $v){
                    unlink($v);
		           rmdir("../../adsPictures/temp/{$posttime}");
                   }
              } 
                                     
             }else{
                  rename("../../adsPictures/temp/","../../adsPictures/{$googleTockenId}/");   
             }
        
		$updateAdImage = "UPDATE `phoneadimages` SET `pno1`= '$pno' WHERE `post_Id` = '$postId' ";	
        $finalResultset = $conn->query($updateAdImage) or die("Error in query".$conn->error);
        if($finalResultset){
             ?>
			 <script type="text/javascript">
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = "<?php echo $googleTockenId; ?>";
		 var p = "";
		 var e = "google";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 </script>
			 <?php  
			 
			 $sql = "select * from `google-user`  where `googleIdTocken` = '$googleTockenId' ";
	               $res = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($res);
		           if($count>0){
				   while($row=mysqli_fetch_assoc($res)){
					$verify = $row["verifyAcc"]; 
					$sellerId = $row["googleIdTocken"];
					
                    $google_client->revokeToken();
                    session_destroy();
				   }}
				   if($verify == ""){
					?>
					<script type="text/javascript">
					window.location.href = '../profile/profile.php?user=google&id=<?php echo $sellerId; ?>&ad=posted&verify=no';
					</script>
       	           <?php    
				   }else{
					?>
					<script type="text/javascript">
					window.location.href = '../profile/profile.php?user=google&id=<?php echo $sellerId; ?>&ad=posted&verify=yes';
					</script>
       	           <?php  
				   }
				   
				   
		}		
	}
	
   }
   
    if(isset($_POST["nsubmit"])){
		$city = $_POST["city"];
		$pno = $_POST["pno"];
	 
	 if($city != "" && $pno != ""){
		$sql4 = "select * from `cities`  where `id` = '$city'  ";
	                             $res4 = mysqli_query($conn,$sql4);
                                 $count4 = mysqli_num_rows($res4);
		                          if($count4>0){
		                           while($row4=mysqli_fetch_assoc($res4)){
									$lat =  $row4["latitude"];
									$lng =  $row4["longitude"];
								   }}
								   
			$queryPerform = "UPDATE `google-user` SET `lat` = '$lat' , `lng` = '$lng',`pno` ='$pno'  WHERE `authProvider` = '$authProvider' AND `googleIdTocken` = '$googleTockenId'";	
            $finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);					   
	        if($finalResultset){
				?>
			 <script type="text/javascript">
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = "<?php echo $googleTockenId; ?>";
		 var p = "";
		 var e = "google";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 </script>
			 <?php
			 
			  $sql = "select * from `google-user`  where `googleIdTocken` = '$googleTockenId' ";
	               $res = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($res);
		           if($count>0){
				   while($row=mysqli_fetch_assoc($res)){
					$verify = $row["verifyAcc"]; 
					$sellerId = $row["googleIdTocken"];
					
                    $google_client->revokeToken();
                    session_destroy();
				   }}
				   if($verify == ""){
					?>
					<script type="text/javascript">
					window.location.href = '../profile/profile.php?user=google&id=<?php echo $sellerId; ?>&ad=posted&verify=no';
					</script>
       	           <?php    
				   }else{
					?>
					<script type="text/javascript">
					window.location.href = '../profile/profile.php?user=google&id=<?php echo $sellerId; ?>&ad=posted&verify=yes';
					</script>
       	           <?php  
				   }
			}  
	  }

	}
   
  ?>
 <script>
 </script>
 </body>
</html>