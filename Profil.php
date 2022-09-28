<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            margin-top: 10px;
        }

        img {
            width: 100px;
            height: 100px;
            float: left;
            padding: 10px; 
        }

        .judul {
            background-color: red;
            color: white;
            text-align: center;
            width: 600px;
            height: 30px;
            border-radius: 5px;
        }

        .penutup {
            margin-top: 18px;
            background-color: red;
            color: white;
            text-align: center;
            width: 600px;
            height: 30px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
        $nama   = "Dwi Purnomo";
        $nim    = 202520010;
        $alamat = "Karangmulyo, Purwodadi, Purworejo, Jawa Tengah";
        $email  = "purnomodwi174@gmail.com";
        $minat  = "Sistem Informasi";
    ?>

    <div class="judul">Profil</div>
    <table>
        <img src="foto/foto1.jpg" alt="Foto Dwi">
            <tr>
                <td>Nama &nbsp; &nbsp;: <?php echo $nama ?> </td>
            </tr>
            <tr>
                <td>Nim  &nbsp; &nbsp; &nbsp;: <?php echo $nim ?></td>
            </tr>
            <tr>
                <td>Alamat &nbsp;: <?php echo $alamat ?></td>
            </tr>
            <tr>
                <td>Email &nbsp; &nbsp;: <?php echo $email ?></td>
            </tr>
            <tr>
                <td>Minat  &nbsp; &nbsp;: <?php echo $minat ?></td>
            </tr>
        </table>
    <div class="penutup"><a href="https://maspurnomo.com/"> Maspurnomo.com </a></div>
</body>

</html>