<?php

session_start();

include("DBConn.php");

include("includes/header.php");

$user=$_SESSION['userID'];

$sql="SELECT *

FROM tblClothes

WHERE sellerID='$user'";

$result=mysqli_query($conn,$sql);

echo "<h2>

My Listings

</h2>";

while($row=mysqli_fetch_assoc($result))
{

?>

<div

style="border:1px solid gray;

padding:15px;

margin:20px;">

<img

src="uploads/<?php

echo $row['image'];

?>"

width="150">

<h3>

<?php

echo $row['clothesName'];

?>

</h3>

<p>

<?php

echo $row['brand'];

?>

</p>

<p>

R

<?php

echo $row['price'];

?>

</p>

<a href="edit_clothes.php?id=<?php

echo $row['clothesID'];

?>">

Edit

</a>

|

<a href="delete_clothes.php?id=<?php

echo $row['clothesID'];

?>">

Delete

</a>

</div>

<?php

}

include("includes/footer.php");

?>