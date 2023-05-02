<html>
    <?php  session_start();
    if (isset ($_SESSION['un'] ) ) 
    {
      $_SESSION['un'];
        //success
    }
    else 
    header("location:/signin.php");?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<script >
       
       function amount(){
       let a = document.forms[0].duration.value;
       
         if (a == "30min"){
           document.forms[0].total.value= '10SAR';}
            else if (a == "1 hour"){
                document.forms[0].total.value= '20SAR';}
           
           else {
            document.forms[0].total.value= '30SAR';}
       }
       
       function reload(form){
            var val=form.Neighborhood.options[form.Neighborhood.options.selectedIndex].value;

            self.location='selfparking.php?Neighborhood=' + val ;
        }
        function reload1(form)
        {
        var val=form.Neighborhood.options[form.Neighborhood.options.selectedIndex].value; 
        var val2=form.Street.options[form.Street.options.selectedIndex].value; 
        self.location='selfparking.php?Neighborhood=' + val + '&Street=' + val2 ;
        }
     </script>

    <style type="text/css">
        body{
            color: black;
        }
        #SP{
            text-align: center;
            margin-top: 1%;
         
        }
      
    </style>

    <?php 
   
    echo"<body>";
    require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db); 

if($conn -> connect_error)die($conn -> connect_error); 

if(isset($_GET["add"]))
{
    
    $neighborhood = $_GET["Neighborhood"] ; 
    $st = $_GET["Street"]; 
    $AP = $_GET["AvPark"];
    $time = $_GET["time"];
    $date = $_GET["date"];
    $dur = $_GET["duration"];

    $total = $_GET["total"];

    
    $locationid="select * from location where Neighborhood = '$neighborhood' and Street= '$st' and parkingSpot = '$AP' ";
    
    $r2 = $conn -> query($locationid) ;
    $row = $r2 ->fetch_array(MYSQLI_ASSOC);
    $locid= $row['locationID']; 

    $email=$_SESSION['hn'];
    $usID="select usID from user where email = '$email'";
    $userR =$conn -> query($usID);
    $usrow = $userR ->fetch_array(MYSQLI_ASSOC);
    $userID = $usrow['usID'];

    $insertQ = "insert into selfparking (spDate,spTime,locationID,Duration,Amount,usID) values ('$date','$time','$locid','$dur','$total','$userID')";
 
 

    $r1 = $conn -> query($insertQ) ; 
    if (!$r1) die('Record not inserted'); 
    else echo ('Record inserted successfully'); 

}

    echo'<div class="container-fluid">';
      echo'           <nav class="navbar navbar-expand bg-dark navbar-dark">
      <div class="container-fluid">
          <a href="main.php" style=" text-decoration: none; color: white;"><img src="img/logo.png" style="height:10%; width:10%;">Parking Easier</a>
          <ul class="navbar-nav">
          <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" style="color: white;"><img src="img/profile.png" style="width: 15pt; height:15pt;"> Hello ';  echo($_SESSION['un']); echo'</a>
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
  </nav>';


echo'<br><br>
     <h1 class="display-4">Self Parking</h1>
