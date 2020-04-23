<!DOCTYPE html>
<html>
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
    .btn{
        border-radius: 40px;
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
                    <a href="" style="margin-left: 10px;margin-right: 10px;"data-toggle="modal" data-target="#ImunisasiModal"><img src="../assets/image/event_note-24px.svg" alt=""></a>
                </form>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle my-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../assets/image/account.svg" alt="icon" height="50px" width="50px" >
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profil</a>
                    <a class="dropdown-item" href="<?= site_url('homeController/logout')?>">Logout</a>
                </div>
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
            <th scope="col" style="background-color: #e968ab;">Rumah Sakit</th>
            <th scope="col">Jenis Imunisasi</th>
            <th scope="col" style="background-color: #e968ab;">Jadwal</th>
            <th scope="col">Harga</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
                <tr><?php foreach($data_jadwal as $dj) : ?>
                    <td><?= $dj['nama_rs']?></td>
                    <td scope="row"><?= $dj['jenis_imunisasi']?></th>
                    <td><?= $dj['jadwal_imunisasi']?></td>
                    <td>Rp. <?= $dj['harga']?>,00</td>
                    <td><a  type="button" class="btn btn-primary" style="border-radius: 30px;" href="<?= site_url('PesanImunisasitController/index/'.$dj['id_jadwal']) ?>" type="button" style="border-radius: 10px;">Pesan</a> </td>
                </tr><?php endforeach; ?>
        </tbody>
    </table>

    <div class="modal fade" id="ImunisasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pesanan Imunisasi Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="background-color: #e968ab;">Nama Rumah Sakit</th>
                                <th scope="col">Jadwal Imunisasi</th>
                                <th scope="col" style="background-color: #e968ab;">Jenis Imunisasi</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                    <h5><a href="<?= site_url('ImunisasiController')?>">+ Tambah</a></h5>        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 30px; background-color: #e968ab;">Close</button>
                    <a type="button" class="btn btn-primary" style="border-radius: 30px;" href="">Next</a>
                </div>
            </div>
        </div>
    </div>

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

    </script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js">
    </script>
</body>
</html>