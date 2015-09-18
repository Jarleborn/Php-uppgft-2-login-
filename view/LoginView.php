<?php

class LoginView {
	private static $login = 'LoginView::Login';
	private static $logout = 'LoginView::Logout';
	private static $name = 'LoginView::UserName';
	private static $password = 'LoginView::Password';
	private static $cookieName = 'LoginView::CookieName';
	private static $cookiePassword = 'LoginView::CookiePassword';
	private static $keep = 'LoginView::KeepMeLoggedIn';
	private static $messageId = 'LoginView::Message';
	public $LogInModel;
	public $userNameHolder;
	public $userInputUsername;
	public function __construct(LogInModel $LogInModel){
		$this->LogInModel = $LogInModel;
	}
	/**
	 * Create HTTP response
	 *
	 * Should be called after a login attempt has been determined
	 *
	 * @return  void BUT writes to standard output and cookies!
	 */
	public function response() {
		$message = $this->LogInModel->ReturnRetMessage();
		$response = "";
		if($message != true){

			$response .= $this->generateLoginFormHTML($message);
		}
		else{
			$response .= $this->generateLogoutButtonHTML($message);
		}

		 if($this->userInputUsername != ""){
		 	$this->userNameHolder = $this->userInputUsername;
		 	//var_dump($this->userNameHolder);
		}
		
		return $response;
		//;	
	}

	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLogoutButtonHTML($message) {
		return '
			<form  method="post" >
				<p id="' . self::$messageId . '">' . $message .'</p>
				<input type="submit" name="' . self::$logout . '" value="logout"/>
			</form>
		';
	}
	
	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLoginFormHTML($message) {
		return '
			<form method="post" > 
				<fieldset>
					<legend>Login - enter Username and password</legend>
					<p id="' . self::$messageId . '">' . $message . '</p>
					
					<label for="' . self::$name . '">Username :</label>
					<input type="text" id="' . self::$name . '" name="' . self::$name . '" value="'.$this->userNameHolder .'" />

					<label for="' . self::$password . '">Password :</label>
					<input type="password" id="' . self::$password . '" name="' . self::$password . '" />

					<label for="' . self::$keep . '">Keep me logged in  :</label>
					<input type="checkbox" id="' . self::$keep . '" name="' . self::$keep . '" />
					
					<input type="submit" name="' . self::$login . '" value="login" />
				</fieldset>
			</form>
		';
	}


	public function GetUserName(){
		if( isset($_POST[self::$name])){
		$this->userInputUsername = $_POST[self::$name];
		return  $_POST[self::$name];

		//  $this->LogInController->LoginChecker($this->LogInModel ,$this->userInputUsername, $this->userInputPassword);
		//  $message = $this->LogInModel->ReturnRetMessage();
 		}
	}

	public function GetPassword(){
		if(isset($_POST[self::$password]) ){
		
		
		return  $_POST[self::$password];

		//  $this->LogInController->LoginChecker($this->LogInModel ,$this->userInputUsername, $this->userInputPassword);
		//  $message = $this->LogInModel->ReturnRetMessage();
 		}
	}


	
	//CREATE GET-FUNCTIONS TO FETCH REQUEST VARIABLES
	private function getRequestUserName() {
		//RETURN REQUEST VARIABLE: USERNAME
	}
	
}