<?php

session_start();

include("DBConn.php");

$user=$_SESSION['userID'];

$id=$_GET['id'];

$action=$_GET['action'];

if($action=="add")
{

mysqli_query($conn,

"UPDATE tblCart

SET quantity=quantity+1

WHERE userID='$user'

AND clothesID='$id'");

}

if($action=="remove")
{

mysqli_query($conn,

"UPDATE tblCart

SET quantity=quantity-1

WHERE userID='$user'

AND clothesID='$id'

AND quantity>1");

}

if($action=="delete")
{

mysqli_query($conn,

"DELETE FROM tblCart

WHERE userID='$user'

AND clothesID='$id'");

}

header("Location:cart.php");

?>