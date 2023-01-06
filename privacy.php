<?php 
  include 'function/function.php';

  $title ="Weladapala.lk -About Us Wheel, Modify Assosarys, Repair Assosarys, Services Prices, Buy &amp; Sell Wheels in Sri Lanka";
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
<link rel="stylesheet" href="about/styles.css">
<link rel="stylesheet" type="text/css" href="css/new2.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/newIndex.css">
	<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
	<style type="text/css">
	::-webkit-scrollbar {
  width:10px;
}
/* Track */
::-webkit-scrollbar-track {
  background:#DDD; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:#6666FF; 
 }

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.scroll {
  overflow-y: scroll; height:100%;
} 
.search_box{margin-top:0px;}
.adrow{ background-color: hsla(89, 43%, 51%, 0.2); border-radius:3px; padding:30px 2px;}
		#searchBtn{ opacity:1; color:#6666FF; border-radius:0px 10px 10px 0px ; width:50px; position:relative; float:right; padding:8px; margin:7px -10px;}
	    #searchBtn:hover{opacity:1;  color:#1111FF;}
		.adrow{ background-color: hsla(89, 43%, 51%, 0.2); border-radius:3px; padding:30px 2px;}
.search_wrap .search_box2 .input{
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 100%;
      padding:8px 20px;
	  height: 30px;
	  background: white;
	  border-radius:15px;
	  font-size: 18px;
     }
	 
	 .search_wrap{margin:0; padding:0; height:100px;}
	 
     .search_wrap .search_box2{
	  position: relative;
	  margin: 30px auto;
      width: 90%;
	  height:auto;
      background-color: #e2e1e1;	 
      padding:0px 10px 0px;	 
      z-index: 1;
     }
	 .searchLiveKeymanu{width:97%; position:absolute; border-radius:3px; background-color:white; margin:47px -5px; z-index:5; max-height:400px; overflow-y:auto;}
	 .procardMain{margin-top:-5px;  position:absolute;}
	 .iconRow{width:100%;  margin:35px 0px; display:flex;}
	 .iconcolumn{width:50%;}
	 .postbtn{	 margin:0px 35px;}  
	 .adspic{
	   width:200px;
	   height:150px;
	   margin:15px auto 0;	
     } 
     .populer-ads2 img{
       width:92%;
       height:120px;
     }
     .populer-ads2  .price, .adsmanu{text-align:left; margin:0px 7px;} 
     .adsmanu{text-align:left; margin:4px 7px 2px ;} 
     .img{
	 transition: transform .2s;
     }
     .img:hover{
	
	 transform: scale(1.1);
     }
.select2Img{width:40px; height:40px; transition: 0.1s;}
.select2Text{font-size:0px;}
.promoted_sectiponto{opacity:0.4; transition: 0.1s;  transform: scale(0.7);}
.dropdown ul li a:hover{color:black; opacity:1; font-size:18px; width:100%;}
.paragraph2{opacity:0.6; transition: 0.1s;  transform: scale(0.8);}
.snumEn2{display:none;}
.notificationmanu{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 12; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 5px;
}

/* Modal Content/Box */
.notification-content {
  background-color: #fefefe;
  margin: 2% auto 1% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 35%;
  height:550;  /* Could be more or less, depending on screen size */
}

