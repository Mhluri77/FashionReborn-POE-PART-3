<?php

include("DBConn.php");

include("includes/header.php");

if(isset($_POST['register']))
{

$name=$_POST['name'];

$surname=$_POST['surname'];

$email=$_POST['email'];

$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$check=mysqli_query($conn,"SELECT * FROM tblUser WHERE email='$email'");

if(mysqli_num_rows($check)>0)
{

echo "<h3>Email already exists!</h3>";

}

else
{

$sql="INSERT INTO tblUser(name,surname,email,password)

VALUES('$name','$surname','$email','$password')";

if(mysqli_query($conn,$sql))
{

echo "<h3>Registration Successful!</h3>";

}

}

}

?>

<h2>Register</h2>

<form method="POST">

<input type="text" name="name" placeholder="Name" required>

<br><br>

<input type="text" name="surname" placeholder="Surname" required>

<br><br>

<input type="email" name="email" placeholder="Email" required>

<br><br>

<input type="password" name="password" placeholder="Password" required>

<br><br>

<button type="submit" name="register">

Register

</button>

</form>

<?php

include("includes/footer.php");

?>