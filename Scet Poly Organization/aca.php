<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize search query
$search_query = "";

// Check if search form is submitted
if (isset($_POST['search'])) {
    $search_query = $_POST['search_query'];
}

// Prepare SQL statement to prevent SQL injection
$sql = $conn->prepare("SELECT student_name, student_id, semester, subject_name, marks, status, date
        FROM student_academic_details
        WHERE student_id LIKE ? OR student_name LIKE ?
        ORDER BY student_id, semester");

// Bind parameters
$search_param = "%$search_query%";
$sql->bind_param("ss", $search_param, $search_param);

// Execute the query
$sql->execute();

// Get the result
$result = $sql->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home - Student Academic Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 5px;
            width: 300px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
<h2>Student Semester Details</h2>

<!-- Search Form -->
<form method="post" action="">
    <input type="text" name="search_query" placeholder="Search by Student ID or Name" value="<?php echo htmlspecialchars($search_query, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="submit" name="search" value="Search">
</form>

<!-- Display Table -->
<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Semester</th>
            <th>Subject Name</th>
            <th>Marks</th>
            <th>Status</th>
            <th>Date</
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['student_name'], ENT_QUOTES, 'UTF-8') . "</td>";
                echo "<td>" . htmlspecialchars($row['student_id'], ENT_QUOTES, 'UTF-8') . "</td>";
                echo "<td>" . htmlspecialchars($row['semester'], ENT_QUOTES, 'UTF-8') . "</td>";
                echo "<td>" . htmlspecialchars($row['subject_name'], ENT_QUOTES, 'UTF-8') . "</td>";
                echo "<td>" . htmlspecialchars($row['marks'], ENT_QUOTES, 'UTF-8') . "</td>";
                echo "<td>" . htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8') . "</td>";
                echo "<td>" . htmlspecialchars($row['date'], ENT_QUOTES, 'UTF-8') . "</td>";
                echo "<td><a href='edit_academic.php?id=" . urlencode($row['student_id']) . "&semester=" . urlencode($row['semester']) . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>

<?php
$sql->close();
$conn->close();
?>
