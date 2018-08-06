<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

class Korisnik{

	private $db;
	private $session;

	public function __construct(){

		$this->db=Baza::getInstance();
		$this->session=new Sesija();
	}

	public function registracija(){

		$ime=mysqli_real_escape_string($this->db->conn,$_POST['ime']);
		$prezime=mysqli_real_escape_string($this->db->conn,$_POST['prezime']);
		$email=mysqli_real_escape_string($this->db->conn,$_POST['email']);
		$pass=mysqli_real_escape_string($this->db->conn,md5($_POST['pass']));

		$query="SELECT * FROM polaznici WHERE email='$email' and sifra='$pass'";
		$row=$this->db->select($query);
		if($row){
			return false;
		}else{
			$insert="INSERT INTO polaznici (ime,prezime,email,sifra) VALUES ('$ime','$prezime','$email','$pass')";
			$row=$this->db->insert($insert);

			if($row){
				return true;
				//header("Location: index.php");
			}
		}


	}

	public function logovanje(){

		$email=mysqli_real_escape_string($this->db->conn,$_POST['email']);
		$pass=mysqli_real_escape_string($this->db->conn,md5($_POST['pass']));

		$query="SELECT * FROM polaznici WHERE email='$email' and sifra='$pass'";
		$row=$this->db->select($query);
		if($row){
			$this->session->start();
			$this->session->set("userLogin",true);
			$this->session->set("userEmail",$email);
			return true;
		}else{
			return false;
		}

	}

	public function konkurs(){

		$ime=mysqli_real_escape_string($this->db->conn,$_POST['ime']);
		$prezime=mysqli_real_escape_string($this->db->conn,$_POST['prezime']);
		$email=mysqli_real_escape_string($this->db->conn,$_POST['email']);
		$telefon=mysqli_real_escape_string($this->db->conn,$_POST['telefon']);
		$cv=$_FILES['fileUpload']['name'];
		$cv_tmp=$_FILES['fileUpload']['tmp_name'];
		$uploaded_cv="../../cv/" . $cv;
		
    	if (move_uploaded_file($cv_tmp, $uploaded_cv)) {
        
      		$sql="INSERT into `konkurs` (`ime`, `prezime`, `email`, `telefon`, `cv`) values ('$ime', '$prezime', '$email', '$telefon', '$cv')";
		 	$result=$this->db->insert($sql); 
		 	if($result){
		 		return true;
		 	}

    	}else{
        	return false;
    	}



	}

	public function prikaziZaposlene(){

		$query="SELECT * FROM zaposleni";
		$select=$this->db->select($query);
		return $select;
	}

	public function dodajZaposlenog($post){

		$ime=mysqli_real_escape_string($this->db->conn,$_POST['ime']);
		$prezime=mysqli_real_escape_string($this->db->conn,$_POST['prezime']);
		$posao=mysqli_real_escape_string($this->db->conn,$_POST['posao']);
		
		$slika=$_FILES['slika']['name'];
		$slika_tmp=$_FILES['slika']['tmp_name'];
		$uploaded_slika="../../img/" . $slika;
		
    	if (move_uploaded_file($slika_tmp, $uploaded_slika)) {
        
      		$sql="INSERT into `zaposleni` (`ime`, `prezime`, `posao`, `slika`) values ('$ime', '$prezime', '$posao', '$slika')";
		 	$result=$this->db->insert($sql); 
		 	if($result){
		 		return true;
		 	}

    	}else{
        	return false;
    	}


	}

	public function obrisiZaposlenog($id){

		$query="DELETE FROM zaposleni WHERE id=$id";
		$delete=$this->db->delete($query);
		if($delete){
			$msg="Obrisano!";
			return $msg;
		}else{
			$msg="Greska!";
			return $msg;
		}
	}

	public function nadjiKorisnikaPoEmail($email){

		$query="SELECT * FROM polaznici WHERE email='$email'";
		$korisnik=$this->db->select($query);
		return $korisnik;
	}

	public function prikaziPolaznike(){

		$query="SELECT * FROM polaznici";
		$select=$this->db->select($query);
		return $select;
	}

	public function nadjiPolaznikaPoId($id){


		$query="SELECT * FROM polaznici WHERE id='$id'";
		$korisnik=$this->db->select($query);
		return $korisnik;

	}

}


?>