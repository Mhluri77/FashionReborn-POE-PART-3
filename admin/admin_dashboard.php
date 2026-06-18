<?php

session_start();

if(!isset($_SESSION['admin']))
{

header("Location:admin_login.php");

exit();

}

?>

<h1>

Fashion Reborn Admin Dashboard

</h1>

<hr>

<a href="manage_users.php">

Manage Users

</a>

|

<a href="manage_products.php">

Manage Clothes

</a>

|

<a href="approve_requests.php">

Approve Sellers

</a>

|

<a href="view_orders.php">

Orders

</a>

|

<a href="admin_logout.php">

Logout

</a>