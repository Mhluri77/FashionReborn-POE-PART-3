<?php

session_start();

include("DBConn.php");

if(!isset($_SESSION['userID']))
{

header("Location:login.php");

exit();

}

$user=$_SESSION['userID'];

$product=$_GET['id'];

$check=mysqli_query($conn,

"SELECT * FROM tblCart

WHERE userID='$user'

AND clothesID='$product'");

if(mysqli_num_rows($check)>0)
{

mysqli_query($conn,

"UPDATE tblCart

SET quantity=quantity+1

WHERE userID='$user'

AND clothesID='$product'");

}

else

{

mysqli_query($conn,

"INSERT INTO tblCart(userID,clothesID,quantity)

VALUES('$user','$product',1)");

}

header("Location:cart.php");

?>