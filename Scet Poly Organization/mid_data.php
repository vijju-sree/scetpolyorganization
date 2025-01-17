<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "college project";  // Renamed database without spaces (preferred practice)

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
    $search_query = $conn->real_escape_string($_POST['search_query']);
}

// Fetch student academic details based on search query
$sql = "SELECT student_name, student_id, semester, mid, subject_name, marks, average, status 
        FROM student_mid_details
        WHERE student_id LIKE '%$search_query%' OR subject_name LIKE '%$search_query%'
        ORDER BY student_id";

$result = $conn->query($sql);

// Check for SQL errors
if ($result === false) {
    die("Error executing query: " . $conn->error); // This will display the actual SQL error
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Academic Details</title>
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

<h2>Student Mid Details</h2>

<!-- Search Form -->
<form method="post" action="">
    <input type="text" name="search_query" placeholder="Search by Student ID or Subject" value="<?php echo htmlspecialchars($search_query); ?>">
    <input type="submit" name="search" value="Search">
</form>

<!-- Display Table -->
<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Semester</th>
            <th>Mid</th>
            <th>Subject Name</th>
            <th>Marks</th>
            <th>Average</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['student_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['student_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
                echo "<td>" . htmlspecialchars($row['mid']) . "</td>";
                echo "<td>" . htmlspecialchars($row['subject_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['marks']) . "</td>";
                echo "<td>" . htmlspecialchars($row['average']) . "</td>";
                echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No student academic details found</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php
$conn->close();
?>

</body>
</html>
