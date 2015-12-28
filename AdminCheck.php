<?php
include 'connection.php';
function AdminLogin() {

    session_start();
    if(!empty($_POST['Pin'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
    { $query = mysql_query("SELECT * FROM admin where Pin = '$_POST[Pin]'") or die(mysql_error());
        $row = mysql_fetch_array($query);// or die(mysql_error());

        if(!empty($row['Pin'])) {
            echo "<script>";
            echo"window.location = 'Admin.php';";
            echo"</script>";

        } else{
            echo "<script>";
            echo"window.location = 'Admin_login.php';";
            echo "</script>";
        }
    }
}
if(isset($_POST['Submit'])) { AdminLogin() ; }
?>
