<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin home page</title>
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
              <a class="nav-link" href="mainhome.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
              </li>
            </ul>
        </div>
      </nav>

      <br/><br/>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
				  <img class="card-img-top mx-auto" style="width:60%;" src="user.png" alt="Card image cap">
				  <div class="card-body">
				    <h4 class="card-title">Profile Info</h4>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Keerthana v m</p>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
				    <p class="card-text">Last Login : xxxx-xx-xx</p>
				    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
				  </div>
				</div>
			</div>
            <div class="col-md-8">
				<div class="jumbotron" style="width:100%;height:100%;">
                    <h1>Welcome Admin,</h1>
                    <div class="row">
						<div class="col-sm-6">
							<iframe src="http://free.timeanddate.com/clock/i616j2aa/n1993/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
						</div>
                        <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">New Complaints</h4>
                            <p class="card-text">Here you can view the complaints posted by the customers</p>
                            <a href="new_order.php" class="btn btn-primary">View Complaints</a>
                            <a href="manage_categories.php" class="btn btn-primary">Manage</a>
                          </div>
                        </div>
                    </div>
                    
				</div>
			</div>
		</div>
	</div>
    </div>>
	<p></p>
	<p></p>
    <div class="container">
		<div class="row">
			<div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Add User</h4>
                    <p class="card-text">Here you can register new customer</p>
                    <a href="userregister.php"  class="btn btn-primary">Add User</a>
                    <a href="#" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Add Service Engineer</h4>
                    <p class="card-text">Here you can register new service engineer</p>
                    <a href="seregister.php"  class="btn btn-primary">Add</a>
                    <a href="manage_brand.php" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Add Products</h4>
                    <p class="card-text">Here you  can view and add new products</p>
                    <a href="create.php"  class="btn btn-primary">Add</a>
                    <a href="index.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
      </body>
      </html>