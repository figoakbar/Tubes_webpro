<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
    <title>Admin Page</title>
</head>
<style type="text/css">
        #nav-item a {
            color: #444547;
        }

        #login {
            margin-top: 50px;
            width: 30%;
            margin-bottom: 80px;
        }
        body{
            padding: 0px;
            background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-medical-doctor-science-background-backgroundbackgrounddoctorsmedicalmedicinehealth-image_68227.jpg');
            background-size:cover
        }

</style>
<body>
            <div class="card mx-auto" id="login">
            <!-- Default form login -->
            <form class=" border border-light p-5">
                <h1><img src="../assets/image/Logo.png">Imunisasi</h1><br><br>
                <a href="<?= site_url('InputImunisasiController')?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Input Imunisasi</a>
                <a href="<?= site_url('inputImunisasiJadwalController') ?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Input Jadwal</a>
                <a href="<?= site_url('HomeAdminController') ?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Back</a>
            </form>
            <!-- Default form login -->
        </div>
</body>

</html>