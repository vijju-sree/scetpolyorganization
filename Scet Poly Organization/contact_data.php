<?php
// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$db = "college project";  // Ensure the database name is correct

// Create connection
$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize search query
$search_query = "";
if (isset($_POST['search'])) {
    // Get the search input from the form
    $search_input = mysqli_real_escape_string($data, $_POST['search_input']);

    // Modify the SQL query to search by student name or register number
    $search_query = " WHERE name LIKE '%$search_input%' OR name LIKE '%$search_input%'";
}

// Fetch student records based on search input (if any)
$sql = "SELECT * FROM contact_form" . $search_query;
$result = mysqli_query($data, $sql);

// Check if query execution was successful
if (!$result) {
    die("Query failed: " . mysqli_error($data));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student Details</title>
    
    <!-- Include your CSS and JS files here -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <header>
        <!-- Existing Header Content -->
    </header>

    <main>
        <h1>Search Student Details</h1>

        <form method="POST" action="">
            <div>
                <label for="search_input">Search by Name:</label>
                <input type="text" id="search_input" name="search_input">
                <input type="submit" name="search" value="Search">
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($info = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($info['name']); ?></td>
                    <td><?php echo htmlspecialchars($info['phone']); ?></td> <!-- Now displays phone numbers as strings -->
                    <td><?php echo htmlspecialchars($info['email']); ?></td>
                    <td><?php echo htmlspecialchars($info['message']); ?></td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        &copy; 2024 Swarnandhra College
    </footer>
</body>
</html>

<?php
// Close the connection
mysqli_close($data);
?>
