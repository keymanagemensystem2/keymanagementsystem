<?php
TakeKey();
function TakeKey() {
    include'connection.php';
    $query0 = mysql_query("SELECT * FROM systemControl ");
    while($result = mysql_fetch_array($query0)) {
        echo"$result[currentUserAK]";
        if ($result['currentUserAK'] == 101) {
            echo "<script>";
            echo "windows.location ='test3.php?UID='+ $_REQUEST[UID]";
            echo "</script>";
        } else {
            $query = mysql_query("INSERT INTO systemControl(currentUserAK,Timex) VALUES ($_REQUEST[UID],CURRENT_TIMESTAMP )");
            echo "<script>";
            echo "window.location = 'User.php?UID='+ $_REQUEST[UID]";
            echo "</script>";
        }
    }
}
?>


  
