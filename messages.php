<?php

session_start();

include("DBConn.php");

include("includes/header.php");

$user=$_SESSION['userID'];

if(isset($_POST['send']))
{

$receiver=$_POST['receiver'];

$subject=$_POST['subject'];

$message=$_POST['message'];

mysqli_query($conn,

"INSERT INTO tblMessage(senderID,receiverID,subject,message)

VALUES('$user','$receiver','$subject','$message')");

echo "<h3>Message Sent Successfully!</h3>";

}

?>

<h2>Send Message</h2>

<form method="POST">

<label>Receiver ID</label>

<input type="number" name="receiver" required>

<br><br>

<label>Subject</label>

<input type="text" name="subject" required>

<br><br>

<label>Message</label>

<textarea name="message" required></textarea>

<br><br>

<button name="send">

Send Message

</button>

</form>

<?php

include("includes/footer.php");

?>