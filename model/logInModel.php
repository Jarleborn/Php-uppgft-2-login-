<?php 

class LogInModel{
	
	private  $username = 'Admin';
	private  $password = 'Password';
	private static $LOGGED_IN_SESSION ="LoggedInSession";
	private  $Thelogin;
	private $s;
	private  $retMessage = "";
	

	 // public function __construct($s){
  //     $this->Session = $s;
  //   }
	public function login($usrnam, $pass){
		//$this->Session->LoginStatus();
//var_dump($this->Thelogin);
		//var_dump($usrnam);
		$this->Thelogin = false;
		// if($usrnam == "" && $pass == ""){
		// 	$this->retMessage = "";
		// }
		// else
	//if($usrnam != null && $pass != null){
			if($this->username == $usrnam && $this->password == $pass){
			//$this->Thelogin = true;
			$_SESSION[self::$LOGGED_IN_SESSION] = true;
			$this->retMessage = "Welcome";
			//var_dump($this->login);
			//return true;
			}
			elseif($usrnam == ""  ){
				$this->retMessage = "Username is missing";
				//var_dump($this->retMessage);
				$_SESSION[self::$LOGGED_IN_SESSION] = false;

				//TODO - Något from av meddleande till controllen att Man inte fyllt i fälten
				//return false;
			}
			elseif($pass == "" && $usrnam !="" ){
				$this->retMessage = "Password is missing";
				$_SESSION[self::$LOGGED_IN_SESSION] = false;
				//$_POST[$usrnam];
				//return false;
			}
			else{
				$this->retMessage = "Wrong name or password";
				$_SESSION[self::$LOGGED_IN_SESSION] = false;
				//return false;
			}

	// }
	// else{
	// 	$this->retMessage = "";

	// }
		

	}
	
	public function ReturnRetMessage(){
		//var_dump($this->retMessage);
		if($this->retMessage != null){
			//var_dump($this->retMessage);
			return $this->retMessage;
			//$this->retMessage = "";
		}
	}
	// public function isLoggedIn(){
	// 	//var_dump($this->Thelogin);
	// 	//var_dump($his->login);
	// 		return $_SESSION[self::$LOGGED_IN_SESSION] == true;
	// 	}

	public function UserWantsToLogInOrOut(){
			
			//var_dump($_SESSION[self::$LOGGED_IN_SESSION]);
			if ($_SESSION[self::$LOGGED_IN_SESSION] == true){
				return true;
			}
			else{

				return false;
			}
		}
			
	

	public function DoesSessionExsist(){
		if(isset($_SESSION[self::$LOGGED_IN_SESSION])){
			$_SESSION[self::$LOGGED_IN_SESSION];
		}
		else{
				session_start();
				$_SESSION[self::$LOGGED_IN_SESSION];
			}
	}

	public function CheckIfLoggedIn(){
		if($_SESSION[self::$LOGGED_IN_SESSION] == true){
			return true;
		}
		else{
			return false;
		}
	}
		// else
		// {
		// 	return "höhöhöh";
		// }o

		// $this->retMessage = "";

	
}