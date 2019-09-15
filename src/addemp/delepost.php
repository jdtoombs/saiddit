<html>
<label>Which post would you like to delete</label>
<input type="text" name="thisone" />
<br />
</html>
<?php
$thisone = $_POST["thisone"];
$sql = "DELETE FROM posts WHERE posts_id = '$thisone'" ;

?>