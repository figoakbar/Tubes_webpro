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
            background-image: url('https://cdn0-production-images-kly.akamaized.net/mznHlYed0VeT1lxLZyxSg-PzCiI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1583162/original/090823200_1493797707-Jangan-Gunakan-Antibiotik-Sembarangan-Ini-Alasannya.jpg');
            background-size:cover
        }

</style>
<body>
            <div class="card mx-auto" id="login">
            <form class=" border border-light p-5" action="<?= site_url('EditObatController/editMedicine')?>" method = "post">
                <h1><img src="<?php echo $this->config->item('base_url'); ?>/assets/image/Logo.png">Edit Obat</h1><br>
                <p>ID Obat</p>
                <input type="name" name="idobat" class="form-control mb-4" placeholder ="<?= $id ?>">
                <p>Nama Obat</p>
                <input type="text" name="namaobat" class="form-control mb-4">
                <p>Jenis Obat</p>
                <input type="text" name="jenisobat" class="form-control mb-4">
                <!-- input button -->
                <button class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Edit</button>
                <a href="<?= site_url('HomeObatController') ?>" type="submit" style="border-radius: 10px;"> < Back</a>
            </form>
        </div>
</body>

</html>