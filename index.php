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
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="user_registration.php"><span class="glyphicon glyphicon-user"></span>Join</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
						<ul class="dropdown-menu">
							<div style="width:300px">
								<div class="panel panel-primary">
									<div class="panel-heading">Login</div>
									<div class="panel-heading">
										<label for="email">Email</label>
										<input type="email" id="email" class="form-control" name="email" required/>
										<label for="password">Password</label>
										<input type="password" id="password" class="form-control" name="password" required/>
										<p><br /></p>
										<a href="#" style="color:white; list-style:none; ">Forgotten Password</a><input type="button" class="btn btn-success" style="float:right" id="login" value="Login" />
									</div>
									<div class="panel-footer" id="e_msg"></div>
								</div>
							</div>
						</ul>
					</li>
					<li><a href="#">Sewing Tutorials</a></li>
					<li><a href="#">Help</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>SHOPPING</a></li><!---need to make the shopping blinking-->
					<li style="width:200px; left:10px; top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="left:20px; top:10px;"><button class="btn btn-sm btn-primary" id="search_btn">Search</button></li>
				</ul>
			</div>
		</div>
	<p><br/></p>
	<p><br/></p>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:white">
		<!--<p><marquee><i><b>PFS</b> slaying at pocket friendly!!!</i> Home for all about Fashion & style</marquee></p>-->
		
			<div class="panel panel-primary">
				<div class="panel-heading"><h4 Style="text-align:center">Welcome to peaches, Your all in one fashion site!!!</h4></div>
				<div class="panel-body">
					<p>Peaches is a fashion site for both male and female to visit due to the numerous activities going down here. we have activities ranging from
						<a href="#">cutting tutorials</a> -> <a href="#">video tutorials</a> -> <a href="#">shopping</a> for the latest best fit designs..
						lots of contents should go in here..introductions, selling point, content shift stuff..etc...<b>For full experience register and login with your details</b></p>
					<div class="row">
						<h3 class="active"><a href="#">SEWING TUTORIALS</a></h3>
						<div class="col-md-4">
							<div id="get_pc_topics">
							</div>
							<!--<div class="nav nav-pills nav-stacked">
								<li class="active"><a href="#">Paper Cuttings</a></li>
								<li><a href="#">This would a topic link to the full procedure</a></li>
								<li><a href="#">This should be anothe topic also</a></li>
								<li><a href="#">This would a topic link to the full procedure click it and yippe!!!</a></li>
							</div>-->
						</div>
						
						<div class="col-md-8">
							
							<div class="nav nav-pills nav-stacked">
								<li class="active"><a href="#">Tutorial Steps</a></li>
								<div id="get_files">
								
								</div>
								<!--<div class="col-md-6">
									<li>making a gown</li>
									<img src="images/wedding_rings.jpg" width="150px"; height="150px"></img>
								</div>-->
								<!--<div class="col-md-6">
								<li>making a dress</li>
								<img src="images/wedding_rings.jpg" width="150px"; height="150px"></img>
								</div>-->
							</div>
						</div>
					</div>
					<p><hr></p>
					<div class="row">
						<h3 class="active"><a href="#">VIDEO TUTORIALS</a></h3>
						<div id="get_videos">
							<!--video should be displayed here-->
						</div>
					</div>
					<p><hr></p>
					<div class="row">
						<h3><a href="#">SHOPPING</a></h3>
						<div class="nav nav-pills nav-stacked">
							<p><b><a href="#">Click to Enter store</a></b></p>
						</div>
						<div id="get_designs">
							<!--Where the designs are displayed-->
						</div>
					</div>
				</div>
				<div class="panel-footer">&copy; peaches 2019</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	
	
	
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<p id="hidee">hide this from the screen by pressing this</p><button id="hide">hide me</button>
</body>
</html>