.notifi-box{
	padding:0 15px;
	width:100%;
	max-height: 550px;
	overflow-y:auto;
	opacity: 1;
	background-color:white;
	z-index:10;
	transition: 1s opacity, 250ms height;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.notifiH2 {
	font-size: 14px;
	padding: 10px;
	border-bottom: 1px solid #eee;
	color: blsck;
}
.notifi-box h2 span {
	color: #f00;
}
.notifi-itemActive{background-color:#b3dbff;}
.notifi-item {
	display: flex;
	border-bottom: 1px solid #eee;
	padding: 10px 10px;
	margin-bottom: 5px;
	height:auto;
	cursor: pointer;
}
.notifi-item:hover {
	background-color: #eee;
}

.notifi-item img {
	display: block;
	width: 55px;
	height:55px;
	margin:5px;
	border-radius: 100%;
}
.notifi-item .text .nameNoti {
	color: #5555FF;
	font-size: 15px;
	margin-top: 2px;
}
.notifi-item .text .massageNoti {
	color: black;
	font-size: 13px;
	margin-left:5px;
}
.span {
	background: #f00;
	padding:2px 5px;
	position:absolute;
	border-radius:50%;
	color: #fff;
	margin-top:-13px;
	font-size:12px;
	margin-left: -10px;
}
@media only screen and (max-width: 1120px) and (min-width: 1000px){
	 #d3d{display:none;}
     .postbtn{	 margin:0px 0px;}
     .nav-link{margin:0 0px;} 
}
@media only screen and (max-width: 1250px) and (min-width: 610px){
.notification-content {
  background-color: #fefefe;
  margin: 2% auto 1% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%;
  height:550;  /* Could be more or less, depending on screen size */
}

}
@media only screen and (max-width: 1100px) and (min-width: 610px){
.searchLiveKeymanu{width:95%; position:absolute; border-radius:3px; background-color:white; margin:50px -5px; z-index:5; max-height:400px; overflow-y:auto;}	
.procardMain{margin:0 auto;  position:relative;}
.containerSbox{margin-top:70px;}
}
@media only screen and (max-width: 800px) and (min-width: 610px){
.search_box2{margin-top:-500px;}	
.dropdown .btn{font-size:14px;}
.notification-content {
  background-color: #fefefe;
  margin: 2% auto 1% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%;
  height:550;  /* Could be more or less, depending on screen size */
}
}

@media only screen and (max-width: 600px) and (min-width: 300px){
.searchLiveKeymanu{width:95%; position:absolute; border-radius:3px; background-color:white; margin:50px -5px; z-index:5; max-height:400px; overflow-y:auto;}	
.procardMain{margin:0 auto;  position:relative;}
.notification-content {
  background-color: #fefefe;
  margin: 2% auto 1% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%;
  height:550;  /* Could be more or less, depending on screen size */
}
.notifi-item .text{margin:10px;}
	#phoneHeader{display:inline;}
	#deskHeader{display:none;}
	.select2{
        float: left;
        width: 50%;
        margin:10px 0;
    }
	#tag{margin:5px 15px;}
    #post h6{margin:10px 15px;}
    #post h1{margin:10px 15px;}
    .dropdown{ padding:3px 0; margin:0;}
    .passinput{display:inline-block;}
     .search_wrap .search_box .input{
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 100%;
      padding:10px 20px;
	  height: 35px;
	  background: white;
	  border-radius:5px;
	  font-size: 18px;
     }
     .search_wrap .search_box{
	  position: relative;
	  width: 100%;
	  margin: 0px auto;
     }
	.search_box{
     width: 100%;
     background-color: #e2e1e1;	 
     padding:20px 10px;	 
     z-index: 1;
     }
 .location, .postmanu {
	padding-top: 0px;
	
}
.logmanu{
	width:100%;
	height:100%;
	padding-top: 0px; 
}
.regmanu, .msgmanu, .fogmanu, .fogverymanu, .fognewPassmanu{
	width:100%;
	height:100%;
	padding:0;
	margin:0;
}
.scroll {
  overflow-y: scroll; height:100%; 
} 
  .table2{
	  display:none;
  }
.modal-content, .location-content{
  width:100%;	
  height:auto;
}
.msg-content, .fog-content, .fogvery-content, .fognewPass-content{
  width:100%;	
  height:100%;
  max-height:100%;
  overflow-y:auto;
}
.msg-content{
  width:100%; 
  margin-top:0%;
  height:auto;
  max-height:100%;
  overflow-y:auto;
}
.cancelPostYesbtn{padding:1px; width:25%; background-color:#6666FF; font-size:14px; border-radius:3px;}
.cancelPostNobtn{padding:1px; width:25%; background-color:#8888FF; font-size:14px; border-radius:3px;}

.reg-content{
  width:100%;	
  height:100%;
  margin:0px;
  padding:0px;
  max-height:100%;
  overflow-y:auto;
}
 .log-content{
	width:100%;	
	height:100%;
    max-height:100%;
	overflow-y:auto;
 }
.post-content, .post-content2{
  width:100%;	
  height:auto;
}
	 .sbt{margin:5px 0;}
	.loginIconp{display: inline; float:right;}
	.loginIcon{display: none;}
	.navbar-togglr{margin:0 75px; }
	.navbar-toggl, .pb{width:100px; font-size:14px;}
	.logopic{width:100px;}
	.card{margin:0px auto 10px; z-index: 2; width: 100%;}
	.pagination{float: right; margin:10px 10px;}
	.sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
	#myTable, #myTable2{
		margin:7px 0px;
		width:100%;
	}
    .col{
      width:100%;
      margin-top: 0;
	  padding:0;
     }
	.col input{
	  padding:12px;
	  margin:5px auto;
	  font-weight:bold;
     } 
    .col .b{text-align:center;}
	#message {
     display:none;
     background: #f1f1f1;
     color: #000;
     position:relative;
     padding: 20px;
     z-index:12;
    }
    .lclose{ font-size:22px; margin:5px 5px 15px;}
	.rclose{ font-size:22px; margin:5px 5px 15px;}
	.logbt{
		padding:8px;
		height:auto;
		border-radius:2px;
	}
	.logbt2{font-weight:bold;}
	
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }

.icon-bar {
  position: absolute;
  top: 30%;
  left:-5px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 16px;
}
   .cancelbtn, .signupbtn {
     width: 100%;
    }
	.postpad{padding:0 10px;}
	#myprofile{margin:0 0px 0 10px;}	
	.tbscroll{overflow-y: scroll; height:auto;}
	.postpad{padding:10px 8px;}
	#prevBtn, #nextBtn, #addpostRegister{padding:5px;}
	.keyIcon{position:absolute; font-size:40px; top:5px; opacity:0.4;}	
	.postProfilecard{margin-top:10%; padding:10px auto;}
	.vmanu{border:1px solid #7777FF; padding:10px 15px 10px; margin:0 20px;}
	.vbtn{margin:20px 20px 0;}
	.unsuccesscard {
        background: white;
        padding:15px 5px;
		margin-top:30%;
        display: inline-block;
        width:100%;
		height:100%;
      }
    .unsuccesscard h1 {
          color:#ff554d;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 25px;
          margin-bottom: 10px;
		  text-align:center;
        }
    .unsuccesscard p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:16px;
          text-align:center;
        }
    .unsuccesscard .unsbtn{background-color:#ff554d; font-size:18px; width:100%; padding:5px; border-radius:3px;}
	.unsuccesscard img{display:inline; width:150px;}
	
	.alertcard {
        background: white;
        padding:10px 5px;
		margin-top:0%;
        display: inline-block;
        width:100%;
		height:100%;
      }
    .alertcard h1 {
          color:#ff554d;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 28px;
          margin-bottom: 10px;
		  text-align:center;
        }
    .alertcard p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:16px;
          text-align:center;
        }
    .alertcard .unsbtn{background-color:#ff554d; font-size:18px; width:100%; padding:5px; border-radius:3px;}
	.alertcard img{display:inline; width:150px;}
	
	.successcard {
        background: white;
        padding:15px 5px;
		margin-top:30%;
        display: inline-block;
        width:100%;
		height:100%;
      }
    .successcard h1 {
          color:#43EBDC;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 25px;
          margin-bottom: 10px;
		  text-align:center;
        }
    .successcard p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:16px;
          text-align:center;
        }
    .successcard .unsbtn{background-color:#43EBDC; font-size:18px; width:100%; padding:5px; border-radius:3px;}
	.successcard img{display:inline; width:150px;}
	
.regform{
  background-color: #ffffff;
  margin: 10px auto;
  font-family: Raleway;
  padding:10px 15px;
  width: 100%;
}

.regform h1{
  text-align: center;  
}

.regform input {
  padding:10px;
  width:100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
  background-color: #ddd;
}
.regform input[type=password] {
  padding: 10px;
  width:100%;
  margin:0;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
  background-color: #ddd;
}
#verifyCode{padding:6px; width:100%; border:1px solid silver; }
.verifyCodebtn{width:40%;}
#searchBoxP{color:#190033; text-align: center;font-size:22px; letter-spacing:1px; opacity:0.9; font-family:sans-serif, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}
 .adspic{
	   width:96%;
	   height:160px;
	   margin:15px auto 0;	
     } 
  .populer-ads2 img{
    width:85%;
    height:120px;
   }
.promoted_sectiponto{opacity:1; transition: 0.1s;  transform: scale(1);}
.dropdown ul li a:hover{color:black; opacity:1; font-size:18px; width:100%;}
.paragraph2{opacity:1; transition: 0.1s;  transform: scale(1);} 
.select2Img{width:30px; height:30px; transition: 0.1s;}
.select2Text{font-size:0px;}  
.containerSbox{margin-top:10px;}
}
.devicesSelect{display:none;}
.brandsSelect{display:none;}
    .spinner-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: black;
      z-index: 999999;
      text-align: center;
    }
    .logocolor {
      color:white;
    }
    .centercenter {
      position: relative;
      top: 50%;
    }
    .spinner-grow2 {
      display: inline-block;
      width: 100px !important;
      height: 100px !important;
      vertical-align: text-bottom;
      background-color: currentColor;
      border-radius: 50%;
      opacity: 0.2;
      -webkit-animation: spinner-grow .75s linear infinite;
      animation: spinner-grow .75s linear infinite;
    }
    .wrapper{
        background-color:white;
        margin:140px 50px;
        padding:25px;
        opacity:0.9;
    }
    .wrapper h1{
        text-align:left;
        font-family: "Times New Roman", Times, serif;
    }
    .wrapper p{
        opacity:0.7;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    @media only screen and (max-width: 600px) {
       .wrapper{
        background-color:white;
        margin:190px 5px;
        padding:5px;
        opacity:0.9;
    }
    .wrapper h1{
        text-align:center;
        font-family: "Times New Roman", Times, serif;
        font-size:40px;
        font-weight:bold;
    }
    }
	</style>
  	  <script tpe="text/javascript">

var down = false;
function toggleNotifi(){
	var box  = document.getElementById('notificationmodel');
	if (down) {
		box.style.display='none';
		box.style.opacity = 0;
		down = false;
	}else {
		box.style.display='inline';
		box.style.height  = '100%';
		box.style.opacity = 1;
		down = true;	
	}
}
         	  
	  	function show_sidebar()
        {
         $(".promoted_sectipon1").removeClass("promoted_sectiponto");
        }
		function hide_sidebar()
        {
		 $(".promoted_sectipon1").addClass("promoted_sectiponto");
        }
		
		
		function show_para(){
			 $(".paragraph").removeClass("paragraph2");
		}
		function hide_para(){
			 $(".paragraph").addClass("paragraph2");
		}
	

window.addEventListener('wheel', function(event)
{
if (event.deltaY < 0)
 { 
    if (document.body.scrollTop > (document.body.scrollTop - 100) ) {
	document.querySelector('#select_box').style.width = "100%";
	$(".select2 img").removeClass("select2Img");
	$(".select2 label").removeClass("select2Text");
    }
 }
 else if (event.deltaY > 0)
 {
	if (document.body.scrollTop > 100 ) {
	document.querySelector('#select_box').style.width = "30%";
	$(".select2 img").addClass("select2Img");
	$(".select2 label").addClass("select2Text");
    }
	
 }

  if (document.body.scrollTop > 500 ) {
    document.getElementById("deskHeader").style.top = "-120px";
  } else {
    document.getElementById("deskHeader").style.top = "0px";
  }
  
});


	  window.addEventListener('load', function() {
		document.getElementById("procardMain").style.display = "none";  
	  });
function logProfileIcon() { 
	    
	     var x = document.getElementById("procardMain");		 
		 if(x.style.display === "none"){
			x.style.display = "inline"; 
			$("#logimgPic").addClass("logimgPicClick");
		 }else{
			x.style.display = "none";
			$("#logimgPic").removeClass("logimgPicClick");
		 }  
	     }
		 
function renderButton() {
    gapi.signin2.render('g-signin2', {
        'scope': 'profile email',
        'width': 250,
        'height': 40,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSignIn,
        'onfailure': onFailure
    });
	
}

function onSignIn(googleUser) {

    var profile = googleUser.getBasicProfile();

    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail());

    var googleTockenId = profile.getId();
    var name = profile.getName();
    var email = profile.getEmail();
    var profile = profile.getImageUrl();

    saveUserData(googleTockenId,name,email,profile); // save data to our database for reference
}

// Sign-in failure callback
function onFailure(error) {
    alert("Please Refresh Your Page !");
}

// Sign out the user
function signOut() {
    if(confirm("Are you sure to signout?")){
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            $("#loginDetails").hide();
            $("#loaderIcon").hide('fast');
            $("#g-signin2").show('fast');
        });

        auth2.disconnect();
    }
}

