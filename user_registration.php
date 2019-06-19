<!doctype html>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="main.js"></script>
	</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:light-blue">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Peaches Fashion Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
			</ul>
		</div>
	</div>
	
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!---Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">User Registration Form</div>
					<div class="panel-body">
						<form>
							<div class="row">
								<div class="col-md-6">
									<label for="f_name">First Name</label>
									<input type="text" id="f_name" name="f_name" class="form-control" />
								</div>
								<div class="col-md-6">
									<label for="l_name">Last Name</label>
									<input type="text" id="l_name" name="l_name" class="form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" name="email" class="form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="password">Password</label>
									<input type="password" id="password" name="password" class="form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="repassword">Re-enter Password</label>
									<input type="password" id="repassword" name="repassword" class="form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="mobile">Mobile</label>
									<input type="text" id="mobile" name="mobile" class="form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="address">Address</label>
									<input type="text" id="address" name="address" class="form-control" />
								</div>
							</div>
							
							<p><br /></p>
							<div class="row">
								<div class="col-md-12">
									<input type="button" style="float:right" class="btn btn-lg btn-success" value="SignUp" id="signup_button" name="signup_button" />
								</div>
							</div>
						</form>
					</div>
					<div class="panel-footer">&copy; peaches 2019</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
</body>
</html>