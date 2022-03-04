
<?php
define('TITLE', 'assets');
define('PAGE', 'assets');
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
        Product
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
   <?php
   include('connection.php');
   ?>
     &nbsp;
     &nbsp;
      <div class="container">
         <!-- Table Product -->
         <div class="card border-danger">
            <div class="card-header bg-danger text-white">
            <strong><i class="fa fa-database"></i> Products</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left">Table Products</h5>
                    <a href="create.php" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>BARCODE</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql="SELECT * FROM product_table";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $barcode=$row['barcode'];
                            $name=$row['name'];
                            $price=$row['price'];
                            $qty=$row['qty'];
                            echo ' <tr>
                            <th scope="row"> '.$id.' </th> 
                            <td>'.$barcode.'</td>
                            <td>'.$name.'</td>
                            <td>'.$price.'</td>
                            <td>'.$qty.'</td>
                            <td>
                                <a href="show.php?showid='.$id.'" class="btn btn-sm btn-light"><i class="fa fa-th-list"></i></a>
                                <a href="edit.php?editid='.$id.'" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <a href="delete.php?deleteid='.$id.'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>';
                        }
                         
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
      </div>
      <!-- End Table Product -->
    
    </div> 
  <?php
  include('afooter.php');