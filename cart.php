<?php

session_start();

include("DBConn.php");

include("includes/header.php");

$user=$_SESSION['userID'];

$sql="SELECT tblCart.*,

tblClothes.*

FROM tblCart

INNER JOIN tblClothes

ON tblCart.clothesID=tblClothes.clothesID

WHERE tblCart.userID='$user'";

$result=mysqli_query($conn,$sql);

$total=0;

echo "<h2>Shopping Cart</h2>";

while($row=mysqli_fetch_assoc($result))

{

$subtotal=$row['price']*$row['quantity'];

$total+=$subtotal;

?>

<div class="card">

<img src="uploads/<?php echo $row['image']; ?>" width="120">

<h3><?php echo $row['clothesName']; ?></h3>

<p>Price : R<?php echo $row['price']; ?></p>

<p>Quantity : <?php echo $row['quantity']; ?></p>

<p>Subtotal : R<?php echo $subtotal; ?></p>

<a href="update_cart.php?action=add&id=<?php echo $row['clothesID']; ?>">

<button>+</button>

</a>

<a href="update_cart.php?action=remove&id=<?php echo $row['clothesID']; ?>">

<button>-</button>

</a>

<a href="update_cart.php?action=delete&id=<?php echo $row['clothesID']; ?>">

<button>Delete</button>

</a>

</div>

<?php

}

?>

<h2>Total : R<?php echo $total; ?></h2>

<a href="checkout.php">

<button>Proceed To Checkout</button>

</a>

<?php

include("includes/footer.php");

?>