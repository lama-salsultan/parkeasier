<?php
session_start();
if (isset ($_SESSION['un'] ) ) 
{
  $_SESSION['un'];
    //success
}
else 
header("location:/signin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <meta charset="utf-8" />
    <title></title>
    <script type="text/javascript">
        function note(){
            let n = document.forms[0].name.value;
            window.alert("Thank you "+n+" for your concern we will be in contact with you soon!")
        }
    </script>
    <style type="text/css">
        body {
            color: black;
        }
        #logolink {
            text-decoration:none;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <main class="main">
        <nav class="navbar navbar-expand bg-dark navbar-dark">
      <div class="container-fluid">
          <a href="main.php" style=" text-decoration: none; color: white;"><img src="img/logo.png" style="height:10%; width:10%;">Parking Easier</a>
          <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" style="color: white;"><img src="img/profile.png" style="width: 15pt; height:15pt;"> Hello <?php  echo($_SESSION['un'])?> </a>
                  <ul class="dropdown-menu">
                 
                      <li><a class="dropdown-item" href="booking.php">My Bookings</a></li>
                      <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="main.php"> Home</a>
              </li>
              
              
              <li class="nav-item">
                  <a class="nav-link active" href="about.php"> About Us</a>
              </li> 
              
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">More</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="selfparking.php">Self Parking Booking</a></li>
                      <li><a class="dropdown-item" href="valet.php">Valet Booking</a></li>
                      <li><a class="dropdown-item" href="complain.php">Complain</a></li>

                  </ul> 
            
          </ul>

      </div>
  </nav>

            <h1 class="display-4">Complaint Form</h1>

            <hr class="my-4">

            <form class="form">
                <div class="form-group" mb-3>
                    <label for="fullname"></label>
                    <div class="input-group">
                        <div class="input-group-text">Name</div>
                        <input type="text" class="form-control" id="name" placeholder="First and Last Name" required>
                    </div>
                </div>
                <div class="form-group" mb-3>
                    <label for="email"></label>
                    <div class="input-group">
                        <div class="input-group-text">Email</div>
                        <input type="email" class="form-control" id="email" placeholder="email@domain.com" required>
                    </div>
                </div>
                <div class="form-group" mb-3>
                    <label for="telephone"></label>
                    <div class="input-group">
                        <div class="input-group-text">Phone Number</div>
                        <input type="text" class="form-control" id="telephone" placeholder="05555555">
                    </div>
                </div>
                <br />
                <div class="form-group" mb-5>

                    <div class="input-group">
                        <div class="input-group-text">Complaint</div>
                        <textarea rows="6" name="complaint" id="complaint" class="form-control" required></textarea>
                    </div>
                </div>
                <br />
                <button type="submit" class="btn btn-dark" onclick="note();">File Complaint</button>

            </form>
            <footer>
                <div id="contact" style="text-align: center;" >
                    <table class="table" style="text-align: center;">
                        <tr>
                            <th colspan="2">Contact US</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>Contact@ParkEasier.com</td>
                        </tr>
                        <tr>
                            <th>Call Center:</th>
                            <td>800 1234 567</td>
                        </tr>
                        <tr>
                            <td colspan="2">

                                <a href="complain.php" style="text-decoration:none; color:white;"> <button id="contact" class="btn btn-dark " style="width:40% ; background-color:black;">Complain</button></a>
                            </td>
                        </tr>
                    </table>
                    <p> copy right parking easier</p>


                </div>
            </footer>
        </main>
    </div>

</body>
</html>
