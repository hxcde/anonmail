# anonmail
### Send anonymous emails inside company
- I built this project to be able to send anonymous emails to the works council within the company.
- The emails go from an anonymous email address to a predefined one.
### How to set it up?
- You need PHP and Apache installed
```bash
apt install php apache2
```
- Clone the repository
```bash
git clone https://github.com/hxcde/anonmail.git
```
Move the files to webroot
```bash
mv anonmail/* /var/www/html/
```
Edit in contact-form-process.php
```bash
$email_to = "recipient@example.de";
$email = 'sender@example.de';
```
Change the images as needed
