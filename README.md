# User Registration System: Project Overview 
* Integrating mySQL databases and PHP scripts 
* Inserting values into database or reading values from them
* Mimicking platforms that use User registration and applying logic in PHP to ensure certain parameters 

## Resources Used
**PHP, mySQL, Apache, XAMPP** 

## Database creation 
Using localhost/phpmyadmin/ I created a new database and a new table with the fields that PHP scripts will point to

*   Fields:
    *   ID
    *   Username
    *   Email
    *   Password

## Page creation
After creating the table, I needed to create the different registration and login pages for the user. I made the following changes and created the following pages:

*   [registration.php](registration.php)
    *   4 inputs required for registration; Username, Email, Password, and confirm password
    *   All fields were requeired so required tag was added which would prevent fields from being submitted as null
    *   Login page referenced if User already had registered
*   [login.php](login.php)
    *   2 inputs required for login; Username and password 
    *   All fields were requeired so required tag was added which would prevent fields from being submitted as null
    *   Registration page referenced if User already had registered.
*   [server.php](server.php) 
    *   Connection to the database  
    *   Importing values enetered at registration
    *   Passwords were enrypted on database side so Database Administrator would not be able to view passwords
    *   Validation:
        *    if statements for validation e.g if Password and confirm password are not equal throw an error
        *    Not allowing existing usernames or emails from new users 
*   [index.php](index.php)
*   [errors.php](errors.php) 


## View
Login page

<img src="images/Login Page.png" alt="Alt text that describes the graphic" title="Title text" />


## Evaluation 


