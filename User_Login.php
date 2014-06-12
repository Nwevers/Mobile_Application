<?php
	//connect + select db
	$continued = mysql_connect("lennertsmets.com.mysql", "lennertsmets_co", "CLG6J5d5") or die("Cannot connect to the database");
	mysql_select_db("lennertsmets_co") or die("Cannot find the database");

	$user = $_POST['username']; 
    $pw = $_POST['password']; 
    
    $user = stripslashes($user);
	$pw = stripslashes($pw);
	
	$user = mysql_real_escape_string($user);
	$pw = mysql_real_escape_string($pw);
	$query="SELECT * FROM MobileApp_Users WHERE Username='$user' and Password='$pw'";
	$result=mysql_query($query);
	
	$row=mysql_num_rows($result);
    
    if($query){
        echo(true);
    }else {
        echo(false);
    }
?>
