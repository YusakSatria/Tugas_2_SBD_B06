<?php
require "functions.php";
$pemeriksaan = query("SELECT * FROM pemeriksaan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tes Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>

<body>

<h1>Daftar Pemeriksaan</h1>

<a href="index.php" class="btn btn-info">Beranda Data Pasien</a> </button>

<a href="index_dokter.php" class="btn btn-info">Beranda Data Dokter</a> </button>

<a href="index_pemeriksaan.php" class="btn btn-info">Beranda Data Pemeriksaan</a> </button>
<br>
<a href="tambah_pemeriksaan.php" class="btn btn-success">Tambah Data Pemeriksaan</a> </button>


<table border="1" cellpadding="5" cellspacing="0">

    <tr>
        <th>No.Surat</th>
        <th>Tanggal Pemeriksaan</th>
        <th>NIK</th>
        <th>Tinggi Badan</th>
        <th>Berat Badan</th>
        <th>Hasil Diagnosa</th>
        <th>ID Dokter</th>
        <th>Ubah</th>
    </tr>

    <?php foreach( $pemeriksaan as $row ) : ?>
    <tr> 
        <td><?= $row["noSurat"]; ?></td>
        <td><?= $row["tglPemeriksaan"]; ?></td>
        <td><?= $row["NIK"]; ?></td>
        <td><?= $row["tinggiBadan"]; ?></td>
        <td><?= $row["beratBadan"]; ?></td>
        <td><?= $row["hasilDiagnosa"]; ?></td>
        <td><?= $row["idDokter"]; ?></td>
        <td>
            <a href="edit_pemeriksaan.php?noSurat=<?= $row["noSurat"]; ?>" class="btn btn-warning">Edit</a>|
            <a href="delete_pemeriksaan.php?noSurat=<?= $row["noSurat"]; ?>" class="btn btn-danger" onclick="return confirm('Data ini akan dihapus?');">Delete</a>
            <br>
            <a href="detail_cetak.php?noSurat=<?= $row["noSurat"]; ?>" class="btn btn-primary">Cetak</a>
        </td>
    </tr>
    <?php endforeach; ?>


</table>
                <div>
                <a href="index.php" class="btn btn-danger">Back</a> </button>
                </div>

</body>
</html>