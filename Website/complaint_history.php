<?php 
session_start();
error_reporting(0);
include'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Service Engineer home page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script type="text/javascript" src="./js/main.js"></script>
 </head>
 <body>
    
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fa fa-user">&nbsp;</i>Logout</a>
              </li>
            </ul>
        </div>
      </nav>

      <br/><br/>
      <div class="container">
         <!-- Table Product -->
         <div class="card border-danger">
            <div class="card-header bg-danger text-white">
            <strong><i class="fa fa-database"></i> View Complaint Status</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left">Complaint View Table</h5>
                    <a href="create.php" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New Complaint</a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Complaint Number</th>
                                  <th >Register Date</th>
                                  <th >last Updation date</th>
                                  <th >Status</th>
                                  <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
  $query1="SELECT * FROM `complaint_table` WHERE user_id LIKE '%$session%'";
   $result=mysqli_query($conn,$query1);
            
while($row=mysqli_fetch_array($result))
{

  ?>
       <tr>
                                  <td align="center"><?php echo htmlentities($row['complaint_id']);?></td>

                                  <td align="center"><?php echo htmlentities($row['regdate']);?></td>
                                 <td align="center"><?php echo  htmlentities($row['lastUpdationdate']);

                                 ?></td>
                                  <td align="center">
                                  <?php 
                                    $status=$row['status'];
                                    if($status=="" or $status=="NULL")
                                    { ?>
                                   
                                      <button type="button" class="btn btn-sm btn-danger">Not Process Yet</button>
                                   <?php }
 if($status=="in process"){ ?>
<button type="button" class="btn btn-warning">In Process</button>
<?php }
if($status=="closed") {
?>
<button type="button" class="btn btn-success">Closed</button>
<?php } ?>
<td align="center">
<a href="complaint_details.php?cid=<?php echo htmlentities($row['complaint_id']);?>">
<button type="button" class="btn btn-primary">View Details</button></a>
</td>
                                </tr>
                              <?php } ?>
                            
                              </tbody>
                          </table>
                          </div>
      </div>
      <!-- End Table Product -->
      <br>
    </div> 

            


















                    