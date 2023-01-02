<?php
    // panggil file
    include '../model/Koneksi.php';
    include '../model/Login.php';
    include '../model/Crud.php';
    
    // cara panggil class di koneksi php
    $db = new Koneksi();
    // cara panggil koneksi di fungsi Connection()
    $koneksi =  $db->Connection();
    // panggil class Login di file Login.php
    $login = new Login($koneksi);
    //panggil class crud
    $proses = new Crud($koneksi);
    // menghilangkan pesan error
    //error_reporting(0);
?>