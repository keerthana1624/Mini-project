<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>User home page</title>
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
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
				  <img class="card-img-top mx-auto" style="width:60%;" src="user.png" alt="Card image cap">
				  <div class="card-body">
				    <h4 class="card-title">Profile Info</h4>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>User Name</p>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>User</p>
				    <p class="card-text">Last Login : xxxx-xx-xx</p>
				    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
				  </div>
				</div>
			</div>
            <div class="col-md-8">
				<div class="jumbotron" style="width:100%;height:100%;">
                    <h1>Welcome User,</h1>
                    <div class="row">
						<div class="col-sm-6">
							<iframe src="http://free.timeanddate.com/clock/i616j2aa/n1993/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
						</div>
                        <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Book Service Date</h4>
                            <p class="card-text">Here you can Book the date for your service</p>
                            <a href="new_order.php" class="btn btn-primary">Book Service Date</a>
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
                    <h4 class="card-title">Post Complaints</h4>
                    <p class="card-text">Here you can post your complaints</p>
                    <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Post Complaint</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">View Service Details</h4>
                    <p class="card-text">Here you can view all your service details </p>
                    <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">View Complaint Status</h4>
                    <p class="card-text">Here you  can check the complaint status</p>
                    <a href="manage_product.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
      </body>
      </html>