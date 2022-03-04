<?php
define('TITLE', 'viewcomplaint');
define('PAGE', 'viewcomplaint');
include('aheader.php');
include('connection.php');
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 
 if(isset($_POST["view"]))
 {
   header("location:add.php");
 }
?>
<div class="col-sm-4 mb-5">
  <!-- Main Content area start Middle -->
  <?php 
 $sql = "SELECT * FROM complaint_table";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
   echo '<div class="card mt-5 mx-5">';
   echo '<div class="card-header">';
   echo 'Complaint ID : '. $row['complaint_id'];
   echo '&nbsp';
   echo '&nbsp';
   echo 'User ID : '. $row['user_id'];
   echo '</div>';
   echo '<div class="card-body">';
   echo '<h5 class="card-title">Ref  No : ' . $row['ref'] . '</h5>';
   echo '<h5 class="card-title">Name : ' . $row['name'] . '</h5>';
   echo '<p class="card-text">' . $row['subject'] . '</p>';
   echo '<div class="float-left">';
   echo '<form action="messageview.php" method="POST">';
   echo' <input type="hidden" name="id" value='. $row["complaint_id"].'>';
   echo'<input type="submit" class="btn btn-danger mr-3" name="view" value="view"></form>';
   echo '</div>' ;
   echo '<div class="float-right">';
   echo '<form action="" method="POST">';
   echo' <input type="hidden" name="id" value='. $row["complaint_id"].'>';
   echo'<input type="submit" class="btn btn-secondary" name="close" value="Close"></form>';
   echo '</div>' ;
   echo'</div>';
   echo'</div>';
  }
 } else {
  echo '<div class="alert alert-info mt-5 col-sm-6" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully assigned all Requests.</p>
  <hr>
  <h5 class="mb-0">No Pending Requests</h5>
</div>';
 }

// after assigning work we will delete data from submitrequesttable by pressing close button
if(isset($_REQUEST['close'])){
  $sql = "DELETE FROM complaint_table WHERE complaint_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
 ?>
</div> <!-- Main Content area End Middle -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php
$conn->close();
?>



















