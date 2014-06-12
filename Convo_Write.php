<?php
        
    $continued = mysql_connect("lennertsmets.com.mysql", "lennertsmets_co", "CLG6J5d5");
    mysql_select_db("lennertsmets_co");
    
    $text = $_POST['text'];
        
    $query = "INSERT INTO `lennertsmets_co`.`MobileApp_Convo_1` (`id`, `text`, `xcor`, `ycor`) VALUES (NULL, ".$text.", NULL, NULL)";
    $result = mysql_query($query);
  

?>