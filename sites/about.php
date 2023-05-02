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
<html>
    <head>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
        <style type="text/css">
            #about{
                position: relative;
                animation-name: turns;
                animation-duration: 5s;
            }
          p:hover{
            background-color: beige;
          }
         
          h2{
            text-align: center;
          }
          #c{
            text-align: center;
          }
            @keyframes turns{
                0% {opacity: 0; transform: translate3d(0, 30px, 0); }
               25% { opacity: 0.5;}
               50% { opacity: 1; transform: none; padding-top:260px;}
               100% {opacity: 1; transform: none; padding-top:20px;}
    }
            p {
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
                <div class="mt-10 p-5  text-black " style="background-color:white;" id="about">
                    <h2>About Us</h2>
                    <p id="c">
                        all companies have beginning stories, ours has been such a wonderful adventure!
                    </p>
                </div>
                <div class=" row mt-10 p-5  text-black " style="background-color:white;" id="history">
                    <h2> History</h2>
                    <p>
                        founded in 2022, parking easier found a gap in the market and fouund it necessary to fill it. we began slowly by analyzing and monitoring the market,
                        then we began the analysis and design proccess for the system. After that, we set up our databases and analyzed them for months. Finally, we're now launching
                        our website to the public!
                    </p>
                </div>
                <div class="row mt-10 p-5  text-black" id="service">
                    <h2>Services</h2>
                    <p>
                        At parking Easier, we strive to serve our customers with the most convenience possible, therefore we offer pre-booking of designated parking spots.
                        you may book your spot up to 24-hours in advance and complete the whole transaction on the site without having to deal with a single person!
                    </p>
                </div>
                <div class="mt-10 p-5  text-black " style="background-color:white;">
                    <h2>Founders</h2>
                    <div class="row row-cols-3 g-3">

                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/reema.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CEO</h2>
                                    <p class="card-text">Reema Alhanaky</p>

                                </div>

                            </div>
                        </div>
                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/shahad.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">COO</h2>
                                    <p class="card-text">Shahad Altheyaib</p>

                                </div>

                            </div>
                        </div>
                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/rana.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CISO</h2>
                                    <p class="card-text">Rana Alyemni</p>

                                </div>

                            </div>
                        </div>
                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/Anoud.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CTO</h2>
                                    <p class="card-text">Alanoud Alsaleh</p>

                                </div>

                            </div>
                        </div>
                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/lama.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CCO</h2>
                                    <p class="card-text">Lama Alsultan</p>

                                </div>

                            </div>
                        </div>
                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/elizabeth.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CFO</h2>
                                    <p class="card-text">Elizabeth Smith</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <center>
                <table class="table table-bordered" id="t1" style="width: 10%; text-align: center;">
                    <ul class="pagination">
                    <tr>
                        <td class="active"> <a href="about.html" style="color: black; text-decoration:none;">1</a></td>
                        <td> <a href="about2.php" style="color: black; text-decoration:none;">2</a></td>


                    </tr>
                    </ul>
                </table>
            </center>
        </div>
        <footer>
            <div id="contact" style="text-align: center;">
                <table class="table " style="text-align: center;">
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
    </body>
</html>