# Anonmail
<img src="https://raw.githubusercontent.com/hxcde/anonmail/main/logo1.png" width="70" />

### Send anonymous emails inside company
- I built this project to be able to send anonymous emails to the works council within the company.
- The emails go from an anonymous email address to a predefined one.
### How to set it up?
- You need GIt, PHP and Apache installed (example for Ubuntu or Debian based)
```bash
apt-get update && apt-get install git php php-mail apache2 -y
systemctl enable apache2 && systemctl start apache2
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
![website](https://user-images.githubusercontent.com/30338980/228526710-b8f19c39-f3e7-41c7-9354-630b1bea1f86.png)
