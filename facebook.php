
<html>
    <head>
        <style type="text/css">
   
.social-btns .btn,
.social-btns .btn:before,
.social-btns .btn .fa {
  transition: all 0.35s;
  transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
}
.social-btns .btn:before {
  top: 90%;
  left: -110%;
}
.social-btns .btn .fa {
  -webkit-transform: scale(0.8);
  transform: scale(0.8);
}
.social-btns .btn.facebook:before {
  background-color: #3b5998;
}
.social-btns .btn.facebook .fa {
  color: #3b5998;
}
.social-btns .btn.twitter:before {
  background-color: #00aff0;
}
.social-btns .btn.twitter .fa {
  color: #00aff0;
}
.social-btns .btn:focus:before,
.social-btns .btn:hover:before {
  top: -10%;
  left: -10%;
}
.social-btns .btn:focus .fa,
.social-btns .btn:hover .fa {
  color: #fff;
  -webkit-transform: scale(1);
  transform: scale(1);
}
.social-btns {
  height: 90px;
  margin: auto;
  font-size: 0;
  text-align: center;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.social-btns .btn {
  display: inline-block;
  background-color: #fff;
  width: 90px;
  height: 90px;
  line-height: 90px;
  margin: 0 10px;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-radius: 28%;
  box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.1);
  opacity: 0.99;
}
.social-btns .btn:before {
  content: "";
  width: 120%;
  height: 120%;
  position: absolute;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.social-btns .btn .fa {
  font-size: 38px;
  vertical-align: middle;
}
        </style>
    </head>
<body>
  <div class="social-btns">
    <a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a>
    <a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a>


  </div>
  <script>
var text = encodeURIComponent("Follow JavaScript Jeep form Amazing JavaScript Tutorial");
var url = "https://www.durakathanapala.lk"; 
var user_id = "jagathish1123";
var hash_tags = "JS,JavaScript,100DaysOfCode,Programming";
var params = "menubar=no,toolbar=no,status=no,width=570,height=570"; // for window

var facebook = document.querySelector('.facebook');
var twitter = document.querySelector('.twitter');


facebook.addEventListener('click', function(ev) {
  console.log("hi");
    
    let shareUrl = `http://www.facebook.com/sharer/sharer.php?u=${url}`;
    window.open(shareUrl,"NewWindow" , params);  
});



twitter.addEventListener('click', function(ev) {
  let shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}&via=${user_id}&hashtags=${hash_tags}`;
   window.open(shareUrl,"NewWindow" , params);
});

  </script>
</body>

</html>
