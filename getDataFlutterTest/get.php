<?php


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');


    //open connection to mysql db
    $connection = mysqli_connect("localhost","durakathanapala_phonesite","50cqT)Wqd3ZA","durakathanapala_phone") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT phoneads.* , devices.name AS 'deviceName', cities.name_en AS 'city', phoneadimages.image_name 
FROM phoneads 
LEFT JOIN devices ON phoneads.device = devices.id 
LEFT JOIN cities ON phoneads.city_Id = cities.id 
LEFT JOIN phoneadimages ON phoneads.id = phoneadimages.post_Id GROUP BY phoneadimages.post_Id
ORDER BY phoneads.id DESC";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $arr = [];
    while($row =mysqli_fetch_assoc($result))
    {
        $arr['data'][] = $row;
    }
    
  
   echo json_encode($arr, true);
   

    //close the db connection
    mysqli_close($connection);
?>




