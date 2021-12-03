<?php
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
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
    <title>Tambah Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <h1>Tambah Data Pasien</h1>
<br><br>
        <form action="" method="post">
            <ul>
            
                <div class="form_select mb-3" name="NIK" id="NIK" required="">
                    <label for="NIK">NIK : </label>
                    <input type="text" name="NIK">
                </div>
                <div class="form_select mb-3" name="namaPasien" id="namaPasien" required="">
                    <label for="namaPasien">Nama Pasien : </label>
                    <input type="text" name="namaPasien"> 
                </div>
                <div class="form_select mb-3" name="tglLahir" id="tglLahir"
                            required="">
                            <label for="tglLahir">Tanggal Lahir : </label>
                            <input type="date" class="form_control" name="tglLahir" id="tglLahir" placeholder ="Tanggal Lahir"
                            required="">
                        </div>
                <div class="form_select mb-3" name="tptLahir" id="tptLahir" required="">
                    <label for="tptLahir">Tempat Lahir : </label>
                    <input type="text" name="tptLahir"> 
                </div>
                <div>
                    <label for="jenisKelamin">Jenis Kelamin : </label>
                    <select class="form_select mb-3" name="jenisKelamin" id="jenisKelamin"
                    required="">
                    <label for="jenisKelamin">Jenis Kelamin : </label>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form_select mb-3" name="pendidikan" id="pendidikan" required="">
                    <label for="pendidikan">Pendidikan : </label>
                    <input type="text" name="pendidikan"> 
                </div>
                <div class="form_select mb-3" name="pekerjaan" id="pekerjaan" required="">
                    <label for="pekerjaan">Pekerjaan : </label>
                    <input type="text" name="pekerjaan"> 
                </div>
                <div class="form_select mb-3" name="alamat" id="alamat" required="">
                    <label for="alamat">Alamat : </label>
                    <input type="text" name="alamat"> 
                </div>
                <br>
                <div>
                <button class="btn btn-success" type="submit" name="submit">Submit</button><a href="index.php" class="btn btn-danger">Back</a> </button>
                </div>
            
            </ul>
            


        </form>
    </body>
</html>