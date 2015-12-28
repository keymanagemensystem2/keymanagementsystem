<!DOCTYPE html>
<html lang="en">
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<head>
    <title> Admin profile </title>
    <meta charset="utf-8">
</head>
    <style>
        tr {
            left: 10%;
            background-color: white;
            opacity: 0.8;
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
        td{
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
        tr:hover{
            background-color: black;
            color: white;
        }
        th{
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
        thead{
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
    </style>

<body onload="DisplayKeys()">
<h1 style="padding:1% 20%; color:white;">Key Management System</h1>
<div class="HomeButton" style="position:absolute; top:30%; left:85%;">
    <button style="margin:10px 10px 10px 10px;" class="form-control btn-success"onclick="window.location.assign('index.php');"> Home </button>
</div>
<div style="margin-left:10%;">

    <form ><h2>Select the Table to Display: </h2>
        <div>
            <h3 >
        <input type="radio" name="UserKey" value="Keys"  style="display: inline; margin:0 5px 0 2px;" checked onclick="DisplayKeys()">Keys
        <input value="Users" type="radio" name="UserKey" style="margin:0 5px 0 10px; display:inline;" onclick="DisplayUser()" >Users
                <input value="Errors" type="radio" name="UserKey" style="margin:0 5px 0 10px; display:inline;" onclick="DisplayErrorLog()" > ErrorLog
            </h3></div>
    </form>
</div>

<div id="UKD">
    <Script>
        function DisplayErrorLog(){

            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }
            else{
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("UKD").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","errorlogTable.php",true);
            xmlhttp.send();

        }
        function DisplayUser(){

            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }
            else{
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("UKD").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","UserTable.php",true);
            xmlhttp.send();

        }
        function DisplayKeys(){
            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }
            else{
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("UKD").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","KeyTable.php",true);
            xmlhttp.send();

        }
    </script>

</div>

<div class="footer" style="margin:0 0 0 0;">
    <h4 style="margin:0 0 0 0; font-size: 16px;">A project of Computer Science and Engineering department,
        University of Moratuwa.</h4>
</div>
</body>
</html>