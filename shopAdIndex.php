<?php 

	   require_once 'function/database/database.php';
	    $date     = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $now      = $date->format('Y-m-d H:i:s');   
    $queryCheck = "SELECT * ,DATEDIFF('$now',`date`) AS days FROM viewscount";
    $res = mysqli_query($conn,$queryCheck);
	 while($row=mysqli_fetch_assoc($res)){
		 $Atdate = $row["days"];
		  $Aid = $row["id"];
	     if($Atdate > 2){
			 $sql = "DELETE FROM `viewscount` WHERE `id` = '$Aid'";
	         $fire=mysqli_query($conn,$sql);
		 }
		  
	 }
		
  include 'function/function.php';
  include 'function/shopfunction.php';

  $title ="Durakathanapala.lk -Phones, Phone Shops, Phone Parts and Services Shops, Buy & Sell Phones in Sri Lanka";
  if(isset($_GET["allAds"])){
	  ?><script type="text/javascript">
	     document.getElementById('deskHeader').style.display="none";
	    </script><?php
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title><?php echo $title; ?></title>
<meta name-"description" content="This website is durakathanapala. This website enables anyone to buy a phone, buy phone parts.
 Also, by searching the name of the phone you want, you can find the nearest store where you can get it. Also,
 through this durakathanapala website, you can get your phone. Can be sold.">

<meta name ="keywords" content="phone, durakathanapala, phone sell, buy aphone, mobile, smartphone, mobile phones, mobile shop, new phones, second hand phone, new mobile,
  samsung mobile phones, apple, redmi, Huawei, Nokia, Sony, LG, HTC, lenovo, xiomi, vivo, oppo, reakme, blackberry, where is, phone salle, mobile salle, official site, shop in mobile ">


<meta name ="author" content= "Malitha sayuranga, Chalitha bsula, Bishan kanthana, hasindu nimsara"> 
<meta property="og:tittle" content="You can buy and sell phones of any phone model you want">
<meta property="og:image" content="images/metaTagImage.jpeg">
<meta property="og:description" content="This website is durakathanapala. This website enables anyone to buy a phone, buy phone parts.
 Also, by searching the name of the phone you want, you can find the nearest store where you can get it. Also,
 through this durakathanapala website, you can get your phone. Can be sold.">

<meta name ="author" content= "Malitha sayuranga, Chalitha bsula, Bishan kanthana, hasindu nimsara"> 
<meta property="twitter:tittle" content="You can buy and sell phones of any phone model you want">
<meta property="twitter:image" content="images/metaTagImage.jpeg">
<meta property="twitter:description" content="This website is durakathanapala. This website enables anyone to buy a phone, buy phone parts.
 Also, by searching the name of the phone you want, you can find the nearest store where you can get it. Also,
 through this durakathanapala website, you can get your phone. Can be sold.">

<meta name="google-signin-client_id" content="766444733107-kpo84tfhl74noa5d01q9gn5kij6j1815.apps.googleusercontent.com">
<link rel="icon" href="images/webLogo.png">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2.0.11/dist/flickity.min.css"> <!-- populer ads side-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/new.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" type="text/css" href="css/new2.css">
    <link rel="stylesheet" type="text/css" href="css/newindex.css">
	<style type="text/css">

	</style>
 <script type="text/javascript">
   
 </script>
</head>
<body>	

 
 
<?php  loader(); ?>  
<?php  msgModal(); ?>  
<?php fogveryModal(); ?>
<?php  fognewPassModal(); ?> 
<?php notificationBox(); ?>
<?php registerForm();  ?>
<?php  forgotform(); ?>  
<?php  addpost(); ?>
<?php login(); ?>

	<!-- header section start -->
<?php 
  include 'includes/header.php';
?>
<div class="procardMain" style="" id="procardMain">
</div>
<?php shopviewItem(); ?>
<div id="allManu">
	<!-- header section end -->
	<!-- banner section start -->
	<div class="layout_padding banner_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div class="icon-bar">
  <!-- <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>  -->
</div>
					<!-- <h1 class="banner_taital">All You Need Is Here & Classified</h1>
					<p class="browse_text">Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
					<div class="banner_bt">
						<button class="read_bt">Read More</button>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- banner section end -->
	
	<!-- serach box section start -->
      <?php  location2();     ?>
	  <!-- The Modal -->
      <?php  shopsearchBox();    ?>
    <!-- serach box section end -->
	
	<!-- category List section start -->
      <?php  shopcategoryList(); ?>
    <!-- category List section end -->
	<?php shopallAds(); ?>
	<!-- Populer section start -->
      <?php  populerItem();  ?>
	  </div>
    <!-- Populer section end -->
        <div class="paragraph paragraph2 w3-card-4 w3-margin" onMouseOver="show_para()"  onMouseOut="hide_para()">
         <p>Buying and Selling Mobile Phones in Sri Lanka This will be the best phone platform with the longest collection of popular enhancements. Durakathanapala.lk We work hard to help you find the best phone you are looking for and at least keep our platform free. You can also easily get and sell phone service points, nearest phone shops and phone parts for free.
		 </p>
		 <p>We keep in mind the best requirements of our practice. Post ads for your free collection and sell quickly</p>
	</div>
	  </div>
	  <?php
	      if(isset($_GET["forgot"])){
	  ?><script type="text/javascript">
	    document.getElementById("fogModal").style.display = "inline";
	    </script><?php
  }
	  ?>
	<!-- footer section start -->
	<?php 
       include 'includes/footer.php';
    ?>
	<!-- footer section end -->
	<!-- copyright section end -->
      <!-- Javascript files-->
      <script type="text/javascript">
        $(document).ready(function() {
         $('.postaddbtn').click(function() { 
		     let login = getCookie("durakathanapalalogin");
			 if(login == "normal"){
			  document.getElementById("loader2").style.display = "inline";
			  document.getElementById("progress-bar").style.width = "10%";
			  document.getElementById("imgUp").innerTEXT = 'Checking your detials. Please wait...';
			  $("#loader").addClass("loader2");
			  showpostaddPage();
			  
			 }else  if(login == "google"){
				  
               var createPost = localStorage.getItem("createPost");
		       if(createPost == "1"){  
			   
				 var p1 = document.getElementById('exin1').value;
                 if(p1 != ""){
					document.getElementById("loader2").style.display = "inline";
			        document.getElementById("progress-bar").style.width = "10%";
			        document.getElementById("imgUp").innerHTML = 'Checking your detials. Please wait...';
			        $("#loader").addClass("loader2");
			        showpostaddPage(); 
				 }else{	
     			   document.getElementById("pnHint1").innerHTML = 'Please add contact numbers!';	   
				 }
				 
			   }else if(createPost == "2"){
				    
					document.getElementById("loader2").style.display = "inline";
			        document.getElementById("progress-bar").style.width = "10%";
			        document.getElementById("imgUp").innerHTML = 'Checking your detials. Please wait...';
			        $("#loader").addClass("loader2");
			        showpostaddPage();
				 
			   }
				 
			 }else  if(login == "facebook"){

               var createPost = localStorage.getItem("createPost");
		       if(createPost == "1"){ 
				 var p1 = document.getElementById('exin1').value;
                 if(p1 != ""){
					document.getElementById("loader2").style.display = "inline";
			        document.getElementById("progress-bar").style.width = "10%";
			        document.getElementById("imgUp").innerHTML = 'Checking your detials. Please wait...';
			        $("#loader").addClass("loader2");
			        showpostaddPage();
					
				 }else{	
     			   document.getElementById("pnHint1").innerHTML = 'Please add contact numbers!';	   
				 }
			   }else if(createPost == "2"){ 
					document.getElementById("loader2").style.display = "inline";
			        document.getElementById("progress-bar").style.width = "10%";
			        document.getElementById("imgUp").innerHTML = 'Checking your detials. Please wait...';
			        $("#loader").addClass("loader2");
			        showpostaddPage();
					
			   }
				 
			 }
		
		   });
    });

	function showpostaddPage(){
		firstStep();
		 var createPost = localStorage.getItem("createPost");
		 if(createPost == "1"){  
            var t ="";
		    localStorage.setItem("image1Upload", t);	
	         var form = $('#postForm')[0];
             // FormData object 
             var data = new FormData(form);
	    	$.ajax({
			  xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },	
              url: 'php/php-ajax.php',
		      contentType: false,
              processData: false,
              type: 'POST',
              data: data,
              cache: false,
			  beforeSend: function(){
                $(".progress-bar").width('0%');
                $('#uploadStatus').html('<img src="images/loading.gif"/>');
            },
            error:function(){
                $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
            },
              success: function (resp ){
              $("#p").html(resp );
                if(resp == 'ok'){
                    $('#uploadForm')[0].reset();
                    $('#uploadStatus').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                }			  
             }
           });
	    }else if(createPost == "2"){  
            var t ="";
		    localStorage.setItem("image1Upload", t);	
	         var form = $('#postFormshop')[0];
             // FormData object 
             var data = new FormData(form);
	    	$.ajax({
			xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },	
              url: 'php/phoneShopAjax.php',
		      contentType: false,
              processData: false,
              type: 'POST',
              data: data,
              cache: false,
              beforeSend: function(){
                $(".progress-bar").width('0%');
                $('#uploadStatus').html('<img src="images/loading.gif"/>');
            },
            error:function(){
                $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
            },
              success: function (resp ){
              $("#p").html(resp );
                if(resp == 'ok'){
                    $('#uploadForm')[0].reset();
                    $('#uploadStatus').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                }			  
             }
           });
	    }
		 
	}
	  
	  function firstStep(){
                      document.querySelector('#loader').style.opacity  = '1'; 
					  document.querySelector('#uploadBox').style.display = 'inline'; 
					  document.querySelector('#imgUp').style.display = 'inline'; 
					  document.querySelector('#imgUp').innerHTML = 'Please wait...';
	  }
      </script>
	  <script type="text/javascript">	
	  $(document).ready(function() {
       $('.shopsearchBtn').click(function() {
	    var location = document.getElementById("searchCity").value;
        var openDays =  document.getElementById("dropdown-menu1-openDaysselect").value;
        var openTime =  document.getElementById("dropdown-menu2-shopselect").value;	
        var searchName = document.getElementById("searchName").value;
		window.location.href = 'searchShopAd.php?city='+ location+ "&openDays=" + openDays + "&openTime=" + openTime + "&search=" + searchName + "#searchmanuAds";

		    });
        });
		
    $(document).ready(function() {
         $('.openTimeBtn').click(function() {
		    document.querySelector('.openTimeBtn').style.display = "none";
			document.querySelector('#openTimeSelect').style.display = "inline";
		    }); 
       });

   $('#openTimeSelect select').change(function(){
    var tt = this.value;
    var location = document.getElementById("searchCity").value;
	var openDays = document.getElementById("dropdown-menu1-openDaysselect").value;
	var searchName = document.getElementById("searchName").value;
	
	 window.location.href = 'searchShopAd.php?city='+ location+ "&openDays=" + openDays + "&openTime=" + tt + "&search=" + searchName + "#searchmanuAds";
});
	$(".populer-ads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'shopAdIndex.php?page=populer-ads-view-Item&adId='+ adId;
       });
	    $(".normal-ads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'shopAdIndex.php?page=normal-shopads-view-Item&adId='+ adId;
       });
	   
	   
