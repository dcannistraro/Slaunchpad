<?php
	if (isset($_REQUEST['email'])) {
		header("Refresh: 5; url=index.html");
	}
?>

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
<link rel="stylesheet" href="footer.css" type="text/css" media="screen" /><!-- Footer Stylings -->
</head>
<body>

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
  echo "Thank you for using our mail form. Your message was successfully sent!!! Ermagerrrd Cream yes.<br>
  If you aren't redirected to the Slaunchpad in 5 seconds click <a href='index.html'>here</a>.";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<h1 align='center'>Feedback</h1>
  <div style='width:500px;margin: 0 auto;'><table><form method='post' action='feedback.php'>
  <tr><th>Name:</th><td><input name='email' type='text'></td></tr>
  <tr><th>Subject:</th><td><input name='subject' type='text'></td></tr>
  <tr><th valign='top'>Message:</th><td><textarea name='message' rows='15' cols='40'>
If you want me to reply to your message, please list some form of contact information.</textarea></td></tr>
  <tr><td colspan='2'><input type='submit'></td></tr>
  </form></table><br /><a href='index.html'>To Slaunchpad</a></div>";
  }
?>
<div id="footer"><!-- BEGIN FOOTER CONTAINER -->

    <ul id="footer_menu"><!-- Begin Footer Menu -->
    
        <li class="imgmenu"><a href="index.html"></a></li><!-- This Item is an Image -->

        <li><a href="feedback.php">Feedback and Support</a><!-- Begin Third Menu Item -->
        
        </li><!-- End Third Menu Item -->
 
    </ul><!-- End Footer Menu -->

<div style="float:right;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input style="margin-top:6px;"type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">	
</form></div>
	
	<div style="float:right;"><p><a>Help support this project:</a></p></div>

</div><!-- END FOOTER CONTAINER -->
</body>
</html>