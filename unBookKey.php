<html>
<body>
<?php
session_start();
$UIDy= $_REQUEST['UID'];
$KID = $_REQUEST['KID'];
if($KID==null){
    echo "<script>";
    echo"window.location = 'User.php?UID='+$UIDy";
    echo "</script>";
}
include 'connection.php';
$sql = mysql_query("DELETE FROM bookdetails WHERE KeyId='$KID'");
$sql = mysql_query("UPDATE keystatus SET Booked='0' WHERE KeyId='$KID'");

$_SESSION["UserId"] = $_REQUEST["UID"];
echo "<script>";
echo"window.location.assign('User.php?UID=$UIDy')";
echo "</script>" ;

?>
</body>
</html>