<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Welcome to Saiddit</title>
</head>
<body>


<p><b>Create an account! </b></p>
<form method="post" action="process.php">
<label>Username</label>
<input type="text" name="u_name" />
<br />
<label>Password</label>
<input type="password" name="password" />
<br />

<input type="submit" value="Creat account!">
</form>



<form method = "post" action ="loggedin.php">
<div class="topcorner"><b><p>Already have an account? Log in!</p></b>
<label>Username</label>
<input type="text" name="u_name" />
<br />
<label>Password</label>
<input type="password" name="password" />
<br />
<input type="submit" name="submit" value="Log in">
</form>
</div>

<style type="text/css">
 .topcorner{
   position:absolute;
   top:10px;
   right:10px;
  }
</style>





<br />
<center>
<img src = "saiddit.png">

</center>

<style>
  body {background-color: honeydew;}
  h1 {color: orange;}
  p {color: orange;}
</style>
 
 
 
</body>

<h2>Posts from default Subsaiddits:</h2>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saiddit";





$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT posts.title, posts.text, posts.poster, posts.subsaiddit, SUM(updownpost.vote) FROM (posts INNER JOIN subsaiddits ON subsaiddits.title = posts.subsaiddit) JOIN updwonpost WHERE subsaiddit.defaultFlag = 'Y' AND updownpost.post_id = posts.id ";
$result = $conn->query($sql);

//



//

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Post from: " . $row["subsaiddit"]. "<br>";
		echo "Poster: " . $row["poster"]. ",  Title: " . $row["title"]. "<br>------->" . $row["text"].   "<br>";
		
		echo "<a href = viewposts.php>View comments</a><br>";
		echo "Vote score: <br><br>";
		echo "<form action=delete.php>";

		
    }
} else {
    echo "0 results";
}
$conn->close();
?> 





 
	