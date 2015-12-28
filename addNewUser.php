<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<head>
    <title> Add New User </title>
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
        function AddUserCheck(){
            uid=document.getElementById("uid").value;
            uno= document.getElementById("uname").value;
            pin=document.getElementById("pin").value;
            if (uid !="" && uno !="" && pin !="" ) {
                document.getElementById("addUser").action = "add.php";
            }else{
                alert("Enter Blanks and Proceed!!!")
            }

        }
        function Cancel(){
            window.location = 'Admin.php';
        }
    </script>
</head>
<body>
<h1 style="padding:1% 20%;">Key Management System</h1>
        <fieldset style="width:12%; position:absolute; left:80%;">
            <legend style="width:100%" ><h2  style="font-size: 24px;">User Details</h2></legend>
            <form  id="addUser"method="post" onsubmit="AddUserCheck()" >
                <div class="form-group">
                    <label for="UID"><h4>User ID:</h4></label>
                    <input type="number" name="UID" class="form-control" id="uid" >
                </div>
                <div class="form-group">
                    <label for="UNAME" ><h4>User Name:</h4></label>
                    <input type="text" name="UNAME" class="form-control" id="uname">
                </div>
                <div class="form-group">
                    <label for="PIN"><h4>Pin:</h4></label>
                    <input type="number" name="PIN" class="form-control" id="pin" >
                </div>
                <br><button  type="submit" name="submitu" class="btn-primary form-control" > Add User</button>
            </form>
            <br><button  type="cancel" name="cancel" class="btn-danger form-control" onclick="Cancel()" > Cancel</button>
        </fieldset>
        </fieldset>
<div>
    <script>
        <%
        $(document).ready(function(){
            $("p").click(function(){
                $(this).hide();
            });
        });
        %>
    </script>


</div>
<div class="footer" style="float:bottom;">
    <h4>A project of Computer Science and Engineering department,
        University of Moratuwa.</h4>
</div>
</body>
</html>