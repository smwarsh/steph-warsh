<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "stephaniewarsh@yahoo.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n\n".$message;

	if (mail($mailTo, $subject, $txt, $headers)) {
		header("Location: index.php?mailsend");
	} else {
		$result='<h2>Sorry there was a form processing error.</h2> <h3>Please try again later.</h3>';
	}

	// 
	// print("<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">");
}




// THIS PAGE DOES NOT MATCH THE FORM
// I UPDATED THE FORM AND STILL NEED TO UPDATE THIS PAGE
/*

$emailTo = "stephaniewarsh@gmail.com";
$subject = "Stephwarsh.com Contact Form Submission";

// variables
$emailFrom = trim(stripslashes($_POST['email']));
$firstName = trim(stripslashes($_POST['first-name']));
$lastName = trim(stripslashes($_POST['last-name']));
$message = trim(stripslashes($_POST['message']));

// email body text
$body = "";
$body .= "Message from: ";
$body .= $firstName;
$body .= " ";
$body .= $lastName;
$body .= "\n\n";
$body .= "Message:\n";
$body .= $message;

// send email
mail($emailTo, $subject, $body);

// redirect to confirmation page
print("<meta http-equiv=\"refresh\" content=\"0;URL=confirmation.php\">");
*/
?>