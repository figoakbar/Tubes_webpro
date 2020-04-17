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
<<<<<<< Updated upstream
=======
                <table class= "table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Imunisasi</th>
                        <th scope="col">Jenis Imunisasi</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
<<<<<<< Updated upstream
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td><a href="<?= site_url('EditImunisasiController')?>" type="submit" style="border-radius: 10px;">Edit</a></td>
                            <td><a href="" type="submit" style="border-radius: 10px;">Delete</a></td></td>
=======
                        <tr><?php foreach($data_imunisasi as $di) : ?>
                            <th scope="row"><?= $di['id_imunisasi']?></th>
                            <td><?= $di['nama_imunisasi']?></td>
                            <td><?= $di['jenis_imunisasi']?></td>
                            <td><a  href="<?= base_url(); ?>EditImunisasiController/editImunization/<?= $di['id_imunisasi'] ?>" type="submit" style="border-radius: 10px;">Edit</a></td>
                            <td><a href="<?= base_url(); ?>EditImunisasiController/deleteImunization/<?= $di['id_imunisasi'] ?>" type="submit" style="border-radius: 10px;">Delete</a></td></td>
>>>>>>> Stashed changes
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
>>>>>>> Stashed changes
                <a href="<?= site_url('InputImunisasiController')?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Input Imunisasi</a>
                <a href="<?= site_url('inputImunisasiJadwalController') ?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Input Jadwal</a>
<<<<<<< Updated upstream
                <a href="<?= site_url('HomeAdminController') ?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Back</a>
=======
                <a href="<?= site_url('HomeAdminController') ?>" type="submit" style="border-radius: 10px;"> < Back</a>
>>>>>>> Stashed changes
            </form>
            <!-- Default form login -->
        </div>
</body>

</html>