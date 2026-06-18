<?php

include("../DBConn.php");

$result=mysqli_query($conn,

"SELECT *

FROM tblOrder");

echo "<h2>

Customer Orders

</h2>";

while($row=mysqli_fetch_assoc($result))
{

echo

"Order ID : "

.$row['orderID'];

echo

" | User : "

.$row['userID'];

echo

" | Total : R"

.$row['total'];

echo

" | Date : "

.$row['orderDate'];

echo "<br><br>";

}

?>