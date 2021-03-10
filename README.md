# README

**Developer task for ScandiWeb**

## About project

    This is a junior/mid developer task for Magebit
    
## How to use

        -To run this project locally clone this project in your web server folder (example - "C:\PhP\htdocs" for XAMPP).
        -Make sure the folder name is "magebit" or you will have to change .htaccess and config files.

        -Create MySQL database
        -Select created database and run SQL script found in > app/data/emails.sql <
        -Configure app/config/config.php
                define('DB_HOST', 'localhost');
                define('DB_USER', 'YOUR_USER');
                define('DB_PASS', 'YOUR_PASSWORD');
                define('DB_NAME', 'YOUR_DATABASE_NAME');
                define('URLROOT', 'http://localhost/YOUR_FOLDER_NAME');

        --If you changed project folder name, you will need to change .htaccess file in /public/.htaccess
                line4 : RewriteBase /"YOUR_FOLDER_NAME"/public
        
## Built With

- PHP
- HTML/CSS/JavaScript
- No frameworks - PLAIN PHP

## Author

👤 **Peteris**

- Github: [@Peteris](https://github.com/PeterisZevalds)
