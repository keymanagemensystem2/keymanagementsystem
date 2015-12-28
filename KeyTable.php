<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<body>
<?php
include 'connection.php';
$query = "SELECT * FROM keyx ";
$result = mysql_query($query);
$keys=0;
echo "<table style='position:absolute;  left:8%;'><tr><th> KeyId </th><th> Room No </th><th> Configure </th><th> Delete </th></tr>";
while($list =  mysql_fetch_array($result)){
    echo "<tr onmouseover=this.style.cursor='pointer'><td>" .$list['KeyId']."</td><td>".$list['RoomNo']."</td><td>". "<a href='KeyConfiguration.php?KID=$list[KeyId]' type='submit'> Configure </a></td><td>". "<a href='deleteKey.php?KID=$list[KeyId]' type='delete'> Delete </a>"."</td></tr>";
    $keys++;
}
echo "</table>";
if ($keys<5) {
    echo "<div class='NUButton' style='position:absolute; left:76.5%;top:28.5%;'><br><button id='submit' class='btn-primary form-control' onclick=window.location='addNewKey.php'>Add New Key</button></br></div>";
}else{
}
?>
</body>
</html>