function saveUserData(googleTockenId,name,email,profile) {
	       var password = "";
	       $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				  authProvider:"Google",
				  googleTockenId:googleTockenId,
				  name:name,
				  email:email,
				  profile:profile
               },
               cache: false,
              success: function(result){
				 document.getElementById("msgModal").style.display = "inline";
				 localStorage.setItem("logName", googleTockenId);
		         localStorage.setItem("logPass", password);
		         $("#p").html(result);
				 document.getElementById("myModal").style.display = "none";
             }
           });
}

function gloginNext(){
	 $("#postForm").removeClass("disable-div"); 
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "none";
         $("#contactCard").removeClass("disable-div");
		 document.getElementById("contactCard").style.display = "inline";
	     document.getElementById("contactCard2").style.display = "inline";
		 document.getElementById("checkDetials").style.display = "none";
		 document.getElementById("postnow").style.display = "inline";
		var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
		 var e = "google";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 
         let user = getCookie("durakathanapalaloginUserName");
		 let pass = getCookie("durakathanapalaloginUserPass");

           if(user != ""){
		   var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 googlepostGetContact: yes,	 
                 id: user,
				 password: pass
               },
               cache: false,
            success: function(result){
				$("#contactCard").html(result);
             }
           });
		   }
}

	  </script>

</head>
<body>	


	<!-- header section start -->
<?php 
  include 'includes/header.php';
?>
<div class="procardMain" style="" id="procardMain">
</div>

    <!-- Populer section end -->

	  </div>
	  <?php
	      if(isset($_GET["forgot"])){
	  ?><script type="text/javascript">
	    document.getElementById("fogModal").style.display = "inline";
	    </script><?php
  }
	  ?>

<div class="wrapper w3-card-4">
  <h1>Privacy Policy for Durakathanapala.lk</h1>

<p>At Durakathanapala.lk, accessible from https://durakathanapala.lk/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Durakathanapala.lk and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Durakathanapala.lk. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.info/">Free Privacy Policy Generator</a>.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

<h2>Information we collect</h2>

<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

<h2>How we use your information</h2>

<p>We use the information we collect in various ways, including to:</p>

