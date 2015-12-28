<html>
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<head>
    <title> Add New Key </title>
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
        function AddKeyCheck(){
            kid=document.getElementById("KID").value;
            rno= document.getElementById("RNO").value;
            sta=document.getElementById("STA").value;
            if (kid !="" && rno !="" && sta !="") {
                document.getElementById("addKey").action = "add.php";
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
            <legend style="width:80%;"><h2>Key Details</h2></legend>
            <form id="addKey" method="post" onsubmit="AddKeyCheck()">
                <div class="form-group">
                    <label for="KID"><h4>Key ID:</h4></label>
                    <input type="number" name="KID" class="form-control" id="KID">
                </div>
                <div class="form-group">
                    <label for="RNO" ><h4>Room No:</h4></label>
                    <input type="number" name="RNO" class="form-control" id="RNO">
                </div>
                <div class="form-group">
                    <label for="STA"><h4>Status:</h4></label>
                    <input type="text" name="STA" class="form-control" id="STA">
                </div>

                <br><button  type="submit" name="submitk" class="btn-primary form-control" > Add Key</button>
            </form>
            <br><button  type="cancel" name="cancel" class="btn-danger form-control" onclick="Cancel()" > Cancel</button>
            </fieldset>

<div class="footer" style="float:bottom;">
    <h4>A project of Computer Science and Engineering department,
        University of Moratuwa.</h4>
</div>
</body>
</html)