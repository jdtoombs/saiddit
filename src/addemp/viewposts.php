<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Welcome to Saiddit</title>
</head>
<body>

<div id="center_button">
    <button onclick="location.href='index.php'">Logout</button>
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
<h1>Saiddit</h1>
</center>

<style>
  body {background-color: honeydew;}
  h1 {color: orange;}
  p {color: orange;}
</style>
 
 
 
</body>

<h2>Comments</h2>
</html>

<?php

$userloggedin = $_SESSION["loggeduser"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saiddit";



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT comments.text, comments.commenter FROM comments JOIN posts ON posts.id = comments.post_id WHERE posts.id = comment ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Poster: " . $row["poster"]. " - Title: " . $row["title"]. "<br>------->" . $row["text"]. "<br>";
		echo "<a href = viewposts.php>View comments</a><br>";
		echo "Vote score: <br><br>";		
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<html>

</html>

