
<?php

//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saiddit";
$username1 = $_POST["u_name"];
$password1 = $_POST["password"];


session_start();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, password FROM accounts WHERE username = '$username1'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (password_verify($password1, $row["password"])) {
    // output data of each row
   
        echo "Welcome back ". $row["username"]. "!";
    
} else {
    echo "Username or password is incorrect.";
	
}

$_SESSION["loggeduser"] = $username1;
$conn->close();
?>

<html>
<body>
<div id="center_button">
    <button onclick="location.href='inexlogin.php'">Continue</button>
</div>
</body>
</html>




