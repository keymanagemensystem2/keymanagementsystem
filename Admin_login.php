<!DOCTYPE html>
<html lang="en">
<link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
<link href="Styles.css" type="text/css" rel="stylesheet">
<head>
		<title> Key Management System </title>
		<meta charset="utf-8">
	<script>
		function AdminChecker(){
			val= document.getElementById("pwd").value;
			if (val!="") {
				document.getElementById("login").action = "AdminCheck.php";
			}else{
				alert("Enter Pin and Proceed!!!")
			}

		}
	</script>

</head>
	<body>
		<h1 style="padding:1% 20%;">Key Management System</h1>
		<fieldset style="width:12%; position:absolute; left:70%;">
			<legend style="width:100%" ><h2  style="font-size: 24px;">Admin Login</h2></legend>
			<form id="login" method="POST" onsubmit=AdminChecker()>
				<div class="form-group">
					<h4>Pin :</h4>
					<input  id="pwd" type="password" name="Pin" class="form-control">
				</div>
				<button  type="submit" name="Submit" class="btn-primary form-control" >Login</button>
			</form>
		</fieldset>
		<div class="adminButton" style="position:absolute;  top:60%;">
			<button style="margin:10px 10px 10px 10px;" class="form-control btn-success"onclick="window.location.assign('index.php');">Home</button>
		</div>
		<div class="footer">
			<h4>A project of Computer Science and Engineering department,
			University of Moratuwa.</h4>
		</div>
	</body>
</html>