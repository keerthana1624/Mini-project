<?php
define('TITLE', 'checkcomplaint');
define('PAGE', 'checkcomplaint');
include('uheader.php'); 
include('connection.php');
if($_SESSION['submit']){
 $user_id = $_SESSION['user_id'];
} else {
 echo "<script> location.href='loginpage.php'; </script>";
}
?>
<div class="col-sm-6 mt-5  mx-3">
  <form action="" class="mt-3 form-inline d-print-none">
    <div class="form-group mr-3">
      <label for="checkid">Enter Reference No: </label>
      <input type="text" class="form-control ml-3" id="checkid" name="checkid" onkeypress="isInputNumber(event)">
    </div>
    <button type="submit" class="btn btn-danger">Search</button>
  </form>
  <?php
  if(isset($_REQUEST['checkid'])){
    $sql = "SELECT * FROM complaintremark WHERE ref= {$_REQUEST['checkid']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(isset($row['ref']) == $_REQUEST['checkid']){ 
        echo '<div class="alert alert-success mt-4" role="alert">
        Complaint verified and action is taken </div>';
    }
  
  
 else {
      echo '<div class="alert alert-dark mt-4" role="alert">
      Your complaint is Still Pending </div>';
    }
}
 ?>

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
include('ufooter.php');
?>