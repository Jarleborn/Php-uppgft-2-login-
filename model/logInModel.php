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
			setRetMessage("Logged in");
			return true;
		}
		elseif($userInputUsername == "" ){
			setRetMessage("Username is missing");
			//TODO - Något from av meddleande till controllen att Man inte fyllt i fälten
			return false;
		}
		elseif($userInputPassword == ""){
			setRetMessage("Pasword is missing");
			return false;
		}
		else{
			return false;
		}


	}
	
	public function setRetMessage(string $mes){

	}
}