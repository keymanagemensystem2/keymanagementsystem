<?php
include 'connection.php';
session_start();
$KID = $_REQUEST['KID'];
$sql = "DELETE FROM key WHERE  KeyId='$KID'";
$result = mysql_query($sql);
echo "<script>";
    echo"window.location = 'Admin.php';";
    echo "</script>" ;
?>