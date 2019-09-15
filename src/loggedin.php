
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saiddit";
$username1 = $_POST["u_name"];
$password1 = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, password FROM accounts WHERE username = '$username1' AND password = 'password_hash($password1, 	PASSWORD_DEFAULT)'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Welcome back ". $row["username"]. "!";
    }
} else {
    echo "Username or password is incorrect";
}
$conn->close();
?>




