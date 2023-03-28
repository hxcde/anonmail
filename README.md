# anonmail
Anonyme Email Server to internal Email
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
