<?php

session_start();

include("includes/header.php");

if(!isset($_SESSION['userID']))
{

header("Location:login.php");

exit();

}

?>

<h2>

Welcome

<?php

echo $_SESSION['name'];

?>

</h2>

<p>

You have successfully logged into Fashion Reborn.

</p>

<h3>

Role :

<?php

echo $_SESSION['role'];

?>

</h3>

<?php

include("includes/footer.php");

?>