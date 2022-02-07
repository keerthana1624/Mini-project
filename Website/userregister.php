<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>User Register page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<div class="card mx-auto" style="width: 30rem;">
          <img class="card-img-top mx-auto" style="width: 40%; "src="reg.png" alt="icon">
	        <div class="card-header text-center text-white bg-primary" ><h3>User Registration</h3></div>
		      <div class="card-body">
            <form action="#" method="post">
              
              <div>
              <input type="text"  id="name" class="form-control" name="name" placeholder="NAME" required/><br>
              </div>
              <div>
              <input type="tel" id="phone" name="phone" class="form-control" placeholder="PHONE NUMBER" required><br>
              </div>
              <div>
              <input type="text"  id="user_id" class="form-control" name="user_id" placeholder="USER-ID" required/><br>
              </div>
              <div>       
              <select name="gender" class="form-control" required>
              <option value="none" selected>GENDER</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">other</option>
              </select><br>
              </div>
              <div>
              <input type="text" id="address" name="address" class="form-control"  placeholder="ADDRESS" required><br>        
              </div>
              <div>
			  <input type="text" id="city" name="city" class="form-control"  placeholder="CITY" required><br>        
              </div>
              <div>
              <input type="email" id="email" name="email" class="form-control"  placeholder="EMAIL" required> <br>       
              </div>
              <div>
              <input type="text" id="username" name="username" class="form-control"  placeholder="USERNAME" required><br>
			  </div>
              <div>
              <input type="password" id="password" name="password" class="form-control"  placeholder="PASSWORD" required><br>
			  </div>
              <button type="submit"  value="REGISTER"class="btn btn-primary w-100" name="save" required><span class="fa fa-user"> </span>&nbsp;Register</button> <br>
            </form>
          </div>
	</div>
</div>
</body>
</html>
		        