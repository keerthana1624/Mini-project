<?php
define('TITLE', 'complaint');
define('PAGE', 'complaint');

include('connection.php');


if(isset($_POST["save"]))
{
 $complaint_id=$_POST["complaint_id"];
 $phone=$_POST["phone"];
 $ref=$_POST["ref"];
 $user_id=$_POST["user_id"];
 $name=$_POST["name"];
 $email=$_POST["email"];
 $subject=$_POST["subject"];
 $complaint=$_POST["complaint"];
 $document=$_POST["document"];
 $sql="INSERT INTO complaint_table(name,phone,complaint_id,ref,user_id,email,subject,complaint,document) VALUES('$name','$phone','$complaint_id','$ref','$user_id','$email','$subject','$complaint','$document')";
 $result=mysqli_query($conn,$sql);
 $tak="SELECT * FROM complaint_table";

}

$session=$_SESSION['user_id'];
    $ref = rand(3858558,100000);
    $error = " ";
    $message = " ";
    $alpha="M y a p p ";

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Complaint page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script type="text/javascript" src="./js/main.js"></script>
     
 </head>
 <body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">CSMS</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="mainhome.php" class="nav-link">Home</a></li>
      </ul>
    </div>
  </nav>
  <br></br>


      <br/><br/>

      <?php
            $query1="SELECT * FROM `userlogin` WHERE user_id LIKE '%$session%'";
            $row=mysqli_query($conn,$query1);
           
            while( $arry=mysqli_fetch_array($row) ) {
              $user_id=$arry['user_id'];
              $name=$arry['name'];
              $phone=$arry['phone'];
              $email = $arry['email'];
                 }
                   
              ?>
                  
      <div class="container">
        <form class="" method="post" autocomplete="off">
         <!-- Create Form -->
         <div class="panel panel-default">
            <div class="panel-body">
                <h2>Your Refference no : &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                     echo $ref;
                echo"<p><span class='error'>".$error."</p></span>";
                echo "<p><span class='message'>".$message."</p></span>";
                ?></h2>
            </div>
        </div>
         <a href="Requesterprofile.php" class="btn btn-light mb-3"> << Go Back </a>
         <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add Complaint</strong>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="complaint_id" class="col-form-label">complaint_Id</label>
                            <input type="number" class="form-control" id="complaint_id" name="complaint_id" autocomplete="off" placeholder="complaint_id"  >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ref" class="col-form-label">Reference Id</label>
                            <input type="number" class="form-control" id="ref" name="ref" autocomplete="off" placeholder="ref" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user_id" class="col-form-label">User_Id</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" autocomplete="off" placeholder="user_id" value=" <?php echo $user_id;?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Name" value=" <?php echo $name;?>">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="phone" class="col-form-label">Phoneno</label>
                            <input type="text" class="form-control" name="phone" id="phone" autocomplete="off" placeholder="phone" value=" <?php echo $phone;?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="" class="col-form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email" autocomplete="off" placeholder="email" value=" <?php echo $email;?>">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="subject" class="col-form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" autocomplete="off" placeholder="subject" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Document</label>
                            <input type="text" class="form-control" name="document" id="document" autocomplete="off" placeholder="Image URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">complaint</label>
                        <textarea name="complaint" id="complaint" rows="5" class="form-control" autocomplete="off"  placeholder="complaint"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"  name="save" id="save" required><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>

</div>