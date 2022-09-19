<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.php");
?>

<h1> Welcome to page 1 </h1>
<a href="page1.php"><h2><font color="">PAGE 1</font></h2>
<a href="page2.php"><h2><font color="">PAGE 2</font></h2>
<a href="page3.php"><h2><font color="">PAGE 3</font></h2>



<a href="logout.php"><h2><font color="red">Logout</font></h2></a>