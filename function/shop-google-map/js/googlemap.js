var map;
var geocoder;

function loadMap() {
	var pune = {lat: 6.92660091278957, lng: 79.86285892187499};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
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
		
		strong.textContent = data.name;
		content.appendChild(strong);

		var img = document.createElement('img');
		img.src = 'img/n.png';
		img.style.width = '100px';
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
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.name + ' ' + data.address;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateCollegeWithLatLng(points);
			
	      } else {
	        alert("ret");
	      }
	    });
	});
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
