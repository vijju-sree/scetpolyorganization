<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "college project";  // Avoid spaces in the database name, use underscores instead

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $semester = $_POST['semester'];
    $subjects = isset($_POST['subject']) ? $_POST['subject'] : [];
    $marks = isset($_POST['marks']) ? $_POST['marks'] : [];
    $statuses = isset($_POST['status']) ? $_POST['status'] : [];
    $date = $_POST['date'];

    // Loop through each subject to check for duplicates and insert into the database
    for ($i = 0; $i < count($subjects); $i++) {
        $subject_name = mysqli_real_escape_string($conn, $subjects[$i]);
        $mark = mysqli_real_escape_string($conn, $marks[$i]);
        $status = mysqli_real_escape_string($conn, $statuses[$i]);

        // Check if the record already exists
        $check_sql = "SELECT * FROM student_academic_details 
                      WHERE student_id = '$student_id' 
                      AND semester = '$semester' 
                      AND subject_name = '$subject_name' 
                      AND date = '$date'";
        $result = $conn->query($check_sql);

        if ($result->num_rows > 0) {
            // If the record exists, show a message
            echo "Record for $subject_name in Semester $semester for Student ID: $student_id on Date: $date already exists.<br>";
        } else {
            // Insert new record
            $sql = "INSERT INTO student_academic_details (student_name, student_id, semester, subject_name, marks, status, date) 
                    VALUES ('$student_name', '$student_id', '$semester', '$subject_name', '$mark', '$status', '$date')";

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

<!-- HTML Form to Input Student Academic Details -->
<form method="post" action="">
    <label>Student Name:</label>
    <input type="text" name="student_name" required><br><br>

    <label>Student ID:</label>
    <input type="text" name="student_id" required><br><br>

    <label>Semester:</label>
    <input type="number" name="semester" required><br><br>

    <label>Subjects:</label><br>
    <div id="subject-fields">
        <div class="subject-block">
            <input type="text" name="subject[]" placeholder="Subject Name" required>
            <input type="number" name="marks[]" placeholder="Marks" required>
            <select name="status[]" required>
                <option value="Pass">Pass</option>
                <option value="Fail">Fail</option>
            </select><br><br>
        </div>
    </div>

    <button type="button" onclick="addSubject()">Add Another Subject</button><br><br>

    <label>Passed out Date:</label>
    <input type="date" name="date" required><br><br>

    <input type="submit" value="Submit">
</form>

<script>
// Function to add more subject fields dynamically
function addSubject() {
    var subjectFields = document.getElementById('subject-fields');
    var newSubjectBlock = document.createElement('div');
    newSubjectBlock.classList.add('subject-block');
    newSubjectBlock.innerHTML = `
        <input type="text" name="subject[]" placeholder="Subject Name" required>
        <input type="number" name="marks[]" placeholder="Marks" required>
        <select name="status[]" required>
            <option value="Pass">Pass</option>
            <option value="Fail">Fail</option>
        </select><br><br>
    `;
    subjectFields.appendChild(newSubjectBlock);
}
</script>
