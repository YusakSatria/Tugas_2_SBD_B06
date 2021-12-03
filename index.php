<?php
require 'functions.php';
$pasien = query("SELECT * FROM pasien");

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

<h1>Daftar Pasien</h1>


<br>
<a href="index.php" class="btn btn-info">Beranda Data Pasien</a> </button>

<a href="index_dokter.php" class="btn btn-info">Beranda Data Dokter</a> </button>

<a href="index_pemeriksaan.php" class="btn btn-info">Beranda Data Pemeriksaan</a> </button>
<br><br><br>
<a href="tambah.php" class="btn btn-success">Tambah Data Pasien</a> </button>



<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NIK</th>
        <th>Nama Pasien</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
        <th>Alamat</th>
        <th>Ubah</th>

    </tr>
    <?php foreach( $pasien as $row) : ?>
    <tr>
        
        <td><?=$row["NIK"];?></td>
        <td><?=$row["namaPasien"];?></td>
        <td><?=$row["tglLahir"];?></td>
        <td><?=$row["tptLahir"];?></td>
        <td><?=$row["jenisKelamin"];?></td>
        <td><?=$row["pendidikan"];?></td>
        <td><?=$row["pekerjaan"];?></td>
        <td><?=$row["alamat"];?></td>
        <td>
        <a href="edit.php?NIK=<?= $row["NIK"]; ?>" class="btn btn-warning">Edit</a>|
        <a href="delete.php?NIK=<?= $row["NIK"]; ?>" class="btn btn-danger" onclick="return confirm('Data ini akan dihapus?');">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<br><br>


</body>
</html>