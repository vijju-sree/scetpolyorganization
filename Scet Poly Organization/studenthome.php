<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Color Website Design</title>

    <!-- Latest Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #FFFFFF;
            background-color: #003366;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #003366;
            padding: 0px;
            display: flex;
            text-align: left;
        }
        header h1 {
            margin: 10px;
            font-size: 30px;
            color: #FFD700;
            text-align: center;
        }
        header img {
            width: 200px;
            height: 200px;
        }
        main {
            padding: 20px;
            background-color: #004080;
        }
        footer {
            background-color: #002244;
            padding: 10px;
            text-align: center;
            color: #FFD700;
        }
    </style>
  </head>

  <body>
    <header>
        <img src="https://www.swarnandhra.ac.in/img/footer/swarnandhra-logo-C.png" alt="College Logo">
        <h1><B>SWARNANDHRA COLLEGE OF ENGINEERING TECHNOLOGY<br>POLYTECHNIC (DIPLOMA) AUTONOMOUS<br>Narsapur-534280 W.G.Dist.,(Ap)</B></h1>
    </header>

    <main>
      <center>
        <div class="container">
            <h2>Student Form</h2>
            <form method="POST" action="data_check.php">
                <!-- Form Fields -->
                <div class="form-group">
                    <label for="name">Student Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="register_number">Register Number:</label>
                    <input type="text" id="register_number" name="register_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="branch">Branch:</label>
                    <input type="text" id="branch" name="branch" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone">Student Mobile Number:</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Student Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="father_name">Father Name:</label>
                    <input type="text" id="father_name" name="father_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="father_mobile_number">Father Mobile Number:</label>
                    <input type="text" id="father_mobile_number" name="father_mobile_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_name">Mother Name:</label>
                    <input type="text" id="mother_name" name="mother_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_mobile_number">Mother Mobile Number:</label>
                    <input type="text" id="mother_mobile_number" name="mother_mobile_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="text" id="year" name="year" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="semester">Semester:</label>
                    <input type="text" id="semester" name="semester" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="circulam">Regulation of Circulam:</label>
                    <input type="text" id="circulam" name="circulam" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="pass_percentage">Pass Percentage:</label>
                    <input type="text" id="pass_percentage" name="pass_percentage" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="attendence_percentage">Attendance Percentage:</label>
                    <input type="text" id="attendence_percentage" name="attendence_percentage" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="remark">Remarks:</label>
                    <input type="text" id="remark" name="remark" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="activities">Student Activities:</label>
                    <input type="text" id="activities" name="activities" class="form-control" required>
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
      </center>
    </main>

    <footer>
      &copy; 2024 Swarnandhra College
    </footer>
  </body>
</html>
