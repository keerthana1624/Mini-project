
<?php
$conn=mysqli_connect("localhost","root","","website");
if($conn==false){
    die("connection error");
}

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
        <!-- Show  a Product -->
        <a href="index.php" class="btn btn-light mb-3"> << Go Back </a>
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-database"></i> Show Complaint</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-striped">
                        <?php
                        
                        
                            $sql="select * from complaint_table where complaint_id='".$_GET['cid']."'";
                            $result=mysqli_query($conn,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $c_id=$row['complaint_id'];
                                    $regdate=$row['regdate'];
                                    $name=$row['name'];
                                    $ref=$row['ref'];
                                    $subject=$row['subject'];
                                    $complaint=$row['complaint'];
                                    $document=$row['document'];
                                    echo '
                                    <tr>
                                    <th scope="row"> '.$c_id.' </th> 
                                <th>Reference NO</th>
                                <td>'.$ref.'</td>
                                <th>Registration Date</th>
                                <td>'.$regdate.'</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>'.$name.'</td>
                                <th>Subject</th>
                                <td>'.$subject.'</td>
                            </tr> 
                             
                            <tr>
                                <th>Complaint</th>
                                <td colspan="4">'.$complaint.'</td>
                            </tr>
                            </table>
                        <br><br>
                    </div>
                    <div class="col-3">

                        <img src="'.$document.'" alt="document" class="img-fluid img-thumbnail">
                    
                    </div>
                    ';}
                                 } ?>
                                 <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-striped">

                            <?php
                             $ret= "SELECT * FROM complaintremark WHERE complaint_id='".$_GET['cid']."'";
                             $result1=mysqli_query($conn,$ret);
                            while($rw=mysqli_fetch_assoc($result1 ))
                            {
                              $remark=$rw['remark'];
                              $remarkdate=$rw['remarkdate'];
                              $status=$rw['status'];

                            echo '
                             <tr>
                                <th>Remark</th>
                                <td>'.$remark.'</td>
                                <th>Remark Date</th>
                                <td>'.$remrkdate.'</td>
                                <th>Status</th>
                                <td>'.$status.'</td>
                            </tr> </table>'; 
                            
                            if($rw['status']=="NULL" || $rw['status']=="" )
                            {
                            echo '"Not Process yet"';
                            } else{
                                          echo $status ;
                            }
                          

                          }
                          ?> 
            </div>
        </div>
        <!-- End Show a product -->
    </div>