/*get location*/
const t2body = document.querySelector('#smyTable2');
t2body.addEventListener('click', function (e) {
  const cell = e.target.closest('td');
  if (!cell) {return;} // Quit, not clicked on a cell
  var cityId = cell.id;
  document.getElementById("searchCity").value = cityId;
  
			document.getElementById("location2").style.display="none";
            $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               sCityId: cityId
               },
            cache: false,
            success: function(result){
              $("#locationBtn").html(result);		  
             }
           });			
});
/*end get location*/

/*get post location*/


const tbody = document.querySelector('#myTable2');
tbody.addEventListener('click', function (e) {
  const cell = e.target.closest('td');
  if (!cell) {return;} // Quit, not clicked on a cell
  var cityId = cell.id;
     var createPost = localStorage.getItem("createPost");
	    if(createPost == "1"){
			document.getElementById("location").style.display="none";
			document.getElementById("mypost").style.display="none";
			document.getElementById("step2").style.display="none";
			document.getElementById("laststep").style.display="inline";
			document.getElementById("tags").style.display="inline";
			document.getElementById("mypost2").style.display="inline";
		    $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               CityId: cityId
               },
            cache: false,
            success: function(result){
              $("#tag").html(result);		  
             }
           });
		}else if(createPost == "2"){
			document.getElementById("location").style.display="none";
			document.getElementById("mypost").style.display="none";
			document.getElementById("step2").style.display="none";
			document.getElementById("laststep2").style.display="inline";
			document.getElementById("tags").style.display="inline";
			document.getElementById("mypost2").style.display="inline";
		    $.ajax({
               url: "php/phoneShopAjax.php",
               type: "POST",
               data: {
               CityId: cityId
               },
            cache: false,
            success: function(result){
              $("#tagshop").html(result);			  
             }
           });
		}
});

