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
	grid-column-start : 2;
	grid-column-end: 3;
	border-bottom: 0px;
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
.signUp{
	padding-top: 60px;
    padding-left: 100px;
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
				    </ul>
				  </div>
				</nav>
				<?php if ($this->session->flashdata('error_mes')) : ?>
				<div class="row mt-3">
					<div class="col-md-6">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('error_messages'); ?>.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
				<?php endif; ?>
			  	<div class="form">
					<form style="width: 20cm;" action="<?= site_url('LoginController/aksi_login') ?>" method="post"> 
                        <h1 style="font-weight: bold;">Login</h1>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight: bold;">Email Address</label>
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email Address">
							
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"  style="font-weight: bold;">Password</label>
                            <input type="Password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							<span class="text-danger"><?php echo form_error('email'); ?>
                        </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right; width: 20%;">Login</button>
							<p><a href="" style="color: #17A1EF;">Forgot Your Password?</a></p>
					</form>
				</div>
				<div class="signUp">
					<p>Don't Have an account? <span><a href="<?= site_url('RegistrasiController') ?>" style="color: #17A1EF;">Sign Up</a></span></p>
				</div>
			</div>
		  	<div class="grid-right">
			  	<div class = "foto">
					<img src="../assets/image/Pink-building-wallpaper-by-@beasty-1.jpg">
					<p class="slogan">Save The Children, Save The Future.</p>
				</div>
			</div>
</div>
</body>
</html>