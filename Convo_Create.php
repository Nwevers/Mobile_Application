<?php
    $continued = mysql_connect("lennertsmets.com.mysql", "lennertsmets_co", "CLG6J5d5");
    mysql_select_db("lennertsmets_co");
    
    $Userid = *_POST['id'];
/*
    $seed = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'); // and any other characters
    shuffle($seed); // probably optional since array_is randomized; this may be redundant
    $rand = '';
    foreach (array_rand($seed, 50) as $k) $rand .= $seed[$k];
        
    // Create table
    mysql_query("CREATE TABLE MobileApp_Z_$rand(id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(id), xcor DECIMAL(10,8), ycor DECIMAL(10,8), persA VARCHAR(100) , persB VARCHAR(100))")
    or die(mysql_error());  
    
    echo "Table Created!"; 

*/
    echo $Userid;

?>