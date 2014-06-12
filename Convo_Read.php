<?php
        
    $continued = mysql_connect("lennertsmets.com.mysql", "lennertsmets_co", "CLG6J5d5");
    mysql_select_db("lennertsmets_co");


$query = "SELECT * FROM `MobileApp_Convo_1` ORDER BY id ASC";
$result = mysql_query($query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
	$rows[] = $r;
}
print json_encode($rows);
                

    ?>