/*end get post location*/

		   	const ltogglePassword = document.querySelector("#togglePasswordlog");
            const logpassword = document.querySelector("#logPassword");

            ltogglePassword.addEventListener("click", function () {
            
			 // toggle the type attribute
            const typelog = logpassword.getAttribute("type") === "password" ? "text" : "password";
            logpassword.setAttribute("type", typelog);
            // toggle the icon
           
           });
		   
		    const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#password");

            togglePassword.addEventListener("click", function () {
			
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // toggle the icon
            
           });
		
		    const rtogglePassword = document.querySelector("#togglerePassword");
            const rpassword = document.querySelector("#repassword");

            rtogglePassword.addEventListener("click", function () {
			
            // toggle the type attribute
            const type = rpassword.getAttribute("type") === "password" ? "text" : "password";
            rpassword.setAttribute("type", type);
            // toggle the icon
           
           });
           
		    const togglePass = document.querySelector("#togglePass");
            const pass = document.querySelector("#pass");

            togglePass.addEventListener("click", function () {
			
            // toggle the type attribute
            const type = pass.getAttribute("type") === "password" ? "text" : "password";
            pass.setAttribute("type", type);
            // toggle the icon
            
           });
		
		    const rtogglePass = document.querySelector("#togglerePass");
            const rpass = document.querySelector("#repass");

            rtogglePass.addEventListener("click", function () {
			
            // toggle the type attribute
            const type = rpass.getAttribute("type") === "password" ? "text" : "password";
            rpass.setAttribute("type", type);
            // toggle the icon
           
           });
	  
	      document.querySelector('img.sample-image').addEventListener('click', function() {
    this.classList.toggle('sample-image-large');
	var model = document.querySelector('.modal-content');
	model.classList.toggle('modal-content-large');
	
    });

     document.querySelector('.g').style.display = "none";
    document.querySelector('.snum').addEventListener('click', function() {
      this.style.display="none";
	  document.querySelector('.snumEn').style.display="inline";
	  document.querySelector('.snumEn2').style.display="inline";
	  const url_string =   window.location.href;
      const urlParams = new URLSearchParams(url_string);
	  const adId = urlParams.get('adId');
alert(adId);
            $.ajax({
               url: "php/phoneShopAjax.php",
                 type: "POST",
                 data: {
                 numberClick: "yes",
				 ADID: adId
               },
               cache: false,
            success: function(result){
				
             }
           });
    });



	
