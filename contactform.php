<?php

if(isset($_POST['submit'])) {
	$name = _POST['name'];
	$mailfrom = _POST['email'];
	$message = _POST['message'];

	$mailTo = "code0312@gmail.com";
	$headers = "From: MerakiCollective - ".$mailfrom;
	$txt = "You have received an email from: ".$name.".\n\n".$message;


	mail($mailTo, $txt, $headers);

	header("Location: index.php?mailsent");

}