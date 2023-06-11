<?php 
    require "functions.php";

    $id = $_GET["id"];


    if( hapus($id) > 0 ) {
        echo "
            <script>
                alert('Data berhasil hapus!');
                document.location.href = 'html/index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'html/index.php';
            </script>
            ";
    }

?>