<ul>
<li>Provide, operate, and maintain our website</li>
<li>Improve, personalize, and expand our website</li>
<li>Understand and analyze how you use our website</li>
<li>Develop new products, services, features, and functionality</li>
<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
<li>Send you emails</li>
<li>Find and prevent fraud</li>
</ul>

<h2>Log Files</h2>

<p>Durakathanapala.lk follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

<h2>Cookies and Web Beacons</h2>

<p>Like any other website, Durakathanapala.lk uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

<h2>Google DoubleClick DART Cookie</h2>

<p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>

<h2>Our Advertising Partners</h2>

<p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>

<ul>
    <li>
        <p>Google</p>
        <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
    </li>
</ul>

<h2>Advertising Partners Privacy Policies</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of Durakathanapala.lk.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Durakathanapala.lk, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that Durakathanapala.lk has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Party Privacy Policies</h2>

<p>Durakathanapala.lk's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>

<p>Under the CCPA, among other rights, California consumers have the right to:</p>
<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
<p>Request that a business delete any personal data about the consumer that a business has collected.</p>
<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>GDPR Data Protection Rights</h2>

<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>Children's Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>Durakathanapala.lk does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
</div>  
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
<script>
	          //pasword show
					   
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
		//end password show
      </script>
	  <script>
     document.querySelector('.userLogin').addEventListener('click', function() {
	    	  window.location.href ='user/login.php'; 
	 });
		  
	 document.querySelector('.postLogin').addEventListener('click', function() {
		 
		document.getElementById("loader").style.display = "inline";
		document.getElementById("loader-main").style.display = "inline";
		$("#loader").addClass("loader");
	    var myVar = setTimeout(loginwait, 3000);
	 });
	function loginwait(){
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "inline";

		var username = document.getElementById("username").value; 
		var password = document.getElementById("logPassword").value;
		localStorage.setItem("logName", username);
		localStorage.setItem("logPass", password);
		var yes = "yes";
		$.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postLogin: yes,	 
                 username: username,
				 userpassword: password
               },
               cache: false,
              success: function(result){
				$("#p").html(result);
				 $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "inline";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
             }
           });
	}  
	  
	function selectAccount() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "inline";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
        }
	 function ok(){
		document.getElementById("loader").style.display = "inline";
		document.getElementById("loader-main").style.display = "inline";
		document.getElementById("msgModal").style.display = "none";
		$("#loader").addClass("loader");
	    var myVar = setTimeout(showsuccesspage, 2000);
	 }
	 
	 function showsuccesspage() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("msgModal").style.display = "inline";
		document.getElementById("loader-main").style.display = "none";
		 var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
            $("#loader").removeClass("loader");
			var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postloginConform: yes,
                 logname: n,
                 logpass: p				 
               },
               cache: false,
               success: function(result){
				$("#p").html(result);
				 var myVar2 = setTimeout(conform, 3000);
             }
           });
      }
		 
	 function conform(){
		 $("#postForm").removeClass("disable-div"); 
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "none";
         $("#contactCard").removeClass("disable-div");
		 document.getElementById("contactCard").style.display = "inline";
	     document.getElementById("contactCard2").style.display = "inline";
		 document.getElementById("checkDetials").style.display = "none";
		 document.getElementById("postnow").style.display = "inline";
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
		 var e = "normal";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 
         let user = getCookie("durakathanapalaloginUserName");
		 let pass = getCookie("durakathanapalaloginUserPass")
         if (user != "") {

		   var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postGetContact: yes,	 
                 username: user,
				 userpassword: pass
               },
               cache: false,
            success: function(result){
				$("#contactCard").html(result);
             }
           });
         }else {
           
         }    
	 }
	 
	
	function wrongcode(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(wrongcodewait, 3000);
	}
	function wrongcodewait(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
			document.getElementById("fogveryModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
	}
    function no(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(wrongProfile, 3000);
	}	
    function wrongProfile() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
			document.getElementById("myModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }
    function fogno(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fogwrongProfile, 1000);
	}	
    function fogwrongProfile() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
			document.getElementById("fogModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }  
	function regnouname(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(regerroruname, 3000);
	}	
    function regerroruname() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
		    document.getElementById("regModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
			document.getElementById("prevBtn").style.display = "none";
      } 
	function regnoemail(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(regerroremail, 3000);
	}	
    function regerroremail() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("msgModal").style.display = "none";
		    document.getElementById("regModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
			document.getElementById("prevBtn").style.display = "inline";
      }  
	function backLog(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(backtologin, 3000);
	}	
      function backtologin() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("myModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }
	
    function postRegister(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(postreg, 3000);
	}	
	  function postreg() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("regModal").style.display = "inline";
			document.getElementById("loader-main").style.display = "none";
      }
	function backLogregpost(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(backLoginpostreg, 3000);
	}  
	  function backLoginpostreg(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("myModal").style.display = "inline";
			document.getElementById("regModal").style.display = "none";
			document.getElementById("loader-main").style.display = "none";  
	  }
	  function closeregform(){
		    document.getElementById("myModal").style.display = "inline";
			document.getElementById("regModal").style.display = "none";
	  }  
      function closefogform(){
		    document.getElementById("myModal").style.display = "inline";
			document.getElementById("fogModal").style.display = "none";
	  }
	  function backfogform(){
		    document.getElementById("myModal").style.display = "inline";
			document.getElementById("fogModal").style.display = "none";
	  }
	  	
      function enterNum1() {
	          var pno = document.getElementById("pno1").value;
			  var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
			 if(pno.match(phoneno)){
	             document.getElementById("pno1hint").innerText="";
                 document.getElementById("pno1").style.border = "1px solid #aaaaaa";
				 $(".nextbtn").removeClass("disable-div");
				 $(".prebtn").removeClass("disable-div");
			    }else{				
				 document.getElementById("pno1hint").innerText="Enter valid Phone number.( Ex: 07#-#######)!." ;
				 document.getElementById("pno1").style.border = "1px solid red";
				 $(".nextbtn").addClass("disable-div");
				  $(".prebtn").addClass("disable-div");
			    } 
            }
		
		function enterEmail(){
			var pno = document.getElementById("pno1").value;
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/;
			var Email = document.getElementById("email").value;
			
			  if(Email.match(filter)){
                 document.getElementById("emailhint").innerText="";
				 document.getElementById("email").style.border = "1px solid #aaaaaa";
				 $(".nextbtn").removeClass("disable-div");  
                 $(".prebtn").removeClass("disable-div");
                 document.getElementById("uname").value = Email;
			  }else{
				 document.getElementById("emailhint").innerText="Enter valid email address.( Ex: example123@gmail.com)" ;
				 document.getElementById("email").style.border = "1px solid red";
				 $(".nextbtn").addClass("disable-div");
				 $(".prebtn").addClass("disable-div");
			  }
		    }
        function enterPass(){
			    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var password = document.getElementById("password").value;
				if(password.match(paswd)){
				   document.getElementById("pass1hint").innerText="";
				   document.getElementById("password").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("password").value;
				   var pass2 = document.getElementById("repassword").value;
				   if(pass1 == pass2){
					   document.getElementById("password").style.border = "1px solid #aaaaaa";
					   document.getElementById("repassword").style.border = "1px solid #aaaaaa";
					   document.getElementById("pass2hint").innerText="";
					   document.getElementById("pass1hint").innerText="";
				   }else{
					   document.getElementById("password").style.border = "1px solid red";
					   document.getElementById("repassword").style.border = "1px solid red";
					   document.getElementById("pass2hint").innerText=" Your Passwords Are Not Match!";
				   }
				   
				}else{
			     document.getElementById("pass1hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("password").style.border = "1px solid red";
				}
		}	
		 function enterRePass(){
			    var rpaswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var rpassword = document.getElementById("repassword").value;
				if(rpassword.match(rpaswd)){
				   document.getElementById("pass2hint").innerText="";
				   document.getElementById("repassword").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("password").value;
				   var pass2 = document.getElementById("repassword").value;
				   if(pass1 == pass2){
					   document.getElementById("password").style.border = "1px solid #aaaaaa";
					   document.getElementById("repassword").style.border = "1px solid #aaaaaa";
					   document.getElementById("pass2hint").innerText="";
					   document.getElementById("pass1hint").innerText="";
				   }else{
					   document.getElementById("password").style.border = "1px solid red";
					   document.getElementById("repassword").style.border = "1px solid red";
					   document.getElementById("pass2hint").innerText=" Your Passwords Are Not Match!";
				   }
				}else{
			     document.getElementById("pass2hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("repassword").style.border = "1px solid red";
				}
		}
		function enterPas(){
			    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var password = document.getElementById("pass").value;
				if(password.match(paswd)){
				   document.getElementById("pas1hint").innerText="";
				   document.getElementById("pass").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("pass").value;
				   var pass2 = document.getElementById("repass").value;
				   if(pass1 == pass2){
					   document.getElementById("pass").style.border = "1px solid #aaaaaa";
					   document.getElementById("repass").style.border = "1px solid #aaaaaa";
					   document.getElementById("pas2hint").innerText="";
					   document.getElementById("pas1hint").innerText="";
				   }else{
					   document.getElementById("pass").style.border = "1px solid red";
					   document.getElementById("repass").style.border = "1px solid red";
					   document.getElementById("pas2hint").innerText=" Your Passwords Are Not Match!";
				   }
				   
				}else{
			     document.getElementById("pas1hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("pass").style.border = "1px solid red";
				}
		}	
		 function enterRePas(){
			    var rpaswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
				var rpassword = document.getElementById("repass").value;
				if(rpassword.match(rpaswd)){
				   document.getElementById("pas2hint").innerText="";
				   document.getElementById("repass").style.border = "1px solid #aaaaaa";
				   $(".nextbtn").removeClass("disable-div");  
                   $(".prebtn").removeClass("disable-div");
				   
				   var pass1 = document.getElementById("pass").value;
				   var pass2 = document.getElementById("repass").value;
				   if(pass1 == pass2){
					   document.getElementById("pass").style.border = "1px solid #aaaaaa";
					   document.getElementById("repass").style.border = "1px solid #aaaaaa";
					   document.getElementById("pas2hint").innerText="";
					   document.getElementById("pas1hint").innerText="";
				   }else{
					   document.getElementById("pass").style.border = "1px solid red";
					   document.getElementById("repass").style.border = "1px solid red";
					   document.getElementById("pas2hint").innerText=" Your Passwords Are Not Match!";
				   }
				}else{
			     document.getElementById("pas2hint").innerText='Enter valid Passeord ( Ex: "Example10@" (7-15 letters with Capital(A), Simple(a), Number and symbol(@,#)))!.' ;
				 document.getElementById("repass").style.border = "1px solid red";
				}
		}
	 document.querySelector('.addpostRegister').addEventListener('click', function() {  
	     
			
			var pass1 = document.getElementById("pass").value;
			var pass2 = document.getElementById("repass").value;
			
			if(pass1 == pass2){
	         document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(regwait, 3000);
			  
			 }else{
				 document.getElementById("pass").style.border = "1px solid red";
				 document.getElementById("repass").style.border = "1px solid red";
				 document.getElementById("pas2hint").innerText=" Your Passwords Are Not Match!" ;
			 }
	        
     });
	   
    	function regwait() {

			var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;		
        var password = document.getElementById("pass").value;
        var repassword = document.getElementById("repass").value;
        var email = document.getElementById("email").value;
		var pno1 = document.getElementById("pno1").value; 
		var city = document.getElementById("city").value;
		var gender = document.getElementById("gender").value;		
		var uname = document.getElementById("uname").value;
        
        var form = $('#regForm')[0];
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
	      $("#p").html(result);
		  localStorage.setItem("logName", uname);
		  localStorage.setItem("logPass", repassword);
		  document.getElementById("msgModal").style.display = "inline";
		  document.getElementById("regModal").style.display = "none";
        }
    });
        }
		 
	 function regConform(){
		 $("#postForm").removeClass("disable-div"); 
		 document.getElementById("myModal").style.display = "none";
		 document.getElementById("msgModal").style.display = "none";
         $("#contactCard").removeClass("disable-div");
		 document.getElementById("contactCard").style.display = "inline";
	     document.getElementById("contactCard2").style.display = "inline";
		 document.getElementById("checkDetials").style.display = "none";
		 document.getElementById("postnow").style.display = "inline";
		 
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
		 var e = "normal";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";		 
		
         let user = getCookie("durakathanapalaloginUserName");
		 let pass = getCookie("durakathanapalaloginUserPass");
         if (user != "" && pass !="") {
           
		   var yes ="yes";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				 postGetContact: yes,	 
                 username: user,
				 userpassword: pass
               },
               cache: false,
            success: function(result){
				$("#contactCard").html(result);
             }
           });
         }else {
           
         }    
	 }
	  function regconformsaved(){
			
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		}
		
	document.querySelector('.fogPost').addEventListener('click', function() {  
	      var uname =   document.getElementById("foguname").value;
		  var email =	document.getElementById("fogemail").value;
		  if(uname != "" && email !=""){			  
			   document.getElementById("fogenterhint").innerText=' Please use one option ( user-name/email )!.' ;
		  }else{
			if(uname == "" && email ==""){  
			   document.getElementById("fogenterhint").innerText=' Your Fields are 	Empty!.' ;
			}else{
	         document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(fogwait, 3000);
			}
		  }
     });
    	function fogwait() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
	    var fogunamep = document.getElementById("foguname").value;
        var fogemailp = document.getElementById("fogemail").value;
        var form = $('#forgot-form')[0];
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
	      $("#p").html(result);
		  localStorage.setItem("fogmailuname", fogunamep);
		  localStorage.setItem("fogmailemail", fogemailp);
        }
    });
    }
		
	function postforgot(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(postforgotwait, 3000);
	}	
	function postforgotwait() {
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
			document.getElementById("myModal").style.display = "none";
			document.getElementById("fogModal").style.display = "inline";
      }
	function sendfogcode(){
		     document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(pforgotmail, 3000);
	}  
	function pforgotmail(){
		    $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		         var n = localStorage.getItem("fogmailuname");
		         var p = localStorage.getItem("fogmailemail");
				  
				 $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
                 fogmailuname: n,
				 fogmailemail: p
               },
               cache: false,
               success: function(result){
				$("#fogErroMsg2").html(result);
				codeSentUname("codeSentUname",n, 10)
				codeSentEmail("codeSentEmail",p, 10)
               }
               });
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
		        document.getElementById("msgModal").style.display = "none";
		        document.getElementById('fognewPassModal').style.display = "none";
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
	
	function createCookie(name,value,minutes) {
		
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        var expires = "; expires="+date.toGMTString();
    } else {
        var expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
    }


	function codeSentUname(name,value,minutes) {
		
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        var expires = "; expires="+date.toGMTString();
		
    } else {
        var expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
    }
	
	function codeSentEmail(name,value,minutes) {
		
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        var expires = "; expires="+date.toGMTString();
		
    } else {
        var expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
    }
    
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    return
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(startTimer, 1000);
  
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}

    </script>
