 <?php  

  require_once 'database/database.php';
 
  if(isset($_POST["login"])){
		$email =  $_POST["email"];
		$pass =  $_POST["password"];
		$date     = new DateTime("now", new DateTimeZone('Asia/Colombo') );
        $now      = $date->format('Y-m-d H:i:s');
		$sql = "select * from `admin` where `email` ='$email' and `password` ='$pass' ";
	         $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
		      if($count>0){
		      while($row=mysqli_fetch_assoc($res)){	  
				  $email = $row["email"];
				  $password = $row["password"];
                                 
 				  $sql = "UPDATE `admin` SET `loginTime`='$now' WHERE `email` ='$email' AND `password`='$password';";
				  $fire=mysqli_query($conn,$sql);
				  
                                        ?>
					<script type="text/javascript">
					window.location.href = '../index.php?success';
					</script>
       	                               <?php 
			   }
			  }else{
                          	       ?>
					<script type="text/javascript">
					window.location.href = '../login.php?error';
					</script>
       	                               <?php 
					 
			  }
	 }
?>