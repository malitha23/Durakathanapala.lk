<!DOCTYPE html>
<?php
   require_once '../database/database.php';
   if(isset($_GET["adId"])){
		$id = $_GET["adId"];
	}
	if(isset($_COOKIE["durakathanapalalogin"])) {
		$login = $_COOKIE["durakathanapalalogin"];
		if($login == "normal"){
		  if(isset($_COOKIE["durakathanapalaloginUserName"])){
			$uname = $_COOKIE["durakathanapalaloginUserName"];
		  }else if(isset($_COOKIE["durakathanapalaloginUserName"])){
		    $email = $_COOKIE["durakathanapalaloginUserEmail"];
		  }			  
		
		if($uname != ""){
			$sql = "select * from `user` where `user_name` ='$uname'";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];	
                  $userlat = $row["lat"];
				  $userlng = $row["lng"];				  
			   }
			  }
		}else if($email != ""){
			$sql = "select * from `user` where `email` ='$email' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				  $userId = $row["UserId"];	
                  $userlat = $row["lat"];
				  $userlng = $row["lng"]; 				  
			   }
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
				 $userlat = $row["lat"];
				 $userlng = $row["lng"]; 
			  } 
			  }
		}else if($login == "facebook"){
			$uname = $_COOKIE["durakathanapalaloginUserName"];
			 $sql = "SELECT * FROM `facebook-user` WHERE `facebookIdTocken` = '$uname' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){
				$userId = $row["facebookIdTocken"];  
				 $userlat = $row["lat"];
				 $userlng = $row["lng"]; 
			  } 
			  }
		}
	}

?>
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" >
	var map;
var geocoder;

function loadMap() {
	var pune = {lat: <?php echo $userlat;?>, lng: <?php echo $userlng; ?>};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: pune
    });

    var marker = new google.maps.Marker({
      position: pune,
	    icon: {
             url: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
             size: new google.maps.Size(50, 60),
             scaledSize: new google.maps.Size(50, 60),
             },
	   title: "Your Location",
       map: map
    });
	

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllColleges(allData)
}

function showAllColleges(allData) {

	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var strong = document.createElement('strong');
		var lat1 = data.lat;
		var lng1 = data.lng;
		var lat2 = '<?php echo $userlat;?>';
		var lng2 = '<?php echo $userlng;?>';
		
        var km = getDistanceFromLatLonInKm(lat1,lng1,lat2,lng2).toFixed(1)+" km ";

		strong.textContent = data.shopName+" " +" ( "+ km+" )";
		content.appendChild(strong);	
		
		var img = document.createElement('img');
		img.src = data.imageLocation;
		img.style.width = '60px';
		content.appendChild(img);

		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.lat, data.lng),
		   icon: {
             url: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
             size: new google.maps.Size(36, 40),
             scaledSize: new google.maps.Size(36, 40),
             },
	      map: map
	    });
		
		
	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
			
	    });
		marker.addListener('click', function(){
          window.location.href ='../../shopAdIndex.php?page=normal-shopads-view-Item&adId='+data.id; 	
	    });
	})
}	

function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}
function deg2rad(deg) {
  return deg * (Math.PI/180)
}	

function codeAddress(cdata) {
  
}

function updateCollegeWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}

	</script>
	<style type="text/css">
		.container {
		
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
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
			margin:100px;
		}
	@media only screen and (max-width: 1200px) and (min-width: 300px){
		.container {
			height: 100%;
		}

	}	
	</style>
</head>
<body>

	<div class="container">
	<br><br>
	   <a href="../../shopAdIndex.php?page=normal-shopads-view-Item&adId=<?php echo $id; ?>" style="margin:0 15px; color:white; font-size:18px;">Back</a>
		<center><h1>To select similar phone shops ads from Google Map.</h1></center>
		
		

		<?php
          	
           $sql = "select * from `phoneshopads`  where `id` = '$id' ";
	     $res = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($res);
		 if($count>0){
		    while($row=mysqli_fetch_assoc($res)){
				$mo           = $row['shopOpen'];
	            $mT           = $row['openTime'];			
            								  
		 }}	 
         
					
					
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode(1, true);
			echo '<div id="data">' . $coll . '</div>';
			
			$allData = $edu->getAllColleges($id,$mo,$mT);
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>
<?php 

	class education	{
		private $id;
		private $name;
		private $address;
		private $type;
		private $lat;
		private $lng;
		private $conn;
		private $tableName = "phoneshopads";
		public $nn1;
		public $nn2;
		public $nn3;
        
       
		
		public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getCollegesBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE lat IS NULL AND lng IS NULL ";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$resultSet = $stmt->get_result();
            $data = $resultSet->fetch_all(MYSQLI_ASSOC);

			return $data;
		}

		public function getAllColleges($id,$shopOpen,$openTime) {
			$this->nn1 = $id;
			$this->nn2 = $shopOpen;
			$this->nn3 = $openTime;
		
		    $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  AND `id` != '$this->nn1'  AND `shopOpen` ='$this->nn2' AND `openTime` = '$this->nn3'";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$resultSet = $stmt->get_result();
            $data = $resultSet->fetch_all(MYSQLI_ASSOC);
            $count = count($data);

			if($count > 0){
			  return $data;
			}else{
			    $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  AND `id` != '$this->nn1'  AND `shopOpen` ='$this->nn2' AND `openTime` != '$this->nn3'";
			    $stmt = $this->conn->prepare($sql);
		      	$stmt->execute();
			    $resultSet = $stmt->get_result();
                $data = $resultSet->fetch_all(MYSQLI_ASSOC);
                $count = count($data);

		    	if($count > 0){
			      return $data;
			    }else{
			    $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  AND `id` != '$this->nn1'  AND `shopOpen` !='$this->nn2' AND `openTime` = '$this->nn3'";
			    $stmt = $this->conn->prepare($sql);
		      	$stmt->execute();
			    $resultSet = $stmt->get_result();
                $data = $resultSet->fetch_all(MYSQLI_ASSOC);
                $count = count($data);

		    	if($count > 0){
			      return $data;
			    }else{
			    $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  AND `id` != '$this->nn1'  AND `shopOpen` !='$this->nn2' AND `openTime` != '$this->nn3'";
			    $stmt = $this->conn->prepare($sql);
		      	$stmt->execute();
			    $resultSet = $stmt->get_result();
                $data = $resultSet->fetch_all(MYSQLI_ASSOC);
                $count = count($data);

		    	if($count > 0){
			      return $data;
			    }else{
			    $sql = "SELECT * FROM `phoneshopads` WHERE `AdminApproval` ='1'  AND `id` != '$this->nn1'";
			    $stmt = $this->conn->prepare($sql);
		      	$stmt->execute();
			    $resultSet = $stmt->get_result();
                $data = $resultSet->fetch_all(MYSQLI_ASSOC);
                $count = count($data);

		    	if($count > 0){
			      return $data;
			    }
			}
			
		}

			     }
			}
		}


	}
	
	

?>	
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAINKBQ_jthujFm3um7iRDjg-HezmhHFzY&callback=loadMap">
</script>

</html>
