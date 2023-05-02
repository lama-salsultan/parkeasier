<?php
session_start();
?>
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

        #logolink {
            text-decoration: none;
            color: white;
        }

        #form1 {
            margin-top: 10%;
        }

        form img {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <main class="main">
        <nav class="navbar navbar-expand bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a style=" text-decoration: none; color: white;"><img src="img/logo.png" style="height:10%; width:10%;">Parking Easier</a>


                    </div>
                </nav>
            <center>

                <div id="form1">
                    <form method="post">
                        <center><img src="img/Unknown.png"></center>
                        <div class="form-group">
                            <label for="InputEmail">Email: </label><br>
                            <input type="email" name="InputEmail" id="InputEmail" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="InputPass">Password: </label><br>
                            <input type="password" name="InputPass" id="Inputpass"class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <center><input type="submit" name="check"  class="btn btn-dark"> 
                        </center>
                        <br>
                        </div>
                            <div>
                            <?php

require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db); 

if($conn -> connect_error)die($conn -> connect_error); 

if (isset($_POST["check"]))
{
   
    $em = $_POST["InputEmail"]; 
    $pw= $_POST["InputPass"]; 
    $q = "select * from user where email = '$em' and password = '$pw'" ; 
    $result = $conn -> query($q); 
    if (!$result) die ($conn->error);
    $rows = $result -> num_rows; 

 
if($rows > 0)
{ 
$row = $result ->fetch_array(MYSQLI_ASSOC);
$un = $row['Name'];
$_SESSION["hn"] = $em; 
$_SESSION["un"] = $un; 
$_SESSION["pw"] = $pw;


header("Location:main.php");
}
else {
echo "Wrong username or password!";
 }
}


?>
                            </div>
                            <hover> If you do not have an account </li> <a href="Signup.php"> Click Here!</a>


                        </div>
                    </form>
                </div>
            </center>
            <br><br>
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
                           
                        </tr>
                    </table>
                    <p> copy right parking easier</p>


                </div>
            </footer>
        </main>
    </div>
</body>

</html>