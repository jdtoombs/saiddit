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
<h1><?php echo $_SESSION["loggeduser"]; ?>'s Saiddit</h1>
</center>

<style>
  body {background-color: honeydew;}
  h1 {color: orange;}
  p {color: orange;}
</style>
 
 
 
</body>

<h2>Comments <?php echo "$idtouse"; ?> </h2>
</html>

<?php

echo "$row["id"]";

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
echo "$row["id"]";
$commentview = $row["id"];
$sql = "SELECT posts.title, posts.id, comments.text, comments.post_id FROM posts JOIN comments ON posts.id = comments.id WHERE comments.post_id = '$commentview' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Post ID: ". $row["id"]. "<br>";
		echo "Comments: " . $row["text"]. " - Title of Post: " . $row["title"]. "<br>";
		
		echo "<br>";
		
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<form method="post" action="delete.php">
<label>Enter Post ID</label>
<input type="text" name="delete1" />


<input type="submit" value="Delete!">
</form>

<html>
<a href="creatpost.php">Create another post!</a>


</html>



 
	