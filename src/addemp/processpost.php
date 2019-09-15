<?php include 'database.php'; ?>
 
<?php

session_start();
 
// create a variable
$title=$_POST['title'];
$body=$_POST['body'];
$url=$_POST['url'];
$poster=$_SESSION["loggeduser"];
$subsaiddit=$_POST['subsaiddit'];


//Execute the query
 
mysqli_query($connect, "INSERT INTO posts(title, text, url, poster, subsaiddit)
				VALUES('$title','$body', '$url', '$poster', '$subsaiddit')");

								
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Post has been added!</p>";
	
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
    <button onclick="location.href='myposts.php'">Back</button>
</div>
</body>
</html>