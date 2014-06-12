<html>
    <head>
        
    </head>
    <body>
        <?php
        
            $continued = mysql_connect("lennertsmets.com.mysql", "lennertsmets_co", "CLG6J5d5");
            mysql_select_db("lennertsmets_co");
        
            $tablename =  MobileApp_test; // Deze moet worden doorgegeven vanuit de createconvo en worden bijgehouden als ID voor de table 
        
            $query = "SELECT * FROM MobileApp_test ORDER BY id DESC LIMIT 1";
            $rs = mysql_query($query);
            while($row=mysql_fetch_array($rs)){
                echo($row['xcor']);
                echo ' ';
                echo($row['ycor']);
            }
            
        ?>
    </body>
</html>