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
        body{
            background-color : white;
        }
        thead{
            background-color:  #17A1EF;
            color: white;
    }
    </style>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
   

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <a class="navbar-brand" href="#"><img src="../assets/image/Logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('HomeAdminController')?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('DataPelangganController')?>">Data Pelanggan <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 8px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-radius: 8px;">Search</button>
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
    <table class="table">
    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jadwal Imunisasi</th>
                        <th scope="col">Nama Rumah Sakit</th>
                        <th scope="col">Jenis imunisasi</th>
                        <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody id="target">
                       
                    </tbody>                  
    </table>
    <script type='text/javascript'>
    ambilData();

            function ambilData(){
                $.ajax({
                type:'POST',
                url: '<?php echo base_url().'index.php/DataPesanJadwalController/ambilData'?>',
                dataType: 'json',
                success: function(data){
                    var baris = '';
                    for(var i=0;i<data.length;i++){
                        baris += '<tr>'+
                                        '<td>'+data[i].id_pesan+'</td>'+
                                        '<td>'+data[i].nama_user+'</td>'+
                                        '<td>'+data[i].jadwal_imunisasi+'</td>'+
                                        '<td>'+data[i].nama_rs+'</td>'+
                                        '<td>'+data[i].jenis_imunisasi+'</td>'+
                                        '<td>'+data[i].harga+'</td>'+
                                  '<tr>';
                    }
                    $('#target').html(baris);
                }
                });
            }
                        
    </script>
    <a href="<?= site_url('HomeAdminController')?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Close</a>
</body>
 <!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js">
    </script> 
</html>