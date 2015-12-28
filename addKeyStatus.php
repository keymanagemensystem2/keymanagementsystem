<?php
// Connect to MySQL
include ('connection.php');
// Prepare the SQL statement
    $query = mysql_query("SELECT * FROM keystatus");
    if (mysql_num_rows($query) < 4) {
        mysql_query("TRUNCATE TABLE keystatus");
        for($i=0;$i<4;$i++) {
            mysql_query("INSERT INTO keystatus (KeyId,Availability,Time) VALUES ($i+1,0,CURRENT_TIMESTAMP )") or die(mysql_error());
        }
    }
    $k=$_GET["Availability"];
    for($i=0; $i<4; $i++){
        $j=substr($k,$i,1);
        $SQL = "UPDATE keystatus SET Availability=$j WHERE KeyId=$i+1";
        // Execute SQL statement
        mysql_query($SQL);
    }

// Go to the review_data.php (optional)
header("Location: review_data.php");
?>