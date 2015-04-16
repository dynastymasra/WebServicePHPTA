<?php
    //Create Database connection
    $db = mysql_connect("localhost","root","");
    if (!$db) {
        die('Could not connect to db: ' . mysql_error());
    }
 
    //Select the Database
    mysql_select_db("SC_YT",$db);
    
    //Replace * in the query with the column names.
    $result = mysql_query("select * from ws_location", $db);  
    
    //Create an array
    $json_response = array();
    
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $row_array['id_location'] = $row['id_location'];
        $row_array['title'] = $row['title'];
        $row_array['address'] = $row['address'];
        $row_array['longtitude'] = $row['longtitude'];
        $row_array['latitude'] = $row['latitude'];
        $row_array['category'] = $row['category'];
        $row_array['description'] = $row['description'];
        $row_array['photo'] = $row['photo'];
        
        //push the values in the array
        array_push($json_response,$row_array);
    }
    header('Content-Type: application/json');
    echo json_encode(array('data' => $json_response));
    
    //Close the database connection
    // fclose($db);
 
?>