<script>
    function onSignIn2(googleUser) {

        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.	
    }

	function signOut() {
    if(confirm("Are you sure to signout?")){
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
        });

        auth2.disconnect();
    }
}
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

    <script>
	
    function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
		
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
	 // main load
	   function mainLoadRemove(){
		    $("#mainLoad").addClass("ll");
	   }
	   
      // Loading finished ads
	    function finishedloadAds(){
			 var myVar = setTimeout(finishedloadAdsImgwait, 2000);
			  var myVar = setTimeout(finishedloadAdswait, 3000);
	    }
		function finishedloadAdswait(){
		   $(".loadAds").removeClass("loadTohide");  
		   $(".loadAds").removeClass("skeleton");  
	    }
		function finishedloadAdsImgwait(){
		   $(".img .loadAds").removeClass("loadTohide");  
		   $(".img .loadAds").removeClass("skeleton");  
	    }
	    function mainLogOut(){
		      document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(mainLogOutwait, 3000);
	    }
		function mainLogOutwait(){
			 $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
			window.location.href = 'user/logout.php';
			autosetlogicon();
		}
		
		function autosetlogicon(){	
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
		 
	    /*search togin success*/

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
				$("#lic2").html(result);
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
				$("#licPhone2").html(result);
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
			document.getElementById("procardMain").style.display ="none";
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
		}
		
   	   	function verifyCod(){
			
		var code = document.getElementById("verifyCode").value;
		    let codeSentUname = getCookie("codeSentUname");
			let codeSentEmail = getCookie("codeSentEmail");

			 $.ajax({
                 url: "php/php-ajax.php",
                 type: "POST",
                 data: {
                 verifyCode: code,
				 uname: codeSentUname,
				 email: codeSentEmail
               },
               cache: false,
               success: function(result){
				     $("#fogErroMsg2").html(result);
               }
               });		
	}
  
	// Uncomment the following line to delete this cookie
	// setCookie("firstName", "", 0);
    </script>	 
   <script>
   document.querySelector('img.sample-image').addEventListener('click', function() {
    this.classList.toggle('sample-image-large');
	var model = document.querySelector('.modal-content');
	model.classList.toggle('modal-content-large');
	
    });
   </script>
   <script>
     document.querySelector('.g').style.display = "none";
    document.querySelector('.snum').addEventListener('click', function() {
      this.style.display="none";
	  document.querySelector('.snumEn').style.display="inline";
	  document.querySelector('.snumEn2').style.display="inline";
	  const url_string =   window.location.href;
      const urlParams = new URLSearchParams(url_string);
	  const adId = urlParams.get('adId');

            $.ajax({
               url: "php/php-ajax.php",
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
	<script>
       $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
	</script>
	  <script>		 
	
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
		
</script> 
	  <script> 
	  /*post location*/
$(document).ready(function() {
    $( "#myTable tr td" ).on( "click", function( event ) {
        var x = window.matchMedia("(max-width: 1000px)")
       if (x.matches) { // If media query matches
         document.getElementById("table2").style.display = "inline";
		 document.getElementById("table1").style.display = "none";
		 document.getElementById("locationTitle").style.display = "none";
		 document.getElementById("backLocation").style.display = "inline";
		 document.getElementById("2backLocation").style.display = "none";
  }
    });
}); 
$(document).ready(function() {
    $( "#backLocation" ).on( "click", function( event ) {
		var x = window.matchMedia("(max-width: 1000px)")
       if (x.matches) { // If media query matches
         document.getElementById("table2").style.display = "none";
		 document.getElementById("table1").style.display = "inline";
		 document.getElementById("locationTitle").style.display = "inline";
		 document.getElementById("backLocation").style.display = "none";
		 document.getElementById("2backLocation").style.display = "inline";
  }
    });
});
$(document).ready(function() {
    $( "#2backLocation" ).on( "click", function( event ) {
		var x = window.matchMedia("(max-width: 1000px)")
       if (x.matches) { // If media query matches
        document.getElementById("step1").style.display="inline";
		document.getElementById("step2").style.display="none";
	    document.getElementById("location").style.display="none";	
        }
    });
});
    /*end post location*/
	 /* search location*/
	$(document).ready(function() {
    $( "#smyTable tr td" ).on( "click", function( event ) {
        var x = window.matchMedia("(max-width: 1000px)")
       if (x.matches) { // If media query matches
         document.getElementById("stable2").style.display = "inline";
		 document.getElementById("stable1").style.display = "none";
		 document.getElementById("slocationTitle").style.display = "none";
		 document.getElementById("sbackLocation").style.display = "inline";
  }
    });
}); 
$(document).ready(function() {
    $( "#sbackLocation" ).on( "click", function( event ) {
		var x = window.matchMedia("(max-width: 1000px)")
       if (x.matches) { // If media query matches
         document.getElementById("stable2").style.display = "none";
		 document.getElementById("stable1").style.display = "inline";
		 document.getElementById("slocationTitle").style.display = "inline";
		 document.getElementById("sbackLocation").style.display = "none";
  }
    });
});
/* end search location*/
function mylocation() {
document.getElementById("location2").style.display = "inline";
}

function closelocation2() {
document.getElementById("location2").style.display = "none";
}
function closelocation() {
document.getElementById("mypost").style.display = "none";
}

function postManu() {
document.getElementById("mypost").style.display = "inline";
}

function closepost() {
document.getElementById("mypost").style.display = "none";
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function loginManu() {
document.getElementById("myModal").style.display = "inline";
}


// When the user clicks on <span> (x), close the modal
function closeLogMain() {
document.getElementById("myModal").style.display = "none";
 $("#postForm").removeClass("disable-div");
}

 function searchLiveKeyWordClick(){
        document.getElementById("searchName").style.boder ="2px solid red";
	    var val =  document.getElementById("searchName").value;
		var location = document.getElementById("searchCity").value;
        var model =  document.getElementById("dropdown-menu1-select").value;
        var mtype =  document.getElementById("dropdown-menu2-select").value	;	
		if( val ==""){
			var value ="W";
		}else{
			var value = val;
		}
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				  searchLiveKeyWord: value,
				  model: model,
				  mtype: mtype,
				  location: location
               },
               cache: false,
              success: function(result){
				$("#livesearchlist").html(result);
             }
           });
	 }
 function searchLiveKeyWord(){
	    var val =  document.getElementById("searchName").value;
		var location = document.getElementById("searchCity").value;
        var model =  document.getElementById("dropdown-menu1-select").value;
        var mtype =  document.getElementById("dropdown-menu2-select").value	;	
		var val1 = "w";
		   $.ajax({
               url: "php/php-ajax.php",
                 type: "POST",
                 data: {
				  searchLiveKeyWord: val1,
				  model: model,
				  mtype: mtype,
				  location: location
               },
               cache: false,
              success: function(result){
				$("#livesearchlist").html(result);
             }
           });
	 }

$("body").click
(
  function(e)
  {
    if(e.target.className !== "input")
    {
      $(".wwww").hide();
    }else{
      $(".wwww").show();
	}
  }
);

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	
	 var modal = document.getElementById("myModal");
  if (event.target == modal) {
document.getElementById("myModal").style.display = "none";
$("#postForm").removeClass("disable-div");
  }
} 

                                                                    // Get the <span> element that closes the modal

// When the user clicks the button, open the modal 



 

         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
  

		function myFunction() {
		  var x = document.getElementById("Demo");
		  if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
		  } else { 
			x.className = x.className.replace(" w3-show", "");
		  }
		}

		function myFunction() {
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("myTable");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			  txtValue = td.textContent || td.innerText;
			  if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}       
		  }
		}
          
		// Get the modal
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
</script>
<script>
function mytable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
   inpu = document.getElementById("myInput").value;
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		tr[i].style.color = "blue";
		if(inpu == ""){
	        tr[i].style.color = "black";
         }
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mytable2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
   inpu = document.getElementById("myInput2").value;
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		tr[i].style.color = "blue";
		if(inpu == ""){
	        tr[i].style.color = "black";
         }
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function smytable() {
	
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("smyInput");
  inpu = document.getElementById("smyInput").value;
  filter = input.value.toUpperCase();
  table = document.getElementById("smyTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		tr[i].style.color = "blue";
		 if(inpu == ""){
	        tr[i].style.color = "black";
         }
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function smytable2() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("smyInput2");
   inpu = document.getElementById("smyInput2").value;
  filter = input.value.toUpperCase();
  table = document.getElementById("smyTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		tr[i].style.color = "blue";
		 if(inpu == ""){
	        tr[i].style.color = "black";
         }
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
/* select search city in district on district click*/
	     $(document).ready(function() {
         $('.getDistricsearch').on('click', function() {			 
        	var Districtsid = this.id; 
			var vv = this.innerText;
			if( Districtsid != "0"){
			document.getElementById("sdistrict").innerText = vv;
             $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               SDid: Districtsid,
			   SDName: vv
               },
            cache: false,
            success: function(result){
             		$("#smyTable2").html(result);		
             }
           });
			}else{
				document.getElementById("location2").style.display="none";
				var name = "Srilanka";
			$.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               sCityId: name
               },
               cache: false,
               success: function(result){
               $("#locationBtn").html(result);		 
               document.getElementById("searchCity").value = name;			   
              }
             });
			}
         });
        });
