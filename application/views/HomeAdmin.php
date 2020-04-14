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
        #cari-posyandu{
            margin-top: 50px;
            margin-bottom: 60px;
            width: 60%
        }
        #cari-posyandu span{
            padding-top: 15px;
            font-size: 14px;
        }
        #pilihan-input {
            margin-bottom: 100px;
            margin-top: 50px;
        }
        .card{
            border-radius: 30px;
        }
        .card-title{
            text-align: center;
        }
        #pilihan-view{
            padding-top: 30px;
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
                    <a class="nav-link" href="<?= site_url('HomeAdminController')?>" style="color: #17A1EF;">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 8px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-radius: 8px;">Search</button>
            </form>
        </div>
    </nav>
    <section id="pilihan-input" class="container" style="margin-bottom:40px">
        <h3 style="text-align: center;"> INPUT DATA </h3>
        <div class="row" style="margin-bottom:30px">
            <div class="col-lg-4">
                <a><div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="../assets/image/drag_indicator-black-18dp.svg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <h5 class="card-title" id="Input-Obat">Input Obat</h5>

                    </div>
                </div></a>
            </div>
            <div class="col-lg-4">
                <a><div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="../assets/image/local_hospital-24px.svg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <h5 class="card-title" id="Input-Obat">Input Rumah Sakit</h5>

                    </div>
                </div></a>
            </div>
            <div class="col-lg-4">
                <a><div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="../assets/image/colorize-24px.svg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <h5 class="card-title" id="Input-Obat" href ="">Input Imunisasi</h5>

                    </div>
                </div></a>
            </div>
        </div>
    </section>

    <section id="pilihan-view" class="container" style="margin-bottom:40px">
        <h3 style="text-align: center;"> VIEW DATA </h3>
        <div class="row" style="margin-bottom:30px">
            <div class="col-lg-4">
                <a><div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="../assets/image/drag_indicator-black-18dp.svg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <h5 class="card-title" id="Input-Obat">Data Obat</h5>

                    </div>
                </div></a>
            </div>
            <div class="col-lg-4">
                <a><div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="../assets/image/local_hospital-24px.svg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <h5 class="card-title" id="Input-Obat">Data Rumah Sakit</h5>
                    </div>
                </div></a>
            </div>
            <div class="col-lg-4">
                <a><div class="card container " style="width: 18rem;">
                    <img class="card-img-top" src="../assets/image/person-24px.svg" alt="Card image cap" id="card-gambar">
                    <div class="card-body">
                        <h5 class="card-title" id="Input-Obat">Data Pelanggan</h5>
                    </div>
                </div></a>
            </div>
        </div>
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
