<?php
session_start();
//Connect to database
$severname ="localhost";
$username ="root";
$password ="";
$databasename ="colledge_of_forestry";
$conn = new mysqli($severname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
	// code...
	die("Connection failed: ". $conn->connect_error);
}

//If the user has submitted the login form
if (isset($_POST['login'])){
	$username = $_POST['useername'];
	$password = $_POST['password'];

	// Query the database for the user with the matching username and password
	$sql = "SELECT * FROM students WHERE username='$useername' AND password='$password'";
	$result = $conn->query($sql);

	// If the query return a row, the user is authenticated
	if ($result->num_row == 1){
		// Store the user's information in thee session
		$row = $result->fetch_assoc();
		$_SESSION['user_id'] = $row['id'];
	  $_SESSION['useername'] = $row['useername'];
	  $_SESSION['email'] = $row['email'];

	//Redirect to the dashboard
	header("LOCATION: dashboard.php");
	exit;
	}
	 else
	{
		// If the qurey does not return a row, the login failed
		echo "Invalid username or password"; 
	} 


 }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
	<style type="text/css">
		:root {
	font-size: 80%;
}

body {
	background-color: ;
	margin: 0 auto;
	font-family: 'Roboto', sans-serif;

}

/* Regular styles begins*/
.container {
	display: flex;
	align-items: center;
	justify-content: center; 
	flex-direction: column;
	width:100vw;
	height:100vh;
	background-image:url('image3.jpg');
	background-repeat:no-repeat;
	background-position:center;
	background-size:100%;

}

.wrapper {
	width: 80%;
	height: 80%;
	display:flex;
	align-items:center;
	justify-content:center;
}

h2 {
	font-size: 20px;
	color: #90EE90;
}

form {
	border: 1px solid #ddf;
	width: 50%;
	height: 70%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background:;
	border-radius:0.5rem;
	backdrop-filter:blur(10px);
}

input {
	width: 80%;
	height: 10%;
	padding-left: 15px;
	margin: 0.2rem auto 1rem auto;
	display: flex;
	justify-content: space-around;
	border-radius:0.3rem;
	background: offwhite;
	color: #000000;
	font-size:160%;
	position: relative;
	font-weight:600;
	border: none;
	outline: none;
	align-items: center;
}

.btn {
	width: 50%;
	height: 45px;
	padding-left: 17px;
	margin: 2px 2px 2px 2px;
	border:none;
	cursor: pointer;
	background:#90EE90;
	color:#000;
	font-size:150%;
	border-radius:0.3rem;
}

.btn:hover {
	background-color: #066257aa;
	color: #050724;
}

a {
	text-decoration: none;
	margin: 2px 2px 2px 2px;
	color: #050724;
}

a:hover {
	border-bottom: 2px solid black;
	background-color: #90EE90;
	color: #000;
}
@media only screen and (max-width: 600px) {
  .container .wrapper input form body {
    
  }
}

/*regular style ends*/

	</style>
</head>
<body>
<div class="container">
		<h2>Student login</h2>
	<div class="wrapper">
		<form action="dashboard.php" method="post">
		<input type="email" name="email" id="email" placeholder="Matric number" required>
		<input type="password" id="password" name="password" placeholder="Password" required>
		<button class="btn" type="sudmit">Login</button>
		<a href="#">Forgot password?</a>

	</form>
	</div>
</div>

</body>
</html>