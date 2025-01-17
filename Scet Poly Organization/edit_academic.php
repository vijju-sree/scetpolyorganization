<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$db = "college project";
$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

$student_id = $semester = $marks = $status = $date = "";

// Get student ID and semester from URL
if (isset($_GET['id']) && isset($_GET['semester'])) {
    $student_id = mysqli_real_escape_string($data, $_GET['id']);
    $semester = mysqli_real_escape_string($data, $_GET['semester']);

    // Fetch existing details for the student
    $sql = "SELECT * FROM student_academic_details WHERE student_id='$student_id' AND semester='$semester'";
    $result = mysqli_query($data, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
        $marks = $student['marks'];
        $status = $student['status'];
        $date = $student['date']; // Correctly fetch date from the result
    } else {
        echo "Record not found";
        exit;
    }
} else {
    echo "No ID or semester provided";
    exit;
}

// Handle form submission for updating details
if (isset($_POST['update'])) {
    $marks = mysqli_real_escape_string($data, $_POST['marks']);
    $status = mysqli_real_escape_string($data, $_POST['status']);
    $date = mysqli_real_escape_string($data, $_POST['date']); // Ensure date is fetched properly

    // Update query
    $update_sql = "UPDATE student_academic_details SET marks='$marks', status='$status', date='$date' WHERE student_id='$student_id' AND semester='$semester'";

    if (mysqli_query($data, $update_sql)) {
        // Redirect to aca.php after successful update
        header("Location: aca.php"); // Adjust the URL if needed
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($data);
    }
}

mysqli_close($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Details</title>
    <style>
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="date"], input[type="submit"] {
            display: block;
            margin: 10px 0;
            width: 100%;
            padding: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
<h2>Edit Student Academic Details</h2>
<form method="post" action="">
    <label for="marks">Marks:</label>
    <input type="text" id="marks" name="marks" value="<?php echo htmlspecialchars($marks, ENT_QUOTES, 'UTF-8'); ?>" required>

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" value="<?php echo htmlspecialchars($status, ENT_QUOTES, 'UTF-8'); ?>" required>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?>" required>

    <input type="submit" name="update" value="Update">
</form>
</body>
</html>
