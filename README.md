# contact-form-mailer
A basic contact form that mails the entered information at your email id.

# Quick Start
- Clone this repo to your local machine and place the contents in your server folder, say if you are on a linux environment, place it in <code>/var/www/html/contact-form-mailer</code>

- Now edit the top php fields to configure the mailing functionality.
```php
$to = 'your_email_address'; #the address where you want to receive emails
$subject = 'New response from contact form'; #or whatever you feel like
$name = $_POST['name']; 
$email = $_POST['email'];
$topic = $_POST['topic'];
$message = $_POST['message'];
$body = "Name : $name Message : $message From : $email"; #change message body as per requirement
$header = "From : $email";
```
-  Change the form fields if you feel like and change the php fields accordingly.

- Note : You will have to configure your server for sending mails, if you are working with localhost, try installing and configuring postfix. More information here : https://help.ubuntu.com/community/Postfix
