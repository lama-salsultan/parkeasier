<?php
session_start();
if (isset ($_SESSION['un'] ) ) 
{
  $_SESSION['un'];
    //success
}
else 
die('<a href="SignIn.php"> go back to signin page</a>');
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            color: black;
        }
        #logolink {
            text-decoration:none;
            color:white;
        }
        #mycarousel img{
           height: 60%;
        }
        #leftbutton {
            position: absolute;
            bottom: 100px;
            left: 200px;
            width: 200px;
        }
        #rightbutton {
            position: absolute;
            bottom: 100px;
            left: 900px;
            width: 200px;
        }
        #car {
            height:150px;
            width:150px;

            position: relative;
            animation-name: go;
            animation-duration:5s;
            left:-10%;
            
                
        }
        @keyframes go {
            0% {
                transform: translate(0px,0px);
            }

            100% {
                transform: translate(2000px,0px);
            }
      


            }
            h1{
                text-align: center;
            }
           #contact{
                text-align: center;
            }
            table{
                text-align: center;
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
            <div id="mycarousel" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/parking2.jpg" class="d-block w-100">
                      </div>
                    <div class="carousel-item">
                        <img src="img/parking1.webp" class="d-block w-100">
                       
                    </div>
                    <div class="carousel-item">

                        <img src="img/parking3.jpeg" class="d-block w-100">
                        </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mycarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row" id="1">
                <img id="car" src="img/car.png" >
               
                
                <h1>Map</h1>
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463879.2652725793!2d46.542336636128546!3d24.724931562437554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh!5e0!3m2!1sen!2ssa!4v1667599391981!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <footer>
               
                    <div id="contact" style="text-align: center;">
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