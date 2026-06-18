<?php

include("DBConn.php");

$id=$_GET['id'];

mysqli_query($conn,

"DELETE FROM tblClothes

WHERE clothesID='$id'");

header("Location:my_clothes.php");

?>