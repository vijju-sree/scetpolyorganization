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

// Get student register number from URL
if (isset($_GET['id'])) {
    $register_number = $_GET['id'];

    // Fetch existing details for the student
    $sql = "SELECT * FROM student_login WHERE register_number='$register_number'";
    $result = mysqli_query($data, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
    } else {
        echo "Student not found";
        exit;
    }
}

// Handle form submission for updating details
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $father_name = $_POST['father_name'];
    $father_mobile_number = $_POST['father_mobile_number'];
    $mother_name = $_POST['mother_name'];
    $mother_mobile_number = $_POST['mother_mobile_number'];
    $address = $_POST['address'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $circulam = $_POST['circulam'];
    $pass_percentage = $_POST['pass_percentage'];
    $attendence_percentage = $_POST['attendence_percentage'];
    $remark = $_POST['remark'];
    $activities = $_POST['activities'];

    // Update query
    $update_sql = "UPDATE student_login SET 
                    name='$name', 
                    branch='$branch', 
                    phone='$phone', 
                    email='$email', 
                    father_name='$father_name', 
                    father_mobile_number='$father_mobile_number', 
                    mother_name='$mother_name', 
                    mother_mobile_number='$mother_mobile_number',
                    address='$address',
                    year='$year',
                    semester='$semester',
                    circulam='$circulam',
                    pass_percentage='$pass_percentage',
                    attendence_percentage='$attendence_percentage',
                    remark='$remark',
                    activities='$activities'
                   WHERE register_number='$register_number'";

    if (mysqli_query($data, $update_sql)) {
        echo "Student details updated successfully.";
        header("Location: student.php"); // Redirect to student dashboard after update
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($data);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student Details</h1>

    <form method="post">
        <label>Student Name:</label>
        <input type="text" name="name" value="<?php echo $student['name']; ?>"><br>

        <label>Branch:</label>
        <input type="text" name="branch" value="<?php echo $student['branch']; ?>"><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $student['phone']; ?>"><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $student['email']; ?>"><br>

        <label>Father Name:</label>
        <input type="text" name="father_name" value="<?php echo $student['father_name']; ?>"><br>

        <label>Father Mobile Number:</label>
        <input type="text" name="father_mobile_number" value="<?php echo $student['father_mobile_number']; ?>"><br>

        <label>Mother Name:</label>
        <input type="text" name="mother_name" value="<?php echo $student['mother_name']; ?>"><br>

        <label>Mother Mobile Number:</label>
        <input type="text" name="mother_mobile_number" value="<?php echo $student['mother_mobile_number']; ?>"><br>

        <label>Address:</label>
        <textarea name="address"><?php echo $student['address']; ?></textarea><br>

        <label>Year:</label>
        <input type="text" name="year" value="<?php echo $student['year']; ?>"><br>

        <label>Semester:</label>
        <input type="text" name="semester" value="<?php echo $student['semester']; ?>"><br>

        <label>Circulum:</label>
        <input type="text" name="circulam" value="<?php echo $student['circulam']; ?>"><br>

        <label>Pass Percentage:</label>
        <input type="text" name="pass_percentage" value="<?php echo $student['pass_percentage']; ?>"><br>

        <label>Attendance Percentage:</label>
        <input type="text" name="attendence_percentage" value="<?php echo $student['attendence_percentage']; ?>"><br>

        <label>Remarks:</label>
        <textarea name="remark"><?php echo $student['remark']; ?></textarea><br>

        <label>Activities:</label>
        <textarea name="activities"><?php echo $student['activities']; ?></textarea><br>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
