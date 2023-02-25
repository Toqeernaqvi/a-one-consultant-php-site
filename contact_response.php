<?PHP
$top = "<!DOCTYPE HTML PUBLIC ";
$bottom = "<body></body></html>";
$blank = ' ';
$sep = "\r\n";
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// $contact = $_POST['email'] .$blank .$_POST['phone'];
$body = $name .$sep .$email .$sep .$phone .$sep .$subject .$sep .$message;
$headers = "From: $name <$email>\r\n";
$headers .= "Content-type: text/html\r\n";
mail('toqeernaqvi66@gmail.com',$subject, $body, $headers);
	echo ("Thank you for contacting us, " .$name."<br> Your message: <b>");
	echo $subject;
	echo "</b>, has been recieved</br> A response will be sent to you in a timely fashion. <br><br> Have a wonderful day! <br> -ASDPS";

?>


