<?php

   $user = $_POST['user'];
    $email = $_POST['email'];
	 $mobile = $_POST['mobile'];

   //Database connection
   $conn = new mysqli('localhost','root','','dynamicuserdata');
   if($conn->connect_error){
	   die('Connection Failed : '.$conn->connect_error);
   }else{
	   $stmt = $conn->prepare("insert into userinfodata(user,email,mobile) 
	   value(?,?,?)");
	   $stmt->bind_param("sssi",$user,$email,$mobile);
	   $stmt->execute();
	   echo "registration successfull...";
	   $stmt->close();
	   $conn->close();
	
   }	
?>	
