<?php

include "connection.php";

 $username1 = $_POST['uname'];  
	
 $password1 = $_POST['psw'];  

  $sql = "select username,password from signup where username = '$username1' and password = '$password1'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";  
	header("Location: loginsuccess.html"); 
    	exit;
	
        }  
        else{  
            //echo "<h1> Login failed. Invalid username or password.</h1>";  
	header("Location: failure_message.html"); 
    	exit;
        }     

$conn->close();
?>