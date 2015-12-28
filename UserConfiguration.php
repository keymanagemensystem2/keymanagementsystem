<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<head>
    <title> User Configure </title>
    <meta charset="utf-8">
    <style>
        body
        {
            background-image: url('key-in-door.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100% 100%;
        }
        h1
        {
            font-size:50px;
            color: #fffffd;
            margin:2% 5% 2% 5%;
            text-shadow: 2px 2px black;
            background-color:black;
            text-align: center;
            opacity:0.85;
        }
        h2
        {
            color:#B5B5B3;
            font-size:25px;
            text-shadow: 1px 1px black;
        }
        h3
        {
            color:#B5B5B3;
            font-size:20px;
            margin:1% 1% 1% 1%;
            text-shadow: 1px 1px black;
            text-align:center;
        }
        h4
        {
            color: white;
            font-size:15px;
            margin:0% 0% 0% 0%;
        }
        legend
        {
            margin:0% 0% 0% 10%;
        }
        div.footer
        {
            opacity:0.5;
            background-color:black;
            position:absolute;
            bottom:0%;
            right:2%;
            margin: 0px 0px 0px 0px;
        }
        div.adminButton{
            position:absolute;
            bottom: 26%;
            right:14%;
        }
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">


        $(document).ready(function(){$("#div").fadeIn(3000);});
    </script>
    <script>
        function UpdateUserCheck(){
            uid=document.getElementById("uid").value;
            uno= document.getElementById("uname").value;
            pin=document.getElementById("pin").value;
            if (uid !="" && uno !="" && pin !="") {
                document.getElementById("updateUser").action = "add.php";
            }else{
                alert("Enter Blanks and Proceed!!!")
            }

        }
    </script>
</head>
<body>
<h1 style="padding:1% 20%;">Key Management System</h1>
<?php
include 'connection.php';
$UID=$_REQUEST['UID'];
$query = "SELECT * FROM user WHERE UserId=$UID";
$result = mysql_query($query);
$Usercount=0;
while($User  =  mysql_fetch_array($result)) {
    if ($Usercount < 1) {
        $Usercount++;
        echo "<fieldset style='width:12%; position:absolute; left:80%;>";
        echo " <legend style='width:80%;'><h2>User Details</h2></legend>";
        echo "<form method='POST' action='add.php' >";
        echo "<div>";
        echo " <h4><br>User ID<input name='UID' type='number' class='form-control' value='$User[UserId]'></h4>";
        echo " <h4><br>User Name<input name='UNAME' type='text' class='form-control' value='$User[UserName]'></h4>";
        echo " <h4><br>Pin <input name='PIN' type='number' class='form-control' value='$User[Pin]'></h4>";
        echo " <h4><br><button name='submitUC'  type='submit' class='form-control btn-success'> Update</button><br>
                <button name='cancel'  type='cancel'  class='form-control btn-danger'> Cancel</button></h4>";
        echo "</div>";
        echo "</form>";
        echo "</fieldset>";
}
}
?>





<div class="footer" style="float:bottom;">
    <h4>A project of Computer Science and Engineering department,
        University of Moratuwa.</h4>
</div>
</body>
</html>


