<?php

require_once '../../function/database/database.php';
    $authProvider = "Facebook";
    $facebookTockenId = $_GET['id'];
    $name = $_GET['name'];
    $email = "";
    $profile = "";
		   
    $date     = new DateTime("now", new DateTimeZone('Asia/Colombo') );
    $now      = $date->format('Y-m-d H:i:s');
    

    // Check whether the user data already exist in the database
    $queryCheck = "SELECT * FROM `facebook-user` WHERE `authProvider` = '$authProvider' AND `facebookIdTocken` = '$facebookTockenId'";
    $res = mysqli_query($conn,$queryCheck);
    $count = mysqli_num_rows($res);
    if ($count>0){
        $queryPerform = "UPDATE `facebook-user` SET `authProvider` = '$authProvider', `facebookIdTocken` = '$facebookTockenId', `name` ='$name',
        `email` ='$email', `profile` ='$profile', `modified` ='$now' WHERE `authProvider` = '$authProvider' AND `facebookIdTocken` = '$facebookTockenId'";
    }else{
        $queryPerform = "INSERT INTO `facebook-user`(`id`, `authProvider`, `facebookIdTocken`, `name`, `email`, `profile`, `created`, `modified`) VALUES ('','$authProvider','$facebookTockenId','$name','$email','$profile','$now','$now');";
    }

    $finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);
	if($finalResultset){
	}
	
        $facebook ="Facebook"; 
		$sql = "SELECT * FROM `facebook-user` WHERE `authProvider` = '$facebook' AND `facebookIdTocken` = '$facebookTockenId' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
			    $facename = $row['name'];
			  }}
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Durakathanapala Login using Facebook Account</title>
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
        <h5 class="card-title"><b><?php echo $facename; ?></b></h5>
        <img class="user-image" src="images.png" alt="Card image cap">
       
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
<input type="submit" class="btn btn-primary" name="submit" value="Conform"/></p>

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
		$queryPerform = "UPDATE `facebook-user` SET `lat` = '$lat' , `lng` = '$lng',`pno`='$pno'  WHERE `authProvider` = '$authProvider' AND `facebookIdTocken` = '$facebookTockenId'";	
        $finalResultset = $conn->query($queryPerform) or die("Error in query".$conn->error);
		
		 if($finalResultset){
             ?>
			 <script type="text/javascript">
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = "<?php echo $facebookTockenId; ?>";
		 var p = "";
		 var e = "facebook";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 </script>
			 <?php  
			 
			 $sql = "select * from `facebook-user`  where `facebookIdTocken` = '$facebookTockenId' ";
	               $res = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($res);
		           if($count>0){
				   while($row=mysqli_fetch_assoc($res)){
					$verify = $row["verifyAcc"]; 
					$sellerId = $row["facebookIdTocken"];
	
				   }}
				   if($verify == ""){
					?>
					<script type="text/javascript">
					window.location.href = '../profile/profile.php?user=facebook&id=<?php echo $sellerId; ?>&ad=posted&verify=no';
					</script>
       	           <?php    
				   }else{
					?>
					<script type="text/javascript">
					window.location.href = '../profile/profile.php?user=facebook&id=<?php echo $sellerId; ?>&ad=posted&verify=yes';
					</script>
       	           <?php  
				   }
				   
				   
		}
		}	
	}
  ?>
 </body>
</html> 