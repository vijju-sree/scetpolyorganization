<?php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "college project"; // Ensure the database name is correct

// Create connection
$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$data) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $data_name = mysqli_real_escape_string($data, $_POST['name']);
    $data_register_number = mysqli_real_escape_string($data, $_POST['register_number']);
    $data_branch = mysqli_real_escape_string($data, $_POST['branch']);
    $data_phone = mysqli_real_escape_string($data, $_POST['phone']);
    $data_email = mysqli_real_escape_string($data, $_POST['email']);
    $data_father_name = mysqli_real_escape_string($data, $_POST['father_name']);
    $data_father_mobile_number = mysqli_real_escape_string($data, $_POST['father_mobile_number']);
    $data_mother_name = mysqli_real_escape_string($data, $_POST['mother_name']);
    $data_mother_mobile_number = mysqli_real_escape_string($data, $_POST['mother_mobile_number']);
    $data_address = mysqli_real_escape_string($data, $_POST['address']);
    $data_year = mysqli_real_escape_string($data, $_POST['year']);
    $data_semester = mysqli_real_escape_string($data, $_POST['semester']);
    $data_circulam = mysqli_real_escape_string($data, $_POST['circulam']);
    $data_pass_percentage = mysqli_real_escape_string($data, $_POST['pass_percentage']);
    $data_attendence_percentage = mysqli_real_escape_string($data, $_POST['attendence_percentage']);
    $data_remark = mysqli_real_escape_string($data, $_POST['remark']);
    $data_activities = mysqli_real_escape_string($data, $_POST['activities']);

    // Check if register_number already exists
    $check_sql = "SELECT * FROM `student_login` WHERE register_number = '$data_register_number'";
    $result = mysqli_query($data, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // If the register_number already exists
        echo "Error: A student with the register number '$data_register_number' already exists!";
    } else {
        // SQL Insert Query
        $sql = "INSERT INTO `student_login` 
                (name, register_number, branch, phone, email, father_name, father_mobile_number, mother_name, mother_mobile_number, address, year, semester, circulam, pass_percentage, attendence_percentage, remark, activities) 
                VALUES 
                ('$data_name', '$data_register_number', '$data_branch', '$data_phone', '$data_email', '$data_father_name', '$data_father_mobile_number', '$data_mother_name', '$data_mother_mobile_number', '$data_address', '$data_year', '$data_semester', '$data_circulam', '$data_pass_percentage', '$data_attendence_percentage', '$data_remark', '$data_activities')";

        // Execute the query
        if (mysqli_query($data, $sql)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($data);
        }
    }
} else {
    echo "Form not submitted or wrong request method.";
}

// Close the connection
mysqli_close($data);