browse6 = document.querySelector('#browse6'), // text option fto run inputchangePic
input6 = document.querySelector('.file6'); // file input
browse6.addEventListener('click', () => input6.click());

browse7 = document.querySelector('#changePic'), // text option fto run inputchangePic
input6 = document.querySelector('.file6'); // file input
browse7.addEventListener('click', () => input6.click());

        var loadFile6 = function() {
        var reader = new FileReader();
		 var filePath = input6.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        return;
        }else{
        reader.onload = function(){
        var output6 = document.getElementById('poutput');
		output6.style.display="inline";
		if( output6 &&  output6.style) {
          }
        output6.src = reader.result;
         };
		}
        reader.readAsDataURL(event.target.files[0]);
		  document.getElementById('browse6').style.display = 'none';
		  document.getElementById('changePic').style.display = 'inline';
		  document.querySelector('#remove6').style.display = 'inline';
		  document.getElementById('pi').style.opacity= '0.7';
		 
        };
     $(document).ready(function() {
         $('#remove6').click(function() {
		  document.getElementById('poutput').style.display = 'none';	 
		  document.getElementById('browse6').style.display = 'inline';
		  document.querySelector('#remove6').style.display = 'none';
		  document.getElementById('changePic').style.display = 'none';
		          });
        });	
		
  

	          //pasword show
			
		//end password show


        



/* end select add posst choose city in district on district click*/

        //get all the elements with calss list-group-item
[...document.querySelectorAll('.getDistric')].forEach(function(item) {
  // iterate and add event lstener to each of them
  item.addEventListener('click', function(elem) {
    // check if any element have a class active
    // if so then remove the class from it
    let getElemWithClass = document.querySelector('.active');
    if (getElemWithClass !== null) {
      getElemWithClass.classList.remove('active');
    }
    //add the active class to the element from which click event triggered
    item.classList.add('active')

  });
});

        //get all the elements with calss list-group-item
