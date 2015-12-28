<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<body>
<?php
include 'connection.php';
session_start();
$query = "SELECT * FROM keyhistory ";
$result = mysql_query($query);
if(mysql_num_rows($result)>=0) {
    echo "<table style='position:absolute;  left:8%;'><tr><th> KeyId </th><th> UserId </th><th> Room No </th><th> Access Time</th></tr>";
    while($hist =  mysql_fetch_array($result)){
        echo "<tr onmouseover=this.style.cursor='pointer' ><td>" .$hist['KeyId']."</td><td>".$hist['UserId']."</td><td>" .$hist['Room No']. "</td><td>" .$hist['AccessTime']. "</td></tr>";
    }
    echo "</table>";
}else{
echo"<h3 style='position:absolute; left:20%;'>ALL THE KEYS ARE IN KEY HOLDER</h4>";
}
?>
</body>
</html>