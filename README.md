# LAMP stack 

## Linux Server Simulation
### 1-Install Apache, MySQL, and PHP:

- Update the package index: ```sudo apt update ```
- Install Apache: ```sudo apt install apache2 ```
- Install MySQL: ```sudo apt install mysql-server```
- Install PHP: sudo apt install php libapache2-mod-php php-mysql

### 2-Configure Apache:

- Apache's default website directory is /var/www/html/.
- You can create a test HTML file: sudo nano /var/www/html/index.html.

### 3-Create a Simple Website:

Create a new file named index.php inside /var/www/html/ directory:
sudo nano /var/www/html/index.php
Add the following content to index.php:
```bash
php
Copy code
<?php
echo "Hello World!";
?>
```
Save and exit the file (Ctrl + X, then Y, then Enter).

### 4-Configure MySQL:

- Secure your MySQL installation:
sudo mysql_secure_installation
- Follow the on-screen prompts to set a root password and remove insecure settings.
- Log in to MySQL as the root user:
```bash
sudo mysql -u root -p
```
- Create a new database, user, and password:
```bash
CREATE DATABASE mywebsite;
CREATE USER 'myuser'@'localhost' IDENTIFIED BY 'mypassword';
GRANT ALL PRIVILEGES ON mywebsite.* TO 'myuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 5-Modify the Website:

Update index.php to use the MySQL database.

### 6-Testing:

Open a web browser and navigate to your server's IP address. 
You should see the modified "Hello World!" message displaying the visitor's IP address and current time.
![Screenshot from 2024-02-27 15-19-44](https://github.com/esraa4antar/LAMP-stack/assets/51370958/a09ac43c-267a-4ad2-8369-261043971e4c)

