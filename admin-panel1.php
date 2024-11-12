<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");

include('newfunc.php');

if(isset($_POST['Nursub']))
{
  $Nurse=$_POST['Nurse'];
  $dpassword=$_POST['dpassword'];
  $demail=$_POST['demail'];
  $spec=$_POST['special'];
  $donationFee=$_POST['donationFee'];
  $query="insert into doctb(username,password,email,spec,donationFee)values('$doctor','$dpassword','$demail','$spec','$donationFee')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Caregiver added successfully!');</script>";
  }
}


if(isset($_POST['docsub1']))
{
  $demail=$_POST['demail'];
  $query="delete from doctb where email='$demail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Caregiver removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}

if(isset($_POST['addelderly']))
{
  // Elderly Information
  $efname = $_POST['efname'];
  $elname = $_POST['elname'];
  $edob = $_POST['edob'];
  $egender = $_POST['egender'];
  $eaddress = $_POST['eaddress'];
  $econtact = $_POST['econtact'];
  $eemail = $_POST['eemail'];
  $eemergency_contact_name = $_POST['eemergency_contact_name'];
  $eemergency_contact_relationship = $_POST['eemergency_contact_relationship'];
  $eemergency_contact_number = $_POST['eemergency_contact_number'];
  $emedical_conditions = $_POST['emedical_conditions'];
  $eallergies = $_POST['eallergies'];
  $ecurrent_medications = $_POST['ecurrent_medications'];
  $ecare_coordinator = $_POST['ecare_coordinator'];
  $enurse_contact = $_POST['enurse_contact'];
  $especial_needs = $_POST['especial_needs'];
  $epassword = $_POST['epassword'];
  $ecpassword = $_POST['ecpassword'];

  // Relative Information
  $rfname = $_POST['rfname'];
  $rlname = $_POST['rlname'];
  $rgender = $_POST['rgender'];
  $remail = $_POST['remail'];
  $rphysical_address = $_POST['rphysical_address'];
  $rid_number = $_POST['rid_number'];
  $rrelation = $_POST['rrelation'];
  $rcontact = $_POST['rcontact'];
  $remergency_contact = $_POST['remergency_contact'];
  $radditional_notes = $_POST['radditional_notes'];

  $query1 = "INSERT INTO patreg(fname, lname, dob, gender, address, contact, email, emergency_contact_name, emergency_contact_relationship, emergency_contact_number, medical_conditions, allergies, current_medications, care_coordinator, nurse_contact, special_needs, password, cpassword) VALUES('$efname', '$elname', '$edob', '$egender', '$eaddress', '$econtact', '$eemail', '$eemergency_contact_name', '$eemergency_contact_relationship', '$eemergency_contact_number', '$emedical_conditions', '$eallergies', '$ecurrent_medications', '$ecare_coordinator', '$enurse_contact', '$especial_needs', '$epassword', '$ecpassword')";
  $query2 = "INSERT INTO Relative_ToElderly(first_name, last_name, gender, email, physical_address, id_number, relation, contact, emergency_contact, additional_notes) VALUES('$rfname', '$rlname', '$rgender', '$remail', '$rphysical_address', '$rid_number', '$rrelation', '$rcontact', '$remergency_contact', '$radditional_notes')";

  $result1 = mysqli_query($con, $query1);
  $result2 = mysqli_query($con, $query2);

  if($result1 && $result2)
  {
    echo "<script>alert('Elderly and relative added successfully!');</script>";
  }
  else
  {
    echo "<script>alert('Error adding elderly and relative. Please try again.');</script>";
  }
}

?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>  Golden Years Old Age Home </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME RECEPTIONIST </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">Caregiver List</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Elders List</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Prescription List</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Add Caregiver</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Delete Caregiver</a>
      <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">Queries</a>
      <a class="list-group-item list-group-item-action" href="#list-addelderly" id="list-addelderly-list"  role="tab" data-toggle="list" aria-controls="home">Add Elderly</a>
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Caregiver List</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                          View Caregivers
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Elders List</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          View Elders
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          View Appointments
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 13%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Prescription List</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          View Prescriptions
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Caregivers</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Caregivers</a>
                        &nbsp|
                        <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                          Delete Caregivers
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
                        

      
                
              </div>
            </div>
      
                
      






      <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
              

              <div class="col-md-8">
      <form class="form-group" action="doctorsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="Nurse_contact" placeholder="Enter Email" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="Nurse_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Caregiver Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Fees</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;
                    $query = "select * from doctb";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $username = $row['username'];
                      $spec = $row['spec'];
                      $email = $row['email'];
                      $password = $row['password'];
                      $donationFee = $row['donationFee'];
                      
                      echo "<tr>
                        <td>$username</td>
                        <td>$spec</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$donationFee</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
    

    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

      <div class="col-md-8">
        <form class="form-group" action="patientsearch.php" method="post">
          <div class="row">
            <div class="col-md-10"><input type="text" name="patient_contact" placeholder="Enter Contact" class="form-control"></div>
            <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-primary" value="Search"></div>
          </div>
        </form>
      </div>

      <h4>Elderly Information</h4>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Elders ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $con=mysqli_connect("localhost","root","","myhmsdb");
            global $con;
            $query = "SELECT * FROM patreg";
            $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){
              echo "<tr>
                <td>{$row['pid']}</td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['email']}</td>
                <td>{$row['contact']}</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>

      <h4>Relative Information</h4>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">ID Number</th>
            <th scope="col">Relation</th>
            <th scope="col">Gender</th>
            <th scope="col">Contact</th>
            <th scope="col">Emergency Contact</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $query = "SELECT * FROM Relative_ToElderly";
            $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){
              echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['Physical_Address']}</td>
                <td>{$row['id_number']}</td>
                <td>{$row['relation']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['contact']}</td>
                <td>{$row['emergency_contact']}</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
      <br>
    </div>


      <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

       <div class="col-md-8">
  
        <div class="row">
        
    
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Caregiver</th>
                    <th scope="col">Elders ID</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Allergy</th>
                    <th scope="col">Prescription</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;
                    $query = "select * from prestb";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $Nurse = $row['Nurse'];
                      $pid = $row['pid'];
                      $ID = $row['ID'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $appdate = $row['appdate'];
                      $apptime = $row['apptime'];
                      $disease = $row['disease'];
                      $allergy = $row['allergy'];
                      $pres = $row['prescription'];

                      
                      echo "<tr>
                        <td>$Nurse</td>
                        <td>$pid</td>
                        <td>$ID</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$appdate</td>
                        <td>$apptime</td>
                        <td>$disease</td>
                        <td>$allergy</td>
                        <td>$pres</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
      </div>
      </div>




      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

         <div class="col-md-8">
      <form class="form-group" action="appsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Appointment ID</th>
                  <th scope="col">Elders ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Caregiver Name</th>
                    <th scope="col">Donation</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Appointment Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['Nurse'];?></td>
                        <td><?php echo $row['donationFee'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td>
                    <?php if(($row['userStatus']==1) && ($row['NurseStatus']==1))  
                    {
                      echo "Active";
                    }
                    if(($row['userStatus']==0) && ($row['NurseStatus']==1))  
                    {
                      echo "Cancelled by Elders";
                    }

                    if(($row['userStatus']==1) && ($row['NurseStatus']==0))  
                    {
                      echo "Cancelled by Caregiver";
                    }
                        ?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4"><label>Caregiver Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="Nurse" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Specialization:</label></div>
                  <div class="col-md-8">
                   <select name="special" class="form-control" id="special" required="required">
                      <option value="head" name="spec" disabled selected>Select Specialization</option>
                      <option value="Geriatric Care" name="spec">Mental Health Care</option>
                      <option value="Physical Therapy" name="spec">Physical Therapy</option>
                      <option value="Occupational Therapy" name="spec">Occupational Therapy</option>
                      <option value="Mental Health Care" name="spec">Mental Health Care</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="dpassword" id="dpassword"  required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                   
                  
                  <div class="col-md-4"><label>Donation:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="donationFee" required></div><br><br>
                </div>
          <input type="submit" name="docsub" value="Add Caregiver" class="btn btn-primary">
        </form>
      </div>

      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  
                </div>
          <input type="submit" name="docsub1" value="Delete Caregiver" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>


       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

       <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

         <div class="col-md-8">
      <form class="form-group" action="messearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select * from contact;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
              
                      #$fname = $row['fname'];
                      #$lname = $row['lname'];
                      #$email = $row['email'];
                      #$contact = $row['contact'];
                  ?>
                      <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['message'];?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>

      <div class="tab-pane fade" id="list-addelderly" role="tabpanel" aria-labelledby="list-addelderly-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <h4>Elderly Information</h4>
          <div class="row">
            <div class="col-md-4"><label>First Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="efname" required></div><br><br>
            <div class="col-md-4"><label>Last Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="elname" required></div><br><br>
            <div class="col-md-4"><label>Date of Birth:</label></div>
            <div class="col-md-8"><input type="date" class="form-control" name="edob" required></div><br><br>
            <div class="col-md-4"><label>Gender:</label></div>
            <div class="col-md-8">
              <select name="egender" class="form-control" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div><br><br>
            <div class="col-md-4"><label>Address:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="eaddress" required></div><br><br>
            <div class="col-md-4"><label>Contact:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="econtact" required></div><br><br>
            <div class="col-md-4"><label>Email:</label></div>
            <div class="col-md-8"><input type="email" class="form-control" name="eemail"></div><br><br>
            <div class="col-md-4"><label>Emergency Contact Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="eemergency_contact_name" required></div><br><br>
            <div class="col-md-4"><label>Emergency Contact Relationship:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="eemergency_contact_relationship" required></div><br><br>
            <div class="col-md-4"><label>Emergency Contact Number:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="eemergency_contact_number" required></div><br><br>
            <div class="col-md-4"><label>Medical Conditions:</label></div>
            <div class="col-md-8"><textarea class="form-control" name="emedical_conditions"></textarea></div><br><br>
            <div class="col-md-4"><label>Allergies:</label></div>
            <div class="col-md-8"><textarea class="form-control" name="eallergies"></textarea></div><br><br>
            <div class="col-md-4"><label>Current Medications:</label></div>
            <div class="col-md-8"><textarea class="form-control" name="ecurrent_medications"></textarea></div><br><br>
            <div class="col-md-4"><label>Care Coordinator Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="ecare_coordinator"></div><br><br>
            <div class="col-md-4"><label>Nurse Contact:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="enurse_contact"></div><br><br>
            <div class="col-md-4"><label>Special Needs:</label></div>
            <div class="col-md-8"><textarea class="form-control" name="especial_needs"></textarea></div><br><br>
            <div class="col-md-4"><label>Password:</label></div>
            <div class="col-md-8"><input type="password" class="form-control" name="epassword" required></div><br><br>
            <div class="col-md-4"><label>Confirm Password:</label></div>
            <div class="col-md-8"><input type="password" class="form-control" name="ecpassword" required></div><br><br>
          </div>

          <h4>Relative Information</h4>
          <div class="row">
            <div class="col-md-4"><label>First Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="rfname" required></div><br><br>
            <div class="col-md-4"><label>Last Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="rlname" required></div><br><br>
            <div class="col-md-4"><label>Gender:</label></div>
            <div class="col-md-8">
              <select name="rgender" class="form-control" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div><br><br>
            <div class="col-md-4"><label>Email:</label></div>
            <div class="col-md-8"><input type="email" class="form-control" name="remail" required></div><br><br>
            <div class="col-md-4"><label>Physical Address:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="rphysical_address" required></div><br><br>
            <div class="col-md-4"><label>ID Number:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="rid_number" required></div><br><br>
            <div class="col-md-4"><label>Relation:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="rrelation" required></div><br><br>
            <div class="col-md-4"><label>Contact:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="rcontact" required></div><br><br>
            <div class="col-md-4"><label>Emergency Contact:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="remergency_contact" required></div><br><br>
            <div class="col-md-4"><label>Additional Notes:</label></div>
            <div class="col-md-8"><textarea class="form-control" name="radditional_notes"></textarea></div><br><br>
          </div>
          <input type="submit" name="addelderly" value="Add Elderly" class="btn btn-primary">
        </form>
      </div>

    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>