<?php
include 'connection.php';
session_start();
$SNO = $_REQUEST['EID'];
$sql = "DELETE FROM errorhistory WHERE  SerialNo='$SNO'";
$result = mysql_query($sql);
echo "<script>";
echo"window.location = 'Admin.php';";
echo "</script>" ;
?>