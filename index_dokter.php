<?php
require 'functions.php';
$dokter = query("SELECT * FROM dokter");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tes Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<h1>Daftar Dokter</h1>
<br>
<a href="index.php" class="btn btn-info">Beranda Data Pasien</a> </button>

<a href="index_dokter.php" class="btn btn-info">Beranda Data Dokter</a> </button>

<a href="index_pemeriksaan.php" class="btn btn-info">Beranda Data Pemeriksaan</a> </button>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID Dokter</th>
        <th>Nama Dokter</th>


    </tr>
    <?php foreach( $dokter as $row) : ?>
    <tr>
        <td><?=$row["idDokter"];?></td>
        <td><?=$row["namaDokter"];?></td>

    </tr>
    <?php endforeach;?>
</table>
<br>
                <div>
                <a href="index.php" class="btn btn-danger">Back</a> </button>
                </div>

</body>
</html>