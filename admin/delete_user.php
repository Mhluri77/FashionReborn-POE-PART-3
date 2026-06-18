<?php

include("../DBConn.php");

$id=$_GET['id'];

mysqli_query($conn,

"DELETE FROM tblUser

WHERE userID='$id'");

header("Location:manage_users.php");

?>