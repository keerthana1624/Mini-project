<?php
include'connection.php';
if(!empty($_SESSION["se_id"])){
	header("location:seprofile.php");
}
if(!empty($_SESSION["user_id"])){
	header("location:Requesterprofile.php");
}



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(isset($_POST["submit"])){

    $sql="select * from selogin where username='".$username."' AND password='".$password."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

	$sql1="select * from userlogin where username='".$username."' AND password='".$password."'";
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);

    



    if(mysqli_num_rows($result)>0)
    {
        if($password == $row["password"]){
			$_SESSION["submit"] = true;
			$_SESSION["se_id"]= $row["se_id"];
			header("location:seprofile.php");
		}
		
		else{
			"<script> alert('wrong password'); </script>";
		}
    }
    
    else if(mysqli_num_rows($result1)>0){
		if($password == $row1["password"]){
			$_SESSION["submit"] = true;
			$_SESSION["user_id"]= $row1["user_id"];
			header("location:Requesterprofile.php");
		}
		
        else{
			"<script> alert('wrong password'); </script>";
		}
    }
    
	else{
		echo"error";
	}
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <style>
    .custom-margin {
         margin-top: 8vh;
      }
   </style>
  <title>Login</title>
</head>

<body>

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
        
        
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
      </ul>
    </div>
  </nav>
  <br></br>
  <div class="mb-3 text-center mt-5" style="font-size: 30px;">
    <i class="fas fa-stethoscope"></i>
    <span>Car Showroom Service Management System</span>
  </div>
  <p class="text-center" style="font-size: 20px;"> <i class="fas fa-user-secret text-danger"></i> <span>Login Here</span>
  </p>
  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
      <div class="col-sm-6 col-md-4">
        <form action="" class="shadow-lg p-4" method="POST">
          <div class="form-group">
            <i class="fas fa-user"></i><label for="username" class="pl-2 font-weight-bold">Username</label><input type="text"
              class="form-control" autocomplete="off" placeholder="username" name="username">
            <!--Add text-white below if want text color white-->
            <small class="form-text">We'll never share your data with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="password" class="pl-2 font-weight-bold">Password</label><input type="password"
              class="form-control" placeholder="Password" name="password">
          </div>
          <button type="submit" name="submit" class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold">Login</button>
          <?php if(isset($msg)) {echo $msg; } ?>
        </form>
        <div class="text-center"><a class="btn btn-info mt-3 shadow-sm font-weight-bold" href="mainhome.php">Back
            to Home</a></div>
      </div>
    </div>
  </div>

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>














