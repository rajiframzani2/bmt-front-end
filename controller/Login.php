<?php
	require "Pintasan.php";
	//login
	if(!empty($_GET['aksi'] == 'login'))
    {   
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        // panggil fungsi proses_login() yang ada di class Login()
        $result = $login->proses_login($username,$password);
        if($result == 'gagal')
        {
            //echo "<script>window.location='../login.php?get=gagal';</script>";
            echo "gagal login";
        }else{
            // status yang diberikan 
            session_start();
            $_SESSION['login'] = $result;
            // status yang diberikan 
            //echo "<script>window.location='../views/utama.php';</script>";
            echo "berhasil login";
        }
    } 
?>

