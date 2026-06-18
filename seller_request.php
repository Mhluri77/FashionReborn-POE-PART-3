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

if(isset($_POST['submit']))
{

$sql="UPDATE tblUser

SET sellerStatus='Pending'

WHERE userID='$user'";

mysqli_query($conn,$sql);

echo "<h3>

Seller request submitted successfully.

Please wait for admin approval.

</h3>";

}

?>

<h2>Become a Seller</h2>

<form method="POST">

<p>

Click the button below to request permission to sell clothes.

</p>

<button name="submit">

Request Seller Access

</button>

</form>

<?php

include("includes/footer.php");

?>