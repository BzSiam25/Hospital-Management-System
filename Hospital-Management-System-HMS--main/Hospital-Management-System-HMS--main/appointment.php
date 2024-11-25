<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- google fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
      <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="desktop.css" media="screen and (min-width:992px)">
</head>
<body>
      <!-- navbar starts here -->
      <div class="navbar" id="home-id">
        <h3 >Hospital Management System</h3>
      <div class="col-4" >
          
         <h1>
         <i class="fa fa-user-plus" aria-hidden="true"></i>
         </h1>
         
      
         
      </div>
      
      <div class="navbar-menu col-8" >
         <a href="#body">Home</a>
         <a href="feedback.php">Feedback</a>
         <a href="#footer">Follow Us </a>
      </div>
      </div>
      
      <!-- navbar ends here -->

    <!-- body part starts here -->
  
    <div class="container" id="body">

      <div class="card">
          <img src="image/patient-icon-22.png" alt="patient logo" >
          
          <div class="reg">
            &nbsp;&nbsp;&nbsp;
            <p><a href="patientsignup.php">Sign Up</a></p>&nbsp;&nbsp; &nbsp;&nbsp;
            <p><a href="patientlogin.php">Login For Patient</a></p>
          </div>
          
          
        </div>
        <div class="card">
          <img src="image/doctor.png" alt="doctor logo" >
         
          <p><a href="doctorlogin.php">Login For Doctor</a></p>
          
        </div>
        <div class="card">
          <img src="image/admin.jpg" alt="" >
         
          <p><a href="adminlogin.php">Login For Administrator</a></p>
          
        </div>
        <div class="card">
          <img src="image/appointment.png" alt="" >
             <p><a href="appointment.php">Appointment</a></p>
        </div>
  </div>

    <!-- body part ends here -->

      <!-- footer starts here -->
       
    <div id="footer">
      <div class="contact-links ">
          <h2>Follow  Us</h2>
         
          <div class="media-buttons">
              <button class="btn" onclick="window.open('https://www.facebook.com/tushar.basak.9693')" ><i class="fa fa-facebook" style="color:  #3063d0;" ></i></button>
              <button class="btn" onclick="window.open('https://www.linkedin.com/in/tushar-basak-823b69226/')" ><i class="fa fa-linkedin" style="color:  #2b61d5;" ></i></button>
              <button class="btn" onclick="window.open('https://mail.google.com/', '_blank')" ><i class="fa fa-edge" style="color:  #2b61d5;"></i></button>
              
              
          </div>

          <p class="copyright">© All rights reserved to Group-1 </p>
      </div>
  


                     
          
      
  </div>
  <!-- footer ends here  -->
</body>
</html>



