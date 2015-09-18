<?php 

class LogInModel{

	private  $username = 'Admin';
	private  $password = 'Password';
	private  $Thelogin;

	private  $retMessage;
	
	public function login($usrnam, $pass){
//var_dump($this->login)
		//var_dump($usrnam);
		$this->Thelogin = false;
		if($this->username == $usrnam && $this->password == $pass){
			$this->Thelogin = true;
			$this->retMessage = "Welcome";
			//var_dump($this->login);
			//return true;
		}
		elseif($usrnam == "" ){
			$this->retMessage = "Username is missing";
			//var_dump($this->retMessage);


			//TODO - Något from av meddleande till controllen att Man inte fyllt i fälten
			//return false;
		}
		elseif($pass == ""){
			$this->retMessage = "Password is missing";

			//$_POST[$usrnam];
			//return false;
		}
		else{
			$this->retMessage = "Wrong name or password";

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
		//var_dump($his->login);
		return $this->Thelogin;
	}
		// else
		// {
		// 	return "höhöhöh";
		// }

		// $this->retMessage = "";

	
}