<hr class="my-4">
<form class="form" name="f1"  action="selfparking.php">     ';
              echo'<div class="form-group" mb-3>
              <label for="neighborhood"></label>
              <div class="input-group">
                        
                        <div class="input-group-text">Select Neighbourhood: </div>
                        <select name="Neighborhood" onchange="reload(this.form);" id="Neighborhood" class="form-control" required> <option value="">select one</option>';
                        $nbhd=$_GET["Neighborhood"];
                        
                        $getq= "select distinct Neighborhood from location";
                        
                        if ($stmt = $conn->query("$getq"))
                        {
                            while ($row2 = $stmt->fetch_assoc()) 
                            {
                                if($row2['Neighborhood']==@$nbhd){echo "<option selected value='$row2[Neighborhood]'>$row2[Neighborhood]</option>";}
                  else   echo "<option  value='$row2[Neighborhood]'>$row2[Neighborhood]</option>";
                        
                          }
                        }else{
                            echo $conn->error;
                            }
              echo'</select></div></div><br>';
              //ddl 2 
              
              echo'<div class="form-group" mb-3>';
             
              echo'<label for="Street"></label>
              <div class="input-group">
                    <div class="input-group-text">Select Street:</div>
                    <select  name="Street" onchange="reload1(this.form);" class="form-control" id="Street" placeholder="Street" required><option value="">select one</option>';
                    $strt=$_GET["Street"];
                    if( isset($nbhd) and strlen($nbhd)>0){
                  
                        if($stmt = $conn->prepare("select distinct Street from location where Neighborhood=?")){
                        $stmt->bind_param('s',$nbhd);
                        $stmt->execute();
                         $re1 = $stmt->get_result();
                       
                             while ($row1 = $re1->fetch_assoc()) 
                             {
                                
                                if($row1['Street']==@$strt){echo "<option selected value='$row1[Street]'>$row1[Street]</option>";}
                    else echo "<option value='$row1[Street]'>$row1[Street]</option>";
                         
                           }
                         }
                        }
                        else{
                         echo $conn->error;
                        } 
                       
              echo'</select></div></div><br>';
              //ddl3
              echo'<div class="form-group" mb-3>
              <label for="AP"></label>
              <div class="input-group">
                  <div class="input-group-text">Select Available Parking: </div>
                  <select name="AvPark" id="AP" class="form-control" required> <option>Select One</option>
              ';
              if( isset($strt) and strlen($strt)>0){
                  
                if($stmt = $conn->prepare("select distinct parkingSpot from location where Neighborhood=? and Street=?")){
                $stmt->bind_param('ss',$nbhd,$strt);
                $stmt->execute();
                 $result = $stmt->get_result();
                 while ($row0 = $result->fetch_assoc()) 
                 {
                  echo  "<option selected value='$row0[parkingSpot]'>$row0[parkingSpot]</option>";
                    }
                }
                else{
                 echo $conn->error;
                } 
            }
                else{
                    
                    $pquery="select distinct parkingSpot from location"; 
                    
                    if($stmt = $conn->query("$pquery")){
                        while ($row0 = $stmt->fetch_assoc()) {
                        
                    echo  "<option value='$row0[parkingSpot]'>$row0[parkingSpot]</option>";
                    
                      }
                    }else{
                    echo $conn->error;
                    } 
                    }   
                    $p=$_GET["parkingSpot"];
              echo'</select></div></div><br>';
              echo'<div class="form-group" mb-3>
                    <label for="Time"></label>
                    <div class="input-group">
                        <div class="input-group-text">Select Time: </div>  
                 <input type="time" name="time" class="form-control " required>
                 </div> <br>
                 <div class="form-group" mb-3>
                    <label for="Date"></label>
                    <div class="input-group">
                        <div class="input-group-text">Select Date: </div>  
                 <input type="date" name="date" class="form-control " required>
                 </div> <br>
                 <div class="form-group" mb-3>
                    <label for="Duration"></label>
                    <div class="input-group">
                        <div class="input-group-text">Duration: </div>
                        <select name="duration"  id="duration" class="form-control" required onchange="amount();">
                        <option>--</option>
                        <option id="halfhour">30min</option>
                    <option id="onehour">1 hour</option>
                    <option id="hourandahalf">1 hour and 30 Min</option>
                </select>
                        </div> <br>
                        <div class="form-group" mb-3>
                        <div class="input-group-text" id="t">Total Amount: </div>
                        <input class="input-group-text" name="total" id="total" type="text" readonly >
    </div>
                <br>  
                 <input type="submit" class="btn btn-dark mt-auto" name="add" value="Continue to checkout"> </form>
                 <br>
 

     

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
        </footer>';



    echo'</div>';
 

    echo"</body>";

    ?>


</html>