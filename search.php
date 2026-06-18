<?php

include("DBConn.php");

include("includes/header.php");

?>

<form method="GET">

<input

type="text"

name="search"

placeholder="Search Clothes">

<button>

Search

</button>

</form>

<?php

if(isset($_GET['search']))
{

$search=$_GET['search'];

$result=mysqli_query($conn,

"SELECT *

FROM tblClothes

WHERE clothesName LIKE '%$search%'

OR brand LIKE '%$search%'");

while($row=mysqli_fetch_assoc($result))
{

?>

<div class="card">

<img src="uploads/<?php echo $row['image']; ?>" width="180">

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

R<?php

echo $row['price'];

?>

</p>

</div>

<?php

}

}

include("includes/footer.php");

?>