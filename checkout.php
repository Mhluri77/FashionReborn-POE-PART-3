<?php

session_start();

include("DBConn.php");

include("includes/header.php");

$user=$_SESSION['userID'];

$total=0;

$get=mysqli_query($conn,

"SELECT tblCart.*,

tblClothes.*

FROM tblCart

INNER JOIN tblClothes

ON tblCart.clothesID=tblClothes.clothesID

WHERE userID='$user'");

while($row=mysqli_fetch_assoc($get))
{

$total+=$row['price']*$row['quantity'];

}

if(isset($_POST['checkout']))
{

mysqli_query($conn,

"INSERT INTO tblOrder(userID,total)

VALUES('$user','$total')");

$orderID=mysqli_insert_id($conn);

$get=mysqli_query($conn,

"SELECT tblCart.*,

tblClothes.*

FROM tblCart

INNER JOIN tblClothes

ON tblCart.clothesID=tblClothes.clothesID

WHERE userID='$user'");

while($row=mysqli_fetch_assoc($get))
{

mysqli_query($conn,

"INSERT INTO tblOrderItem(

orderID,

clothesID,

quantity,

price)

VALUES(

'$orderID',

'".$row['clothesID']."',

'".$row['quantity']."',

'".$row['price']."')");

}

mysqli_query($conn,

"DELETE FROM tblCart

WHERE userID='$user'");

echo "<h2>

Order Placed Successfully!

</h2>";

}

?>

<h2>

Checkout

</h2>

<h3>

Total Amount :

R<?php echo $total; ?>

</h3>

<form method="POST">

<button

name="checkout">

Confirm Order

</button>

</form>

<?php

include("includes/footer.php");

?>