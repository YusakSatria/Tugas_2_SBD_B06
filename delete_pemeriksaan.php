<?php
require 'functions.php';

$noSurat = $_GET["noSurat"];

if(delete_pemeriksaan($noSurat) > 0 ) {
    echo "
        <script>
            alert('data tagihan berhasil dihapus!');
            document.location.href = 'index_pemeriksaan.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data tagihan gagal dihapus!');
            document.location.href = 'index_pemeriksaan.php';
        </script>
    ";
}

?>