<?php

include("../DBConn.php");

if(isset($_GET['approve']))
{

$id=$_GET['approve'];

mysqli_query($conn,

"UPDATE tblUser

SET sellerStatus='Approved'

WHERE userID='$id'");

}

$result=mysqli_query($conn,

"SELECT *

FROM tblUser

WHERE sellerStatus='Pending'");

echo "<h2>

Pending Seller Requests

</h2>";

while($row=mysqli_fetch_assoc($result))
{

echo

$row['name']." ".

$row['surname'];

echo "

<a href='approve_requests.php?approve=".$row['userID']."'>Approve</a>

<br><br>";

}

?>