[...document.querySelectorAll('.getDistricsearch')].forEach(function(item) {
  // iterate and add event lstener to each of them
  item.addEventListener('click', function(elem) {
    // check if any element have a class active
    // if so then remove the class from it
    let getElemWithClass = document.querySelector('.active');
    if (getElemWithClass !== null) {
      getElemWithClass.classList.remove('active');
    }
    //add the active class to the element from which click event triggered
    item.classList.add('active')

  });
});



	 

  
   </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
	  <script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.min.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	    <script type="text/javascript" src="js/facebookLogin.js"></script>
		<script type="text/javascript" src="js/newIndex.js"></script>
		<script type="text/javascript" src="js/phoneShop.js"></script>
				<script>
        
   window.addEventListener('load', function() {
           
		var myVar = setTimeout(mainLoadRemove, 2000);
		
     finishedloadAds();
     let fogCodeSent = getCookie("fogCodeSend");
         if (fogCodeSent == "") 
		 {  
			let codeSentUname = getCookie("codeSentUname");
			let codeSentEmail = getCookie("codeSentEmail");
			 var yes ="yes";
			$.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
                 fogCodeSent: yes,
				 codeSentUname: codeSentUname,
				 codeSentEmail: codeSentEmail
               },
               cache: false,
               success: function(result){
				
               }
               });
		 }else{
		 }
		 
	    /*search login success*/

	    let login = getCookie("durakathanapalalogin");
        let user = getCookie("durakathanapalaloginUserName");
        let pass = getCookie("durakathanapalaloginUserPass");
		let email = getCookie("durakathanapalaloginUserEmail");

         if(login != ""){
             
			$.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 loginIcon:login,	 
				 login: login,	 
				 uname: user,
				 email: email,
				 pass:pass
               },
               cache: false,
               success: function(result){
				$("#lic").html(result);
               }
               });
			   
			   $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 loginIconPhone:login,	 
				 login: login,	 
				 uname: user,
				 email: email,
				 pass:pass
               },
               cache: false,
               success: function(result){
				$("#licPhone").html(result);
               }
               });
			   
			   $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 loginpcard:login,	 
				 login: login,	 
				 uname: user,
				 email: email,
				 pass:pass
               },
               cache: false,
               success: function(result){
				$("#procardMain").html(result);
               }
               });
			
         }else{
			var l ="";
			$.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 notloginIcon:l	 
               },
               cache: false,
               success: function(result){
				$("#lic").html(result);
               }
               });	
			   
            $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 notloginIconPhone:l	 
               },
               cache: false,
               success: function(result){
				$("#licPhone").html(result);
               }
               });			   
         }		
            var t ="";
		    localStorage.setItem("image1Upload", t);
			
			
     });
	         
       function clickNotification(x){
		    var id = x;
			let login = getCookie("durakathanapalalogin");
        let user = getCookie("durakathanapalaloginUserName");
        let pass = getCookie("durakathanapalaloginUserPass");
		let email = getCookie("durakathanapalaloginUserEmail");
			 $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               nid: id,
			   login: login,
			   loginUserName:user,
			   loginUserEmail:email
               },
            cache: false,
            success: function(result){
              $("#box").html(result);		  
             }
           });
		    $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               checkNotifi: id,
			   login: login,
			   loginUserName:user,
			   loginUserEmail:email
               },
            cache: false,
            success: function(result){
              $(".span").html(result);		  
             }
           });
	}
	
	function checkVerifyNotification(){
		let login = getCookie("durakathanapalalogin");

        let user = getCookie("durakathanapalaloginUserName");
        let pass = getCookie("durakathanapalaloginUserPass");
		let email = getCookie("durakathanapalaloginUserEmail");

			 $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
			   checkVerifyNotification:login,  
			   login: login,
			   loginUserName:user,
			   loginUserEmail:email
               },
            cache: false,
            success: function(result){
              $(".span").html(result);	  
             }
           });
	}
		</script>
	<script>
       $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
    	  

	 $(".populer-phoneads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'index.php?page=populer-ads-view-Item&adId='+ adId;
       });
	    $(".populer-shopads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'shopAdIndex.php?page=populer-shopads-view-Item&adId='+ adId;
       });
	    $(".normal-ads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'index.php?page=normal-ads-view-Item&adId='+ adId;
       });
	   $(".normal-shopads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'shopAdIndex.php?page=normal-shopads-view-Item&adId='+ adId;
       });
	
	</script>
	 	  
      <script>
var myInput = document.getElementById("logPassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

	$(document).ready(function() {
    $("#span2").addClass("disable-div");
	$("#span3").addClass("disable-div");
	$("#span4").addClass("disable-div");
    });
   

</script>
<script>

	
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
	 $(".addpostRegister").removeClass("disable-div")
	 document.getElementById("addpostRegister").style.display = "inline";
	 document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
	document.getElementById("nextBtn").style.display = "inline";
	document.getElementById("addpostRegister").style.display = "none";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}


