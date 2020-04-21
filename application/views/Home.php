<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kidscare</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
    <style>
        #carousel {
            margin-top: 0px;
            padding-top: 0px;
        }
        header{
            margin-bottom: -3px;
            padding-bottom: 0px;
        }
        .checked {
            color: gold;
        }
        #pilihan-rumahsakit {
            margin-bottom: 100px;
        }
        #Trending-Topic {
            margin-bottom: 100px;
        }
        #nama-rumahsakit{
            color: black;
        }
        #nama-topic{
            color: black;
        }
        #harga{
            font-size: 20px;
        }
        #card-gambar{
            height: 170px;
        }
        #TrendingTopic{
            font-size: 15px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #judul-rumahsakit{
            font-size: 15px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #testimonial{
            height: 30px;
        }
        #gambar-why img{
            
            margin-bottom: 15px;
            height: 100px;
        }
        .card{
            border-radius: 30px;
        }
        .card-img-top{
            border-radius: 30px;
        }
    </style>
</head>
<body style="background-color:#f4f4f4">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <a class="navbar-brand" href="#"><img src="../assets/image/Logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('HomeController')?>" style="color: #17A1EF;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('ImunisasiController')?>">Imunisasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('PesanObatController')?>">Pesan Obat</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 8px;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-radius: 8px;">Search</button>
                <a href="" style="margin-left: 10px;margin-right: 10px;"data-toggle="modal" data-target="#exampleModal"><img src="../assets/image/shopping_cart-24px.svg" alt=""></a>
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

    <section id="carousel" style="">
        <div class="container">

            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="https://hellosehat.com/wp-content/uploads/2017/02/imunisasi-bayi-dan-anak.jpg"
                                alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Imunisasi Sejak dini</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="view">
                            <img class="d-block w-100" src="https://slideplayer.info/slide/3032260/11/images/17/%3E7+Hari+-+%3C+2+bln+%28Posyandu%29.jpg"
                                alt="Second slide">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Kenali Jenis Imunisasi</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="view">
                            <img class="d-block w-100" src="https://d1bpj0tv6vfxyp.cloudfront.net/perlu-tahu-penggunaan-obat-kortikosteroid-berlebihan.jpg"
                                alt="Third slide">
                            <div class="mask rgba-black-slight"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Pesan Obat</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>

        </div>
    </section>
    <br>
    <section id="pilihan-rumahsakit" class="container card" style="margin-bottom:40px">
        <h1 class="card-title container" style="margin-top:20px" id="judul-rumahsakit">
            <strong class="container">Recommended</strong>
        </h1>
        <div class="row" style="margin-bottom:30px">
            <div class="col-lg-4">
                <div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="https://www.columbiaasia.com/indonesia/sites/default/files/hospital/hospitals-pulomas-overview.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://www.columbiaasia.com/indonesia/hospitals/pulomas/overview">
                            <h5 class="card-title" id="nama-rumahsakit">Columbia Asia Hospital</h5>
                        </a>
                        <div class="row " id="rating">
                            <div class="col-lg-7">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="col-lg-5 ">
                                <p>4 (1024)</p>
                            </div>
                        </div>
                        <a href="https://www.columbiaasia.com/indonesia/hospitals/pulomas/overview" class="btn btn-info" style="border-radius: 30px;">Info</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card container" style="width: 18rem;">
                    <img class="card-img-top" src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/528606_17-1-2020_15-7-53.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="http://rscahyakawaluyan.com/">
                            <h5 class="card-title" id="nama-rumahsakit">RS Cahya Kawaluyan</h5>
                        </a>
                        <div class="row " id="rating">
                            <div class="col-lg-7">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="col-lg-5 ">
                                <p>4 (1024)</p>
                            </div>
                        </div>
                        <a href="http://rscahyakawaluyan.com/" class="btn btn-info" style="border-radius: 30px;">Info</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card container" style="width: 18rem;">
                    <img class="card-img-top" src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_list/767292_13-1-2020_14-31-4.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://rs-dewisri.co.id/">
                            <h5 class="card-title" id="nama-rumahsakit">RS Dewi Karawang</h5>
                        </a>
                        <div class="row " id="rating">
                            <div class="col-lg-7">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="col-lg-5 ">
                                <p>4 (1024)</p>
                            </div>
                        </div>
                        <a href="https://rs-dewisri.co.id/" class="btn btn-info" style="border-radius: 30px;">Info</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="Trending-Topic" class="container card">
        <h1 class="card-title" style="text-align:center" id="TrendingTopic">
            <strong class="container">Trending Topic</strong>
        </h1>
        <div class="row" style="margin-bottom:30px">
            <div class="col-lg-4">
                <div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="https://asset.kompas.com/crops/dmuIygeg1vXzuMAWnHHzOg_F84E=/23x0:1000x651/750x500/data/photo/2019/09/03/5d6e128d89167.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://regional.kompas.com/read/2020/04/08/09101181/bayi-berusia-3-bulan-positif-corona-di-kabupaten-bogor-alami-gejala-demam" target="_blank">
                            <h5 class="card-title" id="nama-topic">Bayi Positif Corona,Ketahui Hal ini</h5>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card container" style="width: 18rem;">
                    <img class="card-img-top" src="https://cdn2.tstatic.net/solo/foto/bank/images/ilustrasi-pria-tidur.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://solo.tribunnews.com/2020/04/07/tips-agar-tidur-nyenyak-dan-bebas-dari-mimpi-buruk-di-tengah-pandemi-corona">
                            <h5 class="card-title" id="nama-topic">Tips Tidur nyenyak saat pandemic covid-19</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card container" style="width: 18rem;">
                    <img class="card-img-top" src="https://asset.kompas.com/crops/j8ASmI_JFsA3P0jFbO649a6ZozY=/192x0:1867x1117/750x500/data/photo/2020/03/02/5e5cd7a2ad3c6.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://edukasi.kompas.com/read/2020/03/06/13050941/cara-jaga-kesehatan-anak-sekolah-agar-bebas-virus-corona">
                            <h5 class="card-title" id="nama-topic">Cara Jaga Kesehatan Anak</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom:30px">
            <div class="col-lg-4">
                <div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="https://cdn1-production-images-kly.akamaized.net/7BqX3aO6bV_Y6OztbhiJtCjT4ZM=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2248108/original/064995300_1528792809-iStock-821746568.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://www.liputan6.com/citizen6/read/4200373/jaga-kesehatan-tubuh-hindari-kebiasaan-yang-tak-sadar-sering-kamu-lakukan-ini">
                            <h5 class="card-title" id="nama-topic">Jaga Kesehatan Tubuh, Hindari Kebiasaan ini</h5>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card container" style="width: 18rem;">
                    <img class="card-img-top" src="https://asset.kompas.com/crops/jkujhU5tdaTtgPBlypxFGVnq2TU=/0x0:780x390/750x500/data/photo/2016/03/14/1640472ThinkstockPhotos-512220102780x390.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://lifestyle.kompas.com/read/2020/04/13/115313620/manfaat-hati-ayam-untuk-kesehatan-anak">
                            <h5 class="card-title" id="nama-topic">Manfaat Hati Ayam untuk Kesehatan Anak</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card container" style="width: 18rem;">
                    <img class="card-img-top" src="https://asset.kompas.com/crops/F2p2mJSThM7d5KmZ67dckjKY7fQ=/0x0:1000x667/750x500/data/photo/2017/11/30/834744218.jpg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <a href="https://lifestyle.kompas.com/read/2020/03/05/073000820/pentingnya-asupan-serat-untuk-kesehatan-pencernaan-anak">
                            <h5 class="card-title" id="nama-topic">Pentingnya Asupan serat untuk Anak</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="why-us" style="" class="container">
        <div id="services" class="container-fluid text-center">
            <h2 class="h3-responsive font-weight-bold my-5">Mengapa KidsCare ?</h2>

            <div class="row slideanim">
                <div class="col-sm-4">
                    <div class="avatar mx-auto" id="gambar-why">
                        <img src="../assets/image/travel.png" class="rounded-circle z-depth-1 img-fluid">
                    </div>
                    <h4>PAKET TERBAIK</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <div class="avatar mx-auto" id="gambar-why">
                        <img src="../assets/image/transaction.png" class="rounded-circle z-depth-1 img-fluid">
                    </div>
                    <h4>KEMUDAHAN TRANSAKSI</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <div class="avatar mx-auto" id="gambar-why">
                        <img src="../assets/image/secu.png" class="rounded-circle z-depth-1 img-fluid">
                    </div>
                    <h4>TRANSAKSI AMAN</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <div class="container" style="width:60%">

        <section class="team-section text-center my-5">
            <h2 class="h3-responsive font-weight-bold my-5">Testimonial</h2>

            <div class="row text-center">
                <div class="col-md-4 mb-md-0 mb-5">
                    <div class="testimonial">
                        <div class="avatar mx-auto">
                            <img src="../assets/image/avatar.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <h5 class="font-weight-bold dark-grey-text mt-4">Nama 1</h5>
                        <p class="font-weight-normal dark-grey-text">
                            <i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quod
                            eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <div class="orange-text">
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star-half-alt"> </i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-md-0 mb-5">
                    <div class="testimonial">
                        <div class="avatar mx-auto">
                            <img src="../assets/image/avatar.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <h5 class="font-weight-bold dark-grey-text mt-4">Nama 2</h5>
                        <p class="font-weight-normal dark-grey-text">
                            <i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem
                            ullam
                            corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
                        <div class="orange-text">
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="testimonial">

                        <div class="avatar mx-auto">
                            <img src="../assets/image/avatar.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>

                        <h5 class="font-weight-bold dark-grey-text mt-4">Nama 3</h5>

                        <p class="font-weight-normal dark-grey-text">
                            <i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos
                            ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                        <div class="orange-text">
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="far fa-star"> </i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
                }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        } 
    
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
