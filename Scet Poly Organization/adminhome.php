<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

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
            margin: 10px;
            font-size: 30px;
            color: #FFD700; /* Gold */
            text-align: center;
        }
        header img {
            width: 200px;
            height: 200px;
        }
        h2 {
            font-size: 30px;
            color: #FFD700;
        }
        p1, p2, p3 {
            color: WHITE;
        }
        p1 {
            font-size: 20px;
            text-align: left;
        }
        p2 {
            font-size: 15px;
            text-align: left;
        }
        p3 {
            font-size: 30px;
            text-align: left;
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
            height: 450px; /* Adjust height as needed */
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
        }
        .button, .button1 {
            padding: 10px 35px;
            font-size: 15px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #003366;
            border: none;
            border-radius: 5px;
            box-shadow: 0 9px #999;
            margin-right: 10px;
        }
        .button:hover, .button1:hover {
            background-color: #002244;
        }
        .button:active, .button1:active {
            background-color: #FFD700;
            box-shadow: 0.5px #666;
            transform: translateY(4px);
        }
        .button {
            width: 160px;
        }
        .button1 {
            width: 150px;
        }
    </style>
  </head>
  <body>
    <header>
        <img src="https://www.swarnandhra.ac.in/img/footer/swarnandhra-logo-C.png" alt="College Logo">
        <h1><b>SWARNANDHRA COLLEGE OF ENGINEERING TECHNOLOGY<br>
                  POLYTECHNIC (DIPLOMA)AUTONOMOUS<br>
                      Narsapur-534280 W.G.Dist.,(Ap)</b>
        </h1>
    </header>
    <main>
        <h1>Welcome to the Admin Home</h1>
        <a href="contact_data.php">
            <button class="button">
                View Admission Details
            </button><br><br><br>
        </a>
        <a href="student.php">
            <button class="button">
                View Student Details
            </button>
        </a><br><br><br>

        <a href="acadmic.php">
            <button class="button">Enter Semester Marks</button>
        </a><br><br><br>

        <a href="aca.php">
            <button class="button">View Semester Marks</button>
        </a><br><br><br>

        <a href="mid.php">
            <button class="button">Enter Mid Marks</button>
        </a><br><br><br>

        <a href="mid_data.php">
            <button class="button">
                View Mid Marks
            </button>
        </a><br><br>

        <a href="logout.php">
            <button class="button">
                Logout
            </button>
        </a>
        <h1>Student Details Dashboard</h1>
    </main>
    <div class="container">
        <div class="text">
            <h2><u>Swarnandhra College Text Location</u></h2>
            <p3>
                SWARNANDHRA COLLEGE OF ENGINEERING TECHNOLOGY<br>
                Seetharamapuram, Narsapur, West Godavari District<br>
                Andhra Pradesh-534280, India         
            </p3>
        </div>
        <div class="map">
            <h2><u>Swarnandhra College Map Location</u></h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.123654905456!2d81.657957!3d16.418582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a37d707cf0d34a5%3A0xab73194f64b31016!2sSwarnandhra%20College%20of%20Engineering%20and%20Technology(autonomous)!5e0!3m2!1sen!2sin!4v1691155087175!5m2!1sen!2sin"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
    <div class="container">
        <div class="text">
            <h2><u>Anti Ragging</u></h2>
            <img src="https://www.swarnandhra.ac.in/img/footer/anti-ragging-symbol.png" alt="Anti Ragging Symbol">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ53um7txaFCwtZEG18fXYL_92_swS6qT44GQ&s" alt="Anti Ragging Symbol">
            <p2>
                Swarnandhra College of Engineering and Technology (SCET)<br>
                in Andhra Pradesh, India, like many institutions, has a<br>
                comprehensive anti-ragging policy to ensure a safe and <br>
                respectful environment for all students. Here’s an overview<br>
                of what such a policy entails. The policy defines ragging as any act<br>
                that causes physical or psychological harm to students. This<br>
                can include harassment, humiliation, or any form of bullying.<br>
                SCET enforces a strict no-ragging policy, which means that any<br>
                form of ragging is not tolerated. The institution maintains a <br>
                zero-tolerance stance to ensure that students are protected.<br>
                Preventive Measures include awareness programs and orientations for students and staff <br>
                about the ill effects of ragging and the importance of <br>
                maintaining a safe environment. Clear rules are established and communicated to students at the<br>
                beginning of each academic year, outlining what constitutes <br>
                ragging and the consequences of engaging in such behavior.
            </p2>
        </div>
        <div class="text">
            <h2><u>Contact Us</u></h2>
            <p2>
                <img src="https://www.swarnandhra.ac.in/img/footer/email-icon.svg" alt="Email Icon">
                <p3>scetpoly@gmail.com</p3><br><br>
                <img src="https://www.swarnandhra.ac.in/img/footer/phone-icon.svg" alt="Phone Icon">
                <p3>9346610099, 7989106066</p3>
            </p2>
        </div>
    </div>
    <footer>
        &copy; 2024 Swarnandhra College
    </footer>
  </body>
</html>
