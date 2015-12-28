<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<body>
<?php
include 'connection.php';
$query = "SELECT * FROM errorhistory ";
$result = mysql_query($query);
$keys=0;
echo "<table style='position:absolute;  left:8%;'><tr><th> SerialNo</th><th> ErrorId </th><th> Time </th><th> Description </th><th> Checked </th><th> Configure </th><th> Delete </th></tr>";
while($list =  mysql_fetch_array($result)){
    echo "<tr onmouseover=this.style.cursor='pointer'><td>" .$list['SerialNo']."</td><td>".$list['ErrorId']."</td><td>" .$list['Time']."</td><td>" .$list['Description']."</td><td>".$list['AdminChecked']."</td><td>"."<a href='ErrorConfiguration.php?EID=$list[SerialNo]' type='submit'> Configure </a></td><td>". "<a href='deleteError.php?EID=$list[SerialNo]' type='delete'> Delete </a>"."</td></tr>";
    $keys++;
}
echo "</table>";
?>
</body>
</html>