<?php
if(isset($_REQUEST['email'])){
$admin_eamil = "someone@example.com";
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$comment = $_REQUEST['comment'];

mail($admin_email,"$subject",$comment,"From: ",$email);

}


?>

<form method="POST" action="">

Email: <input type="email" name="email"><br><br>

Subject: <input type="text" name="subject"><br><br>

Message :<input type="comment" rows="15" cols="40"></textarea>

<input type="submit" name="send" value="Submit">
 </form>