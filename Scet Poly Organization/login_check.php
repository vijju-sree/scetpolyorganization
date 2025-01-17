<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "college project"; // Ensure the database name doesn't have spaces

// Create connection
$data = new mysqli($host, $user, $password, $db);

// Check connection
if ($data->connect_error) {
    die("Connection failed: " . $data->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure both 'username' and 'password' are set and not empty
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];

        // Prepare and bind
        $stmt = $data->prepare("SELECT usertype FROM user WHERE username=? AND password=?");
        $stmt->bind_param("ss", $name, $pass);

        // Execute the statement
        $stmt->execute();
        
        // Bind the result
        $stmt->bind_result($usertype);
        
        // Fetch the result
        if ($stmt->fetch()) {
            if ($usertype == "student") {
                header("Location: studenthome.php");
            } elseif ($usertype == "admin") {
                header("Location: adminhome.php");
            }
        } else {
            echo "Username or password do not match";
        }

        // Close the statement and connection
        $stmt->close();
    } else {
        echo "Please fill in both username and password.";
    }
}

$data->close();
