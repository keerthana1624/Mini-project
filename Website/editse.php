<?php    
define('TITLE', 'Update Technician');
define('PAGE', 'technician');
include('aheader.php');
include('connection.php');
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['empupdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['name'] == "") || ($_REQUEST['address'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['email'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $se_id = $_REQUEST['se_id'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
  $sql = "UPDATE selogin SET name = '$name', address = '$address', phone = '$phone', email = '$email' WHERE se_id= '$se_id'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Service Engineer Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM selogin WHERE se_id = {$_REQUEST['se_id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="empId">SE ID</label>
      <input type="text" class="form-control" id="se_id" name="se_id" value="<?php if(isset($row['se_id'])) {echo $row['se_id']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="empName">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($row['name'])) {echo $row['name']; }?>">
    </div>
    <div class="form-group">
      <label for="empCity">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="<?php if(isset($row['address'])) {echo $row['address']; }?>">
    </div>
    <div class="form-group">
      <label for="empMobile">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" value="<?php if(isset($row['phone'])) {echo $row['phone']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="empEmail">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($row['email'])) {echo $row['email']; }?>">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="empupdate" name="empupdate">Update</button>
      <a href="technician.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
<?php
include('afooter.php');
?>