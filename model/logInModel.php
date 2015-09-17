<?php 

class LogInModel{

	private  $username = 'Admin';
	private  $password = 'Password';
	public $login;

	public  $retMessage;
	
	public function login($usrnam, $pass){

		//var_dump($usrnam);
	
		if($this->username == $usrnam && $this->password == $pass){
			$this->login = true;
			//var_dump($this->login);
			$this->retMessage = "Welcome";
			//return true;
		}
		elseif($usrnam == "" ){
			$this->retMessage = "Username is missing";
			//var_dump($this->retMessage);
			$this->login = false;

			//TODO - Något from av meddleande till controllen att Man inte fyllt i fälten
			
			//return false;
		}
		elseif($pass == ""){
			$this->retMessage = "Password is missing";
			$this->login = false;
			//$_POST[$usrnam];
			//return false;
		}
		else{
			$this->retMessage = "Wrong name or password";
			$this->login = false;
			//return false;
		}
		

	}
	
	public function ReturnRetMessage(){
		//var_dump($this->retMessage);
		if($this->retMessage != null){
			//var_dump($this->retMessage);
			return $this->retMessage;
		}
	}
	public function isLoggedIn(){
		//var_dump($this->login);
		var_dump($his->login);
		return $this->login;
	}
		// else
		// {
		// 	return "höhöhöh";
		// }

		// $this->retMessage = "";

	
}