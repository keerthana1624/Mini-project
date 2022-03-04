<?php    
define('TITLE', 'Update Requester');
define('PAGE', 'requesters');
include('aheader.php'); 
include('connection.php');
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['requpdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['user_id'] == "") || ($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['address'] == "") || ($_REQUEST['phone'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $id = $_REQUEST['user_id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
  $sql = "UPDATE userlogin SET user_id = '$id', name = '$name', email ='email', address = '$address', phone = '$phone' WHERE user_id = '$id'";
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
  <h3 class="text-center">Update Requester Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM userlogin WHERE user_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="user_id">Requester ID</label>
      <input type="text" class="form-control" id="user_id" name="user_id" value="<?php if(isset($row['user_id'])) {echo $row['user_id']; }?>">
    </div>
    <div class="form-group">
      <label for="r_name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($row['name'])) {echo $row['name']; }?>">
    </div>
    <div class="form-group">
      <label for="r_email">Email</label>
      <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($row['email'])) {echo $row['email']; }?>">
    </div>
    <div class="form-group">
      <label for="r_email">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="<?php if(isset($row['address'])) {echo $row['address']; }?>">
    </div>
    <div class="form-group">
      <label for="r_email">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" value="<?php if(isset($row['phone'])) {echo $row['phone']; }?>">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
      <a href="requester.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<?php
include('afooter.php');
?>