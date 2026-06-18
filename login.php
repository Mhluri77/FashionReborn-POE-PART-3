<?php

session_start();

include("DBConn.php");

include("includes/header.php");

if(isset($_POST['login']))
{

$email=$_POST['email'];

$password=$_POST['password'];

$sql="SELECT * FROM tblUser WHERE email='$email'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

$row=mysqli_fetch_assoc($result);

if(password_verify($password,$row['password']))
{

$_SESSION['userID']=$row['userID'];

$_SESSION['name']=$row['name'];

$_SESSION['role']=$row['role'];

header("Location:dashboard.php");

exit();

}

else

{

echo "<h3>Incorrect Password</h3>";

}

}

else

{

echo "<h3>User Not Found</h3>";

}

}

?>

<h2>Login</h2>

<form method="POST">

<input type="email"

name="email"

placeholder="Email"

required>

<br><br>

<input type="password"

name="password"

placeholder="Password"

required>

<br><br>

<button

type="submit"

name="login">

Login

</button>

</form>

<?php

include("includes/footer.php");

?>