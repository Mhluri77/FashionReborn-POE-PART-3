<?php

include("../DBConn.php");

$id=$_GET['id'];

$get=mysqli_query($conn,

"SELECT * FROM tblUser

WHERE userID='$id'");

$row=mysqli_fetch_assoc($get);

if(isset($_POST['save']))
{

$name=$_POST['name'];

$surname=$_POST['surname'];

mysqli_query($conn,

"UPDATE tblUser

SET

name='$name',

surname='$surname'

WHERE userID='$id'");

header("Location:manage_users.php");

}

?>

<form method="POST">

<input

type="text"

name="name"

value="<?php echo $row['name'];?>">

<br><br>

<input

type="text"

name="surname"

value="<?php echo $row['surname'];?>">

<br><br>

<button

name="save">

Save

</button>

</form>