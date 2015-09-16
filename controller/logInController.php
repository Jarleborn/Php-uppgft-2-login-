<?php 

class LogInControll{

	public function LoginChecker(){
		if( isset($_POST['usernameInput']) ){
		    $LoginModel = new LogInModel();
		    $LogInModel->login();
		}
	}
	
}