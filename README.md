
# SQL Injection Demo on Local Machine

## Overview
This project demonstrates a basic example of SQL injection vulnerability in a login system. The system is vulnerable to SQL injection attacks, allowing attackers to bypass authentication and potentially access sensitive information.

## Files Included
- **login_form.html**: HTML file containing the login form.
- **login.php**: PHP file handling backend logic for user authentication and displaying login results.
- **login_form.css**: CSS file for styling the login form.

## Instructions
1. **Setup Environment**: Ensure you have a web server environment set up to run PHP scripts.

2. **Database Configuration**: Modify the database connection parameters (`$servername`, `$username`, `$password`, `$dbname`) in the `login.php` file to match your database configuration.

3. **Database Setup**: Create a MySQL database and a table named `users` with columns `username` and `password`. Populate the table with sample user data.

4. **Run Application**: Place the HTML, PHP, and CSS files in your web server directory. Access the `login_form.html` file through your web browser.

5. **Exploit SQL Injection**: Experiment with different inputs in the username and password fields to demonstrate SQL injection vulnerabilities. Try entering `x'='x` in both fields to bypass authentication.

## Security Considerations
- **SQL Injection**: The system intentionally lacks input validation and sanitization, making it vulnerable to SQL injection attacks. This is for educational purposes only and should not be used in production environments.
- **Best Practices**: In a real-world scenario, always use prepared statements or parameterized queries to prevent SQL injection vulnerabilities.

## Notes
- This project is solely for educational purposes to demonstrate the risks of SQL injection. Ensure to use proper security measures in production systems to mitigate these risks.

---
