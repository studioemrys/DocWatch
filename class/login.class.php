<?php
/**
login 
opvragen password hash uit de db met username
vergelijken password hash met password
authenticatie afgeven
authenticatie opslaan in token  
*/
class User
{
	
	private $cxn;
	private $user;
	private $msg;

	public function dbConnect() {
		$cxn =  mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");		
		$this->cxn = $cxn;
		if ($cxn) {
			return true;
		}
		else {
			return false;
		}
	}

	public function login ($username, $password) {

	}

}

?>