/* end select search city in district on district click*/
/* select add posst choose city in district on district click*/
	     $(document).ready(function() {
         $('.getDistric').on('click', function() {		
        	var Districtid = this.id; 
			var v = this.innerText;
			document.getElementById("district").innerText = v;
             $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               Did: Districtid
               },
            cache: false,
            success: function(result){
              $("#myTable2").html(result);			
             }
           });

         });
        });
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


function addMOREPnum(){
	  $("#contactCard2").removeClass("disable-div");
	 document.getElementById("masagebox").style.display="inline";
	 document.getElementById("masageboxLink").style.display="none";
}
</script>
<script>
	$(document).ready(function() {
    $("#span2").addClass("disable-div");
	$("#span3").addClass("disable-div");
	$("#span4").addClass("disable-div");
    });

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
			
</script>
<script>
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

</script>
<script>
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

</script>
<script>
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

</script>
<script>

</script>
<script>

function addnumlist() {
	var titleValue = document.getElementById('addPnum').value;
	var x = document.getElementById('exnum1');
	var y = document.getElementById('exnum2');
	
	if(x.style.display === "none"){
	   x.style.display = "inline";
       document.getElementById('ex1').innerText = titleValue;	
       document.getElementById('exin1').value = titleValue;	   
	}else{
	 y.style.display = "inline";
	  document.getElementById('ex2').innerText = titleValue;
      document.getElementById('exin2').value = titleValue;	  
	}
	if(y.style.display === "inline"){
		document.getElementById("pnHint").innerText = 'you can add only 2 numbers!';	
	}
}


