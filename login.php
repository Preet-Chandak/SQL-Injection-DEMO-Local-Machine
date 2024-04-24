<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
</head>
<body>
    <?php
    // Database connection parameters
    $servername = "####";
    $username = "root";
    $password = "####";
    $dbname = "login";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize user input to prevent SQL injection
    // Note: Better to use prepared statements or parameterized queries for this purpose
    // $username = mysqli_real_escape_string($conn, $username);
    // $password = mysqli_real_escape_string($conn, $password);

    // Query to check if username and password match
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $all = "SELECT * FROM users";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        if ($username == 'admin') {
            echo "<h3>All Usernames and Passwords:</h3>";
            $all_users = $conn->query($all);
            if ($all_users->num_rows > 0) {
                while ($user_row = $all_users->fetch_assoc()) {
                    echo "<p>Username: " . $user_row['username'] . ", Password: " . $user_row['password'] . "</p>";
                }
            }
        }
        echo "<h2>Login successful!</h2>";
        echo "<p>Username: $username</p>";
        // Avoid displaying password for security reasons
        echo "<p>Password: $password</p>";
        echo "<a href=\"http://localhost/cybersecurity/index.html\">Click for Redirecting...</a>";    
    }
    // echo $all_users;
    else {
        // Login failed
        echo "<h2>Invalid username or password.</h2>";
        echo "$sql";
    }
    

    // Close connection
    $conn->close();
    ?>
</body>
</html>
