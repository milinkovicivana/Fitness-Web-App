<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

class Vesti{

	private $db;
	private $session;

	public function __construct(){

		$this->db=Baza::getInstance();
		$this->session=new Sesija();
	}

	public function prikaziVesti(){

		$query="SELECT * FROM vesti order by id desc";
		$select=$this->db->select($query);
		return $select;
	}

	public function dodajVesti($post){

		$naslov=mysqli_real_escape_string($this->db->conn,$_POST['naslov']);
		$tekst=mysqli_real_escape_string($this->db->conn,$_POST['tekst']);
		
		$slika=$_FILES['slika']['name'];
		$slika_tmp=$_FILES['slika']['tmp_name'];
		$uploaded_slika="../../img/" . $slika;
		
    	if (move_uploaded_file($slika_tmp, $uploaded_slika)) {
        
      		$sql="INSERT into `vesti` (`naslov`, `tekst`, `slika`) values ('$naslov', '$tekst', '$slika')";
		 	$result=$this->db->insert($sql); 
		 	if($result){
		 		return true;
		 	}

    	}else{
        	return false;
    	}

	}

	public function obrisiVesti($id){

		$query="DELETE FROM vesti WHERE id=$id";
		$delete=$this->db->delete($query);
		if($delete){
			$msg="Obrisano!";
			return $msg;
		}else{
			$msg="Greska!";
			return $msg;
		}
	}

	public function odrediVestPoId($idVesti){

		$query="SELECT * FROM vesti WHERE id=$idVesti";
		$vest=$this->db->select($query);
		return $vest;
	}

	public function izmeniVest($post, $idVesti){

		$naslov=mysqli_real_escape_string($this->db->conn,$post['naslov']);
		$tekst=mysqli_real_escape_string($this->db->conn,$post['tekst']);

		$slika=$_FILES['slika']['name'];
		$slika_tmp=$_FILES['slika']['tmp_name'];
		$uploaded_slika="../../img/" . $slika;
		
    	if (move_uploaded_file($slika_tmp, $uploaded_slika)) {
        
      		$query="UPDATE vesti SET naslov='$naslov', tekst='$tekst', slika='$slika' WHERE id=$idVesti";
			$update=$this->db->update($query);
			if($update){
				header("Location: ../../pages/pocetna/index.php");
			}else{
				$msg="Greska!";
			return $msg;
			}


    	}else{
        	return false;
    	}

		
	}

	public function prikaziInfo(){

		$query="SELECT * FROM informacije";
		$select=$this->db->select($query);
		return $select;
	}

	public function izmeniInfo($post){

		$adresa=mysqli_real_escape_string($this->db->conn,$post['adresa']);
		$radnoVreme=mysqli_real_escape_string($this->db->conn,$post['radnoVreme']);
		$telefon=mysqli_real_escape_string($this->db->conn,$post['telefon']);
		$telefon2=mysqli_real_escape_string($this->db->conn,$post['telefon2']);
		$email=mysqli_real_escape_string($this->db->conn,$post['email']);

		$query="UPDATE informacije SET adresa='$adresa', radnoVreme='$radnoVreme', telefon='$telefon', telefon2='$telefon2', email='$email'";
			$update=$this->db->update($query);
			if($update){
				header("Location: ../../pages/kontakt/index.php");
			}else{
				$msg="Greska!";
			return $msg;
			}
	}
}




?>