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
            <form class=" border border-light p-5">
                <h1><img src="../assets/image/Logo.png">Obat</h1><br><br>
                <table class= "table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Jenis Obat</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= site_url('InputObatController')?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Input Obat</a>
                <a href="<?= site_url('HomeAdminController') ?>" type="submit" style="border-radius: 10px;"> < Back</a>
            </form>
        </div>
</body>

</html>