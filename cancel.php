<html>
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Travel Agency Pune</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styleh.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>Travel Agency Pune</h1>
		</div>
		<div id="slogan">
			<h2>Have a nice journey!!</h2>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first current_page_item"><a href="home.html">Homepage</a></li>
			<li><a href="gallary.html">Gallery</a></li>
			<li><a href="regist.php">Registration</a></li>
			<li><a href="cancel.php">Cancellation</a></li>
			<li><a href="update.php">Updation</a></li>
			<li class="last"><a href="contact.html">Contact Us</a></li>
		</ul>
		
	</div>

	<br><br><br>

	<div>
	<center><font size="6">Cancellation Of Reservation</font><br><br><br>
	<form onsubmit='return validate()' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
	<b>Email :- </b><input type="text" name="email" placeholder="Email"><br><br>
	<b>Password :- </b><input type="password" name="pass" placeholder="Password"><br><br>
	<input id="cancel" name="cancel" type="submit" value="Cancel Now"><br><br>
	</form>
	</table>

	<?php

	if(isset($_GET['cancel'])) 
	{ 	
 
	$dbserver="localhost"; 
	$username="root"; 
	$password=""; 
	$dtatabasename="mydb"; 
	$connection=mysqli_connect("$dbserver","$username","$password","$dtatabasename")or die("could not connect to the server"); 
	echo "connected to server"; echo "<br>"; 

	$email = $_GET['email'];
	$pass = $_GET['pass']; 


	// delete condition
	$str="DELETE FROM user WHERE pass='$pass'"; 
	$sql=mysqli_query($connection,$str); 
 
	echo "Your Registration is Cancelled Successfully"; 
	} 
	// delete condition
	
	if(isset($_GET['cancel'])) 
	{ 
	$dbserver="localhost"; 
	$username="root"; 
	$pass="";
	$dtatabasename="mydb"; 
	$connection=mysqli_connect("$dbserver","$username","$password","$dtatabasename")or die("could not connect to the server"); 

	$data = mysqli_query($connection,"SELECT fname,email,pass,gender,mobile FROM user"); 

	if(!$data) 
	{ 
	die("Invalid Query: " . mysqli_error()); 
	} 

	Print"<table border=\"1\" cellpadding=\"10\"  width=\"600\">"; 
	Print"<tr><th width=\"150\">Name</th><th>Email</th><th>Mobile</th></tr>";
	while($info = mysqli_fetch_array($data)) 
	{ 
	Print"<tr>"; 
	Print"<td>" . $info['fname']."</td> "; 
	Print"<td>". $info['email'] ."</td> "; 
	Print"<td>". $info['mobile'] ."</td> "; 
	Print"</tr>";
	} 
	Print "</table>"; 
	}  

	?>  

	</center><br><br><br><br>
	</div>

</div>



</body>
</html>