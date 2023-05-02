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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
    function note(){
        let n = document.forms[0].fname.value;
        window.alert(n+" your booking is confirmed.")
    }
</script>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%;
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
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
            <center><h1 style=" margin-top: 3%;">Checkout</h1></center>
            <div class="row">
                <div class="col-75">
                    <div class="container">
                        <form action="main.html">

                            <div class="row">
                                <div class="col-50">
                                    <h3>Billing Address</h3>
                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" id="fname" name="firstname" placeholder="Abdullah Meshary" required>
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input type="text" id="email" name="email" placeholder="AbdullahM@example.com" required>
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" id="adr" name="address" placeholder="Ex.5 Alnafel District" required>
                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                    <input type="text" id="city" name="city" placeholder="Riyadh" required>

                                    <div class="row">
                                        
                                        <div class="col-50">
                                            <label for="zip">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="10001">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    </div>
                                    <label for="cname">Name on Card</label>
                                    <input type="text" id="cname" name="cardname" placeholder="Abdullah M">
                                    <label for="ccnum">Credit card number</label>
                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                    <label for="expmonth">Exp Month</label>
                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                    <div class="row">
                                        <div class="col-50">
                                            <label for="expyear">Exp Year</label>
                                            <input type="text" id="expyear" name="expyear" placeholder="2022">
                                        </div>
                                        <div class="col-50">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" name="cvv" placeholder="352">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <label>
                                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                            </label>

                            <button type="submit" class="btn btn-dark" onclick="note();">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
            <footer >
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
        </main></div>
</body>
</html>
