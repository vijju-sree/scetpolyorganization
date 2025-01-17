<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "college project";  // Prefer using underscores instead of spaces in the database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $student_name = $conn->real_escape_string($_POST['student_name']);
    $student_id = $conn->real_escape_string($_POST['student_id']);
    $semester = $conn->real_escape_string($_POST['semester']);
    $mid = $conn->real_escape_string($_POST['mid']);
    $subject_names = $_POST['subject'];
    $marks = $_POST['marks'];
    $averages = $_POST['average'];
    $statuses = $_POST['status'];

    // Loop through each subject to insert into the database
    for ($i = 0; $i < count($subject_names); $i++) {
        $subject_name = $conn->real_escape_string($subject_names[$i]);
        $mark = $conn->real_escape_string($marks[$i]);
        $average = $conn->real_escape_string($averages[$i]);
        $status = $conn->real_escape_string($statuses[$i]);

        // Check if the record already exists (duplicate check)
        $check_sql = "SELECT * FROM student_mid_details WHERE student_id = '$student_id' AND mid = '$mid' AND subject_name = '$subject_name'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            // If the record exists, show a message
            echo "Record for $subject_name in Mid $mid already exists for Student ID: $student_id.<br>";
        } else {
            // Insert new record
            $sql = "INSERT INTO student_mid_details (student_name, student_id, semester, mid, subject_name, marks, average, status) 
                    VALUES ('$student_name', '$student_id', '$semester', '$mid', '$subject_name', '$mark', '$average', '$status')";

            // Execute the query and handle errors
            if ($conn->query($sql) === TRUE) {
                echo "Subject details for $subject_name added successfully.<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Mid Exam Marks</title>
</head>
<body>

<h1>Mid Exam Marks</h1>

<!-- HTML Form to Input Student Academic Details -->
<form method="post" action="">
    <label>Student Name:</label>
    <input type="text" name="student_name" required><br><br>
     
    <label>Student ID:</label>
    <input type="text" name="student_id" required><br><br>

    <label>Semester:</label>
    <input type="text" name="semester" required><br><br>

    <label>Mid:</label>
    <input type="text" name="mid" required><br><br>

    <label>Subjects:</label><br>
    <div id="subject-fields">
        <div class="subject-block">
            <input type="text" name="subject[]" placeholder="Subject Name" required>
            <input type="number" name="marks[]" placeholder="Marks" required><br><br>

            <label>Average:</label><br>
            <input type="text" name="average[]" placeholder="Average" required><br><br>

            <select name="status[]" required>
                <option value="Pass">Pass</option>
                <option value="Fail">Fail</option>
            </select><br><br>
        </div>
    </div>

    <button type="button" onclick="addSubject()">Add Another Subject</button><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<script>
// Function to add more subject fields dynamically
function addSubject() {
    var subjectFields = document.getElementById('subject-fields');
    var newSubjectBlock = document.createElement('div');
    newSubjectBlock.classList.add('subject-block');
    newSubjectBlock.innerHTML = `
        <input type="text" name="subject[]" placeholder="Subject Name" required>
        <input type="number" name="marks[]" placeholder="Marks" required><br><br>
        <label>Average:</label><br>
        <input type="text" name="average[]" placeholder="Average" required><br><br>
        <select name="status[]" required>
            <option value="Pass">Pass</option>
            <option value="Fail">Fail</option>
        </select><br><br>
    `;
    subjectFields.appendChild(newSubjectBlock);
}
</script>

</body>
</html>
