<?php

if(isset($_POST) && !empty($_POST))
{
	$to = "bianca.dsa22@gmail.com";
	
	

	$name = $_POST['name'];
	$subject = "Mail from sharpenerinc.com";

	$body = "Email : ".$_POST['email'];
	$body .= "<br><br>Message : ".$_POST['message'];


	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	if(mail($to,$subject,$body,$headers))
	{
		echo 'ok';
	}
	else
	{
		echo 'not-ok';
	}
}

?>