</script>
<script>
/*step 1 create post*/
       $(document).ready(function() {
         $('.cardlabel').click(function() {
            var val = this.id;
			if(val == 1){
		    document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For Sell a Phone";
			document.getElementById("2backLocation").style.display = "inline";
			}else if(val == 2){
			document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For xxxx";
			document.getElementById("2backLocation").style.display = "inline";
			}else if(val == 3){
			document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For xxx";
			document.getElementById("2backLocation").style.display = "inline";
			}else if(val == 4){
			document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For xxx";
			document.getElementById("2backLocation").style.display = "inline";
			}			
          });
         });
		function changePostLocation(){
			document.getElementById("location").style.display="inline";	
			document.getElementById("mypost").style.display="inline";
			document.getElementById("step2").style.display="inline";
			document.getElementById("laststep").style.display="none";
			document.getElementById("tags").style.display="none";
			document.getElementById("mypost2").style.display="inline";		 
		 }
		 function changePostcategory(){
			document.getElementById("location").style.display="none";	
			document.getElementById("step1").style.display="inline";
			document.getElementById("mypost").style.display="inline";
			document.getElementById("step2").style.display="none";
			document.getElementById("laststep").style.display="none";
			document.getElementById("tags").style.display="none";
			document.getElementById("mypost2").style.display="none";
		 }
