<?php 
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'tubes');

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}                                                                                                                                              
//tambah artikel
function tambah ($data){
    global $conn;
    
    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $isi = htmlspecialchars($data['isi']);

    $query = "INSERT INTO home_content
                VALUES 
                (null, '$gambar','$judul','$isi')
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}       

//hapus artikel
function hapus($id){
    global  $conn;
    mysqli_query($conn, "DELETE FROM home_content WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

//edit artikel
function edit($data){
global $conn;

$id = $data["id"];
$gambar = htmlspecialchars($data['gambar']);
$judul = htmlspecialchars($data['judul']);
$isi = htmlspecialchars($data['isi']);

$query = "UPDATE home_content SET
                    gambar = '$gambar',
                    judul = '$judul',
                    isi = '$isi'
                WHERE id = $id    
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
?>