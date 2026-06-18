<?php

session_start();

include("DBConn.php");

include("includes/header.php");

if(!isset($_SESSION['userID']))
{

header("Location:login.php");

exit();

}

$user=$_SESSION['userID'];

$get=mysqli_query($conn,

"SELECT sellerStatus

FROM tblUser

WHERE userID='$user'");

$row=mysqli_fetch_assoc($get);

if($row['sellerStatus']!="Approved")
{

die("<h2>

Seller account not approved.

</h2>");

}

if(isset($_POST['upload']))
{

$brand=$_POST['brand'];

$name=$_POST['name'];

$description=$_POST['description'];

$price=$_POST['price'];

$category=$_POST['category'];

$condition=$_POST['condition'];

$image=$_FILES['image']['name'];

$temp=$_FILES['image']['tmp_name'];

move_uploaded_file(

$temp,

"uploads/".$image

);

$sql="INSERT INTO tblClothes(

sellerID,

brand,

clothesName,

description,

price,

image,

category,

conditionType,

status)

VALUES(

'$user',

'$brand',

'$name',

'$description',

'$price',

'$image',

'$category',

'$condition',

'Available'

)";

mysqli_query($conn,$sql);

echo "<h3>

Clothing uploaded successfully!

</h3>";

}

?>

<h2>Upload Clothing</h2>

<form

method="POST"

enctype="multipart/form-data">

<input

type="text"

name="brand"

placeholder="Brand"

required>

<br><br>

<input

type="text"

name="name"

placeholder="Clothing Name"

required>

<br><br>

<textarea

name="description"

placeholder="Description"

required>

</textarea>

<br><br>

<input

type="number"

step="0.01"

name="price"

placeholder="Price"

required>

<br><br>

<input

type="text"

name="category"

placeholder="Category"

required>

<br><br>

<input

type="text"

name="condition"

placeholder="Condition"

required>

<br><br>

<input

type="file"

name="image"

required>

<br><br>

<button

name="upload">

Upload

</button>

</form>

<?php

include("includes/footer.php");

?>