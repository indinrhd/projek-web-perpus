<?php
if (isset($_POST['tombol'])){
    $nama = $_POST['nama'];
    $bk = $_POST['nama-buku'];
    $id = $_POST['id'];
    
    echo 'Nama Anda : <span style="color:#00ff00;"> $nama </span><br>';
    echo 'Nama Buku : <span style="color:#0000ff;"> $bk </span><br>';
    echo 'ID Buku : <span style="color:#ff0000;"> $id </span><br>';
    }
?>