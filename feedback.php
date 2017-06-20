<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Form</title>
<style type="text/css">
<!--
body{
font-family:Verdana;
}
-->
</style>
</head>
<body>
<h1 align='center'>Feedback</h1>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("djdcann@slaunchpad.x10.mx", $subject,
  $message, "From: " . $email);
  echo "<p align='center'>Thank you for using our mail form. Your message was successfully sent!!!
		<br /><br /><a href='feedback.php'>Send another message</a></p>";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<p align='center'>For all your comments, questions, and suggestions :D!</p>
  <br />
  <div style='width:500px;margin: 0 auto;'><table><form method='post' action='feedback.php'>
  <tr><th>Name:</th><td><input name='email' type='text'></td></tr>
  <tr><th>Subject:</th><td><input name='subject' type='text'></td></tr>
  <tr><th valign='top'>Message:</th><td><textarea name='message' rows='15' cols='40'>
If you want me to reply to your message, please list some form of contact information.</textarea></td></tr>
  <tr><td colspan='2'><input type='submit'></td></tr>
  </form></table></div>";
  }
?>

</body>
</html>