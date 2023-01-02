<?php
	require "Pintasan.php";

	if(!empty($_GET['aksi'] == "daftar")) {
        /*$id_user = strip_tags($_POST['id_user']);
        $tanggal = strip_tags($_POST['tanggal']);
        $jam = strip_tags($_POST['jam']);
        $lokasi = strip_tags($_POST['lokasi']);
        $suhu = strip_tags($_POST['suhu']);*/
        
        $tabel = 't_user';
        # proses insert
        $data = array(
            'username'		=>$_POST['username'],
            'password'		=>md5($_POST['password']),
            'nama'			=>$_POST['nama'],
            'jabatan'			=>$_POST['jabatan'],
            'hak_akses'			=>$_POST['hak_akses']
        );
        $proses->daftar($tabel, $data);
        echo '<script>alert("Daftar Berhasil");window.location="../index.php"</script>';

    }

	// proses tambah
    /*if(!empty($_GET['aksi'] == 'tambah'))
    {
        $id_user = strip_tags($_POST['id_user']);
        $tanggal = strip_tags($_POST['tanggal']);
        $jam = strip_tags($_POST['jam']);
        $lokasi = strip_tags($_POST['lokasi']);
        $suhu = strip_tags($_POST['suhu']);
        
        $tabel = 't_catatan';
        # proses insert
        $data[] = array(
            'id_user'		=>$id_user,
            'tanggal'		=>$tanggal,
            'jam'			=>$jam,
            'lokasi'		=>$lokasi,
            'suhu'			=>$suhu
        );
        $proses->tambah_data($tabel, $data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../views/harian.php"</script>';
    }*/
    if(!empty($_GET['aksi'] == "tambah")) {
        /*$id_user = strip_tags($_POST['id_user']);
        $tanggal = strip_tags($_POST['tanggal']);
        $jam = strip_tags($_POST['jam']);
        $lokasi = strip_tags($_POST['lokasi']);
        $suhu = strip_tags($_POST['suhu']);*/
        
        $tabel = 't_catatan';
        # proses insert
        $data = array(
            'id_user'		=>$_POST['id_user'],
            'tanggal'		=>$_POST['tanggal'],
            'jam'			=>$_POST['jam'],
            'lokasi'		=>$_POST['lokasi'],
            'suhu'			=>$_POST['suhu']
        );
        $proses->tambah_data($tabel, $data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../views/harian.php"</script>';

    }

    // proses edit
	if(!empty($_GET['aksi'] == 'edit'))
	{
		
		
        $data = array(
            'tanggal'		=>$_POST['tanggal'],
            'jam'			=>$_POST['jam'],
            'lokasi'		=>$_POST['lokasi'],
            'suhu'			=>$_POST['suhu']
        );
        $tabel = 't_catatan';
        $where = 'id_catatan';
        $id = strip_tags($_POST['id_catatan']);
        $proses->edit_data($data, $tabel, $where, $id);
        echo '<script>alert("Edit Data Berhasil");window.location="../views/harian.php"</script>';
    }

    // hapus data
    if(!empty($_GET['aksi'] == 'hapus'))
    {
        $tabel = 't_catatan';
        $where = 'id_catatan';
        $id = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../views/harian.php"</script>';
    }

	
?>