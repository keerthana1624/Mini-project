<?php
 define('TITLE','forward');
 define('PAGE','forward');
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
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">OSMS</a>
 </nav>
 &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   <?php
 include('connection.php');
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
  $showid=$_GET['showid'];
  ?>

   <div class="animated fadeIn">
     <br>
     <br>
     <br>
     <?php
     if(isset($_REQUEST['assign'])){
      $id = $_REQUEST['complaint_id'];
      $user_id = $_REQUEST['user_id'];
      $se_id=$_REQUEST['showid'];
      $name = $_REQUEST['name'];
    
      $phone = $_REQUEST['phone'];
      $subject = $_REQUEST['subject'];
      $complaint = $_REQUEST['complaint'];
      $ref = $_REQUEST['ref'];
      $action=$_REQUEST['action'];
      $sql = "INSERT INTO assigncomplaint_tb (id, user_id, se_id, name,  phone, subject, complaint, ref, action) VALUES ('$id', '$user_id', '$se_id', '$name', '$phone', '$subject', '$complaint', '$ref', '$action')";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">  Assigned Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Assign  </div>';
    }


     }
      ?>
       



   <div class="div">
   <a href="adminmessage.php" class="btn btn-light mb-3"> << Go Back </a>

     <div class="col-lg-12">
    
     <?php
     $no=1;
       $sql="SELECT * FROM selogin WHERE se_id = $showid";
       $result = $conn->query($sql);
       while($row1 = $result->fetch_assoc()){
           $name = $row1['name'];
             }
             
     ?>
     <h2>You  are sending this message to <?php echo $name ; ?></h2>
      



     
 <?php
   $query1="SELECT * FROM complaint_table WHERE complaint_id ={$_REQUEST['id']}";
   $result = $conn->query($query1);
   $row = $result->fetch_assoc();
   ?>
   <form action="" method="POST">
     <?php
   echo '<table class="table">';
   while($arry = $result->fetch_assoc()){
   

     $id = $arry['complaint_id'];
     $user_id = $arry['user_id'];
     $name = $arry['name'];
     $username = $arry['username'];
     $email = $arry['email'];
     $phone = $arry['phone'];
     $subject = $arry['subject'];
     $complaint = $arry['complaint'];
     $ref = $arry['ref'];

   }
   ?>
   <div class="col-sm-5 mt-5 jumbotron">
  <!-- Main Content area Start Last -->
  <form action="" method="POST">
    <h5 class="text-center">Assign Complaint</h5>
    <div class="form-group">
      <label for="request_id">Complaint ID</label>
      <input type="text" class="form-control" id="complaint_id" name="complaint_id" value="<?php if(isset($row['complaint_id'])) {echo $row['complaint_id']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="request_id">user ID</label>
      <input type="text" class="form-control" id="user_id" name="user_id" value="<?php if(isset($row['user_id'])) {echo $row['user_id']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="request_id">SE ID</label>
      <input type="text" class="form-control" id="showid" name="showid" value="<?php echo $_GET['showid'] ?>"
        readonly>
    </div>
   
    <div class="form-group">
      <label for="requestername">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($row['name'])) { echo $row['name']; } ?>">
    </div>
   
      <div class="form-group col-md-4">
        <label for="requestermobile">Mobile</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php if(isset($row['phone'])) {echo $row['phone']; }?>"
        >
      </div>
  
    <div class="form-group">
      <label for="a">subject</label>
      <input type="text" class="form-control" id="subject" name="subject"  value="<?php if(isset($row['subject'])) {echo $row['subject']; }?>">
    </div>
    <div class="form-group">
      <label for="a">Complaint</label>
      <input type="text" rows="5" height="486" class="form-control" id="complaint" name="complaint"  value="<?php if(isset($row['complaint'])) {echo $row['complaint']; }?>">
    </div>
    <div class="form-group">
      <label for="a">Ref No</label>
      <input type="text"  class="form-control" id="ref" name="ref"  value="<?php if(isset($row['ref'])) {echo $row['ref']; }?>">
    </div>
    <div class="form-group">
      <label for="a">Action</label>
      <textarea type="text" rows="5" class="form-control" id="action" name="action"  value="<?php if(isset($row['action'])) {echo $row['action']; }?>"></textarea>
    </div>
    <div class="float-right">
      <button type="submit" class="btn btn-success" name="assign">Save</button>
      
    </div>
  </form>
  <!-- below msg display if required fill missing or form submitted success or failed -->
  <?php if(isset($msg)) {echo $msg; } ?>












 <?php





   include('afooter.php');

   ?>
  </body>
</html>
