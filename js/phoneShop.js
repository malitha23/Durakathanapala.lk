

$(document).ready(function() {
$('.openTime').click(function() { 

  var val = this.value;
  if(val == "other"){
	  document.getElementById("otherOpenTime").style.display = "inline";
  }else{
	   document.getElementById("otherOpenTime").style.display = "none";
  }
  
  });
});

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
        document.getElementById("imageHintshop").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
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
        document.getElementById("imageHintshop").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
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
        document.getElementById("imageHintshop").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
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
        document.getElementById("imageHintshop").innerText = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';	
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
	 $(document).ready(function() {
         $('.openShopBtn').click(function() {
		    document.querySelector('.openShopBtn').style.display = "none";
			document.querySelector('#openShopSelect').style.display = "inline";
		    });
       });
    
	$(".openShopSelectOption").change(function(){
	var tt = this.value;
    var location = document.getElementById("searchCity").value;
	var openTime = "";
	var searchName = document.getElementById("searchName").value;
	 window.location.href = 'searchShopAd.php?&city='+ location + "&openDays=" + tt + "&openTime=" + openTime + "&search=" + searchName + "#searchmanuAds";
    });
	
 
	  