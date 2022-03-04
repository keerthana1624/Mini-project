<?php
define('TITLE', 'Add New Reques');
define('PAGE', 'requesters');
include('aheader.php');
include('connection.php');
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
if(isset($_REQUEST['sesubmit'])){
 // Checking for Empty Fields
 if(($_REQUEST['rname'] == "") || ($_REQUEST['remail'] == "") || ($_REQUEST['rpassword'] == "") || ($_REQUEST['rusername'] == "") || ($_REQUEST['raddress'] == "") || ($_REQUEST['rphone'] == "") || ($_REQUEST['rcity'] == "") || ($_REQUEST['rqualification'] == "") || ($_REQUEST['rgender'] == ""))
 {
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } 
 else {
   // Assigning User Values to Variable
   $se_id = $_REQUEST['rse_id'];
   $name = $_REQUEST['rname'];
   $email = $_REQUEST['remail'];
   $password = $_REQUEST['rpassword'];
   $address = $_REQUEST['raddress'];
   $phone = $_REQUEST['rphone'];
   $city = $_REQUEST['rcity'];
   $username = $_REQUEST['rusername'];
   $gender = $_REQUEST['rgender'];
   $qualification = $_REQUEST['rqualification'];
   $experience = $_REQUEST['rexperience'];
   $sql = "INSERT INTO selogin (se_id, name, email, password, address, phone, city, username, gender,qualification,experience) VALUES ('$se_id', '$name', '$email', '$password', '$address', '$phone', '$city', '$username', '$gender','$qualification','$experience')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Added Successfully </div>';
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add </div>';
   }
 }
 }
?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Service Engineer</h3>
  <form action="" method="POST">
  <div class="form-group">
      <label for="rse_id">Se Id</label>
      <input type="text" class="form-control" id="rse_id" name="rse_id">
    </div>
    <div class="form-group">
      <label for="rname">Name</label>
      <input type="text" class="form-control" id="rname" name="rname">
    </div>
    <div class="form-group">
      <label for="remail">Email</label>
      <input type="email" class="form-control" id="remail" name="remail">
    </div>
    <div class="form-group">
      <label for="raddress">Address</label>
      <input type="text" class="form-control" id="raddress" name="raddress">
    </div>
    <div class="form-group">
      <label for="rphone">Phone</label>
      <input type="text" class="form-control" id="rphone" name="rphone">
    </div>
    <div class="form-group">
      <label for="rcity">City</label>
      <input type="text" class="form-control" id="rcity" name="rcity">
    </div>
    <div class="form-group">
      <label for="gender">Gender</label>      
              <select  class="form-control" id="rgender" name="rgender" >
              <option value="none" selected>GENDER</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">other</option>
              </select>
    </div>
    <div class="form-group">
      <label for="rexperience">Experience</label>
      <input type="text" class="form-control" id="rexperience" name="rexperience">
    </div>
    <div class="form-group">
      <label for="rqualification">Qualification</label>
      <input type="text" class="form-control" id="rqualification" name="rqualification">
    </div>
    <div class="form-group">
      <label for="rusername">Username</label>
      <input type="text" class="form-control" id="rusername" name="rusername">
    </div>
    <div class="form-group">
      <label for="rpassword">Password</label>
      <input type="password" class="form-control" id="rpassword" name="rpassword">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="sesubmit" name="sesubmit">Submit</button>
      <a href="technician.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<?php
include('afooter.php');
?>
































