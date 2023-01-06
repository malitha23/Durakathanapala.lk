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
	   
$(window).on("load", function () {
    preloaderFadeOutTime = 1000;

    function hidePreloader() {
      var preloader = $('.spinner-wrapper');
      preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
	setTimeout(checkVerifyNotification, 3000);

  });
  
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
         
  
  
	  
	
  $(document).ready(function() {
         $('.cardlabel').click(function() {
            var val = this.id;
			if(val == 1){
			localStorage.setItem("createPost", val);	
		    document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For Sell a Phone";
			document.getElementById("2backLocation").style.display = "inline";
			}else if(val == 2){
			localStorage.setItem("createPost", val);	
			document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For Create Phone Shop Ad";
			document.getElementById("2backLocation").style.display = "inline";
			}else if(val == 3){
			localStorage.setItem("createPost", val);		
			document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For xxx";
			document.getElementById("2backLocation").style.display = "inline";
			}else if(val == 4){
			localStorage.setItem("createPost", val);		
			document.getElementById("step1").style.display="none";
			document.getElementById("step2").style.display="inline";
			document.getElementById("location").style.display="inline";	
			document.getElementById("locationTitle").innerText =" Select Location For xxx";
			document.getElementById("2backLocation").style.display = "inline";
			}			
          });
         }); 
		 
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
		  
		  
    	$(document).ready(function() {
         $('.checkbtn').click(function() {      
             $("#postForm").addClass("disable-div");
			 document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			   var createPost = localStorage.getItem("createPost");
			   
			   if(createPost == "1"){
			    var myVar = setTimeout(showpostPage, 3000);
			   }else  if(createPost == "2"){
			    var myVar = setTimeout(showshoppostPage, 3000);
			   }
		   });
    });
	
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
	 
	 
document.querySelector('.userLogin').addEventListener('click', function() {
	    	  window.location.href ='user/login.php'; 
	 });
	 
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
	   

		

	function addMOREPnum(){
	  $("#contactCard2").removeClass("disable-div");
	 document.getElementById("masagebox").style.display="inline";
	 document.getElementById("masageboxLink").style.display="none";
}
function addMOREPnumshop(){
	 document.getElementById("masageboxshop").style.display="inline";
	 document.getElementById("masageboxLinkshop").style.display="none";
}

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

function addnumlistshop() {
	var titleValue = document.getElementById('addPnumshop').value;
	var x = document.getElementById('exnum1shop');
	var y = document.getElementById('exnum2shop');
	
	if(x.style.display === "none"){
	   x.style.display = "inline";
       document.getElementById('ex1shop').innerText = titleValue;	
       document.getElementById('exin1shop').value = titleValue;	   
	}else{
	 y.style.display = "inline";
	  document.getElementById('ex2shop').innerText = titleValue;
      document.getElementById('exin2shop').value = titleValue;	  
	}
	if(y.style.display === "inline"){
		document.getElementById("pnHintshop").innerText = 'you can add only 2 numbers!';	
	}
}

/*step 1 create post*/
      
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

        	 function changePostLocationshop(){
		
     		document.getElementById("location").style.display="inline";	
			document.getElementById("mypost").style.display="inline";
			document.getElementById("step2").style.display="inline";
			document.getElementById("laststep").style.display="none";
			document.getElementById("laststep2").style.display="none";
			document.getElementById("tags").style.display="none";
			document.getElementById("mypost2").style.display="inline";		 
		 }
		 function changePostcategoryshop(){
			document.getElementById("location").style.display="none";	
			document.getElementById("step1").style.display="inline";
			document.getElementById("mypost").style.display="inline";
			document.getElementById("step2").style.display="none";
			document.getElementById("laststep2").style.display="none";
			document.getElementById("tags").style.display="none";
			document.getElementById("mypost2").style.display="none";
		 }	
/*end step 1 create post*/


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


	
	function postCreateGoogleLogin(){
		      document.getElementById("loader").style.display = "inline";
			  document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var createPost = localStorage.getItem("createPost");
		if(createPost == "1"){
			var t ="";
		    localStorage.setItem("image1Upload", t);	
	         var form = $('#postForm')[0];
             // FormData object 
             var data = new FormData(form);
	    	$.ajax({
              url: 'php/php-googleLogin-ajax.php',
		      contentType: false,
              processData: false,
              type: 'POST',
              data: data,
              cache: false,
              success: function (result){
              $("#p").html(result);			  
             }
           });
		}else if(createPost == "2"){
			var t ="";
		    localStorage.setItem("image1Upload", t);	
	         var form = $("#postFormshop")[0];
             // FormData object 
             var data = new FormData(form);
	    	$.ajax({
              url: 'php/phoneShop-googleLoginAjax.php',
		      contentType: false,
              processData: false,
              type: 'POST',
              data: data,
              cache: false,
              success: function (result){
              $("#p").html(result);			  
             }
           });
		}
	}
	function postAdno(){
		document.getElementById("msgModal").style.display = "none";
	}
	

     function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("id01").style.display = "block";
       }
	   	   
	
	   
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

	   
  
  
	
		function reportAd(x,y){
		document.getElementById("msgModal").style.display = "inline";
		document.getElementById("reportForm").style.display = "inline";
		localStorage.setItem("reportId", x);
		localStorage.setItem("reportadName", y);
	}
	function reportSave(){
		 var email = document.getElementById("reportEmail").value;
		 var reason = document.getElementById("reportCategory").value;
		 var msg = document.getElementById("reportMsg").value;
		  var n = localStorage.getItem("reportId");
		  var m = localStorage.getItem("reportadName");

		  if(email !="" && reason != ""){
		 $.ajax({
              url: "php/php-ajax.php",
               type: "POST",
               data: {
			   reportPostId:n, 
               reportPostadName:m,			   
			   reportPostemail:email,
			   reportPostmsg:msg,
			   reportPostreason:reason
               },
            cache: false,
            success: function(result){
                document.getElementById("successMsgReport").style.display = "block";
				document.getElementById("successMsgReport").innerHTML = '<strong>Success!</strong> Your submission is successful.';
		        $(".llll").addClass("alert-success");
		        $(".llll").removeClass("alert-warning");
			    setTimeout(reportOk, 3000);
             }
           });
	 }else{
		 document.getElementById("successMsgReport").style.display = "block";
		 document.getElementById("successMsgReport").innerHTML = "Enter your email and select reason! ";
		 $(".llll").removeClass("alert-success");
		 $(".llll").addClass("alert-warning");
		 
	 }
	}
	
	function reportOk(){
		document.getElementById("msgModal").style.display = "none";
		document.getElementById("reportForm").style.display = "none";
	}
	function reportFormClose(){
		document.getElementById("msgModal").style.display = "none";
		document.getElementById("reportForm").style.display = "none";
	}

	

		  
	 function postLogin() {
		document.getElementById("loader").style.display = "inline";
		document.getElementById("loader-main").style.display = "inline";
		$("#loader").addClass("loader");
	    var myVar = setTimeout(loginwait, 3000);
	 }
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
		 document.querySelector(".checkDetials").style.display = "none";
		 document.querySelector(".postnow").style.display = "inline";
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
		 var e = "normal";
		 var pp = "";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserEmail"+"="+pp+expires+"; path=/";
		 
         let user = getCookie("durakathanapalaloginUserName");
		 let pass = getCookie("durakathanapalaloginUserPass")
         if (user != "") {
            var createPost = localStorage.getItem("createPost");
		  if(createPost == "1"){
				 document.getElementById("contactCard").style.display = "inline";
	             document.getElementById("contactCard2").style.display = "inline";  
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
		  }else if(createPost == "2"){
			  
		   var yes ="yes";
		   	 document.getElementById("shopcontactCard").style.display = "inline";
		   $.ajax({
               url: "php/phoneShopAjax.php",
                 type: "POST",
                 data: {
				 postGetContact: yes,	 
                 username: user,
				 userpassword: pass
               },
               cache: false,
            success: function(result){
				$("#shopcontactCard").html(result);
             }
           });
		  }
		  
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
		
	 function  addpostRegister(){  
          	var pass1 = document.getElementById("pass").value;
			var pass2 = document.getElementById("repass").value;
			var privacy = document.getElementById("privacy").value;
			
			if(pass1 == pass2 ){
			    if(privacy == "yes"){
	         document.getElementById("loader").style.display = "inline";
			 document.getElementById("loader-main").style.display = "inline";
			  $("#loader").addClass("loader");
			  var createPost = localStorage.getItem("createPost");
			   
			   if(createPost == "1"){
			     var myVar = setTimeout(regwait, 3000);
			   }else if(createPost == "2"){
				 var myVar = setTimeout(regwaitshopad, 3000);  
			   }
			}else{
			    document.getElementById("privacyhint").innerText=" check privacy!" ;
			} 
			 }else{
				 document.getElementById("pass").style.border = "1px solid red";
				 document.getElementById("repass").style.border = "1px solid red";
				 document.getElementById("pas2hint").innerText=" Your Passwords Are Not Match!" ;
			 }      
     }
	   
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
		   	function regwaitshopad() {

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
		 
		 var date = new Date();
        date.setTime(date.getTime()+(1000*60*60*24*365));
        var expires = "; expires="+date.toGMTString();
         var n = localStorage.getItem("logName");
		 var p = localStorage.getItem("logPass");
		 var e = "normal";
		 var pp ="";
		 document.cookie = "durakathanapalalogin"+"="+e+expires+"; path=/"; 
		 document.cookie = "durakathanapalaloginUserName"+"="+n+expires+"; path=/";
		 document.cookie = "durakathanapalaloginUserPass"+"="+p+expires+"; path=/";	
		  document.cookie = "durakathanapalaloginUserEmail"+"="+pp+expires+"; path=/";	
		
         let user = getCookie("durakathanapalaloginUserName");
		 let pass = getCookie("durakathanapalaloginUserPass");
         if (user != "" && pass !="") {
        var createPost = localStorage.getItem("createPost");
			   
		if(createPost == "1"){
				
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
		        $("#contactCard").removeClass("disable-div");
		        document.getElementById("contactCard").style.display = "inline";
	            document.getElementById("contactCard2").style.display = "inline";
		        document.querySelector(".checkDetials").style.display = "none";
		        document.querySelector(".postnow").style.display = "inline";
             }
           });
		   
		}else if(createPost == "2"){
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
				$("#shopcontactCard").html(result);
				$("#shopcontactCard").removeClass("disable-div");
		        document.getElementById("shopcontactCard").style.display = "inline";
		        document.querySelector(".checkDetials").style.display = "none";
		        document.querySelector(".postnow").style.display = "inline";
             }
           });
			}
         }else {
           
         }    
	 }
	  function regconformsaved(){
			
            $("#loader").removeClass("loader");
			document.getElementById("loader").style.display = "none";
			document.getElementById("loader-main").style.display = "none";
		}
		

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

/* select add posst choose city in district on district click*/

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
		

	
  