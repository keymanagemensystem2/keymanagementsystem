<html>
<body>
<?php
session_start();
ini_set('display_errors', 'On');
$UIDy= $_REQUEST['UID'];
$KID = $_REQUEST['KID'];
if($KID==null){
    echo "<script>";
    echo"window.location = 'User.php?UID='+$UIDy";
    echo "</script>";
}
include 'connection.php';
$sql = mysql_query("UPDATE keystatus SET Booked='1' WHERE KeyId='$KID'");
$sql = mysql_query("INSERT INTO bookdetails(UserId, KeyId,Time) VALUES($UIDy,$KID,CURRENT_TIMESTAMP )");
echo "<script>";
echo"window.location.assign('User.php?UID=$UIDy')";
echo "</script>" ;

?>
</body>
</html>