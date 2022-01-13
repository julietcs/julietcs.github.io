<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
</head>

<body>
<p style="font: italic bold 150% 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana; text-align:center;">
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Fermatatime.org'; 
    $to = 'admin@fermatatime.org'; 
    $subject = 'Website Inquiry';
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	mail ($to, $subject, $body, $from);
	echo 'Thank you for contacting us!';
				
?></p>
</body>
</html>