/*end step 1 create post*/
/*get post location*/


const tbody = document.querySelector('#myTable2');
tbody.addEventListener('click', function (e) {
  const cell = e.target.closest('td');
  if (!cell) {return;} // Quit, not clicked on a cell
  var cityId = cell.id;
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
});

/*end get post location*/
$(document).ready(function() {
$('.cancelbtn').click(function() { 
   document.getElementById("msgModal").style.display = "inline";
   var f ="";
    $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               cancelPost: f
               },
            cache: false,
            success: function(result){
              $("#p").html(result);		  
             }
           });
  });
});
function closepost2() {
  document.getElementById("msgModal").style.display = "inline";
   var f ="";
    $.ajax({
               url: "php/php-ajax.php",
               type: "POST",
               data: {
               cancelPost: f
               },
            cache: false,
            success: function(result){
              $("#p").html(result);		  
             }
           });
}
function postcancelyes(){
		      document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(postcancelyesPage, 3000);
}
function postcancelyesPage(){
	$("#loader").removeClass("loader");
	document.getElementById("loader").style.display = "none";
	document.getElementById("loader-main").style.display = "none";
    window.location.href = 'index.php';
}
function postcancelno(){
			  document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(postcancelnoPage, 3000);
}
function postcancelnoPage(){
	$("#loader").removeClass("loader");
	document.getElementById("loader").style.display = "none";
	document.getElementById("loader-main").style.display = "none";
	document.getElementById("msgModal").style.display = "none";
}

	function postAdno(){
		document.getElementById("msgModal").style.display = "none";
	}
	
$(document).ready(function() {
         $('.checkbtn').click(function() {      
             $("#postForm").addClass("disable-div");
			 document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var myVar = setTimeout(showpostPage, 3000);
		   });
    });
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
				document.getElementById("disHint").innerText = 'Olease Enter Discription !';
				$("#discription").addClass("redborder");
			}else{
				error="";
				document.getElementById("disHint").innerText = '';
				$("#discription").removeClass("redborder");
			}
			if(price == ""){
				error = "1";
				document.getElementById("priceHint").innerText = 'Olease Enter  Price !';
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


var closebtns = document.getElementsByClassName("closeiconNum");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}

$(document).ready(function() {
    $("#contactCard").addClass("disable-div");
});
$(document).ready(function() {
    $("#contactCard2").addClass("disable-div");
	document.getElementById("contactCard").style.display = "none";
	document.getElementById("contactCard2").style.display = "none";
});

	
$('.brandsSelect select').change(function(){
	var tt = this.value;
	var path = window.location.href;
    var location = document.getElementById("searchCity").value;
	var mtype = "";
	var searchName = document.getElementById("searchName").value;
	
	 window.location.href = 'search.php?city='+ location+ "&model=" + tt + "&mType=" + mtype + "&search=" + searchName + "#searchmanuAds";
});


$('.devicesSelect select').change(function(){
    var tt = this.value;
	var path = window.location.href;
     var location = document.getElementById("searchCity").value;
	var model = "";
	var searchName = document.getElementById("searchName").value;
	
	 window.location.href = 'search.php?city='+ location+ "&model=" + model + "&mType=" + tt + "&search=" + searchName + "#searchmanuAds";
});

</script>
<script>
      /* view item page*/
       function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("id01").style.display = "block";
       }
	   	   
	   $(".populer-ads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'index.php?page=populer-ads-view-Item&adId='+ adId;
       });
	    $(".normal-ads").on('click', function(event){
		   var adId = this.id;
        window.location.href = 'index.php?page=normal-ads-view-Item&adId='+ adId;
       });
</script>
<script>
		const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage); 
 /* end view item page*/
     
	/*search button manu*/ 
	 $(document).ready(function() {
       $('#searchBtn').click(function() {
	    var location = document.getElementById("searchCity").value;
        var model =  document.getElementById("dropdown-menu1-select").value;
        var mtype =  document.getElementById("dropdown-menu2-select").value	;	
        var searchName = document.getElementById("searchName").value;
		window.location.href = 'search.php?city='+ location+ "&model=" + model + "&mType=" + mtype + "&search=" + searchName + "#searchmanuAds";

		    });
        });
		
	   $(document).ready(function() {
         $('.devicesBtn').click(function() {
		    document.querySelector('.devicesBtn').style.display = "none";
			document.querySelector('#devicesSelect').style.display = "inline";
		    }); 
       });
	   
	   $(document).ready(function() {
         $('.brandsBtn').click(function() {
		    document.querySelector('.brandsBtn').style.display = "none";
			document.querySelector('#brandsSelect').style.display = "inline"; 
		    });
       });
	   




/*$(window).on("load", function () {
    preloaderFadeOutTime = 1000;

    function hidePreloader() {
      var preloader = $('.spinner-wrapper');
      preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
	setTimeout(checkVerifyNotification, 3000);

  });*/
  
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
</body>
</html> 

