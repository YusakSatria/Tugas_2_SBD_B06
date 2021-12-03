<?php
require "functions.php";
$pemeriksaan = query("SELECT * FROM pemeriksaan");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah_pemeriksaan($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index_pemeriksaan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index_pemeriksaan.php';
            </script>
        ";
    }

}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pemeriksaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                <h1>Tambah Data Pemeriksaan</h1>
            </div>
            <div class="card-body">
                <br>
                
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>Tanggal Pemeriksaan</th>
                        <th>NIK</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Hasil Diagnosa</th>
                        <th>ID Dokter</th>
                    </tr>
                <?php foreach( $pemeriksaan as $row ) : ?>
                    <tr>
                        <td><?= $row["tglPemeriksaan"]; ?></td>
                        <td><?= $row["NIK"]; ?></td>
                        <td><?= $row["tinggiBadan"]; ?></td>
                        <td><?= $row["beratBadan"]; ?></td>
                        <td><?= $row["hasilDiagnosa"]; ?></td>
                        <td><?= $row["idDokter"]; ?></td>
                    </tr>
                <?php endforeach; ?>
                </table>
                <br>
                

                <form action="" method="post">
                    <ul>

                        <div class="form_select mb-3" name="tglPemeriksaan" id="tglPemeriksaan"
                            required="">
                            <label for="tglPemeriksaan">Tanggal Pemeriksaan : </label>
                            <input type="date" class="form_control" name="tglPemeriksaan" id="tglPemeriksaan" placeholder ="Tanggal Pemeriksaan"
                            required="">
                        </div>
                        <div class="form_select mb-3" name="NIK" id="NIK"
                            required="">
                            <label for="NIK">NIK : </label>
                            <input type="text" class="form_control" name="NIK" id="NIK" placeholder ="NIK"
                            required="">
                        </div>
                        <div class="form_select mb-3" name="tinggiBadan" id="tinggiBadan"
                            required="">
                            <label for="tinggiBadan">Tinggi Badan : </label>
                            <input type="text" class="form_control" name="tinggiBadan" id="tinggiBadan" placeholder ="Tinggi Badan"
                            required="">
                            <label for="tinggiBadan">cm </label>
                        </div>
                        <div class="form_select mb-3" name="beratBadan" id="beratBadan"
                            required="">
                            <label for="beratBadan">Berat Badan : </label>
                            <input type="text" class="form_control" name="beratBadan" id="beratBadan" placeholder ="Berat Badan"
                            required>
                            <label for="beratBadan">kg </label>
                        </div>
                        <div>
                            <label for="hasilDiagnosa">Hasil Diagnosa : </label>
                            <select class="form_select mb-3" name="hasilDiagnosa" id="hasilDiagnosa"
                            required="">
                            <label for="hasilDiagnosa">Diagnosa : </label>
                            <option value="Sehat">Sehat</option>
                            <option value="Sakit">Sakit</option>
                            </select>
                        </div>
                        <div>
                        <label for="idDokter">ID Dokter : </label>
                    <select class="form_select mb-3" name="idDokter" id="idDokter"
                    required="">
                    <label for="idDokter">Jenis Kelamin : </label>
                        <option value="922003">922003</option>
                        <option value="922004">922004</option>
                        <option value="922005">922005</option>
                    </select>
                        </div>
                        
                        
                        <div>
                            <button class="btn btn-success" type="submit" name="submit">Tambah Data</button><a href="index_pemeriksaan.php" class="btn btn-danger">Back</a> </button>
                        </div>
                    </ul>

                </form>
                </div>
        </div>

    </div>


</body>
</html>