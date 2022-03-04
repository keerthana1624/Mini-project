<?php
define('TITLE', 'addservice');
define('PAGE', 'addservice');
include('sheader.php');
?>

   &nbsp;
   &nbsp;
   <?php
   include('connection.php');
 if(isset($_SESSION['submit'])){
  $se_id = $_SESSION['se_id'];
 } else {
  echo "<script> location.href='loginpage.php'; </script>";
 }
 if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['id']}";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   }
   if(isset($_REQUEST['assign'])){
    // Checking for Empty Fields
    if(($_REQUEST['request_id'] == "") || ($_REQUEST['request_info'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['rservicedetails'] == "") || ($_REQUEST['rsename'] == "") || ($_REQUEST['rtotal'] == "")  || ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "")  || ($_REQUEST['inputdate'] == "")){
     // msg displayed if required field missing
     $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
      // Assigning User Values to Variable
      $ruser_id= $_REQUEST['ruser_id'];
      $rid = $_REQUEST['request_id'];
      $rname = $_REQUEST['requestername'];
      $remail = $_REQUEST['requesteremail'];
      $rmobile = $_REQUEST['requestermobile'];
      $rinfo = $_REQUEST['request_info'];
      $rdesc = $_REQUEST['requestdesc'];
      $rsed = $_REQUEST['rservicedetails'];
      $rmod = $_REQUEST['rmodel'];
      $rno = $_REQUEST['rnumber'];
      $rsen = $_REQUEST['rsename'];
      $rtotal = $_REQUEST['rtotal'];
      $rdate = $_REQUEST['inputdate'];
      $sql = "INSERT INTO servicedetails_tb (ruser_id, req_id, name, email, phone, req_info, des, se_name, service_details, model, number, total, date) VALUES ('$ruser_id','$rid', '$rname', '$remail', '$rmobile', '$rinfo','$rdesc','$rsen', '$rsed', '$rmod', '$rno', '$rtotal', '$rdate')";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Work Assigned Successfully </div>';
      } else {
       // below msg display on form submit failed
       $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Assign Work </div>';
      }
    }
    }
   // Assign work Order Request Data going to submit and save on db assignwork_tb table [END]
   ?>
  <div class="col-sm-5 mt-5 jumbotron">
    <!-- Main Content area Start Last -->
    <form action="" method="POST">
      <h5 class="text-center">Add Service Details</h5>
      <div class="form-group">
        <label for="request_id">User ID</label>
        <input type="text" class="form-control" id="ruser_id" name="ruser_id" value="<?php if(isset($row['ruser_id'])) {echo $row['ruser_id']; }?>"
          readonly>
      </div>
      <div class="form-group">
        <label for="request_id">Request ID</label>
        <input type="text" class="form-control" id="request_id" name="request_id" value="<?php if(isset($row['request_id'])) {echo $row['request_id']; }?>"
          readonly>
      </div>
      <div class="form-group">
        <label for="requestername">Name</label>
        <input type="text" class="form-control" id="requestername" name="requestername" value="<?php if(isset($row['requester_name'])) { echo $row['requester_name'];}  ?>">
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="requesteremail">Email</label>
          <input type="email" class="form-control" id="requesteremail" name="requesteremail" value="<?php if(isset($row['requester_email'])) {echo $row['requester_email']; }?>">
        </div>
        <div class="form-group col-md-4">
          <label for="requestermobile">Mobile</label>
          <input type="text" class="form-control" id="requestermobile" name="requestermobile" value="<?php if(isset($row['requester_mobile'])) {echo $row['requester_mobile']; }?>"
            onkeypress="isInputNumber(event)">
        </div>
      </div>
      <div class="form-group">
        <label for="request_info">Request Info</label>
        <input type="text" class="form-control" id="request_info" name="request_info" value="<?php if(isset($row['request_info'])) {echo $row['request_info']; }?>">
      </div>
      <div class="form-group">
        <label for="requestdesc">Description</label>
        <input type="text" class="form-control" id="requestdesc" name="requestdesc" value="<?php if(isset($row['request_desc'])) { echo $row['request_desc']; } ?>">
      </div>
     
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address1">Model</label>
          <input type="text" class="form-control" id="rmodel" name="rmodel">
        </div>
        <div class="form-group col-md-6">
          <label for="address2">Vechile Number</label>
          <input type="text" class="form-control" id="rnumber" name="rnumber">
        </div>
      </div>
      <div class="form-group">
        <label for="requestdesc">Service Details</label>
        <input type="text" class="form-control" id="rservicedetails" name="rservicedetails">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="se_id">Engineer Name</label>
          <input type="text" class="form-control" id="rsename" name="rsename">
        </div>
        <div class="form-group col-md-6">
          <label for="inputDate">Date</label>
          <input type="date" class="form-control" id="inputDate" name="inputdate">
        </div>
      </div>
      <div class="form-group">
        <label for="requestername">Total</label>
        <input type="text" class="form-control" id="rtotal" name="rtotal">
      </div>
      <div class="float-right">
        <button type="submit" class="btn btn-success" name="assign">Assign</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form>
    <!-- below msg display if required fill missing or form submitted success or failed -->
    <?php if(isset($msg)) {echo $msg; } ?>
  </div> <!-- Main Content area End Last -->
  </div> <!-- End Row -->
  </div> <!-- End Container -->
  <!-- Only Number for input fields -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/all.min.js"></script>
   <script src="js/custom.js"></script>
   </body>
  