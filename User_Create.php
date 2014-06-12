<html>
    <head>
        
    </head>
    <body>
        <?php
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            
            $continued = mysql_connect("lennertsmets.com.mysql", "lennertsmets_co", "CLG6J5d5");
            mysql_select_db("lennertsmets_co");
            $query = "INSERT INTO `lennertsmets_co`.`MobileApp_Users` (`id`, `Username`, `Password`) VALUES (NULL, '$Username', '$Password');";
            $rs = mysql_query($query);
                
            if(mysql_errno()){
                echo "MySQL error ".mysql_errno().": "
                .mysql_error()."\n<br>When executing <br>\n$query\n<br>";
            }else{
                echo "U bent succesvol geregistreed";
            }
        ?>
</body>
</html>