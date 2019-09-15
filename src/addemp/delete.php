<?php include 'database.php'; ?>
<?php
$delete = $_POST["delete1"];
//Define the query
$query = "DELETE FROM posts WHERE id=$delete";

//sends the query to delete the entry
mysqli_query($connect, $query);
echo "$delete";

if (mysqli_affected_rows($connect) == 1) { 
//if it updated
?>

            <strong>Post has been deleted</strong><br /><br />

<?php
 } else { 
//if it failed
?>

            <strong></strong><br /><br />


<?php
} 
?>