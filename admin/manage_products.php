<?php

include("../DBConn.php");

$result=mysqli_query($conn,

"SELECT *

FROM tblClothes");

echo "<h2>

Manage Clothes

</h2>";

while($row=mysqli_fetch_assoc($result))
{

?>

<div>

<img

src="../uploads/<?php echo $row['image'];?>"

width="100">

<h3>

<?php

echo $row['clothesName'];

?>

</h3>

<p>

R<?php

echo $row['price'];

?>

</p>

<a

href="delete_product.php?id=<?php echo $row['clothesID'];?>">

Delete

</a>

</div>

<hr>

<?php

}

?>