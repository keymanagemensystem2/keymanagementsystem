<html>

    <link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
    <link href="Styles.css" type="text/css" rel="stylesheet">

<body>

<?php
include 'connection.php';
    $query = "SELECT * FROM user ";
    $result = mysql_query($query);
echo "<table style='position:absolute;  left:8%;'><tr><th> UserId </th><th> UserName </th><th> Pin </th><th> Configure </th><th> Delete </th></tr>";
while($list =  mysql_fetch_array($result)){
    echo "<tr onmouseover=this.cursor='pointer'><td>" .$list['UserId']."</td><td>".$list['UserName']."</td><td>"
        .$list['Pin']."</td>
        <td>". "<a href='UserConfiguration.php?UID=$list[UserId]' name='submit'> Configure </a></td><td>". "<a href='deleteUser.php?UID=$list[UserId]' name='submit'> Delete </a></td></tr>";
}
echo "</table>";
echo "<div class='NUButton' style='position:absolute;  left:76.5%;top:28.5%;'><br><button id='submit'  size='10px' onclick=window.location='addNewUser.php' type='button' class='form-control btn-primary'>Add New User</button></br></div>";
?>
</body>
</html>