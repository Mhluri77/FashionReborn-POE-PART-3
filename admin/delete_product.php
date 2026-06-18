<?php

include("../DBConn.php");

$id=$_GET['id'];

mysqli_query($conn,

"DELETE

FROM tblClothes

WHERE clothesID='$id'");

header("Location:manage_products.php");

?>