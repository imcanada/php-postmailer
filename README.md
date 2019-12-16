# PHP Mailer on post request with SMTP

To use this you must go to the conf folder and edit the settings in config_smtp.php and you must have an SMTP server for this.

The mailer itself was made by halojoy but i've modified it to accept POST requests and be easier to install. 

Original repo: https://github.com/halojoy/PHP-SMTP-Mailer

## Installation:
1. Drop the files into your website directory (where you want it to be installed)
2. Configure the config_smtp.php file in the conf folder
3. Now you can send emails by sending a POST request at mailer.php with the parameters "to=email@address", "subject=Email subject" and "message=Email message"


This mailer uses POST requests to send emails. Use a HTML form or send a POST request using jQuery to send mail. The mailer accepts "application/x-www-form-urlencoded" parameters.


