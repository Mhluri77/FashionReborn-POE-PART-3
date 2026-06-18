<?php

include("DBConn.php");

$id=$_GET['id'];

$get=mysqli_query($conn,

"SELECT *

FROM tblClothes

WHERE clothesID='$id'");

$row=mysqli_fetch_assoc($get);

if(isset($_POST['save']))
{

$name=$_POST['name'];

$price=$_POST['price'];

mysqli_query($conn,

"UPDATE tblClothes

SET

clothesName='$name',

price='$price'

WHERE clothesID='$id'");

header("Location:my_clothes.php");

}

?>

<form method="POST">

<input

type="text"

name="name"

value="<?php echo $row['clothesName']; ?>">

<br><br>

<input

type="number"

step="0.01"

name="price"

value="<?php echo $row['price']; ?>">

<br><br>

<button

name="save">

Save Changes

</button>

</form>