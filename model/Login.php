<?php 
class Login {
	protected $db;
    function __construct($db){
        $this->db = $db;
    }

    function proses_login($username,$password)
    {
        // untuk password kita enkrip dengan md5
        $row = $this->db->prepare('SELECT * FROM t_user WHERE username=? AND password=md5(?)');
        $row->execute(array($username,$password));
        $count = $row->rowCount();

        //jika ditemukan
        if($count > 0){
            header("Location:../views/utama.php");
            return $hasil = $row->fetch();

        }else{
            return 'gagal';
        }
    }
}