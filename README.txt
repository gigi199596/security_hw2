
/* packages installation */

apt-get install apache2 libapache-mod-php php php-mysql mysql-server

a2enmod php7.0
systemctl restart apache2

/* Mysql DB initialisation */

mysql -u root -p (just press enter to skip password)

CREATE DATABASE website;
USE website;
CREATE TABLE users(login VARCHAR(15) NOT NULL, password VARCHAR(30) NOT NULL, mail VARCHAR(50));
INSERT INTO users
VALUES ('gigi199596', 'lovethatcomputer', 'bajart.gilles@gmail.com'),
('darkgirl', 'hellokitty', 'lucy.stranger@gmail.com'),
('snoopy3', 'ilovemycatsosomuch', 'marie.deleu@hotmail.fr'),
('bobthedreamer', 'tomorrowland', 'bob.dadil@msn.com'),
('vfeyens', 'imarealgeekforever', 'feyens.victor@live.be');

/* To access the site */

Copy files in the var/www/html directory

Launch localhost/index.php

/* Attacks */

/* SQL Injection */

Through the login page, u can inject sql code in the forms.
U can by example connect without knowing any password or login by using --> " or ""="
in both fields.

/* XSS Attack */

When connected, u can use the search field to perform a xss attack.  
The text of the search is displayed as received and therefore html tags are applied.
By example, searching  <script>alert('XSS')</script> will raise and alert on the navigators where there is no xss protection.

/* Buffer overflow */

To make a buffer overflow:
That's a good problem. In order to solve that problem you will also have to disable ASLR otherwise the address of g() will be unpredictable.

Disable ASLR:
sudo bash -c 'echo 0 > /proc/sys/kernel/randomize_va_space'

Disable canaries:
gcc overflow.c -o overflow -fno-stack-protector

After canaries and ASLR are disabled it should be a straight forward attack like the ones described in Smashing the Stack for Fun and Profit

http://insecure.org/stf/smashstack.html

what does succeed in bash call :
./search computersecurityisimportantnow.

Which means to apply it in the site, u have to search the string computersecurityisimportantnow. in the search field.

It will cause a call to the clean_history function and clean the historic of search.

