<?PHP
$email = $_POST['email'];
$message = "
Email for newsletter : $email";
$headers = "From: $email\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

if (mail('study@aoneconsultant.com', $message, $headers)){
	echo "<script>alert('Thanks for Subscribe our newsletter.');</script>";
	echo "<script>document.location.href='index.php'</script>";
	}
	else
	{
	echo "<script>alert('Mail was not sent. Please try again later');</script>";
	}
?>