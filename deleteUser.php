<?php
include 'connection.php';
session_start();
$UID = $_REQUEST['UID'];
$sql = "DELETE FROM user WHERE  UserId='$UID'";
$result = mysql_query($sql);
echo "<script>";
echo"window.location = 'Admin.php';";
echo "</script>" ;
?>