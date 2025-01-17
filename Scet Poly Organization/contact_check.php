<?php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "college project"; // Make sure the database name is correct

// Create connection
$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$data) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $data_name = mysqli_real_escape_string($data, $_POST['Name']);
    $data_phone = mysqli_real_escape_string($data, $_POST['phone']);
    $data_email = mysqli_real_escape_string($data, $_POST['email']);
    $data_message = mysqli_real_escape_string($data, $_POST['message']);

    // SQL Insert Query
    $sql = "INSERT INTO `contact_form` (name, phone, email, message) VALUES ('$data_name', '$data_phone', '$data_email', '$data_message')";

    // Execute the query
    if (mysqli_query($data, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($data);
    }
} else {
    echo "Form not submitted or wrong request method.";
}

// Close the connection
mysqli_close($data);

