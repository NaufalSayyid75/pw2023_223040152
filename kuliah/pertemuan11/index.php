<?php
require('functions.php');

$title = 'Home';

if(isset($_GET['button-search'])){
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM
                mahasiswa
            WHERE
                nama LIKE ''
                ";
}else{
    $students=query("SELECT * FROM mahasiswa");

}
require('views/index.view.php');