<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
?>
<?php
include('aheader.php');
include('connection.php');
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 $sql = "SELECT count(request_id) FROM submitrequest_tb";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submitrequest = $row[0];



 $sql = "SELECT count(complaint_id) FROM complaint_table";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $complaint = $row[0];

 $sql = "SELECT * FROM selogin";
 $result = $conn->query($sql);
 $totaltech = $result->num_rows;

?>
<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Requests Received</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $submitrequest; ?>
          </h4>
          <a class="btn text-white" href="request.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Complaints Received</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $complaint; ?>
          </h4>
          <a class="btn text-white" href="adminmessage.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">No. of Technician</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $totaltech; ?>
          </h4>
          <a class="btn text-white" href="technician.php">View</a>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-5 mt-5 text-center">
    <!--Table-->
    <p class=" bg-danger text-white p-2">List of Requesters</p>
    <?php
    $sql = "SELECT * FROM userlogin";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">User ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<th scope="row">'.$row["user_id"].'</th>';
    echo '<td>'. $row["name"].'</td>';
    echo '<td>'.$row["email"].'</td>';
  }
 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
?>
  </div>
</div>
</div>
</div>
<?php
include('afooter.php');
?>

