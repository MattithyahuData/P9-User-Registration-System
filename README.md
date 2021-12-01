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
After creating the table, I needed to create the different registration and login pages for the user. I made the following changes and created the following variables:

*   Registration.php
    *   4 inputs required for registration; Username, Email, Password, and confirm password
    *   All fields were requeired so required tag was added which would prevent fields from being submitted as null
    *   Login page referenced if User already had registered
*   Login.php 
    *   2 inputs required for login; Username and password 
    *   All fields were requeired so required tag was added which would prevent fields from being submitted as null
    *   Registration page referenced if User already had registered.
*   Server.php 
    *   Connection to the database  
    *   Importing values enetered at registration
    *   Passwords were enrypted on database side so Database Administrator would not be able to view passwords
    *   Validation:
        *    if statements for validation e.g if Password and confirm password are not equal throw an error
        *    Not allowing existing usernames or emails from new users 


## View
Log in page

<img src="images/Login Page.png" alt="Alt text that describes the graphic" title="Title text" />
![alt text](https://github.com/PlayingNumbers/ds_salary_proj/blob/master/salary_by_job_title.PNG "Salary by Position")
![alt text](https://github.com/PlayingNumbers/ds_salary_proj/blob/master/positions_by_state.png "Job Opportunities by State")
![alt text](https://github.com/PlayingNumbers/ds_salary_proj/blob/master/correlation_visual.png "Correlations")

## Data Warehousing
AAAAAAAAAAAAAAAAAAAAAAAAA

*   Made a new column for company state 
*   Added a column for if the job was at the company’s headquarters 
*   Transformed founded date into age of company 

## Evaluation 
In this step, I built a flask API endpoint that was hosted on a local webserver by following along with the TDS tutorial in the reference section above. The API endpoint takes in a request with a list of values from a job listing and returns an estimated salary. 


