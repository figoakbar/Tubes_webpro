<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
    
</head>
<style>
    .title{
        background-image: url('../assets/image/iStock-638377134.jpg');
        background-size:cover;
    }
    .table{
        margin-top: 30px;
    }
    thead{
        background-color:  #17A1EF;
        color: white;
    }
    .btn{
        /*background-color: white;
        color: grey;
        border: 1px solid white;*/
    }
    td img{
        height: 100px;
        width:100px;
        border-radius: 100%
    }
    .footer{
        margin-top: 80px;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
            <a class="navbar-brand" href="#"><img src="../assets/image/Logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('HomeController')?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('ImunisasiController')?>" style="color: #17A1EF;" >Imunisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('PesanObatController')?>">Pesan Obat</a>
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
            <h1 style="padding-top: 50px;">Daftar Tanpa Perlu Antri</h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Rumah Sakit</th>
            <th scope="col">Jenis Imunisasi</th>
            <th scope="col">Jadwal</th>
            <th scope="col">Harga</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Rumah Sakit Pondok Indah</td>
            <td>Influenza</td>
            <td>20 Maret 2020<br>Pukul: 12.00 - 20.00</td>
            <td>Rp 70.000,00</td>
            <td><a href="#" class="btn btn-primary">></a></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Rumah Sakit Pondok Indah</td>
            <td>Dengue</td>
            <td>20 Maret 2020<br>Pukul: 12.00 - 20.00</td>
            <td>Rp 70.000,00</td>
            <td><a href="#" class="btn btn-primary">></a></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Rumah Sakit Pondok Indah</td>
            <td>Campak</td>
            <td>20 Maret 2020<br>Pukul: 12.00 - 20.00</td>
            <td>Rp 70.000,00</td>
            <td><a href="#" class="btn btn-primary">></a></td>
            </tr>
        </tbody>
    </table>
    <section class="footer">
            <footer class="page-footer font-small blue pt-4">
                    <div class="container-fluid text-center text-md-left">
                        <div class="row container">
                            <div class="col-md-2 mb-md-0 mb-2">
                                <img src="../assets/image/LogoAsli.png" alt="Logo" width="150px" height="150px">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <h5 class="text-uppercase">
                                    <img src="/icon/traveline.png" alt="" style="width:35%">
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
</body>
</html>