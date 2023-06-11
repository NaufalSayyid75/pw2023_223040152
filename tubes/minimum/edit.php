<?php 
// koneksi ke databse
require 'functions.php';

// ambil data di url
$id = $_GET['id'];

// query data bedarsarkan id
$edit = query("SELECT * FROM home_content WHERE id = $id")[0];



// cek jika tombol done/submit sudah di pencet
if ( isset ($_POST["submit"]) ){
    
    // cek apakah data berhasil ditambahkan atau tidak
    if( edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'html/index.php';
            </script>
            ";
    } else {
        echo"
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'html/index.php';
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
    <link rel="stylesheet" href="admin/admin.css">
    <title>Admin page</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Welcome, Admin</h1>
            <br>
            <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" id="id" name="id" value="<?=$edit['id']; ?>">
            
            <label for="gambar">Gambar :</label>
            <img src="images/<?=$edit['gambar']; ?>" height="280" alt="">
            <br>
            <input type="file" id="gambar" name="gambar">
            <br><br>
            <label for="judul">Judul :</label>
            <input type="text" id="judul" name="judul" value="<?=$edit['judul']; ?>">
            <br><br>
            <label class="colmn1" for="isi">Isi :</label>
            <input name="isi" id="isi" value="<?=$edit['isi']; ?>" size="80"></input>
            <br><br>
            <a href="html/index.php">logout?</a>
            
            <button class="done-btn" type="submit" name="submit">Done</button>
            </form>
            
        </div>
    </main>
</body>
</html>