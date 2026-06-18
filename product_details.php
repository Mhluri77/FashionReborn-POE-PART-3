<?php

session_start();

include("DBConn.php");
include("includes/header.php");

$id=$_GET['id'];

$sql="SELECT * FROM tblClothes WHERE clothesID='$id'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

?>

<div class="card">

<img src="uploads/<?php echo $row['image']; ?>" width="350">

<h2><?php echo $row['clothesName']; ?></h2>

<p><strong>Brand:</strong> <?php echo $row['brand']; ?></p>

<p><?php echo $row['description']; ?></p>

<p><strong>Category:</strong> <?php echo $row['category']; ?></p>

<p><strong>Condition:</strong> <?php echo $row['conditionType']; ?></p>

<h2>R<?php echo $row['price']; ?></h2>

<a href="add_to_cart.php?id=<?php echo $row['clothesID']; ?>">

<button>Add To Cart</button>

</a>

</div>

<?php

include("includes/footer.php");

?>