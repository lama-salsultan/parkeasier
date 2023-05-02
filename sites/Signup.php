
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>


 
    <style type="text/css">
        body {
            color: black;
        }

        form {
            margin: auto;
            width: 450px;
            padding: 2em;
            border: 2px solid rgb(113, 113, 113);
            text-align: left;
            border-radius: 5px;
        }

        #form2 {
            margin-top: 10%;
        }
    </style>
</head>
    <body>

        <div class="container-fluid">
            <main class="main">
            <nav class="navbar navbar-expand bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a  style=" text-decoration: none; color: white;"><img src="img/logo.png" style="height:10%; width:10%;">Parking Easier</a>

                        <ul class="navbar-nav">
                        
                            <li class="nav-item">
                                <a class="nav-link active" href="SignIn.php"> SignIn</a>
                            </li>
                            
                        </ul>

                    </div>
                </nav>
                <center>
                    <div id="form2">
                        <form method="post" >
                            <center><img src="img/Unknown.png"></center>
                            <p style="color:rgb(165, 163, 163); font-size: 10px;"> Add Profile Picture </p>
                            <div class="form-group">
                                <label for="InputName">Name: </label><br>
                                <input type="text" name="InputName" id="InputName" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="InputPhone">Phone: </label><br>
                                <input type="text" name="InputPhone" id="InputPhone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Email: </label><br>
                                <input type="email" name="username" id="username" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="InputPass">Create Password: </label><br>
                                <input type="password" name="InputPass" id="InputPass" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <label for="InputPass2">Confirm Password: </label><br>
                                <input type="password"name="InputPass2" id="InputPass2" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <center><input type="submit" name="add" value="Sign Up" class="btn btn-dark" ></center>
                            </div>
                            <div id="wrong" style="color:red;"> 
 <?php

require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db); 

if($conn -> connect_error)die($conn -> connect_error); 
if (isset($_POST["add"]))
{

if($_POST["InputPass"] == $_POST["InputPass2"]){
    //success
$Name = $_POST["InputName"] ; 
$Number = $_POST["InputPhone"]; 
$Email = $_POST["username"];
$pass = $_POST["InputPass"];
$insertQ = "insert into user(Name,Phone,email,password) values ('$Name','$Number','$Email','$pass')";
$r1 = $conn -> query($insertQ) ; 
if (!$r1) die('Record not inserted'); 
echo ('<div style=" color: black;  text-align:center; " >Account Successfully Created! </div><CENTER> <a href="signin.php" style=" text-decoration: none; color: blue;">Click Here To Go To SignIn Page</a></CENTER>'); }

 else{
  echo('password dont match please try again');
 }
 }

?></div>

                        </form>
                    </div>
                </center>
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
                       
                        </table>
                        <p> copy right parking easier</p>


                    </div>
                </footer>
            </main>
                </div>
               
       <br><br>
    </body>
</html>