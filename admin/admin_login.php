<?php

session_start();

include("../DBConn.php");

if(isset($_POST['login']))
{

$username=$_POST['username'];

$password=$_POST['password'];

$sql="SELECT * FROM tblAdmin WHERE username='$username'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

$row=mysqli_fetch_assoc($result);

if(password_verify($password,$row['password']))
{

$_SESSION['admin']=$row['adminID'];

header("Location:admin_dashboard.php");

exit();

}

else

{

echo "Incorrect Password";

}

}

else

{

echo "Admin not found";

}

}

?>

<h2>Admin Login</h2>

<form method="POST">

<input type="text"

name="username"

placeholder="Username"

required>

<br><br>

<input type="password"

name="password"

placeholder="Password"

required>

<br><br>

<button name="login">

Login

</button>

</form>