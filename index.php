<?php
$to = 'deepakpathania789@gmail.com';
$subject = 'New response from contact form';
$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message = $_POST['message'];
$body = "Name : $name Message : $message From : $email";
$header = "From : $email";

if($_POST) {
	if($name == '' || $email == '' || $message == '') {
	$feedback = "Please fill in all the fields";		
		}
else {
	mail($to, $subject, $body, $header);
	$feedback = "Thanks for the message, I'll get back to you shortly";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link type = "text/css" rel = "stylesheet" href="style.css">
	
</head>
<body>
	<p id="feedback"><?php echo $feedback; ?></p>
	<form action="?" method = "post">
		<ul>
			<li>
				<label for="name">Name : </label>
				<input type="text" name="name" id ="name" />
			</li>
			<li>
				<label for="name">Email : </label>
				<input type="text" name="email" id ="email" />
			</li>
			<li>
				<label for="topic">Topic : </label>
				<select id="topic" name = "topic">
					<option value = "a">A</option>
					<option value = "b">B</option>
					<option value = "c">C</option>
				</select>
			</li>
			<li>
				<label for ="message">Say something : </label>
				<textarea id="message" name="message" cols="42" rows="9"></textarea>
			</li>
			<li>
				<input type="submit" value="Submit" />
			</li>
		</ul>
	</form>
</body>
</html>
