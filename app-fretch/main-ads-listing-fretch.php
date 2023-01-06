
<?php 
 
 /*
 * Created by Belal Khan
 * website: www.simplifiedcoding.net 
 * Retrieve Data From MySQL Database in Android
 */
 
 //database constants
 define('DB_HOST', 'localhost');
 define('DB_USER', 'durakathanapala_phonesite');
 define('DB_PASS', '50cqT)Wqd3ZA');
 define('DB_NAME', 'durakathanapala_phone');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
 //Checking if any error occured while connecting
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
  
 //creating a query
 $stmt = $conn->prepare("SELECT id, price, brand_name, device_name, city_Id FROM phoneads");

 //executing the query 
 $stmt->execute();

 //binding results to the query 
 $stmt->bind_result($id, $price, $brand, $device_name, $city);
 
 $products = array(); 

 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['id'] = $id; 
 $temp['price'] = $price;
 $temp['brand'] = $brand;
 $temp['device'] = $device_name;
 $temp['city'] = $city;

 array_push($products, $temp);
 }


 echo json_encode($products);

 ?>
 