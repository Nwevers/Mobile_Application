<?php
        
        $xcor = $_POST['latitude'];
        $ycor = $_POST['longitude'];
        
        $continued = mysql_connect("lennertsmets.com.mysql", "lennertsmets_co", "CLG6J5d5");
         mysql_select_db("lennertsmets_co");
        
        $query = "INSERT INTO `lennertsmets_co`.`MobileApp_test` (`id`, `xcor`, `ycor`) VALUES (NULL, '$xcor', '$ycor')";
        $rs = mysql_query($query);
        echo 1;
?>