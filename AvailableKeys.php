<?php
ini_set('display_errors', 'On');
session_start();
?>
<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">

<body>

<?php
    $UIDx=$_GET['UID'];
    include 'connection.php';
    $query = "SELECT * FROM keyx ";
    $result=mysql_query($query);
if(mysql_num_rows($result) > 0) {
    echo "<table  style='position:absolute;  left:8%;'><tr><th> KeyId </th><th> Room No </th><th> Book </th></tr>";
    while($avail =  mysql_fetch_array($result)){
        $query1=mysql_query("SELECT * FROM bookdetails WHERE KeyId=$avail[KeyId]");
        $query2=mysql_query("SELECT * FROM keyhistory WHERE KeyId=$avail[KeyId]");
        if(mysql_num_rows($query1)==0 && mysql_num_rows($query2)==0) {
            echo "<tr onmouseover=this.style.cursor='pointer'><td>" . $avail['KeyId'] . "</td><td>" . $avail['RoomNo'] . "</td><td><a href='BookRoomKey.php?KID=$avail[KeyId]&UID=$UIDx'> Book</a></td></tr>";
        }
        }
    echo "</table>";
}else{
    echo"<h3 style='position:absolute; left:20%;'>NO KEYS CURRENTLY AVAILALE</h3>";
}
?>

</body>
</html>