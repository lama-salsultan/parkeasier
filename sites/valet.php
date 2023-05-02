<?php
session_start();
if (isset ($_SESSION['un'] ) && isset ($_SESSION['hn'] ) ) 
{
  $_SESSION['un'];
  $_SESSION['hn'];
    //success
}
else {
header("location:/signin.php");}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js">

     </script>
    <style type="text/css">
        body{
            color: black;
        }
      
        #V{
            text-align: center;
            margin-top: 1%;
           
           
        }
    </style>
</head>
<body>
    <?php

require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db); 

if($conn -> connect_error) die($conn -> connect_error); 
if(isset($_POST["add"])){
    $x= $_SESSION['hn'];
    $GETUSERID="select * from user where email= '$x' ";
    $r2 = $conn -> query($GETUSERID) ;
    $row = $r2 ->fetch_array(MYSQLI_ASSOC);
    $USID= $row['usID']; 


    $date = $_POST["date"];
    $neighborhood = $_POST["neighbourhood"] ; 
    $time = $_POST["time"];
    $total = $_POST["total"];
    $insertQ = "insert into vbooking (Date,Time,Location,Amount,usID) values ('$date','$time','$neighborhood','$total','$USID')";
    
    $r1 = $conn -> query($insertQ) ; 
    if (!$r1) die('Record not inserted'); 
    else echo ('Record inserted successfully'); 
}
?>

    <div class="container-fluid">
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
        <br><br>
          
        <h1 class="display-4">Valet</h1>
<hr class="my-4">

<form class="form" method="post" action="valet.php">
                <div class="form-group" mb-3>
                    <label for="neighbourhood"></label>
                    <div class="input-group">
                        <div class="input-group-text">Select Location: </div>
                        <select name="neighbourhood" id="neighbourhood" class="form-control" require> 
                            <option>--</option>
                            <option>Alnafel</option>
                            <option>Alghadeer</option>
                            <option>Alwaha</option>
                            <option>Hittin</option>
                            <option>Altaawun</option></select>
                    </div>
                </div> <br>
                <div class="form-group" mb-3>
                    <label for="date"></label>
                    <div class="input-group">
                        <div class="input-group-text">Select Date: </div>  
                 <input type="date" name="date" class="form-control " require>
                 </div> <br>

                 <div class="form-group" mb-3>
                    <label for="time"></label>
                    <div class="input-group">
                        <div class="input-group-text">Select Time: </div>  
                 <input type="time" name="time" class="form-control " require>
                 </div>
                        </div>  <br>
                        <div class="form-group" mb-3>
                    <label for="total"></label>
                    <div class="input-group">
                        <div class="input-group-text"> Fixed Amount: </div>  
                  <input type="text" name="total" id="total" class="form-control" value="50SAR" readonly >
                 
                 
                 </div> <br>
                 <input type="submit" class="btn btn-dark mt-auto" name="add" value="Continue to checkout"> </form>
            
               <h1><b>_____________________________________________________________________________</b></h1>
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
    </div> </body></html>


    