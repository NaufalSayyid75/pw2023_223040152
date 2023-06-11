<?php 
require '../functions.php';

// cek jika tombol done/submit sudah di pencet
if ( isset ($_POST["submit"]) ){
    
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = '../html/index.php';
            </script>
            ";
    } else {
        echo"
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = '../html/index.php';
            </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin page</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Welcome, Admin</h1>
            <br>
            <form action="" method="post" encytype="multipart/form-data">
            
            <label for="gambar">Gambar :</label>
            <input type="text" id="gambar" name="gambar">
            <br><br>
            <label for="judul">Judul :</label>
            <input type="text" id="judul" name="judul">
            <br><br>
            <label class="colmn1" for="isi">Isi :</label>
            <textarea name="isi" id="isi" cols="50" rows="10"></textarea>
            <br><br>
            <a href="../html/index.php">logout?</a>
            
            <button class="done-btn" type="submit" name="submit">Done</button>
            </form>
            
        </div>
    </main>
</body>
</html>