<?php
$connect = mysqli_connect("localhost","root","","tugas2_sbd");


function query($query) {
    global $connect;
    $hasil = mysqli_query($connect, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $connect;

    $NIK = htmlspecialchars($data["NIK"]);
    $namaPasien = htmlspecialchars($data["namaPasien"]);
    $tglLahir = htmlspecialchars($data["tglLahir"]);
    $tptLahir = htmlspecialchars($data["tptLahir"]);
    $jenisKelamin = htmlspecialchars($data["jenisKelamin"]);
    $pendidikan = htmlspecialchars($data["pendidikan"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);
    $alamat = htmlspecialchars($data["alamat"]);

    //query insert data
    $query = ("INSERT INTO pasien
                VALUES 
            ('$NIK','$namaPasien','$tglLahir','$tptLahir','$jenisKelamin','$pendidikan','$pekerjaan','$alamat')")
            ;
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}


function delete($NIK) {
    global $connect;
    mysqli_query($connect, "DELETE FROM pasien WHERE NIK = $NIK");

    return mysqli_affected_rows($connect);
}


function edit($data) {
    global $connect;

    $NIK = $data["NIK"];
    $namaPasien = htmlspecialchars($data["namaPasien"]);
    $tglLahir = htmlspecialchars($data["tglLahir"]);
    $tptLahir = htmlspecialchars($data["tptLahir"]);
    $jenisKelamin = htmlspecialchars($data["jenisKelamin"]);
    $pendidikan = htmlspecialchars($data["pendidikan"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);
    $alamat = htmlspecialchars($data["alamat"]);

    //query insert data
    $query = ("UPDATE pasien SET 
           
            NIK = '$NIK',
            namaPasien = '$namaPasien',
            tglLahir = '$tglLahir',
            tptLahir = '$tptLahir',
            jenisKelamin = '$jenisKelamin',
            pendidikan = '$pendidikan',
            pekerjaan = '$pekerjaan',
            alamat = '$alamat'
            WHERE NIK = $NIK
            ");
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function tambah_pemeriksaan($data) {
    global $connect;


    $tglPemeriksaan = htmlspecialchars($data["tglPemeriksaan"]);
    $NIK = htmlspecialchars($data["NIK"]);
    $tinggiBadan = htmlspecialchars($data["tinggiBadan"]);
    $beratBadan = htmlspecialchars($data["beratBadan"]);
    $hasilDiagnosa = htmlspecialchars($data["hasilDiagnosa"]);
    $idDokter = htmlspecialchars($data["idDokter"]);


    //query insert data
    $query = ("INSERT INTO pemeriksaan (tglPemeriksaan, NIK, tinggiBadan, beratBadan, hasilDiagnosa, idDokter)
                VALUES 
            ('$tglPemeriksaan','$NIK','$tinggiBadan','$beratBadan','$hasilDiagnosa','$idDokter')")
            ;
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function delete_pemeriksaan($noSurat) {
    global $connect;
    mysqli_query($connect, "DELETE FROM pemeriksaan WHERE noSurat = $noSurat");

    return mysqli_affected_rows($connect);
}


function edit_pemeriksaan($data) {
    global $connect;

    $noSurat = $data["noSurat"];
    $tglPemeriksaan = htmlspecialchars($data["tglPemeriksaan"]);
    $NIK = $data["NIK"];
    $tinggiBadan = htmlspecialchars($data["tinggiBadan"]);
    $beratBadan = htmlspecialchars($data["beratBadan"]);
    $hasilDiagnosa = htmlspecialchars($data["hasilDiagnosa"]);
    $idDokter = htmlspecialchars($data["idDokter"]);

    //query insert data
    $query = "UPDATE pemeriksaan SET noSurat = '".$noSurat."', tglPemeriksaan = '".$tglPemeriksaan."', NIK = '".$NIK."', tinggiBadan = '".$tinggiBadan."', beratBadan = '".$beratBadan."', hasilDiagnosa = '".$hasilDiagnosa."', idDokter = '".$idDokter."'
    WHERE noSurat = $noSurat";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}
?>