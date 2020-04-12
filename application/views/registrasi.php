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
	grid-column-start : 3;
	grid-column-end: 3;
}

.form-group input[type="text"]
{
	border: none;
	border-bottom: 6px solid #17A1EF;
	width: 100%;
}
.form-group input[type="password"]
{
	border: none;
	border-bottom: 6px solid #17A1EF;
	width: 100%;
}

.form-group input[type="email"]
{
	border: none;
	border-bottom: 6px solid #17A1EF;
	width: 100%;
}

form
{
	padding-top: 200px;
    padding-left: 100px;
}

img{
	padding-left: 60px;
	width: 1160px;
	height: 920px;
}

.form-group
{
	padding-top : 10px;
}

.foto
{
	position: relative;
  	color: white;
}

.slogan {
  	position: absolute;
  	width: 350px;
	height: 148px;
	left: 200px;
	top: 600px;

	font-style: normal;
	font-weight: bold;
	font-size: 40px;
	line-height: 42px;
	display: flex;
	align-items: center;

  	color : white;
}

</style>
<body>
<div class="grid">
			<div class="grid-left">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
				  <a class="navbar-brand" href="#"><img src="assets/image/Logo.png" alt="" style="height: 70px; width: 130px;"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('LoginController') ?>" style="color: #17A1EF;">Login</a>
						</li>
				    </ul>
				  </div>
				</nav>
			  	<div class="form">
					<form style="width: 20cm;" action ="<?= site_url('RegistrasiController/user_registration')?>" method ='post'>
                        <h1 style="font-weight: bold;">Sign Up</h1>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName" style="font-weight: bold;">Name</label>
                                        <input type="text" name ='name' class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail" style="font-weight: bold;">Email Address</label>
                                        <input type="email" name ='email' class="form-control" id="inputEmail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress" style="font-weight: bold;">Address</label>
                                    <input type="text" name ='alamat' class="form-control" id="inputAddress" placeholder="Address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword" style="font-weight: bold;">Password</label>
                                        <input type="password" name = 'password' class="form-control" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPasswordConf" style="font-weight: bold;">Confirmed Password</label>
                                        <input type="password" name='confPass'  class="form-control" id="inputPasswordConf" placeholder="Confirmed Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right; width: 100%; margin-top: 15px;">Sign Up</button>
                                </div>
                    </form>
			    </div>
			</div>
		  	<div class="grid-right">
			  	<div class = "foto">
					<img src="..\assets\image\stethoscope.jpg">
					<p class="slogan" style="color: black;">Save The Children, Save The Future.</p>
				</div>
			</div>
</div>
</body>
</html>