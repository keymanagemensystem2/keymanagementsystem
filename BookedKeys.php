<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<body>
<?php
session_start();
$UIDb=$_REQUEST['UID'];
include 'connection.php';
$query = "SELECT * FROM bookdetails ";
$result = mysql_query($query);
if(mysql_num_rows($result)>= 0 ) {
    echo "<table  style='position:absolute;  left:8%;'><tr><th> KeyId </th><th> UserId </th><th> Booked Time</th></tr>";
    while ($hist = mysql_fetch_array($result)) {
        if ($hist['UserId'] == $UIDb) {
            echo "<tr bgcolor='blue' onmouseover=this.style.cursor='pointer' ><td>" . $hist['KeyId'] . "</td><td>" . $hist['UserId'] . "</td><td>" . $hist['Time'] . "</td><td><a href='unBookKey.php?UID=$UIDb&KID=$hist[KeyId]'>UnBook</a></td></tr>";

        } else {
            echo "<tr onmouseover=this.style.cursor='pointer' ><td>" . $hist['KeyId'] . "</td><td>" . $hist['UserId'] . "</td><td>" . $hist['Time'] . "</td></tr>";

        }
    }
    echo "</table>";
}else{
    echo"<h3 style='position:absolute; left:20%;'>NO KEYS BOOKED</h3>";
}
?>

</body>
</html>