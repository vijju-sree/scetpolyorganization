<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Color Website Design</title>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body {
        
            font-family: Arial, sans-serif;
            margin: 0; 
            padding: 0;

            color: #FFFFFF; /* Text color (Gold) */
            background-color: #003366; /* Background color (Navy) */
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #003366; /* Navy */
            padding: 0px;
            display: flex;
            text-align: left;
        }
        header h1 {
            margin: 10;
           font-size:30px;
            color: #FFD700; /* Gold */
            text-align: center;
        }
        header img{
          width: 200px;
            height: 200px;
        }
        h2{
           font-size: 30px;
           color:#FFD700
           
        }
        p1{
          font-size: 20px;
          color:black;
          text-align: left;
        }
        p2{
          font-size: 15px;
          color:black;
          text-align: left;
        }
        p3{
          font-size: 30px;
          color:black;
          text-align:left;
        }
        .container {
    overflow: hidden; /* Clearfix for floating elements */
    padding: 20px;
}

.text {
    float: left;
    width: 45%; /* Adjust as needed */
    padding: 10px;
}

.map {
    float: right;
    width: 45%; /* Adjust as needed */
    padding: 10px;
}

iframe {
    width: 100%;
    height: 2000000%;
    border: none;
}
        main {
            padding: 20px;
            background-color: #004080; /* Medium Navy for content area */
        }
        footer {
            background-color: #002244; /* Slightly darker Navy */
            padding: 10px;
            text-align: center;
            color: #FFD700; /* Gold */
             left:200px;
             top:100px;
        }

    </style>
  </head>
    
        <header>
          <img src="https://www.swarnandhra.ac.in/img/footer/swarnandhra-logo-C.png" alt="College Logo">
            <h1><B>SWARNANDHRA COLLEGE OF ENGINEERING TECHNOLOGY<br>
                      POLYTECHNIC (DIPLOMA)AUTONOM0US<br>
                          Narsapur-534280 W.G.Dist.,(Ap)</B>
            </h1>
        </header>
    <main>
       

  
    <center>
        <div class="container">
            <h2>Login Form</h2>
            <form method="POST" action="login_check.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        </div>
    </center>
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




 
</main>
    </body>

<footer>
  &copy; 2024 Swarnandhra College
</footer>
    
</html>