function nextPrev(n) {
  var city =  document.getElementById("city").value;
  if(city != ""){
	  
   var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm2()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    
    
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
  }
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, s, y, i, valid = true;
  x = document.getElementsByClassName("tab");
   s = x[currentTab].getElementsByTagName("input");
   for (i = 0; i < s.length; i++) {
    // If a field is empty...
    if (s[i].value == "") {
      // add an "invalid" class to the field:
      s[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function validateForm2() {
  // This function deals with validation of the form fields
  var x, s, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("select");

  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
   
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
</script>
<script>
     function showpostPage() {
			var model = document.getElementById("brand").value;	
            var mftype = document.getElementById("modifyType").value;
            var mYear = document.getElementById("modelYear").value;
		    var condition = document.getElementById("condition").value; 
		    var discription = document.getElementById("discription").value; 
		    var price = document.getElementById("price").value;
		    var img1 = document.getElementById("img1").value;		
		    var img2 = document.getElementById("img2").value;
			var img1 = document.getElementById("img3").value;		
		    var img2 = document.getElementById("img4").value;
			var error ="";
            var img1check = localStorage.getItem("image1Upload");
            
			if(model == ""){
				error = "1";
				document.getElementById("modelHint").innerText = 'Please Select  Brand !';
			}else{
				error="";
				document.getElementById("modelHint").innerText = '';
			}
			if(mftype == ""){
				error = "1";
				document.getElementById("mtypeHint").innerText = 'Please Select Device !';
			}else{
				error="";
				document.getElementById("mtypeHint").innerText = '';
			}
			if(mYear == ""){
				error = "1";
				document.getElementById("myearHint").innerText = 'Please Enter  Model Year !';
				$("#modelYear").addClass("redborder");
			}else{
				error="";
				document.getElementById("myearHint").innerText = '';
				$("#modelYear").removeClass("redborder");
			}
			
			if(discription == ""){
				error = "1";
				document.getElementById("disHint").innerText = 'Please Enter Discription !';
				$("#discription").addClass("redborder");
			}else{
				error="";
				document.getElementById("disHint").innerText = '';
				$("#discription").removeClass("redborder");
			}
			if(price == ""){
				error = "1";
				document.getElementById("priceHint").innerText = 'Please Enter  Price !';
				$("#price").addClass("redborder");
			}else{
				error="";
				document.getElementById("priceHint").innerText = '';
				$("#price").removeClass("redborder");
			}
			
			if( img1check == "1" ){

				if(error == ""){
					let login = getCookie("durakathanapalalogin");
                    let user = getCookie("durakathanapalaloginUserName");
                    let pass = getCookie("durakathanapalaloginUserPass");
					let email = getCookie("durakathanapalaloginUserEmail");
                  if(login != ""){
					 $("#loader").removeClass("loader");
			         document.getElementById("loader-main").style.display = "none";
                     document.getElementById("checkDetials").style.display = "none";
		             document.getElementById("postnow").style.display = "inline";
	                 $("#postForm").removeClass("disable-div"); 
                     $("#contactCard").removeClass("disable-div");
                     document.getElementById("contactCard").style.display = "inline";
	                 document.getElementById("contactCard2").style.display = "inline";					 
		              $.ajax({
                     url: "php/php-ajax.php",
                     type: "POST",
                     data: {
				     checkLogin: login,	 
                     username: user,
					  useremail: email,
				     userpassword: pass
                    },
                    cache: false,
                    success: function(result){
				    $("#contactCard").html(result);
					}
                   });
					 
                  }else{
                     $("#loader").removeClass("loader");
			         document.getElementById("myModal").style.display = "inline";
			         document.getElementById("loader-main").style.display = "none";
                  }	
				  
				}else{
				  $(".pip").addClass("redborder");
			      $("#loader").removeClass("loader");
				  $("#postForm").removeClass("disable-div");
			      document.getElementById("loader-main").style.display = "none";
				}
				document.getElementById("imageHint").innerText = '';
				$(".pip").removeClass("redborder");
			}else{
				$(".pip").addClass("redborder");
			    $("#loader").removeClass("loader");
				$("#postForm").removeClass("disable-div");
			    document.getElementById("loader-main").style.display = "none";
				document.getElementById("imageHint").innerText = 'Upload at least one image !';
			}
      }

       
	 function showshoppostPage() {
			var sName = document.getElementById("shopName").value;	
            var sownerName = document.getElementById("ownerName").value;
			var shopContact1 = document.getElementById("shopContact1").value;	
            var shopContact2 = document.getElementById("shopContact2").value;
            var sOpenday = document.getElementById("openDays").value;
		    var sCloseday = document.getElementById("closeDays").value; 
		    var sOpentime = document.getElementById("openTime").value; 
		    var sAddress = document.getElementById("addressShop").value;
			var sAbout = document.getElementById("aboutShop").value;
		    var img1 = document.getElementById("img10").value;		
		    var img2 = document.getElementById("img11").value;
			var img1 = document.getElementById("img12").value;		
		    var img2 = document.getElementById("img13").value;
			var error ="";
            var img1check = localStorage.getItem("image1Upload");
			if(sOpenday == "none"){
				error = "1";
				document.getElementById("openDaysHint").innerText = 'Please Select  Open Day !';
			}else{
				error="";
				document.getElementById("openDaysHint").innerText = '';
			}
			if( sCloseday == "none"){
				error = "1";
				document.getElementById("closeDaysHint").innerText = 'Please Select Close Day !';
			}else{
				error="";
				document.getElementById("closeDaysHint").innerText = '';
			}
			if(sName == ""){
				error = "1";
				document.getElementById("shopNameHint").innerText = 'Please Enter Shop Name !';
				$("#shopName").addClass("redborder");
			}else{
				error="";
				document.getElementById("shopNameHint").innerText = '';
				$("#shopName").removeClass("redborder");
			}
			if(shopContact1 == ""){
				error = "1";
				document.getElementById("shopContact1Hint").innerText = 'Please Enter  Shop Contact No 1 !';
				$("#shopContact1").addClass("redborder");
			}else{
				error="";
				document.getElementById("shopContact1Hint").innerText = '';
				$("#shopContact1").removeClass("redborder");
			}
			if(shopContact2 == ""){
				error = "1";
				document.getElementById("shopContact2Hint").innerText = 'Please Enter  Shop Contact No 2 !';
				$("#shopContact2").addClass("redborder");
			}else{
				error="";
				document.getElementById("shopContact2Hint").innerText = '';
				$("#shopContact2").removeClass("redborder");
			}
			
			if(sAbout == ""){
				error = "1";
				document.getElementById("aboutShopHint").innerText = 'Please Enter About of Shop  !';
				$("#aboutShop").addClass("redborder");
			}else{
				error="";
				document.getElementById("aboutShopHint").innerText = '';
				$("#aboutShop").removeClass("redborder");
			}
			if(sownerName == ""){
				error = "1";
				document.getElementById("ownerNameHint").innerText = 'Please Enter Shop Owner Name!';
				$("#ownerName").addClass("redborder");
			}else{
				error="";
				document.getElementById("ownerNameHint").innerText = '';
				$("#ownerName").removeClass("redborder");
			}
			
			if(sAddress == ""){
				error = "1";
				document.getElementById("addressShopHint").innerText = 'Please Enter Shop Address !';
				$("#addressShop").addClass("redborder");
			}else{
				error="";
				document.getElementById("addressShopHint").innerText = '';
				$("#addressShop").removeClass("redborder");
			}
			
			if( img1check == "1" ){

				if(error == ""){
					let login = getCookie("durakathanapalalogin");
                    let user = getCookie("durakathanapalaloginUserName");
                    let pass = getCookie("durakathanapalaloginUserPass");
					let email = getCookie("durakathanapalaloginUserEmail");
                  if(login != ""){
					  
					 $("#loader").removeClass("loader");
			         document.getElementById("loader-main").style.display = "none";
                     document.querySelector(".checkDetials").style.display = "none";
		             document.querySelector(".postnow").style.display = "inline";
	                 $("#postForm").removeClass("disable-div"); 
                     $("#shopcontactCard").removeClass("disable-div");
                     document.getElementById("shopcontactCard").style.display = "inline";	
				 
		              $.ajax({
                     url: "php/phoneShopAjax.php",
                     type: "POST",
                     data: {
				     checkLogin: login,	 
                     username: user,
					  useremail: email,
				     userpassword: pass
                    },
                    cache: false,
                    success: function(result){
				    $("#shopcontactCard").html(result);
					}
                   });
					 
                  }else{
                     $("#loader").removeClass("loader");
			         document.getElementById("myModal").style.display = "inline";
			         document.getElementById("loader-main").style.display = "none";
                  }	
				  
				}else{
				  $(".pip").addClass("redborder");
			      $("#loader").removeClass("loader");
				  $("#postForm").removeClass("disable-div");
			      document.getElementById("loader-main").style.display = "none";
				}
				document.getElementById("imageHint").innerText = '';
				$(".pip").removeClass("redborder");
			}else{
				$(".pip").addClass("redborder");
			    $("#loader").removeClass("loader");
				$("#postForm").removeClass("disable-div");
			    document.getElementById("loader-main").style.display = "none";
				document.getElementById("imageHint").innerText = 'Upload at least one image !';
			}
      }
   
     	function wrongcode(){
		document.getElementById('fogveryModal').style.display = "inline";
		document.getElementById('msgModal').style.display = "inline";
	    document.getElementById('timer').innerHTML = 05 + ":" + 00;
        startTimer();
		  var nn = localStorage.getItem("fogmailuname");
		  var pp = localStorage.getItem("fogmailemail");	
          var yes ="yes";		  
				 $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 getemail: yes, 
                 fogmuname: nn,
				 fogmemail: pp
               },
               cache: false,
               success: function(result){
				$("#emailgetfog").html(result);
               }
               });
	}
	function fogConform(){
		createCookie("fogCodeSend", "yes", 5);
		document.getElementById('fogveryModal').style.display = "inline";
		document.getElementById('msgModal').style.display = "inline";
	    document.getElementById('timer').innerHTML = 05 + ":" + 00;
        startTimer();
		  var nn = localStorage.getItem("fogmailuname");
		  var pp = localStorage.getItem("fogmailemail");	
          var yes ="yes";		  
				 $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 getemail: yes, 
                 fogmuname: nn,
				 fogmemail: pp
               },
               cache: false,
               success: function(result){
				$("#emailgetfog").html(result);
               }
               });
	}
    
    	function fognewPass(){
		      document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fognewPasswait, 3000);
	}
	function fognewPasswait(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		var nnn = localStorage.getItem("fogmailuname");
		var ppp = localStorage.getItem("fogmailemail");
		document.getElementById('fogotenEmail').value = ppp;
		document.getElementById('fogotenUname').value = nnn;
		document.getElementById('fogveryModal').style.display = "none";
		document.getElementById('msgModal').style.display = "none";
		document.getElementById('fognewPassModal').style.display = "inline";
	}

    function fogCreateNewPassword(){
 	    
		      document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fogCreateNewPasswordwait, 3000);
	}
	function fogCreateNewPasswordwait(){
	    
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		var pass1 = document.getElementById('password').value;
		var pass2 = document.getElementById('repassword').value;
		var paswd =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
		if(pass1.match(paswd) && pass2.match(paswd)){
			if(pass1 == pass2){
	         var form = $('#fogCreateNewPassword')[0];
             // FormData object 
             var data = new FormData(form);
	    	$.ajax({
              url: 'php/php-ajax.php',
		      contentType: false,
              processData: false,
              type: 'POST',
              data: data,
              cache: false,
              success: function (result) {
	           $("#fogErroMsg4").html(result);
			   localStorage.setItem("fognewpass", pass2);
           }
         });
		 }
		}
	}



     	function fognewlogin(){
     	      
              document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fognewloginwait, 3000);
	}

	function fognewloginwait(){
	        
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
	     var nnn = localStorage.getItem("fogmailuname");
		 var ppp = localStorage.getItem("fogmailemail");
		 var rrr = localStorage.getItem("fognewpass");
		 var e = "normal";
		var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();

		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+nnn+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+rrr+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserEmail"+"="+ppp+expires+"; path=/";

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const page_type = urlParams.get('forgot');
        
        if(page_type == "yes"){
          var createPost = "no"; 
        }else{
		  var createPost = localStorage.getItem("createPost");
        }
      
		if(createPost == "1"){
		 
		 var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 fogpostGetContact: yes,	 
                 username: nnn,
				 userpassword: rrr,
				 useremail: ppp
               },
               cache: false,
            success: function(result){
				$("#contactCard").html(result);
				document.getElementById('msgModal').style.display = "none";
                $("#postForm").removeClass("disable-div"); 
		        document.getElementById("myModal").style.display = "none";
		        document.getElementById('fognewPassModal').style.display = "none";
		        document.getElementById("msgModal").style.display = "none";
                $("#contactCard").removeClass("disable-div");
			    document.getElementById("contactCard").style.display = "inline";
	            document.getElementById("contactCard2").style.display = "inline";
		        document.getElementById("checkDetials").style.display = "none";
		        document.getElementById("postnow").style.display = "inline";
             }
           });
		  }else if(createPost == "2"){
		 var yes ="yes";
		   $.ajax({
               url: "php/phoneShopAjax.php",
                 type: "POST",
                 data: {
				 fogpostGetContact: yes,	 
                 username: nnn,
				 userpassword: rrr,
				 useremail: ppp
               },
               cache: false,
            success: function(result){
				$("#shopcontactCard").html(result);
				document.getElementById('msgModal').style.display = "none";
		        document.getElementById("myModal").style.display = "none";
		        document.getElementById('fognewPassModal').style.display = "none";
		        document.getElementById("msgModal").style.display = "none";
                $("#shopcontactCard").removeClass("disable-div");
			    document.getElementById("shopcontactCard").style.display = "inline";
		        document.querySelector(".checkDetials").style.display = "none";
		        document.querySelector(".postnow").style.display = "inline";
             }
           });
           
		  }else if(createPost == "no"){
		      window.location.href = 'http://www.durakathanapala.lk'; 
		  }
	}


</script>
<script>
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html> 

