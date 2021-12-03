<?php
require 'functions.php';

$NIK = $_GET["NIK"];

if(delete($NIK) > 0 ) {
    echo "
        <script>
            alert('data pasien berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data pasien gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}

?>