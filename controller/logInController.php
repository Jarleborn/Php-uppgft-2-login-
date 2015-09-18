<?php 

class LogInControll{

	private $LogInModel;
	private $LoginView;
	
	public function __construct( LoginView $LoginView, LogInModel $LogInModel){
		$this->LogInModel = $LogInModel;
		$this->LoginView = $LoginView;
	}
	public function LoginChecker($usr, $pas){
		
		    $this->LogInModel->login($this->LoginView->GetUserName(), $this->LoginView->GetPassword());
		
	}
	
}