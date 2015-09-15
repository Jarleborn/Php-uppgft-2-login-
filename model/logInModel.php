<?php 

class LogInModel{

	private static $username = 'admin';
	private static $password = 'Password';

	private static $userInputUsername ="";
	private static $userInputPassword = "";

	private static $retMessage = "";
	
	public function login(){

		$this->userInputUsername =  $_POST['usernameInput'];
		$this->userInputPassword =  $_POST['passwordInput'];
	
		if($username == $userInputUsername && $password == $userInputPassword){
			$this->retMessage("Logged in");
			return true;
		}
		elseif($userInputUsername == "" ){
			$this->retMessage("Username is missing");
			//TODO - Något from av meddleande till controllen att Man inte fyllt i fälten
			return false;
		}
		elseif($userInputPassword == ""){
			$this->retMessage("Pasword is missing");
			return false;
		}
		else{
			return false;
		}


	}
	
	public function ReturnRetMessage(){
		if(isset($this->retMessage)){
			
			return $this->retMessage;
		}
		else
		{
			return false;
		}

		$this->retMessage = "";

	}
}