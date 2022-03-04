
<?php
define('TITLE', 'assets');
define('PAGE', 'assets');
include('connection.php');
$id=$_GET['editid'];
$sql="select * from product_table where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$barcode=$row["barcode"];
 $name=$row["name"];
 $brand=$row["brand"];
 $qty=$row["qty"];
 $price=$row["price"];
 $image=$row["image"];
 $description=$row["description"];
if(isset($row["save"]))
{
 $barcode=$_POST["barcode"];
 $name=$_POST["name"];
 $brand=$_POST["brand"];
 $qty=$_POST["qty"];
 $price=$_POST["price"];
 $image=$_POST["image"];
 $description=$_POST["description"];
 $sql1="UPDATE 'product_table' SET id='$id', barcode='$barcode', name='$name', brand='$brand', qty='$qty, price='$price', image='$image', description='$description' where id='$id'";
 $result=mysqli_query($conn,$sql1);
 if($result == TRUE){
     echo 'success';
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Work Assigned Successfully </div>';
   header('location:index.php');
 }
 else{
     echo 'failed';
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Assign Work </div>';
 }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="css/custom.css">

</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">CSMS</a>
 </nav>
 &nbsp;

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dashboard') { echo 'active'; } ?> " href="dashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'work') { echo 'active'; } ?>" href="work.php">
        <i class="fab fa-accessible-icon"></i>
        Work Order
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'request') { echo 'active'; } ?>" href="request.php">
        <i class="fas fa-align-center"></i>
        Requests
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'request') { echo 'active'; } ?>" href="request.php">
        <i class="fas fa-align-center"></i>
        Requests
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'viewcomplaint') { echo 'active'; } ?>" href="adminmessage.php">
        <i class="fas fa-align-center"></i>
        Complaints
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'assets') { echo 'active'; } ?>" href="index.php">
        <i class="fas fa-database"></i>
        Products
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'technician') { echo 'active'; } ?>" href="technician.php">
        <i class="fab fa-teamspeak"></i>
        Technician
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'requesters') { echo 'active'; } ?>" href="requester.php">
        <i class="fas fa-users"></i>
        Requester
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'service') { echo 'active'; } ?>" href="service.php">
        <i class="fas fa-table"></i>
        Service History
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>
  
      <br/><br/>
      <div class="container">
        <p><a href="index.php" class="btn btn-light mb-3"> << Go Back </a>
         <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Edit Product</strong>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">Barcode</label>
                            <input type="text" class="form-control" id="barcode" name="barcode" value=<?php echo $barcode; ?> placeholder="Barcode" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"value=<?php echo $name; ?> required>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="brand" class="col-form-label">Brand</label>
                            <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand" value=<?php echo $brand; ?>required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Price" value=<?php echo $price; ?>>
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="qty" class="col-form-label">Qty</label>
                            <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" value=<?php echo $qty; ?>>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image"value=<?php echo $image; ?> placeholder="Image URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Description" value=<?php echo $description; ?>></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"  name="save" id="save" required><i class="fa fa-check-circle"></i> Update</button>
                </form>
                <?php if(isset($msg)) {echo $msg; } ?>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div>
   <?php
   include('afooter.php');
   ?>