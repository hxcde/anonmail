# anonmail
### Anonyme Email Server to internal Email
I built this project to be able to send anonymous emails to the works council within the company.
```bash
git clone https://github.com/hxcde/anonmail.git
```
Apache:
```bash
mv anonmail/* /var/www/html/
```
Edit in contact-form-process.php
```bash
$email_to = "email@example.de";
$email_subject = "Anonymes Kontaktformular";
$email = 'email@example.de';
```
Edit text at the End of index.html

Change the images as needed
