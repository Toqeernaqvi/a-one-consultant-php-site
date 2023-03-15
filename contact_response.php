<?PHP
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$reasonOfContact = $_POST['reasonOfContact'];
$msg = $_POST['detail'];
$message = "
Email From : $email
Subject : $subject
Message: $msg
Reason Of Contact: $reasonOfContact
PhoneNumber: $number
";
$headers = "From: $email\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

if (mail('study@aoneconsultant.com',$subject, $message, $headers)){
	echo "<script>alert('Mail was sent !');</script>";
	echo "<script>document.location.href='contact.php'</script>";
	}
	else
	{
	echo "<script>alert('Mail was not sent. Please try again later');</script>";
	}
?>