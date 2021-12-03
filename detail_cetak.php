<?php
    require "fpdf.php";
    include "functions.php";

    $noSurat = $_GET['noSurat'];

    $id_NIK = query("select NIK from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['NIK'];
    $id_namaPasien = query("select namaPasien from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['namaPasien'];

    $id_tptLahir = query("select tptLahir from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['tptLahir'];
    $id_tglLahir = query("select tglLahir from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['tglLahir'];
    $id_jenisKelamin = query("select jenisKelamin from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['jenisKelamin'];
    $id_pendidikan = query("select pendidikan from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['pendidikan'];
    $id_pekerjaan = query("select pekerjaan from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['pekerjaan'];
    $id_alamat = query("select alamat from pasien natural join pemeriksaan where noSurat = '$noSurat'")[0]['alamat'];

    $id_noSurat = query("select noSurat from pemeriksaan where noSurat = '$noSurat'")[0]['noSurat'];
    $id_hasilDiagnosa = query("select hasilDiagnosa from pemeriksaan where noSurat = '$noSurat'")[0]['hasilDiagnosa'];
    $id_tinggiBadan = query("select tinggiBadan from pemeriksaan where noSurat = '$noSurat'")[0]['tinggiBadan'];
    $id_beratBadan = query("select beratBadan from pemeriksaan where noSurat = '$noSurat'")[0]['beratBadan'];

    $id_tglPemeriksaan = query("select tglPemeriksaan from pemeriksaan where noSurat = '$noSurat'")[0]['tglPemeriksaan'];
    $id_namaDokter = query("select namaDokter from dokter natural join pemeriksaan where noSurat = '$noSurat'")[0]['namaDokter'];
    $id_idDokter = query("select idDokter from dokter natural join pemeriksaan where noSurat = '$noSurat'")[0]['idDokter'];




    $pdf = new FPDF("p","mm","a4");
    $pdf->AddPage();

    $pdf->SetFont("Arial","B",20);
    $pdf->Image('pemda.jpg',20,8,-400);
    $pdf->SetFont("Arial","B",15);
    $pdf->Cell(190,5,'PEMERINTAH KABUPATEN KLATEN',0,2,'C');
    $pdf->Cell(190,7,'DINAS KESEHATAN',0,1,'C');
    $pdf->SetFont("Arial","B",22);
    $pdf->Cell(190,7,'PUSKESMAS JOGONALAN 1',0,1,'C');
    $pdf->SetFont("Arial","B",9);
    $pdf->Cell(190,5,"Alamat : JL. Raya Jogja - Solo KM.6,5 Kraguman, Jogonalan",0,2,'C');
    $pdf->Cell(190,5,"Telp. (0272) 321759 Klaten 57452",0,2,'C');
    $pdf->Cell(150,3,   "",0,2);
    $pdf->Cell(150,3,   "======================================================================================================",0,2);
    $pdf->Cell(190,3,   "",0,2);

    $pdf->SetFont("Arial","B",17);
    $pdf->Cell(190,5,"KEUR KESEHATAN",0,2,'C');
    $pdf->SetFont("Arial","",12);
    $pdf->Cell(190,5,"No :$id_NIK$id_tglPemeriksaan$id_idDokter$id_noSurat",0,2,'C');
    $pdf->Cell(190,3,   "",0,2);

    $pdf->Cell(190,5,"Dengan ini Dokter Puskesmas Jogonalan 1 Menerangkan Bahwa :",0,2);
    $pdf->Cell(190,3,   "",0,2);
    $pdf->Cell(190,5,"Nama                              : $id_namaPasien",0,2);
    $pdf->Cell(190,5,"Tempat Lahir                  : $id_tptLahir ",0,2);
    $pdf->Cell(190,5,"Tanggal Lahir                 : $id_tglLahir",0,2);
    $pdf->Cell(190,5,"Jenis Kelamin                 : $id_jenisKelamin",0,2);
    $pdf->Cell(190,5,"Pendidikan                     : $id_pendidikan",0,2);
    $pdf->Cell(190,5,"Pekerjaan                       : $id_pekerjaan",0,2);
    $pdf->Cell(190,5,"Alamat                            : $id_alamat",0,2);
    $pdf->Cell(190,3,   "",0,2);
    $pdf->Cell(190,5,   "Pada waktu diadakan pemeriksaan dalam keadaan : $id_hasilDiagnosa",0,2);
    $pdf->Cell(190,5,"Disertai dengan,",0,2);
    $pdf->Cell(190,5,"Tinggi Badan                  : $id_tinggiBadan cm",0,2);
    $pdf->Cell(190,5,"Berat Badan                   : $id_beratBadan kg",0,2);
    $pdf->Cell(190,10,   "",0,2);
    $pdf->Image('stempel.png',160,140,-270);
    $pdf->Cell(190,5,"Klaten, $id_tglPemeriksaan",0,2,'R');
    $pdf->SetFont("Arial","",10);
    $pdf->Cell(190,5,"                                                                                                                                                         
    Dokter Pemeriksa",0,2,);
    $pdf->Cell(190,20,   "",0,2);
    $pdf->SetFont("Arial","",12);
    $pdf->Cell(190,5,"                                                                                                                              
    $id_namaDokter",0,2);
    $pdf->Cell(190,5,"                                                                                                                               
    NIP : $id_idDokter",0,2);

    $pdf->Output();

?>