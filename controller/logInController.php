<?php 

class LogInControll{

	public function LoginChecker($model, $usr, $pas){
		
		    //$LoginModel = new LogInModel();
		   // var_dump($LogInModel->login);
		    $model->login($usr, $pas);
		
	}
	
}