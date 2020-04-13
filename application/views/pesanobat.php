<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
   </head>
   <style>
        .title{
            background-image: url('../assets/image/iStock-638377134.jpg');
        }
        .card{
            border: 1px solid black;
        }
        .card-title{
            color: #17A1EF;
        }
        .btn-primary{
            border-radius: 20px;
        }
        .nav-item:hover{
            color: #17A1EF;
        }
   </style>
   <body>
    <!-- As a heading -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <a class="navbar-brand" href="#"><img src="../assets/image/Logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('HomeController')?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('ImunisasiController')?>">Imunisasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('PesanObatController')?>"  style="color: #17A1EF;">Pesan Obat</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 8px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-radius: 8px;">Search</button>
            </form>
        </div>
    </nav>
	<div class="title" style="padding-bottom: 200px; margin: 0px;">
	    <div class="container" style="margin-top: 0px;">
            <h1 style="padding-top: 50px;">Pesan Obat Mudah dan Cepat</h1>
	    </div>
	</div>
    <br>
   
        <div style="background-color:white;">
                <div class="container" style="padding-bottom: 80px;">
                <div style="padding : 50px;">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cari obat" aria-label="Search" style="border-radius: 8px; width : 70%; margin-left: 40px;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-radius: 8px;">Cari</button>
                    </form>
                </div>
                <div class="row">
                <div class="col-lg-4">
                    <div class="card container" id="card" style="width: 18rem;border-radius: 30px;">
                        <img class="card-img-top" src="../assets/image/150923423_688a7d67-dda4-41bd-849b-b4194f67a04a_1000_1000.png" alt="Card image cap" id="card-gambar" style="border-radius: 30px;">
                        <div class="card-body">
                            <h5 class="card-title" id="nama-obat">Profis Ibuprofen</h5>
                            <p>Lorem ipsum dolor sit amet..</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card container" style="width: 18rem; border-radius: 30px;">
                    <img class="card-img-top" src="../assets/image/3c3180b212f6b37321e5df5452a34ea4.jpg" alt="Card image cap" id="card-gambar" style="border-radius: 30px;">
                        <div class="card-body">
                            <h5 class="card-title" id="nama-obat">Tempra Paracetamol</h5>
                            <p>Lorem ipsum dolor sit amet..</p>
                            <a href="#" class="btn btn-primary" style="">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card container" style="width: 18rem; border-radius: 30px;">
                    <img class="card-img-top" src="../assets/image/6507175_13b2f81d-9639-47ec-9135-5c28c7f52e66.jpg" alt="Card image cap" id="card-gambar"style="border-radius: 30px;">
                        <div class="card-body">
                            <h5 class="card-title" id="nama-obat">OBH Combi</h5>
                            <p>Lorem ipsum dolor sit amet..</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row" style="margin-top: 50px;">
                <div class="col-lg-4">
                    <div class="card container " style="width: 18rem;border-radius: 30px;">
                        <img class="card-img-top" src="../assets/image/150923423_688a7d67-dda4-41bd-849b-b4194f67a04a_1000_1000.png" alt="Card image cap" id="card-gambar"style="border-radius: 30px;">
                        <div class="card-body">
                                <h5 class="card-title" id="nama-obat">Profis Ibuprofen</h5>
                                <p>Lorem ipsum dolor sit amet..</p>
                                <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card container" style="width: 18rem;border-radius: 30px;">
                    <img class="card-img-top" src="../assets/image/150923423_688a7d67-dda4-41bd-849b-b4194f67a04a_1000_1000.png" alt="Card image cap" id="card-gambar"style="border-radius: 30px;">
                        <div class="card-body">
                            <h5 class="card-title" id="nama-obat">Profis Ibuprofen</h5>
                            <p>Lorem ipsum dolor sit amet..</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card container" style="width: 18rem;border-radius: 30px;">
                        <img class="card-img-top" src="../assets/image/150923423_688a7d67-dda4-41bd-849b-b4194f67a04a_1000_1000.png" alt="Card image cap" id="card-gambar"style="border-radius: 30px;">
                        <div class="card-body">
                            <h5 class="card-title" id="nama-obat">Profis Ibuprofen</h5>
                            <p>Lorem ipsum dolor sit amet..</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <br>
    <section class="footer">
            <footer class="page-footer font-small blue pt-4">
                    <div class="container-fluid text-center text-md-left">
                        <div class="row container">
                            <div class="col-md-2 mb-md-0 mb-2">
                                <img src="../assets/image/LogoAsli.png" alt="Logo" width="150px" height="150px">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <h5 class="text-uppercase">
                                    <img src="../icon/traveline.png" alt="" style="width:35%">
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis deleniti reprehenderit labore animi eius magnam? Laudantium atque minus nemo, ea reiciendis tempora molestias excepturi! Modi iusto consequatur aperiam minima odio?</p>

                            </div>

                            <hr class="clearfix w-100 d-md-none pb-3">
                            <div class="col-md-2 mb-md-0 mb-3">
                                <h5 class="text-uppercase">Link</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2 mb-md-0 mb-3">
                                <h5 class="text-uppercase">Link</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="https://mdbootstrap.com/education/bootstrap/">KidsCare</a>
                    </div>
                </footer>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>