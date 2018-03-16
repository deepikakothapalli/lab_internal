<!DOCTYPE html>
<html>
	<head>
		<title>Property sale</title>
		<link rel="stylesheet" href="index.css">
	</head>
	<body onload=activateItem('reg','register.php')>
		<script>
			var x="";
			function activateItem(id,page)
			{
				if(x=="reg")
					document.getElementById("reg").className="inactive";
				else if(x=="log")
					document.getElementById("log").className="inactive";
				document.getElementById(id).className="active";
				x=id;
				document.getElementById("target").innerHTML="<object type='text/php' data="+page+ " style='width:100%;height:500px; margin:0;'></object>";
				console.log("Entered");
				console.log(x);
			}
		</script>
		<header>
			<h1>PROPERTY SALE</h1>
		</header>
		<div id="menu">
			<ul>
				<a href="#" id="reg" onclick="activateItem('reg','register.php')"><li>Register</li></a>
				<a href="#" id="log" onclick="activateItem('log','login.php')"><li>Login</li></a>
			</ul>
		</div>
		<div id="target"></div>
	</body>
</html>
