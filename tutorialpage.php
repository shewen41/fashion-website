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
	
		
		<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:pink">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Peaches Fashion Store</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>Join</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>SignIn</a></li>
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
		<div class="col-md-8" style="background-color:pink">
		<p><marquee><i><b>PFS</b> slaying at pocket friendly!!!</i> Home for all about Fashion & style</marquee></p>
		
			<div class="panel panel-info">
				<div class="panel-heading"><h4>Tutorial in Detail</h4></div>
				<div class="panel-body">
					
					<div class="row">
						<div id="get_tutorial">
						
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