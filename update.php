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

	<br><br>

	<div>
	<center><font size="6">Updation In Reservation</font></center>
	
	<center>
	<form name="myform" onsubmit='return validate()' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">	
	<p id="demo" style="margin-left:40%;"></p>
	
	<font size="4">Enter The Email_ID :- <input type="text" name ="email" placeholder="Email_ID"></font><br><br>

	<font size="4">Select the field you want to update :- </font>
	<input type="radio" name="fe" value="fname">Name
			    <input type="radio" name="pa" value="pass">Password
				<input type="radio" name="gen" value="gender">Gender
					<input type="radio" name="mob" value="mobile">Mobile<br><br>

	<font size="4">Enter Data :- <input type="text" name ="up_data" placeholder="Enter Data"></font><br><br>
	
	<input id="update" name="update" type="submit" value="Update Now"><br><br>
	
	<h3><font size="3">If you are a new user, <a href="regist.php">Click Here</a></font></h3><br><br>
	</center>
	
	<center>
	<?php

	if(isset($_GET['update'])) 
	{ 
 
	$dbserver="localhost"; 
	$username="root"; 
	$password=""; 
	$dtatabasename="mydb"; 
	$connection=mysqli_connect("$dbserver","$username","$password","$dtatabasename")or die("could not connect to the server"); 
	echo "connected to server"; echo "<br>"; 

	$email = $_GET['email'];
	$f = $_GET['fe'];
	$p= $_GET['pa'];
	$g= $_GET['gen'];	
	$m= $_GET['mob'];
	$up_data = $_GET['up_data'];

	if($f = $_GET['fe'])
	{
	$str="UPDATE user SET fname='$up_data' WHERE email='$email'"; 
	$sql=mysqli_query($connection,$str); 
 	}
	
	if($p = $_GET['pa'])
	{
	$str="UPDATE user SET pass='$up_data' WHERE email='$email'"; 
	$sql=mysqli_query($connection,$str); 
 	}	
	
 	if($g = $_GET['gen'])
	{
	$str="UPDATE user SET gender='$up_data' WHERE email='$email'"; 
	$sql=mysqli_query($connection,$str); 
 	}	

	if($m = $_GET['mob'])
	{
	$str="UPDATE user SET mobile='$up_data' WHERE email='$email'"; 
	$sql=mysqli_query($connection,$str); 
 	}

	echo "Your Updation is Submitted Successfully"; echo "<br><br>";
	 
	}
	if(isset($_GET['update'])) 
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
	Print"<tr><th width=\"150\">Name</th><th>Gender</th><th>Email</th><th>Mobile</th></tr>";
	while($info = mysqli_fetch_array($data)) 
	{ 
	Print"<tr>"; 
	Print"<td>" . $info['fname']."</td> "; 
	Print"<td>". $info['gender'] ."</td> "; 
	Print"<td>". $info['email'] ."</td> ";
	Print"<td>". $info['mobile'] ."</td> "; 
	Print"</tr>";
	} 
	Print "</table></center>"; 
	}  
	
	?>	
	<br><br><br>
	</div>

</div>



</body>
</html>