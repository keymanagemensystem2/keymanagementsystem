<?php
include 'connection.php';
function AddUser(){
    session_start();
    $UID=$_POST['UID'];
    $UNAME=$_POST['UNAME'];
    $PIN=$_POST['PIN'];

    if(!empty($_POST['UID'])) {//checking the 'user' name which is from Sign-In.html, is it empty or have some text
    $query = mysql_query("INSERT INTO user(UserId, UserName, Pin) values ('$UID', '$UNAME', '$PIN')") or die(mysql_error()); //Insert Query
        if($query) {
            Back();
        } else{
            echo "<script>";
            echo"window.location = 'addNewUser.php';";
            echo "</script>";
        }
    }
}
function AddKey(){
    session_start();
    $KID=$_POST['KID'];
    $RNO=$_POST['RNO'];
    $STA=$_POST['STA'];
    if (!empty($_POST['KID'])) {
        $query = mysql_query("INSERT INTO key(KeyId, RoomNo, Status) VALUES ('$KID', '$RNO', '$STA')")or die(mysql_error()); //Insert Query
        if ($query) {
            Back();
        }else{
            echo "<script>";
            echo"window.location = 'addNewKey.php';";
            echo "</script>";
        }
    }
}
function UpdateUser(){
    session_start();
    $UID=$_POST['UID'];
    $UNAME=$_POST['UNAME'];
    $PIN=$_POST['PIN'];

    if(!empty($_POST['UID'])) {
        $query = mysql_query("UPDATE user SET UserName='$UNAME', Pin='$PIN'WHERE UserId='$UID'") or die(mysql_error()); //Insert Query
        if ($query) {
            Back();
        }else{
            echo "<script>";
            echo"window.location = 'UserConfiguration.php';";
            echo "</script>";
        }
    }
}
function UpdateKey(){
    session_start();
    $KID=$_POST['KID'];
    $RNO=$_POST['RNO'];
    $STA=$_POST['STA'];
    if (!empty($_POST['KID'])) {
        if ($STA=='Available'){
            $query0 = mysql_query("DELETE FROM bookdetails WHERE KeyId='$KID'")  or die(mysql_error()); //Insert Query
        }
        $query = mysql_query("UPDATE key SET RoomNo='$RNO', Status='$STA'WHERE KeyId='$KID'"); //Insert Query
        if ($query) {
            Back();
        }else{
            echo "<script>";
            echo"window.location = 'KeyConfiguration.php';";
            echo "</script>";
        }
    }
}
function UpdateError(){
    session_start();
    $SNO=$_POST['SNO'];
    $ACH=1;
    if (!empty($_POST['SNO'])) {
        $query = mysql_query("UPDATE errorhistory SET  AdminChecked='$ACH' WHERE SerialNo='$SNO'"); //Insert Query
        if ($query) {
            Back();
        }else{
            echo "<script>";
            echo"window.location = 'ErrorConfiguration.php';";
            echo "</script>";
        }
    }
}

function Back(){
    echo "<script>";
    echo "window.location = 'Admin.php';";
    echo "</script>";
}
if(isset($_POST['submitEC'])) { UpdateError() ; }
if(isset($_POST['submitKC'])) { UpdateKey() ; }
if(isset($_POST['submitUC'])) { UpdateUser() ; }
if(isset($_POST['submitk'])) { AddKey() ; }
if(isset($_POST['submitu'])) { AddUser() ; }
if(isset($_POST['cancel'])) { Back();}

?>

