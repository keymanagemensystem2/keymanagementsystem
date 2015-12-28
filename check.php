<?php
include 'connection.php';
session_start();
$query0=mysql_query("SELECT * FROM currentuser");
$query = mysql_fetch_array($query0);
$user=mysql_fetch_array(mysql_query("SELECT * FROM user WHERE UserId = '$query[UserId]'"));
//echo"$user[UserId] is taking keys";
$_SESSION["s"]=mysql_num_rows($query0);
echo"$_SESSION[s]";
//$query = mysql_query("INSERT INTO currentuser (UserId,Time) VALUES ($s,CURRENT_TIMESTAMP )") or die(mysql_error());

?>