<?php include 'database.php'; ?>
 
<?php


 
// create a variable
$user_name=$_POST['u_name'];
$password=$_POST['password'];
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

//Execute the query
 
mysqli_query($connect, "INSERT INTO accounts(username, password)		VALUES('$user_name','$hashedpassword')");

								
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Account Added</p>";
	
} else {
	echo "Account NOT Added<br />";
	echo mysqli_error ($connect);
}

?>

<html>
<head>
</head>

<body>
<div id="center_button">
    <button onclick="location.href='index.php'">Back to Home</button>
</div>
</body>
</html>