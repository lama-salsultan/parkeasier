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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
      <style type="text/css">
          p {
              text-align: center;
          }
         h2 {
              text-align: center;
          }
      </style>
    </head>
    <body>
        <div class="container-fluid">
            <main>
            <nav class="navbar navbar-expand bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a href="main.php" style=" text-decoration: none; color: white;"><img src="img/logo.png" style="height:10%; width:10%;">Parking Easier</a>
                        <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" style="color: white;"><img src="img/profile.png" style="width: 15pt; height:15pt;"> Hello <?php  echo($_SESSION['un']);?></a>
                                <ul class="dropdown-menu">
                               
                                    <li><a class="dropdown-item" href="account.php">My Account</a></li>
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
                <div class="mt-10 p-5  text-black " style="background-color:white;">
                    <h2>Founders</h2>
                    <div class="row row-cols-3 g-3">

                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/reema.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CMO</h2>
                                    <p class="card-text">Farah Mohammed</p>

                                </div>

                            </div>
                        </div>
                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/shahad.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CLO</h2>
                                    <p class="card-text">Jane Doe</p>

                                </div>

                            </div>
                        </div>
                        <div class="col d-flex align-items-stretch ">
                            <div class="card border border-dark">

                                <img class="card-img-top" src="img/rana.jpeg">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title">CHRO</h2>
                                    <p class="card-text">Danah Ahmed</p>

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
                        <td> <a href="about.html" style="color: black; text-decoration:none;">1</a></td>
                        <td class="active"> <a href="about2.html" style="color: black; text-decoration:none;">2</a></td>


                    </tr>
                    </ul>
                </table>
            </center>
        
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
        </footer></div>
    </body>
</html>