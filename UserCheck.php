<?php
include 'connection.php';
if($_POST['Pin']==null ||$_POST['UserId']== null){
    echo "<script>";
    echo"window.location = 'index.php'";
    echo "</script>";
}
function SignIn() { session_start();  //starting the session for user profile page
    if(!empty($_POST['UserId'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
    { $query = mysql_query("SELECT * FROM user where UserId = '$_POST[UserId]' AND Pin = '$_POST[Pin]'"); $row = mysql_fetch_array($query);
        if(!empty($row['UserId']) AND !empty($row['Pin'])) {
			$_SESSION["UserId"] = $_POST["UserId"];
			$_SESSION["UserName"] = $row['UserName'];
            echo "<script>";
            echo"window.location = 'User.php?UID='+ $row[UserId];";
            echo"</script>";
        } else {
            echo "<script>";
            echo"window.location = 'index.php';";
            echo "alert('SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...')";
            echo "</script>";
        } } }
if(isset($_POST['submit'])) { SignIn(); }
?>