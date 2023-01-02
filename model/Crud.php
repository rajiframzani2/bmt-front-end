<?php
Class Crud{
	protected $db;
    function __construct($db){
        $this->db = $db;
    }

    public function daftar($tabel, $data)
	{
		$username = $data['username'];
		$password = $data['password'];
		$nama = $data['nama'];
        $jabatan = $data['jabatan'];
        $hak_akses = $data['hak_akses'];

		$sql = "INSERT INTO $tabel (username, password, nama,jabatan,hak_akses) 
			VALUES ('$username', '$password', '$nama', '$jabatan','$hak_akses')";

		$save = $this->db->prepare($sql);

		return $save->execute();
	}

	/*function tambah_data($tabel, $data){
        $rowsSQL = array();
        // buat bind param Prepared Statement
        $toBind = array();
        // list nama kolom
        $columnNames = array_keys($data[0]);
        // looping untuk mengambil isi dari kolom / values
        foreach($data as $arrayIndex => $row){
            $params = array();
            foreach($row as $columnName => $columnValue){
                $param = ":" . $columnName . $arrayIndex;
                $params[] = $param;
                $toBind[$param] = $columnValue;
            }
            $rowsSQL[] = "(" . implode(", ", $params) . ")";
        }
        $sql = "INSERT INTO $tabel (" . implode(", ", $columnNames) . ") VALUES " . implode(", ", $rowsSQL);
        $row = $this->db->prepare($sql);
        //Bind our values.
        foreach($toBind as $param => $val){
            $row ->bindValue($param, $val);
        }
        //Execute our statement (i.e. insert the data).
        return $row ->execute();
	}*/

	public function tambah_data($tabel, $data)
	{
		$id_user = $data['id_user'];
		$tanggal = $data['tanggal'];
		$jam = $data['jam'];
		$lokasi = $data['lokasi'];
		$suhu = $data['suhu'];

		$sql = "INSERT INTO $tabel (id_user, tanggal, jam, lokasi, suhu) 
			VALUES ('$id_user', '$tanggal', '$jam', '$lokasi', '$suhu')";

		$save = $this->db->prepare($sql);

		return $save->execute();
	}

	function tampil_data_harian($tabel, $user)
    {
    	//$tgl    = date("Y-m-d");
    	//echo $tgl;
        $row = $this->db->prepare("SELECT * FROM $tabel");
        $row->execute();
        return $hasil = $row->fetchAll();
    }

    function tampil_data_mingguan($tabel, $user)
    {
    	//$tgl    = date("Y-m-d");
    	//echo $tgl;

    	$nows=strtotime(date('Y-m-d'));
		$start=date('Y-m-d',strtotime('-7 day',$nows));
		$end=date('Y-m-d');
		//echo 'daftar transaksi 7 hari terakhir periode '.$start. ' hingga '.$end;
		
        $row = $this->db->prepare("SELECT * FROM $tabel WHERE id_user= '$user' AND tanggal between '$start' AND '$end' ORDER BY tanggal DESC");
        $row->execute();
        return $hasil = $row->fetchAll();
    }

    function tampil_data_bulanan($tabel, $user)
    {
    	$tgl    = date("m");
		
        $row = $this->db->prepare("SELECT * FROM $tabel WHERE id_user= '$user' AND month(tanggal)='$tgl' ORDER BY tanggal DESC");
        $row->execute();
        return $hasil = $row->fetchAll();
    }

    function tampil_data_id($tabel,$where,$id)
    {
        $row = $this->db->prepare("SELECT * FROM $tabel WHERE $where = ?");
        $row->execute(array($id));
        return $hasil = $row->fetch();
    }


    function hapus_data($tabel,$where,$id)
    {
        $sql = "DELETE FROM $tabel WHERE $where = ?";
        $row = $this->db->prepare($sql);
        return $row ->execute(array($id));
    }

    public function edit_data($data = array(), $tabel, $where, $id)
	{
		$tanggal = $data['tanggal'];
		$jam = $data['jam'];
		$lokasi = $data['lokasi'];
		$suhu = $data['suhu'];

		$sql = "UPDATE $tabel SET tanggal = '$tanggal', jam = '$jam', lokasi = '$lokasi', suhu = '$suhu'WHERE $where = '$id'";

		$result = $this->db->prepare($sql);

		return $result->execute();
	}


}

?>