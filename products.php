<?php

session_start();

include("DBConn.php");
include("includes/header.php");

$sql="SELECT * FROM tblClothes WHERE status='Available'";

$result=mysqli_query($conn,$sql);

echo "<h2>Browse Clothes</h2>";

while($row=mysqli_fetch_assoc($result))
{

?>

<div class="card">

<img src="uploads/<?php echo $row['image']; ?>" width="220">

<h3><?php echo $row['clothesName']; ?></h3>

<p><strong>Brand:</strong> <?php echo $row['brand']; ?></p>

<p><?php echo $row['description']; ?></p>

<h3>R<?php echo $row['price']; ?></h3>

<a href="product_details.php?id=<?php echo $row['clothesID']; ?>">

<button>View Details</button>

</a>

</div>

<?php

}

include("includes/footer.php");

?>