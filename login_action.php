<?php      
session_start ();
    include('db.php');  
    $username = $_POST['username'];  
    $password = $_POST['pass'];  
    
          $sql = "select * from users where username = '$username' and password = '$password'";  
		//$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";  
			$_SESSION["login"]="1";
			header("Location: welcome.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  

