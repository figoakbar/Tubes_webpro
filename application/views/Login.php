<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
    body
{
	font-family: Roboto;
}
.grid
{
	display: grid;
}
.grid-left
{
	grid-column-start : 1;
	grid-column-end: 2;
}
.grid-right
{
	grid-column-start : 2;
	grid-column-end: 3;
	border-bottom: 0px;
}

.form-group input[type="text"]
{
	border: none;
	border-bottom: 3px solid #17A1EF;
	width: 100%;
}
.form-group input[type="password"]
{
	border: none;
	border-bottom: 3px solid #17A1EF;
	width: 100%;
}

form
{
	padding-top: 270px;
    padding-left: 100px;
}

img{
	padding-left: 60px;
	width: 1160px;
	height: 920px;
}

</style>
<body>
<div class="grid">
			<div class="grid-left">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
				  <a class="navbar-brand" href="#">Navbar</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				    </ul>
				  </div>
				</nav>
			  	<div class="form">
					<form style="width: 20cm;">
					<h1 style="font-weight: bold;">Login</h1>
					  <div class="form-group">
					    <label for="exampleInputPassword1" style="font-weight: ">Username</label>
					    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Username">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="Password" name="nim" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <h6>Forgot Your Password ?</h6><a class="nav-link" href="" style="color: #17A1EF;">Sign Up</a>
					  <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;">Submit</button>
					</form>
			    </div>
			</div>
		  	<div class="grid-right">
				<img src="assets/image/291-2915672_football-cartoon-illustration-kids-playing-soccer-animation-png.png">
			</div>
		</div>
</body>
</html>