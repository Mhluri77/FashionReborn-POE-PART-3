<?php

include("../DBConn.php");

$result=mysqli_query($conn,

"SELECT * FROM tblUser");

echo "<h2>Manage Users</h2>";

while($row=mysqli_fetch_assoc($result))
{

echo

$row['name']." ".

$row['surname']." | ".

$row['email']." | ".

$row['sellerStatus'];

echo "

<a href='edit_user.php?id=".$row['userID']."'>Edit</a>

|

<a href='delete_user.php?id=".$row['userID']."'>Delete</a>

<br><br>";

}
?>