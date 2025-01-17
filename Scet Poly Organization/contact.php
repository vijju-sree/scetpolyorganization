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
           color: #FFD700;  /* Gold */
            text-align: center;
        }
        header img{
          width: 200px;
            height: 200px;
        }
        h2{
           font-size: 30px;
           color:#FFD700;
           
        }
        p1{
          font-size: 15px;
          color:white;
          text-align: left;
        }
       
        p3{
          font-size: 30px;
          color:white;
          text-align:left;
        }
        p2{
            font-size: 20px;

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
       
    <h2><u> Contact Information</u></h2> 
    <p2><b><u>Principal Name:</u></b> Dr. M. Sai Kiranmayi,<br>
              M.A.,M.Phil, Ph.D (Eng Litt.), PGDCM&P<br>
              Professor of English</p2><br><br>
    <p2><b><u>Gmail</u></b>:  info@swarnandhra.ac.in<br><br></p2>
    <p2><b><u>Phone Number</u></b>:  +91 9676400258, +91 7013423501

</p2><br><br>
    <p2><b><u>Address:</u></b>Swarnandhra Polytechnic College (CC:258) Seetharamapuram, Narsapur-534 280 Approved by AICTE, New Delhi, Affiliated to SBTET-AP</p2><r><br></r>

  
    <center>
        <div class="container">
            <h2>Contact Form</h2>
            <form method="POST" action="contact_check.php">
    <div class="form-group">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="phone" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" class="form-control" required></textarea>
    </div>

    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>

            
        </div>
    </center>

    
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</main>
    </body>
    <div class="container">
            <div class="text">
                <h2><u>Swarnandhra College Text Location</u></h2>
                <p3>
                    SWARNANDHRA COLLEGE OF ENGINEERING TECHNOLOGY<BR>
                    Seetharamapuram, Narsapur, West Godavari District<br>
                    Andhra Pradesh-534280, India         
                </p3>
            </div>
            <div class="map">
              <h2><u>Swarnandhra College Map Location</u></h2>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.123654905456!2d81.657957!3d16.418582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a37d707cf0d34a5%3A0xab73194f64b31016!2sSwarnandhra%20College%20of%20Engineering%20and%20Technology(autonomous)!5e0!3m2!1sen!2sin!4v1691155087175!5m2!1sen!2sin"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
            
          </div>
          <div class="container">
            <div class="text">
                <h2>
                    <u>
                        Anti Ragging
                    </u>
                </h2>
                <div class="img">
                    <img src="https://www.swarnandhra.ac.in/img/footer/anti-ragging-symbol.png">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ53um7txaFCwtZEG18fXYL_92_swS6qT44GQ&s">
                </div>
                <p1>
                Swarnandhra College of Engineering and Technology (SCET)
        in Andhra Pradesh, India, like many institutions,has a
        comprehensive anti-ragging policy to ensure a safe and 
        respectful environment for all students.Here’s an overview
        of what such a policy. The policy defines ragging as any act
        that causes physical or psychological harm to students. This
        can include harassment, humiliation, or any form of bullying.
        SCET enforces a strict no-ragging policy, which means that any
        form of ragging is not tolerated. The institution maintains a 
        zero-tolerance stance to ensure that students are protected.
        Preventive Measures Awareness Programs. The college conducts
        awareness campaigns and orientations for students and staff 
        about the ill effects of ragging and the importance of 
        maintaining a safe environment. Rules and Regulations Clear
        rules are established and communicated to students at the
        beginning of each academic year, outlining what constitutes 
        ragging and the consequences of engaging in such behavior.

          
                </p1>
            </div>
            <div class="text">
                <h2>
                    <u>
                        Contact us
                    </u>
                </h2>
                <p2>
                    <div class="container">
                        <div class="img">
                            <img src="https://www.swarnandhra.ac.in/img/footer/email-icon.svg">
                            <p3> scetpoly@gmail.com</p3><br><br>
                            <img src="https://www.swarnandhra.ac.in/img/footer/phone-icon.svg">
                            <p3>9346610099, 7989106066</p3>
                         </div>
                         </div><div class="links">
                        <h2><u>Diploma Related Links</u></h2>
                        <H2>
                        <a href="https://sbtet.ap.gov.in/APSBTET/">SBTET </a><br>
                        <a href="https://apsbtet.net/studentportal/screens/mainstudentinfo.aspx">Portal Link</a><br>
                        <a href="https://sbtet.ap.gov.in/APSBTET/results.do">Polytechnic Results Link</a><br>
                        </H2>
                </div>
                    </div>
                </p2>
            </div>
          </div>
          
          <footer>
            &copy; 2024 Swarnandhra College
          </footer>
              </body>
          </html>