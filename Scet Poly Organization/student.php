<?php
     $host = "localhost";
     $user = "root";
     $password = "";
     $db = "college project";  // Corrected the database name

     // Connect to the database
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
         $search_query = " WHERE name LIKE '%$search_input%' OR register_number LIKE '%$search_input%'";
     }

     // Fetch student records based on search input (if any)
     $sql = "SELECT * FROM student_login" . $search_query;

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
        /* Add your existing styling here */
    </style>
  </head>
    
  <body>
    <header>
      <!-- Existing Header Content -->
    </header>

    <main>
      <h1>Search Student Details</h1>

      <!-- Search Form -->
      <form method="POST" action="">
        <label for="search_input">Search by Name or Register Number:</label>
        <input type="text" name="search_input" id="search_input" placeholder="Enter Name or Register Number" required>
        <button type="submit" name="search">Search</button>
      </form>

      <table border="1px">
        <tr>
            <!-- Add Edit Column -->
            <th>Edit</th>
            <th>Student Name</th>
            <th>Register Number</th>
            <th>Branch</th>
            <th>Student Mobile Number</th>
            <th>Student Email</th>
            <th>Father Name</th>
            <th>Father Mobile Number</th>
            <th>Mother Name</th>
            <th>Mother Mobile Number</th>
            <th>Address</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Circulum</th>
            <th>Pass Percentage</th>
            <th>Attendance Percentage</th>
            <th>Remarks</th>
            <th>Activities</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($info = $result->fetch_assoc()) {
        ?>
        <tr>
            <!-- Add an Edit button linking to the edit page -->
            <td>
                <a href="edit_student.php?id=<?php echo $info['register_number']; ?>">
                    <button class="button">Edit</button>
                </a>
            </td>
            <td><?php echo $info['name']; ?></td>
            <td><?php echo $info['register_number']; ?></td>
            <td><?php echo $info['branch']; ?></td>
            <td><?php echo $info['phone']; ?></td>
            <td><?php echo $info['email']; ?></td>
            <td><?php echo $info['father_name']; ?></td>
            <td><?php echo $info['father_mobile_number']; ?></td>
            <td><?php echo $info['mother_name']; ?></td>
            <td><?php echo $info['mother_mobile_number']; ?></td>
            <td><?php echo $info['address']; ?></td>
            <td><?php echo $info['year']; ?></td>
            <td><?php echo $info['semester']; ?></td>
            <td><?php echo $info['circulam']; ?></td>
            <td><?php echo $info['pass_percentage']; ?></td>
            <td><?php echo $info['attendence_percentage']; ?></td>
            <td><?php echo $info['remark']; ?></td>
            <td><?php echo $info['activities']; ?></td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='18'>No records found</td></tr>";
        }
        ?>
      </table>
   </main>

    <footer>
      &copy; 2024 Swarnandhra College
    </footer>
  </body>
</html>
